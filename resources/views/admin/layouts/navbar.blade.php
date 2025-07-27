        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <img src="{{asset('images/logo.png')}}" alt="Logo" width="25" height="25" class="me-2">
            <a class="navbar-brand ps-3" href="/">TicketEase</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
<ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle d-flex align-items-center" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="me-2 d-none d-sm-inline">
                <div class="fw-bold">{{ Auth::user()->name }}</div>
                <div class="small text-muted">Admin</div>
            </div>
            <i class="fas fa-user-circle fa-lg"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li>
                <div class="dropdown-header px-3 py-2">
                    <div class="fw-bold">{{ Auth::user()->name }}</div>
                    <div class="small text-muted">Administrator</div>
                </div>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="fas fa-user-cog me-2"></i>Profile Settings</a></li>
            <li><a class="dropdown-item" href="#!"><i class="fas fa-history me-2"></i>Activity Log</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="dropdown-item" type="submit">
                        <i class="fas fa-sign-out-alt me-2"></i>Logout
                    </button>
                </form>
            </li>
        </ul>
    </li>
</ul>
        </nav>