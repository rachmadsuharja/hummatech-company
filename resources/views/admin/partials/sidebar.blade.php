<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand text-humma">Humma<span class="sidebar-brand fw-bold">tech</span></a>
        <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="compass"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#approvals" role="button" aria-expanded="false" aria-controls="approvals">
                    <i class="link-icon" data-feather="check-square"></i>
                    <span class="link-title">Persetujuan</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="approvals">
                    <ul class="nav sub-menu">
                        <li class="nav-item {{ Request::routeIs('incoming-apprenticeship') ? 'active' : '' }}">
                            <a href="{{ route('incoming-apprenticeship') }}" class="nav-link">Siswa PKL</a>
                        </li>
                        <li class="nav-item {{ Request::routeIs('incoming-industrial-class') ? 'active' : '' }}">
                            <a href="{{ route('incoming-industrial-class') }}" class="nav-link">Kelas Industri</a>
                        </li>
                    </ul>
                </div>
            </li> --}}
            {{-- <li class="nav-item {{ Request::routeIs('news.index') ? 'active' : '' }}">
                <a href="{{ route('news.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="tv"></i>
                    <span class="link-title">Berita</span>
                </a>
            </li> --}}
            <li class="nav-item {{ Request::routeIs('apprenticeship') ? 'active' : '' }}">
                <a href="{{ route('apprenticeship') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Siswa PKL</span>
                </a>
            </li>
            <li class="nav-item {{ Request::routeIs('industrial-class') ? 'active' : '' }}">
                <a href="{{ route('industrial-class.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="home"></i>
                    <span class="link-title">Kelas Industri</span>
                </a>
            </li>
            <li class="nav-item {{ Request::routeIs('products.index') ? 'active' : '' }}">
                <a href="{{ route('products.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="package"></i>
                    <span class="link-title">Produk</span>
                </a>
            </li>
            <li class="nav-item {{ Request::routeIs('inbox') ? 'active' : '' }}">
                <a href="{{ route('inbox') }}" class="nav-link">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title">Inbox</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="settings">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Pengaturan</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="settings">
                    <ul class="nav sub-menu">
                        <li class="nav-item {{ Request::routeIs('company-profiles') ? 'active' : '' }}">
                            <a href="{{ route('company-profiles') }}" class="nav-link">Profil Perusahaan</a>
                        </li>
                        <li class="nav-item {{ Request::routeIs('company-services.index') ? 'active' : '' }}">
                            <a href="{{ route('company-services.index') }}" class="nav-link">Layanan Perusahaan</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
