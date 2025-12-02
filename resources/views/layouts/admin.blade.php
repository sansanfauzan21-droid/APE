<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Modern Sidebar Styling */
        .main-sidebar {
            background: linear-gradient(180deg, #343a40 0%, #495057 100%);
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .brand-link {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white !important;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding: 15px 20px;
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .brand-link:hover {
            background: linear-gradient(135deg, #0056b3 0%, #004085 100%);
            color: white !important;
            text-decoration: none;
        }

        .brand-link .brand-image {
            width: 35px;
            height: 35px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
        }

        .brand-link .brand-text {
            font-weight: 600;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }

        .sidebar .nav-sidebar .nav-item .nav-link {
            color: rgba(255,255,255,0.8);
            border-radius: 8px;
            margin: 2px 8px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .sidebar .nav-sidebar .nav-item .nav-link:hover {
            background: rgba(255,255,255,0.1);
            color: white;
            transform: translateX(5px);
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }

        .sidebar .nav-sidebar .nav-item .nav-link.active {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            box-shadow: 0 2px 8px rgba(0,123,255,0.3);
        }

        .sidebar .nav-sidebar .nav-item .nav-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 4px;
            background: #ffc107;
        }

        .sidebar .nav-sidebar .nav-treeview .nav-item .nav-link {
            padding-left: 3rem;
            font-size: 0.9rem;
            color: rgba(255,255,255,0.7);
        }

        .sidebar .nav-sidebar .nav-treeview .nav-item .nav-link:hover {
            color: white;
            background: rgba(255,255,255,0.05);
        }

        .sidebar .nav-sidebar .nav-treeview .nav-item .nav-link.active {
            background: rgba(0,123,255,0.2);
            color: white;
        }

        .nav-sidebar .nav-icon {
            width: 20px;
            text-align: center;
            margin-right: 10px;
        }

        .main-header.navbar {
            background: linear-gradient(90deg, #ffffff 0%, #f8f9fa 100%);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-bottom: 1px solid #e9ecef;
        }

        .main-header .navbar-nav .nav-link {
            color: #495057;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .main-header .navbar-nav .nav-link:hover {
            color: #007bff;
            background: rgba(0,123,255,0.1);
            border-radius: 6px;
        }

        .content-wrapper {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: calc(100vh - 60px);
        }

        .content-header {
            background: white;
            border-bottom: 1px solid #e9ecef;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .main-footer {
            background: linear-gradient(135deg, #343a40 0%, #495057 100%);
            color: rgba(255,255,255,0.8);
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 15px;
        }

        .main-footer a {
            color: rgba(255,255,255,0.8);
            transition: color 0.3s ease;
        }

        .main-footer a:hover {
            color: white;
        }

        /* Custom scrollbar for sidebar */
        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: rgba(255,255,255,0.1);
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255,255,255,0.3);
            border-radius: 3px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: rgba(255,255,255,0.5);
        }

        /* Responsive improvements */
        @media (max-width: 767.98px) {
            .main-sidebar {
                transform: translateX(-100%);
            }

            .main-sidebar.show {
                transform: translateX(0);
            }

            .brand-link {
                padding: 12px 15px;
            }

            .brand-link .brand-text {
                font-size: 1rem;
            }
        }

        /* Animation for menu toggle */
        .sidebar-collapse .main-sidebar {
            transform: translateX(-250px);
        }

        .sidebar-open .main-sidebar {
            transform: translateX(0);
        }

        /* Loading animation */
        .nav-link i {
            transition: transform 0.3s ease;
        }

        .nav-link:hover i {
            transform: scale(1.1);
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                        <span class="d-none d-md-inline">{{ auth()->user()->name ?? 'Admin' }}</span>
                        <i class="fas fa-caret-down ml-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="{{ route('admin.profile.index') }}" class="dropdown-item">
                            <i class="fas fa-user mr-2"></i> My Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ route('admin.dashboard') }}" class="brand-link">
                <div class="brand-image">
                    <i class="fas fa-crown"></i>
                </div>
                <span class="brand-text font-weight-bold">Admin Panel</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        @if(auth()->user()->hasRole('super-admin'))
                        <li class="nav-item">
                            <a href="{{ route('admin.profile.index') }}" class="nav-link {{ request()->routeIs('admin.profile.*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>My Profile</p>
                            </a>
                        </li>

                        @can('manage users')
                        <li class="nav-item {{ request()->routeIs('admin.users.*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Users <i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Users</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.users.create') }}" class="nav-link {{ request()->routeIs('admin.users.create') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add User</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endcan
                        @endif

                        @can('manage roles')
                        <li class="nav-item">
                            <a href="{{ route('admin.roles.index') }}" class="nav-link {{ request()->routeIs('admin.roles.*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-tag"></i>
                                <p>Roles & Permissions</p>
                            </a>
                        </li>
                        @endcan

                        @can('manage content')
                        @if(auth()->user()->hasRole('super-admin'))
                        <!-- Company Profile -->
                        <li class="nav-item {{ request()->routeIs(['home.*', 'home-content.*']) ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ request()->routeIs(['home.*', 'home-content.*']) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-building"></i>
                                <p>Company Profile <i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('home.hero.index') }}" class="nav-link {{ request()->routeIs('home.hero.*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Hero</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('home.about.index') }}" class="nav-link {{ request()->routeIs('home.about.*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>About</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('home.highlight.index') }}" class="nav-link {{ request()->routeIs('home.highlight.*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Highlight</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('home-content.index') }}" class="nav-link {{ request()->routeIs('home-content.*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Content</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('home.sbu-image.index') }}" class="nav-link {{ request()->routeIs('home.sbu-image.*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SBU Images</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Utilities -->
                        <li class="nav-item {{ request()->routeIs(['company.*', 'regulations.*', 'contact-form.*']) ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ request()->routeIs(['company.*', 'regulations.*', 'contact-form.*']) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>Utilities <i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('company.index') }}" class="nav-link {{ request()->routeIs('company.*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Company</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('regulations.index') }}" class="nav-link {{ request()->routeIs('regulations.*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Regulations</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact-form.index') }}" class="nav-link {{ request()->routeIs('contact-form.*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contact Form</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @elseif(auth()->user()->hasRole('admin'))
                        <!-- Contact Form Management -->
                        <li class="nav-item">
                            <a href="{{ route('admin.contact-form.index') }}" class="nav-link {{ request()->routeIs('admin.contact-form.*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>Kelola Pesan</p>
                                @if($unreadMessages ?? 0 > 0)
                                    <span class="badge badge-warning right">{{ $unreadMessages ?? 0 }}</span>
                                @endif
                            </a>
                        </li>
                        @endif
                        @endcan
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('title', 'Dashboard')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item active">@yield('title', 'Dashboard')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                <strong>Version</strong> 1.0.0
            </div>
            <strong>&copy; 2024 <a href="#">PT ALIANSI PRIMA ENERGI</a>.</strong> All rights reserved.
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
