<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <img src="/assets/img/header_sidebar.png" class="header-sidebar mx-auto">
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x"
                    viewBox="0 0 16 16">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                </svg>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Beranda</span>
                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ '/dashboard' }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Data Master</span>
                </li>
                @if (auth()->user()->role == 'SuperAdmin')
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ '/master_users' }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">Pengguna</span>
                    </a>
                </li>
                @endif
                @if (auth()->user()->role == 'SuperAdmin')
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ '/master_kader' }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-nurse"></i>
                        </span>
                        <span class="hide-menu">Kader</span>
                    </a>
                </li>
                @endif
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
                    <a class="sidebar-link" href="{{ '/pencatatan' }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-graph"></i>

                        </span>
                        <span class="hide-menu">Perkembangan Anak</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Profile</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ '/profile' }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Informasi Akun</span>
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