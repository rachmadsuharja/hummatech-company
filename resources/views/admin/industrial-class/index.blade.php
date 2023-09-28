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
                <form action="{{ route('industrial-class.index') }}" method="GET" class="d-flex">
                    <input type="search" class="form-control rounded-l-full" name="search" id="search" value="{{ request('search') }}" placeholder="Cari ...">
                    <button type="submit" class="btn btn-primary"><i data-feather="search" class="icon-sm fw-bold"></i></button>
                </form>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addSchool">Tambah Sekolah</button>
                <div class="modal fade" id="addSchool" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addSchool" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Sekolah</h1>
                            </div>
                            <form action="{{ route('industrial-class.store') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="row mb-3">
                                        <div class="col-md-4">
                                            <label for="school_logo" class="form-label mb-1">Logo Sekolah</label>
                                            <input type="file" class="form-control @error('school_logo') is-invalid @enderror" id="school_logo" name="school_logo" data-height="120"/>
                                        </div>
                                        @error('school_logo')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                        <div class="col-md-8">
                                            <div class="col-md-12 mb-3">
                                                <label for="school_name" class="form-label mb-1">Nama Sekolah</label>
                                                <input type="text" class="form-control" name="school_name" value="{{ old('school_name') }}" id="school_name" placeholder="example: SMKN 1 Indonesia">
                                            </div>
                                            @error('school_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="col-md-12 mb-3">
                                                <label for="join_date" class="form-label mb-1">Tanggal Bergabung</label>
                                                <input type="date" class="form-control" name="join_date" id="join_date">
                                            </div>
                                            @error('join_date')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="school_address" class="form-label mb-1">Alamat Sekolah</label>
                                        <textarea class="form-control" rows="6" name="school_address" id="school_address" placeholder="Alamat sekolah ..."></textarea>
                                    </div>
                                    @error('school_address')
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
            @forelse ($school as $sch)
                <div class="col-lg-3 col-xl-3 stretch-card mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 border border-1 rounded">
                                    <img class="w-100" src="{{ asset('storage/school/'.$sch->school_logo) }}" alt="">
                                </div>
                            </div>
                            <h5 class="text-center mt-3">{{ $sch->school_name }}</h5>
                        </div>
                        <div class="row mx-3 mb-3">
                            <label for="" class="fw-bold">Bergabung pada : </label>
                            <p>{{ Carbon::parse($sch->join_date)->locale('id')->isoFormat('DD MMMM YYYY') }}</p>
                        </div>
                        <div class="row mx-3 mb-3">
                            <form action="{{ route('industrial-class.destroy', $sch->id) }}" id="deleteSchool-{{ $sch->id }}" onsubmit="deleteSchool(event, {{ $sch->id }})" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-block btn-danger"><i data-feather="trash-2" class="icon-sm"></i></button>
                                <button type="button" data-bs-toggle="modal" data-bs-target="#updateSchool{{ $sch->id }}" class="btn btn-block btn-primary"><i data-feather="edit" class="icon-sm"></i></button>
                            </form>
                            <div class="modal fade" id="updateSchool{{ $sch->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateSchool" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Sekolah</h1>
                                        </div>
                                        <form action="{{ route('industrial-class.update', $sch->id) }}" id="updateSchool-{{ $sch->id }}" onsubmit="updateSchool(event, {{ $sch->id }})" enctype="multipart/form-data" method="post">
                                            @csrf
                                            @method('put')
                                            <div class="modal-body">
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="up_school_logo" class="form-label mb-1">Logo Sekolah</label>
                                                        <input type="file" class="form-control school_logo @error('school_logo') is-invalid @enderror" data-default-file="{{ asset('storage/school/'.$sch->school_logo) }}" id="up_school_logo_{{ $sch->id }}" name="school_logo" data-height="120"/>
                                                    </div>
                                                    @error('school_logo')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <div class="col-md-8">
                                                        <div class="col-md-12 mb-3">
                                                            <label for="school_name" class="form-label mb-1">Nama Sekolah</label>
                                                            <input type="text" class="form-control" name="school_name" value="{{ $sch->school_name }}" id="school_name" placeholder="example: SMKN 1 Indonesia">
                                                        </div>
                                                        @error('school_name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <div class="col-md-12 mb-3">
                                                            <label for="join_date" class="form-label mb-1">Tanggal Bergabung</label>
                                                            <input type="date" class="form-control" name="join_date" value="{{ $sch->join_date }}" id="join_date">
                                                        </div>
                                                        @error('join_date')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="school_address" class="form-label mb-1">Alamat Sekolah</label>
                                                    <textarea class="form-control" rows="6" name="school_address" id="school_address" placeholder="Alamat sekolah ...">{{ $sch->school_address }}</textarea>
                                                </div>
                                                @error('school_address')
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
            {{ $school->links() }}
        </div>
    </div>

    @include('admin.partials.footer')

@endsection

@section('script')

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
    <script>
        $('#school_logo').dropify({
            messages: {
                'default': '',
            }
        });
        $('.school_logo').each(function() {
            $(this).dropify({
                messages: {
                    'default': '',
                }
            });
        });

        function deleteSchool(event, id) {
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
                    document.getElementById('deleteSchool-' + id).submit();
                }
            })
        }

        function updateSchool(event, id) {
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
                    document.getElementById('updateSchool-' + id).submit();
                }
            })
        }
    </script>

@endsection
