<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Support\Str;
use App\Models\NewsCategory;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        })->paginate(20);
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
            // 'photo' => 'required|mimes:png,jpg,jpeg',
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
            toastr()->error('Gagal menambahkan berita', 'Failed');
            return back()->withErrors($validated)->withInput();
        }
        $photo = $request->file('photo');
        $photo_name = $photo->hashName();
        $photo->storeAs('public/news/'.$photo_name);
        $categories = $request->category_id;
        $slug = Str::slug($request->subject);
        $news = News::create([
            'subject' => $request->subject,
            'slug' => $slug,
            'news_content' => $request->news_content,
            'photo' => $photo_name,
        ]);
        $news->category()->attach($categories);

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
    public function update(Request $request, string $id)
    {
        return view('admin.news.edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $newss = News::findOrFail($news);
        $newss->delete();

        toastr()->success('Berhasil menghapus data', 'Success');
        return to_route('news.index');
    }
}
