@extends('admin.layouts.main')

@section('style')



@endsection

@section('container')

    @include('admin.partials.sidebar')

    @include('admin.partials.topbar')

    <div class="page-content">

        <div class="row mb-3">
            <div class="col-lg-12 col-xl-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-4">
                            <h6 class="card-title mb-0">Layanan Perusahaan</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="pt-0">Judul</th>
                                        <th class="pt-0">Deskripsi</th>
                                        <th class="pt-0 col-lg-2 col-xl-2 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>{{ $service->services_title }}</td>
                                            <td>{{ $service->services_description }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('company-services.destroy', $service->id) }}" id="deleteServices-{{ $service->id }}" onsubmit="confirmDelete(event, {{ $service->id }})" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-primary btn-sm"><i data-feather="edit" class="icon-sm" data-bs-toggle="modal" data-bs-target="#updateServices-{{ $service->id }}"></i></button>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i data-feather="trash-2" class="icon-sm"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="editServices{{ $service->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editServices" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Layanan</h1>
                                                    </div>
                                                    <form action="{{ route('company-services.update', $service->id) }}" id="updateServices-{{ $service->id }}" onsubmit="confirmUpdate(event, {{ $service->id }})" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-body">
                                                            <div class="form-group mb-3">
                                                                <label for="services_title" class="form-label mb-1">Fitur</label>
                                                                <input type="text" class="form-control" name="services_title" value="{{ $service->services_title }}" id="services_title" placeholder="example: Web Development">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
        <div class="row mb-3">
            <div class="col-lg-5 col-xl-5 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-4">
                            <h6 class="card-title mb-0">Kelas Industri (Core Features)</h6>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#addCoreFeatures" class="btn btn-primary p-2 btn-sm"><i data-feather="plus-circle" class="icon-md"></i></button>
                            <div class="modal fade" id="addCoreFeatures" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editServices" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Fitur</h1>
                                        </div>
                                        <form action="{{ route('core-features.store') }}" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group mb-3">
                                                    <label for="core_features" class="form-label mb-1">Fitur</label>
                                                    <textarea class="form-control" rows="6" name="core_features" id="core_features" placeholder="Fitur ...">{{ old('core_features') }}</textarea>
                                                </div>
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
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="pt-0">Fitur</th>
                                        <th class="pt-0 col-lg-2 col-xl-2 text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($core as $c)
                                        <tr>
                                            <td>{{ $c->core_features }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('core-features.destroy', $c->id) }}" id="deleteCore-{{ $c->id }}" onsubmit="confirmDeleteCore(event, {{ $c->id }})" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-transparent text-primary btn-sm p-1"><i data-feather="edit" class="icon-md" data-bs-toggle="modal" data-bs-target="#editCore{{ $c->id }}"></i></button>
                                                    <button type="submit" class="btn btn-transparent text-danger btn-sm p-1"><i data-feather="trash-2" class="icon-md"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="editCore{{ $c->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editCore" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Fitur</h1>
                                                    </div>
                                                    <form action="{{ route('core-features.update', $c->id) }}" id="updateCore-{{ $c->id }}" onsubmit="confirmUpdateCore(event, {{ $c->id }})" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-body">
                                                            <div class="form-group mb-3">
                                                                <label for="core_features" class="form-label mb-1">Fitur</label>
                                                                <textarea class="form-control" rows="6" name="core_features" id="core_features" placeholder="Fitur ...">{{ $c->core_features }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @empty

                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div>

    @include('admin.partials.footer')

@endsection

@section('script')
    <script>
        function confirmUpdate(event, id) {
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
                    document.getElementById('updateServices-' + id).submit();
                }
            })
        }

        function confirmUpdateCore(event, id) {
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
                    document.getElementById('updateCore-' + id).submit();
                }
            })
        }

        function confirmDelete(event, id) {
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
                    document.getElementById('deleteServices-' + id).submit();
                }
            })
        }

        function confirmDeleteCore(event, id) {
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
                    document.getElementById('deleteCore-' + id).submit();
                }
            })
        }
        </script>
@endsection
