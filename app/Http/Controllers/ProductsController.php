<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sosmed;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $admin = User::where('role', 'admin')->where('id', Auth::id())->first();
        $notification = Notification::where('category', 'inbox')->get();
        $search = $request->input('search');
        $product = Product::query()->when(request()->has('search'), function ($query) {
            $search = request('search');
            $query->where(function ($subquery) use ($search) {
                $subquery->where('product_name', 'like', '%' . $search . '%');
            });
        })->paginate(8);
        $product->appends(['search' => $search]);
        $sosmed = Sosmed::findOrFail(1);
        return view('admin.products.index', compact('admin','product', 'sosmed','notification'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'product_cover' => 'required|mimes:png,jpg,jpeg',
            'product_name' => 'required|min:5|max:100|unique:products,product_name',
            'product_desc' => 'required|min:5|max:1000',
            'release_date' => 'required|date',
        ], [
            'product_cover.required' => 'Cover tidak boleh kosong',
            'product_cover.mimes' => 'Format foto tidak valid',
            'product_name.required' => 'Nama produk tidak boleh kosong',
            'product_name.min' => 'Nama produk terlalu pendek',
            'product_name.max' => 'Nama produk maksimal 100 karakter',
            'product_name.unique' => 'Produk sudah terdaftar',
            'release_date.required' => 'Tanggal rilis tidak boleh kosong',
            'release_date.date' => 'Format tanggal tidak valid',
            'product_desc.required' => 'Deskripsi tidak boleh kosong',
            'product_desc.min' => 'Deskripsi terlalu pendek',
            'product_desc.max' => 'Deskripsi maksimal 1000 karakter',
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal menambahkan produk', 'Failed');
            return back()->withErrors($validated)->withInput();
        }
        $product_cover = $request->file('product_cover');
        $cover_name = $product_cover->hashName();
        $product_cover->storeAs('public/product/'.$cover_name);

        Product::create([
            'product_cover' => $cover_name,
            'product_name' => $request->product_name,
            'slug' => Str::slug($request->product_name),
            'release_date' => $request->release_date,
            'product_desc' => $request->product_desc,
        ]);
        toastr()->success('Berhasil menambahkan produk', 'Success');
        return back();
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
        $validated = Validator::make($request->all(), [
            'product_cover' => 'mimes:png,jpg,jpeg',
            'product_name' => 'required|min:5|max:100|unique:products,product_name,'.$id,
            'product_desc' => 'required|min:5|max:1000',
            'release_date' => 'required|date',
        ], [
            'product_cover.mimes' => 'Format foto tidak valid',
            'product_name.required' => 'Nama produk tidak boleh kosong',
            'product_name.min' => 'Nama produk terlalu pendek',
            'product_name.max' => 'Nama produk maksimal 100 karakter',
            'release_date.required' => 'Tanggal rilis tidak boleh kosong',
            'release_date.date' => 'Format tanggal tidak valid',
            'product_desc.required' => 'Deskripsi tidak boleh kosong',
            'product_desc.min' => 'Deskripsi terlalu pendek',
            'product_desc.max' => 'Deskripsi maksimal 1000 karakter',
        ]);
        if ($validated->fails()) {
            toastr()->error('Gagal mengubah produk', 'Failed');
            return back()->withErrors($validated)->withInput();
        }
        $product_cover = $request->file('product_cover');
        if ($request->hasFile('product_cover') && $product_cover->isValid()) {
            $cover_name = $product_cover->hashName();
            Storage::delete('public/product/'.$product->product_cover);
            $product_cover->storeAs('public/product/'.$cover_name);
        } else {
            $cover_name = $product->product_cover;
        }

        $product->update([
            'product_cover' => $cover_name,
            'product_name' => $request->product_name,
            'slug' => Str::slug($request->product_name),
            'release_date' => $request->release_date,
            'product_desc' => $request->product_desc,
        ]);
        toastr()->success('Berhasil menambahkan produk', 'Success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        Storage::delete('public/product/'.$product->product_cover);
        $product->delete();

        toastr()->success('Berhasil menghapus data', 'Success');
        return back();
    }
}
