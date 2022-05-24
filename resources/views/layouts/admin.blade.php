<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    @yield('head-link')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" style="position:relative;">

         <!-- NAVBAR START -->
    <nav class="navbar fixed-top navbar-expand-lg py-lg-2 " style="background-color:#124EB2;
    ; position:fixed;">
        <div class="container">

            <!-- logo -->
            <a class="navbar-brand me-lg-2" style="height: 80%; padding: 0px">
                <img src="{{ URL::asset('img/logo2.png') }}" alt="AMS" width="100">
            </a>

            <!-- menu -->
            <div class="d-flex justify-content-around">
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav me-auto align-items-center" style="font-size:medium">
                        <li class="nav-item mx-lg-2">
                            <a class="text-white fw-normal" class="nav-link active" href="/">Dashboard</a>
                        </li>

                        <div class="dropdown">
                            <a class="text-white fw-normal" href="#" data-toggle="dropdown" class="align-items-center dropdown-link " aria-haspopup="true" aria-expanded="false">
                                Akun
                            </a>
                            <button class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('admin/akun/input-akun') }}">Input Akun Baru</a>
                                <a class="dropdown-item" href="{{ url('admin/akun/kelola-akun') }}">Kelola Akun</a>
                            </button>
                        </div>

                        <li class="nav-item mx-lg-2">
                            <li class="nav-item {{ (request()->is('admin/data-karyawan*')) ? 'active' : '' }}">
                                <a class="text-white fw-normal" "nav-link" href="{{ url('admin/data-karyawan') }}">
                                    <span>Data Karyawan</span></a>
                            </li>
                        </li>


                        <div class="dropdown" style="margin-left: 20px">
                            <li class="nav-item {{ (request()->is('admin/jabatan*')) ? 'active' : '' }}">
                                <a class="text-white fw-normal" href="#" data-toggle="dropdown" class="align-items-center dropdown-link " aria-haspopup="true" aria-expanded="false">
                                    Jabatan
                                </a>
                                <button class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ url('admin/jabatan/input-jabatan') }}">Input Jabatan Baru</a>
                                    <a class="dropdown-item" href="{{ url('admin/jabatan') }}">Daftar Jabatan</a>
                                </button>
                        </div>

                        <li class="nav-item mx-lg-2">
                            <li class="nav-item {{ (request()->is('admin/presensi*')) ? 'active' : '' }}">
                                <a class="text-white fw-normal" "nav-link" href="{{ url('admin/presensi') }}">
                                    <span>Presensi</span></a>
                            </li>
                        </li>

                        <li class="nav-item mx-lg-2">
                            <li class="nav-item {{ (request()->is('admin/penambahan-potongan*')) ? 'active' : '' }}">
                                <a class="text-white fw-normal" "nav-link" href="{{ url('admin/penambahan-potongan') }}">
                                    <span>Penambahan & Potongan</span></a>
                            </li>
                        </li>

                        <li class="nav-item mx-lg-2">
                            <li class="nav-item {{ (request()->is('admin/penggajian*')) ? 'active' : '' }}">
                                <a class="text-white fw-normal" "nav-link" href="{{ url('admin/penggajian') }}">
                                    <span>Penggajian</span></a>
                            </li>
                        </li>

                        <li class="nav-item mx-lg-2">
                            <li class="nav-item">
                                <a class="text-white fw-normal" "nav-link" href="{{ url('/logout') }}">
                                    <span>Logout</span></a>
                            </li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="min-height: 40rem">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                </nav>
                <!-- End of Topbar -->

                @yield('content')

            </div>
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @yield('foot-link')

</body>

</html>
