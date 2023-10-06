<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\NewsCategory;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $search = $request->input('search');
        $categories = NewsCategory::query()->when(request()->has('search'), function ($query) {
            $search = request('search');
            $query->where(function ($subquery) use ($search) {
                $subquery->where('category', 'like', '%' . $search . '%');
            });
        })->paginate(20);
        $notification = Notification::where('category', 'inbox')->get();
        $categories->appends(['search' => $search]);
        return view('admin.news.news-category', compact('admin','categories','notification'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'category' => 'required|min:3|max:50|unique:news_category,category',
            'sub_category' => 'required|min:3|max:500',
        ], [
            'category.required' => 'Nama kategori tidak boleh kosong',
            'category.min' => 'Nama kategori terlalu pendek',
            'category.max' => 'Nama kategori terlalu panjang',
            'category.unique' => 'Kategori sudah terdaftar',
            'sub_category.required' => 'Deskripsi tidak boleh kosong',
            'sub_category.min' => 'Deskripsi terlalu pendek',
            'sub_category.max' => 'Deskripsi terlalu panjang',
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal menambahkan kategori', 'Failed');
            return back()->withErrors($validated)->withInput();
        }

        NewsCategory::create([
            'category' => $request->category,
            'slug' => Str::slug($request->category),
            'sub_category' => $request->sub_category,
        ]);

        toastr()->success('Berhasil menambahkan kategori', 'Success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsCategory $newsCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = Validator::make($request->all(), [
            'category' => 'required|min:3|max:50|unique:news_category,category,'.$id,
            'sub_category' => 'required|min:3|max:500',
        ], [
            'category.required' => 'Nama kategori tidak boleh kosong',
            'category.min' => 'Nama kategori terlalu pendek',
            'category.max' => 'Nama kategori terlalu panjang',
            'category.unique' => 'Kategori sudah terdaftar',
            'sub_category.required' => 'Deskripsi tidak boleh kosong',
            'sub_category.min' => 'Deskripsi terlalu pendek',
            'sub_category.max' => 'Deskripsi terlalu panjang',
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal mengubah kategori', 'Failed');
            return back()->withErrors($validated)->withInput();
        }

        $category = NewsCategory::findOrFail($id);
        $category->update([
            'category' => $request->category,
            'slug' => Str::slug($request->category),
            'sub_category' => $request->sub_category,
        ]);

        toastr()->success('Berhasil mengubah kategori', 'Success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = NewsCategory::findOrFail($id);
        $category->delete();

        toastr()->success('Berhasil menghapus data', 'Success');
        return to_route('news-categories.index');
    }
}
