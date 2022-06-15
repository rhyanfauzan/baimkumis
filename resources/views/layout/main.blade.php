<!DOCTYPE html>
<html lang="en">

<head>
    <!-- General CSS Fi
    <!-- new theme  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/img/logo-ciamis.png') }}" />
    <!--plugins-->
    @yield("style")
    <title>{{ config('app.name') }}</title>

    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!-- boxicons  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/header-colors.css')}}" />

    <!-- end new theme  -->
    @yield('styles')
</head>

<body>
    <div class="loader"></div>
    <!-- <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="menu"></i></a></li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                            <i data-feather="maximize"></i>
                        </a></li>

                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{ avatar(auth()->user()->name) }}" class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Halo {{ auth()->user()->name }}</div>
                            <a href="" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                                Ubah Password
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('backend.home.logout') }}" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="{{ route('backend.home.index') }}"> <img alt="image" src="{{ asset('assets/img/logo-ciamis.png') }}" class="header-logo" /> <span class="logo-name">{{ config('app.name') }}</span>
                        </a>
                    </div>
                    <div class="sidebar-user">
                        <div class="sidebar-user-picture">
                            <img alt="image" src="{{ avatar(auth()->user()->name) }}">
                        </div>
                        <div class="sidebar-user-details">
                            <div class="user-name">{{ auth()->user()->name }}</div>
                            <div class="user-role">@if (auth()->user()->role == 'admin') Administrator @elseif (auth()->user()->role == 'dinas') Dinas (SPRKPLH) @elseif (auth()->user()->role == 'pihak-ketiga') Pihak Ke-3 @endif</div>
                            <div class="sidebar-userpic-btn">
                                <a href="profile.html" data-toggle="tooltip" title="Ubah Password">
                                    <i data-feather="user"></i>
                                </a>
                                <a href="{{ route('backend.home.logout') }}" data-toggle="tooltip" title="Log Out">
                                    <i data-feather="log-out"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        @if (auth()->user()->role != 'pihak-ketiga')
                        <li class="dropdown">
                            <a href="{{ route('backend.home.index') }}" class="nav-link"><i data-feather="pie-chart"></i><span>Dashboard</span></a>
                        </li>
                        @endif
                        <li class="dropdown">
                            <a href="{{ route('backend.hunian.index') }}" class="nav-link"><i data-feather="home"></i><span>Hunian</span></a>
                        </li>
                        @if (auth()->user()->role != 'pihak-ketiga')
                        <li class="dropdown">
                            <a href="{{ route('backend.perumahan.index')}}" class="nav-link"><i data-feather="home"></i><span>Perumahan</span></a>
                        </li>
                        @endif
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown toggle"><i data-feather="user-plus"></i><span>Rutilahu</span></a>
                            <ul class="dropdown-menu" style="display: none;">
                                <li><a class="nav-link" href="{{ route('backend.usulan.index') }}">Usulan</a></li>
                                @if (auth()->user()->role != 'pihak-ketiga')
                                <li><a class="nav-link" href="{{ Route('backend.verifikasiUsulan.index') }}">Daftar Tunggu</a></li>
                                @endif
                            </ul>
                        </li>
                        @if (auth()->user()->role != 'pihak-ketiga')
                        <li class="dropdown">
                            <a href="{{ route('backend.penerimaBantuan.index') }}" class="nav-link"><i data-feather="archive"></i><span>Penerima Bantuan</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('backend.hasilPelaksanaan.index') }}" class="nav-link"><i data-feather="folder"></i><span>Hasil Pelaksanaan</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('backend.perekaman.index') }}" class="nav-link"><i data-feather="clipboard"></i><span>Perekaman</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('backend.prasaranaSaranaUmum.index') }}" class="nav-link"><i data-feather="circle"></i><span>PSU</span></a>
                        </li>

                        @endif
                        <li class="dropdown">
                            <a href="{{route('backend.kecamatan.index')}}" class="nav-link"><i data-feather="map"></i><span>Kecamatan</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="{{route('backend.desa.index')}}" class="nav-link"><i data-feather="map"></i><span>Desa</span></a>
                        </li>
                        @if (auth()->user()->role != 'pihak-ketiga')
                        <li class="dropdown">
                            <a href="{{route('backend.rawanBencana.index')}}" class="nav-link"><i data-feather="alert-triangle"></i><span>Area Rawan Bencana</span></a>
                        </li>
                        <li>
                            <a href="{{ route('backend.kawasankumuh.index') }}" class="nav-link"><i data-feather="meh"></i><span>Kawasan Kumuh</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('backend.backlog.index') }}" class="nav-link"><i data-feather="target"></i><span>Backlog</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('backend.pengelolaanUser.index') }}" class="nav-link"><i data-feather="users"></i><span>Pengelolaan User</span></a>
                        </li>
                        @endif
                    </ul>
                </aside>
            </div>
        </div>
    </div> -->

    <!-- new main  -->
    <!--wrapper-->
    <div class="wrapper">
        <!--start header -->
        @include("layout.header")
        <!--end header -->
        <!--navigation-->
        @include("layout.nav")
        <!--end navigation-->
        <!--start page wrapper -->
        @yield("content")
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2022. Dinas Perumahan Rakyat Kawasan Permukiman dan Lingkungan Hidup Kabupaten Ciamis.</p>
        </footer>
    </div>
    <!--end wrapper-->
    <!-- end new main  -->

    <!-- new script  -->

    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr />
            <h6 class="mb-0">Theme Styles</h6>
            <hr />
            <div class="d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                    <label class="form-check-label" for="semidark">Semi Dark</label>
                </div>
            </div>
            <hr />
            <div class="form-check">
                <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
                <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
            </div>
            <hr />
            <h6 class="mb-0">Header Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator headercolor1" id="headercolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor2" id="headercolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor3" id="headercolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor4" id="headercolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor5" id="headercolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor6" id="headercolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor7" id="headercolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor8" id="headercolor8"></div>
                    </div>
                </div>
            </div>
            <hr />
            <h6 class="mb-0">Sidebar Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
    <!-- end new script  -->


    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @yield('scripts')
</body>

</html>