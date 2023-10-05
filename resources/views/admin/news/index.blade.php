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

        <div class="row">
            <div class="row mb-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Berita</li>
                    </ol>
                </nav>
            </div>
            <div class="row mb-2">
                <h5 class="ms-2">Kategori</h5>
            </div>
            <div class="col-12 col-xl-12 stretch-card mb-3">
                <div class="row flex-grow-1">
                    @foreach ($categories as $category)
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title"></h6>
                                        <h6><button class="btn btn-transparent text-primary btn-sm p-0" data-bs-toggle="modal" data-bs-target="#editCategory{{ $category->id }}"><i data-feather="edit" class="icon-md"></i></button></h6>
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
                                    <div class="row mt-2">
                                        <h5 class="text-break mb-1">{{ $category->category }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if (count($categories) >= 3)
                        <div class="col-md-3 grid-margin stretch-card">
                            <a class="card text-decoration-none text-secondary d-flex justify-content-center align-items-center p-3" href="{{ route('news-categories.index') }}">
                                <i data-feather="list"></i>
                                <h6 class="mt-1">Kategori Lainnya</h6>
                            </a>
                        </div>
                    @else
                        <div class="col-md-3 grid-margin stretch-card">
                            <div class="card">
                                <button class="btn btn-transparent" data-bs-toggle="modal" data-bs-target="#addCategory">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <i data-feather="plus" class="icon-xxl text-secondary"></i>
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
            <div class="row mb-2">
                <h5 class="ms-2">Berita</h5>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="row d-flex flex-row-reverse justify-content-between mb-3">
                                    <div class="col-md-2 col-lg-2 col-xl-2 d-flex justify-content-end mx-0 mb-3">
                                        <a href="{{ route('news.create') }}" class="btn btn-primary">Buat Postingan</a>
                                    </div>
                                    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 p-0 m-0">
                                        <form action="{{ route('news-categories.index') }}" method="GET" class="d-flex">
                                            <input type="search" class="form-control rounded-l-full" name="search" id="search" value="{{ request('search') }}" placeholder="Cari ...">
                                            <button type="submit" class="btn btn-primary"><i data-feather="search" class="icon-sm fw-bold"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-12 p-0 m-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th class="pt-0">Judul</th>
                                                <th class="pt-0">Tanggal</th>
                                                <th class="pt-0">Kategori</th>
                                                <th class="pt-0 col-lg-1 col-xl-1 text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($news as $n)
                                                <tr>
                                                    <td>{{ $n->subject }}</td>
                                                    <td>{{ $n->created_at }}</td>
                                                    <td>{{ $n->category }}</td>
                                                    <td><button class="btn btn-transparent btn-sm" data-bs-toggle="modal" data-bs-target="#replyMessages{{ $n->id }}"><i data-feather="send" class="icon-md text-primary"></i></button></td>
                                                </tr>
                                                <div class="modal fade" id="replyMessages{{ $n->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editServices" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Balas Pesan</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <td class="text-center" colspan="5"><small>tidak ada data</small></td>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.footer')

@endsection

@section('script')

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
    </script>

@endsection
