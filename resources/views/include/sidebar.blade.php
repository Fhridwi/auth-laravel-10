<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('template/assets/compiled/svg/logo.svg')}}" alt="Logo" srcset=""></a>
                </div>
                <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                    <!-- Theme toggle icon for Dark/Light mode -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-sun" viewBox="0 0 16 16" id="sun-icon">
                        <path d="M8 3a5 5 0 1 0 5 5 5 5 0 0 0-5-5Zm0 9a4 4 0 1 1 4-4 4 4 0 0 1-4 4Z"/>
                        <path d="M8 1V0h-.001v1H8Zm7.071 2.929L13.142 2.929 12.071 4l1.414 1.414Zm-14.142 0L2.929 4 1.858 2.929 0 4.071l1.414 1.414ZM8 13v1h-.001v-1H8Zm7.071-6.071L13.142 9 12.071 7.928 13.485 6.514l1.415 1.415Zm-14.142 0L2.929 7.929 1.858 9 0 7.928l1.414-1.414Zm9.181-2.252a1 1 0 0 1 .708 1.707l-.707.707-1.414-1.415.707-.707a1 1 0 0 1 1.414.707Z"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16" id="moon-icon">
                        <path d="M7 0a7 7 0 0 0 0 14c3.657 0 7-3.134 7-7s-3.343-7-7-7zM7 13A6 6 0 1 1 7 1a6 6 0 0 1 0 12z"/>
                    </svg>

                    <div class="form-check form-switch fs-6">
                        <input class="form-check-input me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                        <label class="form-check-label"></label>
                    </div>
                </div>

                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <!-- Dashboard Menu -->
                <li class="sidebar-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="sidebar-link">
                        <i class="bi bi-house-door-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Data Santri Menu -->
                <li class="sidebar-item {{ request()->routeIs('data.santri') ? 'active' : '' }}">
                    <a href="{{ route('data.santri') }}" class="sidebar-link">
                        <i class="bi bi-person-fill"></i>
                        <span>Data Santri</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="pembayaran-santri.html" class='sidebar-link'>
                        <i class="bi bi-wallet2"></i>
                        <span>Pembayaran Santri</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-gear-fill"></i>
                        <span>Setting</span>
                    </a>
                    <ul class="submenu">
                        <li class="submenu-item">
                            <a href="akun-admin.html" class="submenu-link">Akun Admin</a>
                        </li>
                        <li class="submenu-item">
                            <a href="akun-user.html" class="submenu-link">Akun User</a>
                        </li>
                    </ul>
                </li>

                <!-- Logout Menu -->
                <li class="sidebar-item">
                    @auth
                        <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                            @csrf
                            <button type="submit" class="sidebar-link btn btn-link">
                                <i class="bi bi-door-open"></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    @endauth
                </li>

            </ul>
        </div>
    </div>
</div>
