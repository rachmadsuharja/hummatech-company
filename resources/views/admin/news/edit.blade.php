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
                        <li class="breadcrumb-item"><a href="{{ route('news.index') }}">Berita</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Postingan</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-3">Edit Postingan</h5>
                    </div>
                    <form action="{{ route('news.update', $news->slug) }}" id="updateNews{{ $news->created_at }}" onsubmit="updateNews(event, {{ $news->created_at }})" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-7 col-xl-7">
                                    <div class="form-group mb-3">
                                        <label for="subject" class="form-label mb-1">Topik</label>
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" value="{{ $news->subject }}" placeholder="Topik untuk berita ini ...">
                                    </div>
                                    @error('subject')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group mb-3">
                                        <label for="news_content" class="form-label mb-1">Isi Berita</label>
                                        <textarea name="news_content" id="news_content" class="form-control @error('news_content') is-invalid @enderror" rows="6" placeholder="Apa yang sedang Anda pikirkan ...">{{ $news->news_content }}</textarea>
                                    </div>
                                    @error('news_content')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 col-lg-5 col-xl-5">
                                    <div class="form-group mb-3">
                                        <label for="categories" class="form-label mb-1">Kategori</label>
                                        {{-- <select class="js-example-basic-multiple form-select" name="category_id[]" multiple="multiple" data-width="100%">
                                            @foreach ($news->pivot as $category)
                                                <option value="{{ $category->cate->id }}">{{ $category->category }}</option>
                                            @endforeach
                                        </select> --}}
                                        <select class="js-example-basic-multiple form-select" name="category_id[]" multiple="multiple" data-width="100%">
                                            @foreach ($categories as $category)
                                                @php
                                                    $a = false;
                                                @endphp
                                                @foreach ($news->pivot as $select)
                                                    @if ($select->category->id == $category->id)
                                                        @php
                                                            $a = true;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                                <option value="{{ $category->id }}" {{ ($a) ? "selected" : "" }}>{{ $category->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group mb-3">
                                        <label for="photo" class="form-label mb-1">Foto</label>
                                        <input type="file" class="form-control photo @error('photo') id-invalid @enderror" name="photo" id="photo" data-default-file="{{ asset('storage/news/'.$news->photo) }}">
                                    </div>
                                    @error('photo')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-0 bg-white d-flex justify-content-end">
                            <a href="{{ route('news.index') }}" class="btn btn-danger btn-sm mx-2">Batal</a>
                            <button class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </form>
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

        $('.photo').dropify({
            messages: {
                'default': '',
            }
        });

        tinymce.init({
            selector: '#news_content',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        });

        function updateNews(event, id) {
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
                    document.getElementById('updateNews' + id).submit();
                }
            })
        }
    </script>
@endsection
