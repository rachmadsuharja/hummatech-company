@extends('admin.layouts.main')


@php
    use Carbon\Carbon;
@endphp


@section('container')
    <!-- partial:partials/_sidebar.html -->
    @include('admin.partials.sidebar')
    <!-- partial -->

    <!-- partial:partials/_navbar.html -->
    @include('admin.partials.topbar')
    <!-- partial -->

    <div class="page-content">

        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Welcome Admin</h4>
            </div>
            <div class="d-flex align-items-center flex-wrap text-nowrap">
                <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                    <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
                    <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-xl-12 stretch-card">
                <div class="row flex-grow-1">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-2">Kuota Magang</h6>
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
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-2">Kuota Kelas Industri</h6>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-12 col-xl-5">
                                        <h3 class="mb-1">{{ $counter->industrial_class_quota }}</h3>
                                        <div class="d-flex align-items-baseline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-2">Alumni Magang</h6>
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
                </div>
            </div>
        </div>
        <!-- row -->

        {{-- <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Cloud storage</h6>
                <div class="dropdown mb-2">
                    <a type="button" id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
                    </div>
                </div>
                </div>
                <div id="storageChart"></div>
                <div class="row mb-3">
                <div class="col-6 d-flex justify-content-end">
                    <div>
                    <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase fw-bolder">Total storage <span class="p-1 ms-1 rounded-circle bg-secondary"></span></label>
                    <h5 class="fw-bolder mb-0 text-end">8TB</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                    <label class="d-flex align-items-center tx-10 text-uppercase fw-bolder"><span class="p-1 me-1 rounded-circle bg-primary"></span> Used storage</label>
                    <h5 class="fw-bolder mb-0">~5TB</h5>
                    </div>
                </div>
                </div>
                <div class="d-grid">
                <button class="btn btn-primary">Upgrade storage</button>
                </div>
            </div>
            </div>
        </div> --}}

        <div class="row">
            <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Inbox</h6>
                        </div>
                        <div class="d-flex flex-column">
                            @forelse ($inbox as $in)
                                <a href="{{ route('inbox') }}" class="d-flex align-items-center border-bottom pb-3">
                                    <div class="w-100 mt-3">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="text-body mb-2">{{ $in->name }}</h6>
                                            <p class="text-muted tx-12">{{ Carbon::parse($in->created_at)->locale('id')->IsoFormat('HH:MM') }}</p>
                                        </div>
                                        <p class="text-muted tx-13">{{ $in->subject }}</p>
                                    </div>
                                </a>
                            @empty
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ asset('empty/empty.png') }}" class="w-50" alt="">
                                    <small>Tidak ada pesan masuk</small>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-8 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline mb-2">
                            <h6 class="card-title mb-2">Produk</h6>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="pt-0">Nama Produk</th>
                                        <th class="pt-0">Tanggal Rilis</th>
                                        <th class="pt-0">Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($product as $pro)
                                        <tr>
                                            <td>{{ $pro->product_name }}</td>
                                            <td>{{ $pro->release_date }}</td>
                                            <td>{{ $pro->product_desc }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center"><small>tidak ada data</small></td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </div>
    <!-- partial:partials/_footer.html -->
    @include('admin.partials.footer')
    <!-- partial -->
@endsection
