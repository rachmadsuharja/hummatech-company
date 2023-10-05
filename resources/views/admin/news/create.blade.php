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
                        <li class="breadcrumb-item active" aria-current="page">Buat Postingan</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-3">Buat Postingan</h5>
                    </div>
                    <form action="{{ route('news.store') }}" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-7 col-xl-7">
                                    <div class="form-group mb-3">
                                        <label for="subject" class="form-label mb-1">Topik</label>
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Topik untuk berita ini ...">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="news_content" class="form-label mb-1">Isi Berita</label>
                                        <textarea name="news_content" id="news_content" class="form-control @error('news_content') is-invalid @enderror" rows="6" placeholder="Apa yang sedang Anda pikirkan ...">{{ old('news_content') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-5 col-xl-5">
                                    <label for="photo" class="form-label mb-1">Foto</label>
                                    <input type="file" class="form-control photo @error('photo') id-invalid @enderror" name="photo" id="photo">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-0 bg-white d-flex justify-content-end">
                            <button class="btn btn-primary btn-sm">Posting</button>
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
    </script>
@endsection
