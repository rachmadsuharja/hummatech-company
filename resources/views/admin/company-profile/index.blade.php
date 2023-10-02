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
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
        <div class="row mb-3">
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
                                        <textarea class="form-control work-method @error('work_description') is-invalid @enderror" rows="10" name="work_description" id="work_description" placeholder="Deskripsikan perusahaan anda ...">{{ $work->work_description }}</textarea>
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
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-6 col-xl-6 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('sosmed.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <h6 class="card-title">Media Sosial</h6>
                            <div class="row justify-content-between">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="instagram" class="form-label">Instagram</label>
                                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ $sosmed->instagram }}" id="instagram" placeholder="Instagram Profile URL ...">
                                    </div>
                                    @error('instagram')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group mb-3">
                                        <label for="facebook" class="form-label">Facebook</label>
                                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ $sosmed->facebook }}" id="facebook" placeholder="Facebook Profile URL ...">
                                    </div>
                                    @error('facebook')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group mb-3">
                                        <label for="whatsapp" class="form-label">Whatsapp</label>
                                        <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ $sosmed->whatsapp }}" id="whatsapp" placeholder="Nomor Whatsapp">
                                    </div>
                                    @error('whatsapp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group mb-3">
                                        <label for="twitter" class="form-label">Twitter</label>
                                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ $sosmed->twitter }}" id="twitter" placeholder="Twitter Profile URL...">
                                    </div>
                                    @error('twitter')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    <div class="form-group mb-3">
                                        <label for="youtube" class="form-label">Youtube</label>
                                        <input type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{ $sosmed->youtube }}" id="youtube" placeholder="Youtube Channel URL ...">
                                    </div>
                                    @error('youtube')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
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
            <div class="col-lg-6 col-xl-6 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('other-info.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <h6 class="card-title">Lainnya</h6>
                            <div class="row justify-content-between">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $other->email }}" id="email" placeholder="mail@host.com">
                                    </div>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="row mb-3">
                                        <label class="form-label">Jam Kerja</label>
                                        <div class="col-md-6">
                                            <input type="time" class="form-control" name="start_working" value="{{ $other->start_working }}" id="start_working">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="time" class="form-control" name="finish_working" value="{{ $other->finish_working }}" id="finish_working">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="address" class="form-label">Alamat</label>
                                        <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" rows="8" placeholder="Alamat perusahaan anda ...">{{ $other->address }}</textarea>
                                    </div>
                                    @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
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

        tinymce.init({
            selector: '#company_description',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        });

        tinymce.init({
            selector: '#work_description',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

@endsection
