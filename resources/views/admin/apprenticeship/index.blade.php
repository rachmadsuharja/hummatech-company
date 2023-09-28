@extends('admin.layouts.main')

@section('style')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css">

@endsection

@section('container')

    @include('admin.partials.sidebar')

    @include('admin.partials.topbar')

    <div class="page-content">

        <div class="row mb-5">
            <div class="col-lg-12 col-xl-12 stretch-card justify-content-between">
                <form action="{{ route('appretinceship') }}" method="GET" class="d-flex">
                    <input type="search" class="form-control rounded-l-full" name="search" id="search" value="{{ request('search') }}" placeholder="Cari ...">
                    <button type="submit" class="btn btn-primary"><i data-feather="search" class="icon-sm fw-bold"></i></button>
                </form>
            </div>
        </div>
        <div class="row mb-3">
            @forelse ($testimonial as $testimoni)
                <div class="col-lg-4 col-xl-4 stretch-card mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-lg-4">
                                    @if ($testimoni->profile != null)
                                        <img class="w-100 rounded-circle" src="{{ asset('storage/student/'.$testimoni->profile) }}" alt="">
                                        @else
                                        <img class="w-100 rounded-circle" src="{{ asset('empty/profile.jpg') }}" alt="">
                                    @endif
                                </div>
                                <div class="col-lg-8">
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
        <div class="row float-end">
            {{ $testimonial->links() }}
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
    </script>

@endsection
