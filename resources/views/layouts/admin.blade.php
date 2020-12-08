<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Content Management System</title>
  <link rel="icon" href="img/f.ico" type="image/ico">

  <!-- Custom fonts for this template-->
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
  <link href="{{asset('sbAdmin2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('sbAdmin2/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <!--<link href="{{secure_asset('sbAdmin2/css/sb-admin-2.min.css')}}" rel="stylesheet">-->

  <link rel="stylesheet" href="{{asset('/css/AdminStyle.css')}}">

</head>

<body id="page-top">
            <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-dark topbar static-top shadow">
          <a class=" d-flex align-items-center justify-content-center" href="">
<!--            <div class="sidebar-brand-icon">
              <i class="fas fa-sync"></i>
            </div>
            <div class="branding mx-3">TEK</div>-->
             <a id="aCompName" class="navbar-brand js-scroll-trigger topNav" href="#">
                 <img src="/img/f_icon.png" height="40" width="40">
                 <a class="navbar-brand js-scroll-trigger topNav" href="#">Content Management System</a>
             </a>
          </a>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <span class="mr-2 d-none d-lg-inline small">
                    <i class="fas fa-user-circle fa-lg"></i>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </span>

                <!--<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">-->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                 <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>

                {{--<a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>--}}
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
  <!-- Page Wrapper -->
  <div id="wrapper" class="">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
            <hr class="sidebar-divider my-0">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/HomePage" target="_blank">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-globe"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Home Website</sup></div>
            </a>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Main Menu
            </div>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#HomePage" aria-expanded="true" aria-controls="HomePage">
                <i class="fas fa-fw far fas fas fa-home"></i>
                <span>Home Page</span></a>
                <div id="HomePage" class="collapse" aria-labelledby="HeadingHomePage" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Home Page Settings:</h6>
                        <a class="collapse-item" href="#" id="aAdminMain">Main Slider</a>
                        <a class="collapse-item" href="#" id="aAdminServices">Services</a>
                        <a class="collapse-item" href="#" id="aAdminWWD">What We Do</a>
                        <a class="collapse-item" href="#" id="aAdminTech">Development Technology</a>
                        <a class="collapse-item" href="#" id="aAdminTeam">Our Team</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" id="aAdminAbout">
                <i class="fas fa-fw far fas fa-comment-dots"></i>
                <span>About Page</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" id="aAdminPortfolio">
                <i class="fas fa-fw far fas fa-book-open"></i>
                <span>Portfolio Page</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" id="aAdminClients">
                <i class="fas fa-fw far fas fa-users"></i>
                <span>Clients Page</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" id="aAdminContactUs">
                <i class="fas fa-fw far fas fa-address-book"></i>
                <span>Contact Us Page</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Admin Settings
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>System Accounts</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Account Settings:</h6>

                    @if (Route::has('register'))
                        <a id="aRegAdmin" class="collapse-item" href="{{ route('register') }}">
                        Register
                        </a>
                    @endif

                    <a id='aAdminAccRec' class="collapse-item" href="#">Account Records</a>
                </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <!-- Begin Page Content -->
                <div class="container-fluid content-layout">
                        @yield('content')
                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Project F Software Solution 2020</span>
                    </div>
                    </div>
                </footer>
                <!-- End of Footer -->
            </div>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                        <a class="btn btn-primary" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('sbAdmin2/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('sbAdmin2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('sbAdmin2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('sbAdmin2/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('sbAdmin2/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('sbAdmin2/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('sbAdmin2/js/demo/chart-pie-demo.js')}}"></script>

  @section('page_script')

  @show
  <script src="{{asset('js/crud-modal-img.js')}}"></script>
  <script src="{{asset('js/navigation.js')}}"></script>
</body>

</html>
