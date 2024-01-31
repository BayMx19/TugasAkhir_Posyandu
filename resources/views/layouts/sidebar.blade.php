<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <img src="/assets/img/header_sidebar.png" class="header-sidebar mx-auto">
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ '/home' }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Masters</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ '/master_users' }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">Pengguna</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ '/master_kader' }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Kader</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ '/master_anak' }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-mood-kid"></i>
                        </span>
                        <span class="hide-menu">Anak</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Pencatatan</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ '/perkembangan' }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-chart-dots"></i>
                        </span>
                        <span class="hide-menu">Perkembangan Anak</span>
                    </a>
                </li>
                <li class="sidebar-item mt-5">
                    <span class="hide-menu">
                        <a class="sidebar-link" aria-expanded="false" onclick="confirmLogout()">
                            <button type="button" class="btn btn-danger m-1">
                                Logout
                            </button>
                        </a>
                    </span>

                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
