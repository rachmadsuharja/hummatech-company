@extends('admin.layouts.main')

@section('style')



@endsection

@section('container')

    @include('admin.partials.sidebar')

    @include('admin.partials.topbar')

    <div class="page-content">

        <div class="row mb-3">
            <div class="col-lg-3 col-xl-3">
                <form action="{{ route('inbox') }}" method="GET" class="d-flex">
                    <input type="search" class="form-control rounded-l-full" name="search" id="search" value="{{ request('search') }}" placeholder="Cari ...">
                    <button type="submit" class="btn btn-primary"><i data-feather="search" class="icon-sm fw-bold"></i></button>
                </form>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg-12 col-xl-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="pt-0">Nama</th>
                                        <th class="pt-0">No. Telpon</th>
                                        <th class="pt-0">Judul</th>
                                        <th class="pt-0">Pesan</th>
                                        <th class="pt-0 col-lg-1 col-xl-1 text-center">Balas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($inbox as $in)
                                        <tr>
                                            <td>{{ $in->name }}</td>
                                            <td>{{ $in->phone }}</td>
                                            <td>{{ $in->subject }}</td>
                                            <td>{{ $in->message }}</td>
                                            <td><button class="btn btn-transparent btn-sm" data-bs-toggle="modal" data-bs-target="#replyMessages{{ $in->id }}"><i data-feather="send" class="icon-md text-primary"></i></button></td>
                                        </tr>
                                        <div class="modal fade" id="replyMessages{{ $in->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editServices" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Balas Pesan</h1>
                                                    </div>
                                                    <form action="{{ route('reply', $in->id) }}" id="replyMessages-{{ $in->id }}" onsubmit="confirmUpdate(event, {{ $in->id }})" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <div class="modal-body">
                                                            <div class="row mb-2">
                                                                <div class="col-lg-6">
                                                                    <label for="subject2" class="form-label mb-0">Judul</label>
                                                                    <input type="text" class="form-control" name="subject2" id="subject2" placeholder="example: Hummatech Here">
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <b>Kepada :</b>
                                                                    <p>{{ $in->email }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <label for="replied_message">Pesan</label>
                                                                    <textarea class="form-control" name="replied_message" id="replied_message" cols="10" rows="5" placeholder="Ketik pesan disini ..."></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Kirim</button>
                                                        </div>
                                                    </form>
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
        </div> <!-- row -->
        <div class="row float-end">
            {{ $inbox->links() }}
        </div>
    </div>

    @include('admin.partials.footer')

@endsection

@section('script')
    {{-- <script>
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
        </script> --}}
@endsection
