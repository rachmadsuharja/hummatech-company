@extends('admin.layouts.main')


@php
    use Carbon\Carbon;
@endphp


@section('style')
<link rel="stylesheet" href="{{ asset('noble/fonts/feather-font/css/iconfont.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css">

@endsection

@section('container')

    @include('admin.partials.sidebar')

    @include('admin.partials.topbar')

    <div class="page-content">

        <div class="row">
            <div class="row mb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/news">Berita</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                    </ol>
                </nav>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <form action="{{ route('news-categories.index') }}" method="GET" class="d-flex">
                        <input type="search" class="form-control rounded-l-full" name="search" id="search" value="{{ request('search') }}" placeholder="Cari ...">
                        <button type="submit" class="btn btn-primary"><i data-feather="search" class="icon-sm fw-bold"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-xl-12">
                <div class="row">
                    @forelse ($categories as $category)
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card rounded">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="text-break">{{ $category->category }}</h5>
                                        <form action="{{ route('news-categories.destroy', $category->id) }}" id="deleteCategory{{ $category->id }}" onsubmit="deleteCategory(event, {{ $category->id }})" method="post">
                                            @csrf
                                            @method('delete')
                                            <h6 class="d-flex justify-content-evenly">
                                                <button type="button" class="btn btn-transparent text-primary btn-sm p-0 mx-1" data-bs-toggle="modal" data-bs-target="#editCategory{{ $category->id }}"><i data-feather="edit" class="icon-md"></i></button>
                                                <button type="submit" class="btn btn-transparent text-danger btn-sm p-0 mx-1"><i data-feather="trash-2" class="icon-md"></i></button>
                                            </h6>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="editCategory{{ $category->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateTestimoni" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Kategori</h1>
                                    </div>
                                    <form action="{{ route('news-categories.update', $category->id) }}" id="updateCategory{{ $category->id }}" onsubmit="updateCategories(event, {{ $category->id }})" enctype="multipart/form-data" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="modal-body">
                                            <div class="form-group mb-3">
                                                <label for="category" class="form-label mb-1">Nama Kategori</label>
                                                <input type="text" class="form-control @error('category') is-invalid @enderror" value="{{ $category->category }}" name="category" placeholder="Nama kategori ...">
                                            </div>
                                            @error('category')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group mb-3">
                                                <label for="sub_category" class="form-label mb-1">Deskripsi</label>
                                                <textarea class="form-control @error('sub_category') is-invalid @enderror" name="sub_category" id="sub_category" rows="5" placeholder="Deskripsikan kategori Anda ...">{{ $category->sub_category }}</textarea>
                                            </div>
                                            @error('sub_category')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12 col-xl-12 mt-5 d-flex flex-column justify-content-center align-items-center">
                            <img src="{{ asset('empty/empty.png') }}" alt="">
                            <small>Tidak ada data</small>
                        </div>
                    @endforelse
                    @if (!$categories->isEmpty())
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <button class="btn btn-transparent m-0 p-0" data-bs-toggle="modal" data-bs-target="#addCategory">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <i data-feather="plus" class="icon-xl text-secondary"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="addCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateTestimoni" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                                    </div>
                                    <form action="{{ route('news-categories.store') }}"  enctype="multipart/form-data" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group mb-3">
                                                <label for="category" class="form-label mb-1">Nama Kategori</label>
                                                <input type="text" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}" name="category" placeholder="Nama kategori ...">
                                            </div>
                                            @error('category')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-group mb-3">
                                                <label for="sub_category" class="form-label mb-1">Deskripsi</label>
                                                <textarea class="form-control @error('sub_category') is-invalid @enderror" name="sub_category" id="sub_category" rows="5" placeholder="Deskripsikan kategori Anda ...">{{ old('sub_category') }}</textarea>
                                            </div>
                                            @error('sub_category')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.footer')

@endsection

@section('script')
<script src="{{ asset('noble/vendors/feather-icons/feather.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
    <script>
        function updateCategories(event, id) {
            event.preventDefault();
            Swal.fire({
                title: 'Simpan Perubahan',
                text: "Apakah anda yakin ingin mengubah data?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Batal',
                }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('updateCategory' + id).submit();
                }
            })
        }
        function deleteCategory(event, id) {
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
                    document.getElementById('deleteCategory' + id).submit();
                }
            })
        }
    </script>

@endsection
