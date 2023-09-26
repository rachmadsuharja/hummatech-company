@extends('admin.layouts.main')

@section('style')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css">

@endsection

@section('container')

    @include('admin.partials.sidebar')

    @include('admin.partials.topbar')

    <div class="page-content">

        <div class="row mb-3">
            <div class="col-lg-12 col-xl-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('company-profiles.update') }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <h6 class="card-title">Tentang Perusahaan</h6>
                            <div class="row justify-content-between">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="company_title" class="form-label mb-1">Judul</label>
                                        <input type="text" class="form-control @error('company_title') is-invalid @enderror" name="company_title" value="{{ $company->company_title }}" id="company_title" placeholder="example: PT Hummatech Digital Indonesia">
                                    </div>
                                    @error('company_title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group mb-3">
                                        <label for="company_description" class="form-label mb-1">Deskripsi</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" rows="10" name="company_description" id="company_description" placeholder="Deskripsikan perusahaan anda ...">{{ $company->company_description }}</textarea>
                                    </div>
                                    @error('company_description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="company_cover" class="form-label mb-1">Foto Cover</label>
                                    @if ($company->company_cover == null)
                                        <input type="file" class="form-control @error('company_cover') is-invalid @enderror" id="company_cover" name="company_cover" data-height="290" data-default-file="{{ asset('company/cover.png') }}"/>
                                    @else
                                        <input type="file" class="form-control @error('company_cover') is-invalid @enderror" id="company_cover" name="company_cover" data-height="290" data-default-file="{{ asset('storage/company/'.$company->company_cover) }}"/>
                                    @endif
                                </div>
                                @error('company_cover')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12 col-xl-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('work.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <h6 class="card-title">How Do We Work?</h6>
                            <div class="row justify-content-between">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="work_title" class="form-label mb-1">Judul</label>
                                        <input type="text" class="form-control @error('work_title') is-invalid @enderror" name="work_title" value="{{ $work->work_title }}" id="work_title" placeholder="example: PT Hummatech Digital Indonesia">
                                    </div>
                                    @error('work_title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group mb-3">
                                        <label for="work_description" class="form-label mb-1">Deskripsi</label>
                                        <textarea class="form-control @error('work_description') is-invalid @enderror" rows="10" name="work_description" id="work_description" placeholder="Deskripsikan perusahaan anda ...">{{ $work->work_description }}</textarea>
                                    </div>
                                    @error('work_description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="first_cover" class="form-label mb-1">Cover Pertama</label>
                                        <input type="file" class="form-control @error('first_cover') is-invalid @enderror" name="first_cover" id="first_cover" data-height="290" data-default-file="{{ asset('work-method/'.$work->first_cover) }}"/>
                                    </div>
                                    @error('first_cover')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group mb-3">
                                        <label for="second_cover" class="form-label mb-1">Cover Kedua</label>
                                        <input type="file" class="form-control @error('second_cover') is-invalid @enderror" name="second_cover" id="second_cover" data-height="290" data-default-file="{{ asset('work-method/'.$work->second_cover) }}"/>
                                    </div>
                                    @error('second_cover')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="row">
                                        <label class="form-label mb-1">Cover Sekarang</label>
                                        <div class="col-md-6">
                                            @if ($work->first_cover == null)
                                                <img src="{{ asset('company/work-method/first_cover.png') }}" class="rounded w-100" alt="" srcset="">
                                            @else
                                                <img src="{{ asset('storage/company/work-method/'.$work->first_cover) }}" class="rounded w-100" alt="" srcset="">
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            @if ($work->second_cover == null)
                                                <img src="{{ asset('company/work-method/second_cover.png') }}" class="rounded w-100" alt="" srcset="">
                                            @else
                                                <img src="{{ asset('storage/company/work-method/'.$work->second_cover) }}" class="rounded w-100" alt="" srcset="">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div>

    @include('admin.partials.footer')

@endsection

@section('script')

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
    <script>
        $('#company_cover').dropify({
            messages: {
                'default': '',
            }
        });
    </script>

@endsection
