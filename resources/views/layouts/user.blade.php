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

        <!-- Sidebar -->
        <nav class="navbar fixed-top navbar-expand-lg py-lg-2 " style="background-color:#124EB2;
            ; position:fixed;">
                <div class="container">

            <!-- logo -->
            <a class="navbar-brand me-lg-2" style="height: 80%; padding: 0px">
                <img src="{{ URL::asset('img/logo2.png') }}" alt="AMS" width="100">
            </a>

            <!-- Menu -->
            <hr class="sidebar-divider my-0">
            <div class="nav-item {{ (request()->is('profile*')) ? 'active' : '' }}">
                <a class="text-white fw-normal" "nav-link" href="{{ url('profile') }}">
                    <span>Profile</span></a>
            </div>

            <hr class="sidebar-divider my-0">
            <div class="dropdown">
                <a class="text-white fw-normal" href="#" data-toggle="dropdown" class="align-items-center dropdown-link " aria-haspopup="true" aria-expanded="false">
                    Presensi
                </a>
                <button class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ url('presensi') }}">Presensi</a>
                    <a class="dropdown-item" href="{{ url('presensi/rekap-presensi') }}">Rekap Presensi</a>
                </button>
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <hr class="sidebar-divider my-0">
            <div class="nav-item {{ (request()->is('penggajian*')) ? 'active' : '' }}">
                <a class="text-white fw-normal" "nav-link" href="{{ url('penggajian') }}">
                    <span>Penggajian</span></a>
            </div>

            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Tables -->
            <div class="nav-item">
                <a class="text-white fw-normal" "nav-link" href="{{ url('/logout') }}">
                    <span>Logout</span></a>
            </div>
        </nav>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item">
                            <div class="nav-link">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->employee->full_name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ URL::asset('img/employeePic/'.auth()->user()->employee->profile_pic) }}"
                                    onerror="this.onerror=null;this.src='{{ URL::asset('img/employeePic/default.png') }}';">
                            </div>
                        </li>

                    </ul>

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
