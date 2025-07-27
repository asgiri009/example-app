<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <!-- Overview/Dashboard -->
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Overview
                </a>
                
                <!-- Bookings -->
                <a class="nav-link" href="bookings.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-calendar-check"></i></div>
                    Bookings
                </a>
                
                <!-- Events -->
                <a class="nav-link" href="/#events">
                    <div class="sb-nav-link-icon"><i class="fas fa-ticket"></i></div>
                    Events
                </a>
                
                <!-- Customers -->
                <a class="nav-link" href="customers.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Customers
                </a>
                
                <!-- Payments -->
                <a class="nav-link" href="payments.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-credit-card"></i></div>
                    Payments
                </a>
                
                <!-- Reports -->
                <a class="nav-link" href="reports.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-pie"></i></div>
                    Reports
                </a>
                
                <!-- Page Settings -->
                <a class="nav-link" href="page-settings.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                    Page Settings
                </a>
                
                <!-- Gallery -->
                <a class="nav-link" href="gallery.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                    Gallery
                </a>
                
                <!-- Divider -->
                <div class="sb-sidenav-menu-heading">Account</div>
                
                <!-- Logout Button -->
                <div class="nav-link" style="cursor: pointer;">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm w-100">
                            <i class="fas fa-sign-out-alt me-1"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin User
        </div>
    </nav>
</div>