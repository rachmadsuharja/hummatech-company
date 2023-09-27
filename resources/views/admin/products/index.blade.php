@extends('admin.layouts.main')


@php
use Carbon\Carbon;
@endphp


@section('style')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css">

@endsection

@section('container')

    @include('admin.partials.sidebar')

    @include('admin.partials.topbar')

    <div class="page-content">

        <div class="row mb-5">
            <div class="col-lg-12 col-xl-12 stretch-card justify-content-between">
                <form action="{{ route('products.index') }}" method="GET" class="d-flex">
                    <input type="search" class="form-control rounded-l-full" name="search" id="search" value="{{ request('search') }}" placeholder="Cari ...">
                    <button type="submit" class="btn btn-primary"><i data-feather="search" class="icon-sm fw-bold"></i></button>
                </form>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">Tambah Produk</button>
                <div class="modal fade" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addProduct" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                            </div>
                            <form action="{{ route('products.store') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="product_cover" class="form-label mb-1">Foto Cover</label>
                                            <input type="file" class="form-control @error('product_cover') is-invalid @enderror" id="product_cover" name="product_cover" data-height="120"/>
                                        </div>
                                        @error('product_cover')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="col-md-8">
                                            <div class="col-md-12 mb-3">
                                                <label for="product_name" class="form-label mb-1">Nama Produk</label>
                                                <input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}" id="product_name" placeholder="example: Jurnal Mengajar">
                                            </div>
                                            @error('product_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="col-md-12 mb-3">
                                                <label for="release_date" class="form-label mb-1">Tanggal Rilis</label>
                                                <input type="date" class="form-control" name="release_date" id="release_date">
                                            </div>
                                            @error('release_date')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="product_desc" class="form-label mb-1">Deskripsi</label>
                                        <textarea class="form-control" rows="6" name="product_desc" id="product_desc" placeholder="Tentang produk ini ..."></textarea>
                                    </div>
                                    @error('product_desc')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            @forelse ($product as $pro)
                <div class="col-lg-3 col-xl-3 stretch-card mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 border border-1 rounded">
                                    <img class="w-100" src="{{ asset('storage/product/'.$pro->product_cover) }}" alt="">
                                </div>
                            </div>
                            <h5 class="text-center mt-3">{{ $pro->product_name }}</h5>
                        </div>
                        <div class="row mx-3 mb-3">
                            <label for="" class="fw-bold">Tanggal Rilis : </label>
                            <p>{{ Carbon::parse($pro->release_date)->locale('id')->isoFormat('DD MMMM YYYY') }}</p>
                        </div>
                        <div class="row mx-3 mb-3">
                            <form action="{{ route('products.destroy', $pro->id) }}" id="deleteProduct-{{ $pro->id }}" onsubmit="deleteProduct(event, {{ $pro->id }})" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-block btn-danger"><i data-feather="trash-2" class="icon-sm"></i></button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#updateProduct{{ $pro->id }}" class="btn btn-block btn-primary"><i data-feather="edit" class="icon-sm"></i></button>
                            </form>
                            <div class="modal fade" id="updateProduct{{ $pro->id }}" id="updateProduct-{{ $pro->id }}" onsubmit="updateProduct(event, {{ $pro->id }})" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateProduct" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Produk</h1>
                                        </div>
                                        <form action="{{ route('products.update', $pro->id) }}" id="updateProduct-{{ $pro->id }}" onsubmit="updateProduct(event, {{ $pro->id }})" enctype="multipart/form-data" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="up_product_cover" class="form-label mb-1">Foto Cover</label>
                                                        <input type="file" class="form-control product_cover @error('product_cover') is-invalid @enderror" data-default-file="{{ asset('storage/product/'.$pro->product_cover) }}" id="up_product_cover" name="product_cover" data-height="120"/>
                                                    </div>
                                                    @error('product_cover')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="col-md-8">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="product_name" class="form-label mb-1">Nama Produk</label>
                                                            <input type="text" class="form-control" name="product_name" value="{{ $pro->product_name }}" id="product_name" placeholder="example: Jurnal Mengajar">
                                                        </div>
                                                        @error('product_name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="col-md-12 mb-3">
                                                            <label for="release_date" class="form-label mb-1">Tanggal Rilis</label>
                                                            <input type="date" class="form-control" name="release_date" value="{{ $pro->release_date }}" id="release_date">
                                                        </div>
                                                        @error('release_date')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="product_desc" class="form-label mb-1">Deskripsi</label>
                                                    <textarea class="form-control" rows="6" name="product_desc" id="product_desc" placeholder="Tentang produk ini ...">{{ $pro->product_desc }}</textarea>
                                                </div>
                                                @error('product_desc')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12 col-xl-12 mt-5 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('empty/empty.png') }}" alt="">
                    <small>Tidak ada data</small>
                </div>
            @endforelse
        </div>
        <div class="row float-end">
            {{ $product->links() }}
        </div>
    </div>

    @include('admin.partials.footer')

@endsection

@section('script')

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
    <script>
        $('#product_cover').dropify({
            messages: {
                'default': '',
            }
        });
        $('.product_cover').each(function() {
            $(this).dropify({
                messages: {
                    'default': '',
                }
            });
        });

        function deleteProduct(event, id) {
            event.preventDefault();
            Swal.fire({
                title: 'Hapus',
                text: "Apakah anda yakin ingin menghapus data?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Batal',
                }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteProduct-' + id).submit();
                }
            })
        }
        function updateProduct(event, id) {
            event.preventDefault();
            Swal.fire({
                title: 'Ubah',
                text: "Apakah anda yakin ingin mengubah data?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Batal',
                }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('updateProduct-' + id).submit();
                }
            })
        }
    </script>

@endsection
