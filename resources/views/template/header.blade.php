<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Test Admin <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                <a class="nav-link" href="/menu">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Menu</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
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

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

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

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Orlando ryan sadewa</span>
                                <img class="img-profile rounded-circle"
                                    src="data:image/jpeg;base64,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">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('container')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>