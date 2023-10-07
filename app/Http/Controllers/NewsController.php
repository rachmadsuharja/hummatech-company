<?php

namespace App\Http\Controllers;

use App\Models\CategoryNewsPivot;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\NewsCategory;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $notification = Notification::where('category', 'inbox')->get();
        $categories = NewsCategory::limit(3)->get();
        $search = $request->input('search');
        $news = News::query()->when(request()->has('search'), function ($query) {
            $search = request('search');
            $query->where(function ($subquery) use ($search) {
                $subquery->where('subject', 'like', '%' . $search . '%');
            });
        })->paginate(10);
        $news->appends(['search' => $search]);
        return view('admin.news.index', compact('admin','notification', 'categories', 'news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $notification = Notification::where('category', 'inbox')->get();
        $categories = NewsCategory::all();
        return view('admin.news.create', compact('admin','notification', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'photo' => 'required|mimes:png,jpg,jpeg',
            'subject' => 'required|min:5|max:255|unique:news,subject',
            'category_id' => 'required',
            'news_content' => 'required|min:3|max:5000',
        ], [
            'subject.required' => 'Judul tidak boleh kosong',
            'subject.min' => 'Judul terlalu pendek',
            'subject.max' => 'Judul terlalu panjang',
            'subject.unique' => 'Berita sudah terdaftar',
            'photo.mimes' => 'Foto tidak valid',
            'photo.required' => 'Foto tidak boleh kosong',
            'category_id.required' => 'Pilih minimal 1 kategori',
            'news_content.required' => 'Konten berita tidak boleh kosong',
            'news_content.min' => 'Konten berita terlalu pendek',
            'news_content.max' => 'Konten berita terlalu panjang',
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal membuat postingan', 'Failed');
            return back()->withErrors($validated)->withInput();
        }
        $photo = $request->file('photo');
        $photo_name = $photo->hashName();
        $categories = $request->category_id;
        $photo->storeAs('public/news/'.$photo_name);
        $slug = Str::slug($request->subject);
        $news = News::create([
            'subject' => $request->subject,
            'slug' => $slug,
            'news_content' => $request->news_content,
            'photo' => $photo_name,
        ]);

        foreach ($categories as $category) {
            CategoryNewsPivot::create([
                'news_id' => $news->id,
                'category_id' => $category,
            ]);
        }
        toastr()->success('Berhasil membuat postingan', 'Success');
        return to_route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $news = News::where('slug', $slug)->first();
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $notification = Notification::where('category', 'inbox')->get();
        $categories = NewsCategory::all();
        return view('admin.news.edit', compact('admin','notification', 'categories', 'news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $news = News::where('slug', $slug)->first();
        $validated = Validator::make($request->all(), [
            'photo' => 'mimes:png,jpg,jpeg',
            'subject' => 'required|min:5|max:255|unique:news,subject,'.$news->id,
            'category_id' => 'required',
            'news_content' => 'required|min:3|max:5000',
        ], [
            'subject.required' => 'Judul tidak boleh kosong',
            'subject.min' => 'Judul terlalu pendek',
            'subject.max' => 'Judul terlalu panjang',
            'photo.mimes' => 'Foto tidak valid',
            'photo.required' => 'Foto tidak boleh kosong',
            'category_id.required' => 'Pilih minimal 1 kategori',
            'news_content.required' => 'Konten berita tidak boleh kosong',
            'news_content.min' => 'Konten berita terlalu pendek',
            'news_content.max' => 'Konten berita terlalu panjang',
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal mengubah postingan', 'Failed');
            return back()->withErrors($validated)->withInput();
        }
        $categories = $request->category_id;
        $slug = Str::slug($request->subject);
        $photo = $request->file('photo');
        if ($request->hasFile('photo') && $photo->isValid()) {
            $photo_name = $photo->hashName();
            Storage::delete('public/news/'.$news->photo);
            $photo->storeAs('public/news/'.$photo_name);
        } else {
            $photo_name = $news->photo;
        }

        $news->update([
            'subject' => $request->subject,
            'slug' => $slug,
            'photo' => $photo_name,
            'news_content' => $request->news_content,
        ]);

        CategoryNewsPivot::where('news_id', $news->id)->delete();
        foreach ($categories as $category) {
            CategoryNewsPivot::create([
                'news_id' => $news->id,
                'category_id' => $category,
            ]);
        }

        toastr()->success('Berhasil membuat postingan', 'Success');
        return to_route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $news = News::where('slug', $slug)->first();
        $news->delete();

        toastr()->success('Berhasil menghapus data', 'Success');
        return to_route('news.index');
    }
}
