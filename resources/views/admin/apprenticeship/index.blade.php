@extends('admin.layouts.main')

@section('style')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css">
    <style>
        .profile-photo {
            width: 6rem;
            height: 6rem;
        }
        @media (max-width: 600px) {
            .pp-content, .id-content {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        }

        @media (min-width: 601px) and (max-width: 992px) {
            .pp-content, .id-content {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        }
    </style>
@endsection

@section('container')

    @include('admin.partials.sidebar')

    @include('admin.partials.topbar')

    <div class="page-content">
        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
                <div class="row flex-grow-1">
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="card-title">Sekolah</h6>
                                    <h6><button class="btn btn-transparent btn-sm p-0" data-bs-toggle="modal" data-bs-target="#updateSchoolModal"><i data-feather="plus-circle" class="icon-md"></i></button></h6>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-1">{{ $counter->school }}</h3>
                                        <div class="d-flex align-items-baseline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="updateSchoolModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateTestimoni" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Jumlah Sekolah</h1>
                                </div>
                                <form action="{{ route('counters.school') }}" id="updateSchoolCounter" onsubmit="updateSchoolCounter(event)" enctype="multipart/form-data" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body">
                                        <input type="number" class="form-control" value="{{ $counter->school }}" name="school">
                                        <small>* Sekolah yang mengirimkan siswa/siswi nya ke Perusahaan</small>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-2">Universitas</h6>
                                    <h6><button class="btn btn-transparent btn-sm p-0" data-bs-toggle="modal" data-bs-target="#updateUnivModal"><i data-feather="plus-circle" class="icon-md"></i></button></h6>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-1">{{ $counter->university }}</h3>
                                        <div class="d-flex align-items-baseline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="updateUnivModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateTestimoni" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Jumlah Universitas</h1>
                                </div>
                                <form action="{{ route('counters.univ') }}" id="updateUnivCounter" onsubmit="updateUnivCounter(event)" enctype="multipart/form-data" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body">
                                        <input type="number" class="form-control" value="{{ $counter->university }}" name="university">
                                        <small>* Universitas yang mengirimkan mahasiswa/mahasiswi nya ke Perusahaan</small>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-2">Alumni Magang</h6>
                                    <h6><button class="btn btn-transparent btn-sm p-0" data-bs-toggle="modal" data-bs-target="#updateAlumnusModal"><i data-feather="plus-circle" class="icon-md"></i></button></h6>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-1">{{ $counter->alumnus }}</h3>
                                        <div class="d-flex align-items-baseline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="updateAlumnusModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateTestimoni" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Jumlah Alumni</h1>
                                </div>
                                <form action="{{ route('counters.alumnus') }}" id="updateAlumnusCounter" onsubmit="updateAlumnusCounter(event)" enctype="multipart/form-data" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body">
                                        <input type="number" class="form-control" value="{{ $counter->alumnus }}" name="alumnus">
                                        <small>* Jumlah alumni lulusan Hummasoft</small>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-2">Kuota Magang</h6>
                                    <h6><button class="btn btn-transparent btn-sm p-0" data-bs-toggle="modal" data-bs-target="#updateStudentQuotaModal"><i data-feather="plus-circle" class="icon-md"></i></button></h6>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-1">{{ $counter->student_quota }}</h3>
                                        <div class="d-flex align-items-baseline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="updateStudentQuotaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateTestimoni" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Jumlah Kuota Magang</h1>
                                </div>
                                <form action="{{ route('counters.student-quota') }}" id="updateStudentQuotaCounter" onsubmit="updateStudentQuotaCounter(event)" enctype="multipart/form-data" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body">
                                        <input type="number" class="form-control" value="{{ $counter->student_quota }}" name="student_quota">
                                        <small>* Jumlah ketersediaan anak magang</small>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between mb-3">
            <div class="col-md-4 col-lg-4 col-xl-4 stretch-card">
                <form action="{{ route('apprenticeship') }}" method="GET" class="d-flex">
                    <input type="search" class="form-control rounded-l-full" name="search" id="search" value="{{ request('search') }}" placeholder="Cari ...">
                    <button type="submit" class="btn btn-primary"><i data-feather="search" class="icon-sm fw-bold"></i></button>
                </form>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2">
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addTestimonial">Tambah Testimoni</button>
                <div class="modal fade" id="addTestimonial" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addTestimonial" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Testimoni</h1>
                            </div>
                            <form action="{{ route('testimonial.store') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="up_profile" class="form-label mb-1">Foto Profil</label>
                                            <input type="file" class="form-control profile @error('profile') is-invalid @enderror" value="{{ old('profile') }}" id="profile" name="profile" data-height="120"/>
                                        </div>
                                        @error('profile')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="col-md-8">
                                            <div class="col-md-12 mb-3">
                                                <label for="alumni_name" class="form-label mb-1">Nama Alumni</label>
                                                <input type="text" class="form-control" name="alumni_name" value="{{ old('alumni_name') }}" id="alumni_name" placeholder="Nama Alumni ...">
                                            </div>
                                            @error('alumni_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="col-md-12 mb-3">
                                                <label for="school" class="form-label mb-1">Asal Sekolah</label>
                                                <input type="text" class="form-control" name="school" value="{{ old('school') }}" id="school" placeholder="example: SMKN 1 Indonesia">
                                            </div>
                                            @error('school')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="words" class="form-label mb-1">Testimoni</label>
                                        <textarea class="form-control" rows="6" name="words" id="words" placeholder="Alamat sekolah ...">{{ old('words') }}</textarea>
                                    </div>
                                    @error('words')
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
        <div class="row mb-3">
            @forelse ($testimonial as $testimoni)
                <div class="col-md-6 col-lg-4 col-xl-4 stretch-card mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-lg-5 pp-content">
                                    @if ($testimoni->profile != null)
                                        <img class="rounded-circle profile-photo" src="{{ asset('storage/student/'.$testimoni->profile) }}" alt="">
                                        @else
                                        <img class="rounded-circle profile-photo" src="{{ asset('empty/profile.jpg') }}" alt="">
                                    @endif
                                </div>
                                <div class="col-lg-7 mt-2 id-content">
                                    <h5 class="mb-2">{{ $testimoni->alumni_name }}</h5>
                                    <h6>{{ $testimoni->school }}</h6>
                                </div>
                            </div>
                            <div class="row">
                                <label class="fw-bold">Testimoni:</label>
                                <p>{{ $testimoni->words }}</p>
                            </div>
                        </div>
                        <div class="row mx-3 mb-3">
                        </div>
                        <div class="row mx-3 mb-3">
                            <form action="{{ route('testimonial.destroy', $testimoni->id) }}" id="deleteTestimoni-{{ $testimoni->id }}" onsubmit="deleteTestimoni(event, {{ $testimoni->id }})" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-block btn-danger"><i data-feather="trash-2" class="icon-sm"></i></button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#updateTestimoni{{ $testimoni->id }}" class="btn btn-block btn-primary"><i data-feather="edit" class="icon-sm"></i></button>
                            </form>
                            <div class="modal fade" id="updateTestimoni{{ $testimoni->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateTestimoni" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Testimoni</h1>
                                        </div>
                                        <form action="{{ route('testimonial.update', $testimoni->id) }}" id="updateTestimoni-{{ $testimoni->id }}" onsubmit="updateTestimoni(event, {{ $testimoni->id }})" enctype="multipart/form-data" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="up_profile" class="form-label mb-1">Foto Profil</label>
                                                        <input type="file" class="form-control profile @error('profile') is-invalid @enderror" data-default-file="{{ ($testimoni->profile != null) ? asset('storage/student/'.$testimoni->profile) : '' }}" id="up_profile" name="profile" data-height="120"/>
                                                    </div>
                                                    @error('profile')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="col-md-8">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="alumni_name" class="form-label mb-1">Nama Alumni</label>
                                                            <input type="text" class="form-control" name="alumni_name" value="{{ $testimoni->alumni_name }}" id="alumni_name" placeholder="Nama Alumni ...">
                                                        </div>
                                                        @error('alumni_name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="col-md-12 mb-3">
                                                            <label for="school" class="form-label mb-1">Asal Sekolah</label>
                                                            <input type="text" class="form-control" name="school" value="{{ $testimoni->school }}" id="school" placeholder="example: SMKN 1 Indonesia">
                                                        </div>
                                                        @error('school')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="words" class="form-label mb-1">Testimoni</label>
                                                    <textarea class="form-control" rows="6" name="words" id="words" placeholder="Alamat sekolah ...">{{ $testimoni->words }}</textarea>
                                                </div>
                                                @error('words')
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
        <div class="row mb-3 float-end">
            {{ $testimonial->links() }}
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12 stretch-card">
                <div class="card">
                    <div class="card-header bg-white border-0">
                        <h6 class="card-title">Syarat dan Ketentuan Peserta PKL</h6>
                    </div>
                    <form action="{{ route('terms.update', $terms->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <textarea name="terms_and_conditions" id="terms_and_conditions" rows="6" placeholder="Masukkan syarat & ketentuan yang diberlakukan di perusahaan ...">{{ $terms->terms_and_conditions }}</textarea>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <button class="btn btn-primary">Simpan</button>
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
        $('#profile').dropify({
            messages: {
                'default': '',
            }
        });
        $('.profile').each(function() {
            $(this).dropify({
                messages: {
                    'default': '',
                }
            });
        });

        tinymce.init({
            selector: '#terms_and_conditions',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        });

        function deleteTestimoni(event, id) {
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
                    document.getElementById('deleteTestimoni-' + id).submit();
                }
            })
        }

        function updateTestimoni(event, id) {
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
                    document.getElementById('updateTestimoni-' + id).submit();
                }
            })
        }
        function updateSchoolCounter(event) {
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
                    document.getElementById('updateSchoolCounter').submit();
                }
            })
        }
        function updateUnivCounter(event) {
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
                    document.getElementById('updateUnivCounter').submit();
                }
            })
        }
        function updateAlumnusCounter(event) {
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
                    document.getElementById('updateAlumnusCounter').submit();
                }
            })
        }
        function updateStudentQuotaCounter(event) {
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
                    document.getElementById('updateStudentQuotaCounter').submit();
                }
            })
        }
        function updateIndustrialClassCounter(event) {
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
                    document.getElementById('updateIndustrialClassCounter').submit();
                }
            })
        }
        function updateIndustrialClassQuotaCounter(event) {
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
                    document.getElementById('updateIndustrialClassQuotaCounter').submit();
                }
            })
        }
    </script>

@endsection
