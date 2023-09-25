@extends('admin.layouts.main')

@section('style')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css">

@endsection

@section('container')

    @include('admin.partials.sidebar')

    @include('admin.partials.topbar')

    <div class="page-content">

        <div class="row">
            <div class="col-lg-12 col-xl-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
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
                                    <input type="file" class="form-control @error('company_cover') is-invalid @enderror" id="company_cover" data-height="290" data-default-file="{{ asset('company/'.$company->company_cover) }}"/>
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
