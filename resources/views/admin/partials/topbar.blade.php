@php
    use Carbon\Carbon;
@endphp

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css">
<style>
    .inbox-counter {
        font-size: 10px;
    }
</style>

<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
        {{-- <form class="search-form">
            <div class="input-group">
                <div class="input-group-text">
                    <i data-feather="search"></i>
                </div>
                <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
            </div>
        </form> --}}
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle position-relative" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="mail"></i>
                    @if (count($notification) >= 3)
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger inbox-counter">4+</span>
                    @elseif (count($notification) >= 3)
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger inbox-counter">{{ count($notification) }}</span>
                    @else
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger inbox-counter"></span>
                    @endif
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
                    @forelse ($notification as $notif)
                        <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                            <p>Pesan Baru</p>
                        </div>
                        <div class="p-1">
                            <a href="{{ route('redirecto', ['id' => $notif->id]) }}" class="dropdown-item d-flex align-items-center py-2">
                                <div class="d-flex justify-content-between flex-grow-1">
                                <div class="me-4">
                                    <p>{{ $notif->title }}</p>
                                    <p class="tx-12 text-muted">{{ $notif->sub_title }}</p>
                                </div>
                                <p class="tx-12 text-muted">{{ $notif->created_at->diffForHumans(Carbon::now(), [
                                    'syntax' => Carbon::DIFF_RELATIVE_TO_NOW,
                                ]) }}</p>
                                </div>
                            </a>
                        </div>
                        <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                            <a href="{{ route('read-inbox') }}">Tandai sudah dibaca</a>
                        </div>
                    @empty
                    <div class="p-1">
                        <div class="m-1">
                            <p class="tx-20 text-center">Tidak ada notifikasi</p>
                        </div>
                    </div>
                    @endforelse
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="bell"></i>
                    <div class="indicator">
                        <div class="circle"></div>
                    </div>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
                    <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                        <p>6 New Notifications</p>
                        <a href="javascript:;" class="text-muted">Clear all</a>
                    </div>
                    <div class="p-1">
                        <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                            <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                <i class="icon-sm text-white" data-feather="gift"></i>
                            </div>
                            <div class="flex-grow-1 me-2">
                                <p>New Order Recieved</p>
                                <p class="tx-12 text-muted">30 min ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                            <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                <i class="icon-sm text-white" data-feather="alert-circle"></i>
                            </div>
                            <div class="flex-grow-1 me-2">
                                <p>Server Limit Reached!</p>
                                <p class="tx-12 text-muted">1 hrs ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                            <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                            <img class="wd-30 ht-30 rounded-circle" src="../assets/images/faces/face6.jpg" alt="userr">
                            </div>
                            <div class="flex-grow-1 me-2">
                                <p>New customer registered</p>
                                <p class="tx-12 text-muted">2 sec ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                            <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                <i class="icon-sm text-white" data-feather="layers"></i>
                            </div>
                            <div class="flex-grow-1 me-2">
                                <p>Apps are ready for update</p>
                                <p class="tx-12 text-muted">5 hrs ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                            <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                                    <i class="icon-sm text-white" data-feather="download"></i>
                            </div>
                            <div class="flex-grow-1 me-2">
                                <p>Download completed</p>
                                <p class="tx-12 text-muted">6 hrs ago</p>
                            </div>
                        </a>
                    </div>
                    <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                        <a href="javascript:;">View all</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if ($admin->profile == 'default.png')
                        <img class="wd-30 ht-30 rounded-circle" src="{{ asset('user/profile/'.$admin->profile) }}" alt="">
                    @else
                        <img class="wd-30 ht-30 rounded-circle" src="{{ asset('storage/user/profile/'.$admin->profile) }}" alt="">
                    @endif
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                    <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                        <div class="mb-3">
                            @if ($admin->profile == 'default.png')
                                <img class="wd-80 ht-80 rounded-circle" src="{{ asset('user/profile/'.$admin->profile) }}" alt="">
                            @else
                                <img class="wd-80 ht-80 rounded-circle" src="{{ asset('storage/user/profile/'.$admin->profile) }}" alt="">
                            @endif
                        </div>
                        <div class="text-center">
                            <p class="tx-16 fw-bolder">{{ $admin->name }}</p>
                            <p class="tx-12 text-muted">{{ $admin->email }}</p>
                        </div>
                    </div>
                    <ul class="list-unstyled p-1">
                        <li class="dropdown-item py-2">
                            <button type="button" class="btn btn-block btn-transparent text-body m-0 p-0" data-bs-toggle="modal" data-bs-target="#editProfile">
                                <i class="me-2 icon-md" data-feather="edit"></i>
                                <span>Edit Profil</span>
                            </button>
                        </li>
                        <li class="dropdown-item py-2">
                            <form action="{{ route('logout') }}" id="logoutBtn" onsubmit="confirmLogout(event)" method="get">
                                <button type="submit" class="btn btn-block btn-transparent m-0 p-0">
                                    <i class="me-2 icon-md" data-feather="log-out"></i>
                                    Log Out
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="modal fade" id="editProfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateTestimoni" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profil Anda</h1>
            </div>
            <form action="{{ route('profile.update', Auth::user()->id) }}" id="updateIndustrialClassCounter" onsubmit="updateIndustrialClassCounter(event)" enctype="multipart/form-data" method="post">
                @csrf
                @method('put')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-xl-4">
                            <label for="profile" class="form-label">Foto Profil</label>
                            @if ($admin->profile == 'default.png')
                                <input type="file" class="form-control @error('profile') is-invalid @enderror" id="profile" name="profile" data-height="120" data-default-file="{{ asset('user/profile/'.$admin->profile) }}" />
                            @else
                                <input type="file" class="form-control @error('profile') is-invalid @enderror" id="profile" name="profile" data-height="120" data-default-file="{{ asset('storage/user/profile/'.$admin->profile) }}" />
                            @endif
                        </div>
                        <div class="col-md-8 col-lg-8 col-xl-8">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label mb-1">Nama</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $admin->name }}" placeholder="Nama Anda ...">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email" class="form-label mb-1">Email</label>
                                <input type="text" class="form-control" name="email" id="email" value="{{ $admin->email }}" placeholder="Email Anda ...">
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-8 col-xl-8">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
<script>
    $('#profile').dropify({
        messages: {
            'default': '',
        }
    });

    function confirmLogout(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Logout',
            text: "Apakah anda yakin ingin logout?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya'
            }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('logoutBtn').submit();
            }
        })
    }
</script>
