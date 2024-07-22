<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Plus Admin</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('assets_admin/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_admin/vendors/flag-icon-css/css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_admin/vendors/css/vendor.bundle.base.css') }}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{ asset('assets_admin/vendors/jquery-bar-rating/css-stars.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets_admin/vendors/font-awesome/css/font-awesome.min.css') }}" />
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{ asset('assets_admin/css/demo_1/style.css') }}" />
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{ asset('assets_admin/images/favicon.png') }}" />
    </head>

    <body>
        <div class="container-scroller">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile border-bottom">
                        <a href="#" class="nav-link flex-column">
                            <div class="nav-profile-image">
                                <img src="{{ asset('assets_admin/images/faces/face1.jpg') }}" alt="profile" />
                                <!--change to offline or busy as needed-->
                            </div>
                            <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                                <span class="font-weight-semibold mb-1 mt-2 text-center">Antonio Olson</span>
                                <span class="text-secondary icon-sm text-center">$3499.00</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item pt-3">
                        <a class="nav-link d-block" href="index.html">
                            <img class="sidebar-brand-logo" src="assets_admin/images/logo.svg" alt="" />
                            <img class="sidebar-brand-logomini" src="assets_admin/images/logo-mini.svg"
                                alt="" />
                            <div class="small font-weight-light pt-1">Responsive Dashboard</div>
                        </a>
                        <form class="d-flex align-items-center" action="#">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <i class="input-group-text border-0 mdi mdi-magnify"></i>
                                </div>
                                <input type="text" class="form-control border-0" placeholder="Search" />
                            </div>
                        </form>
                    </li>
                    <li class="pt-2 pb-1">
                        <span class="nav-item-head">Template Pages</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="mdi mdi-compass-outline menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="mdi mdi-crosshairs-gps menu-icon"></i>
                            <span class="menu-title">UI Elements</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_settings-panel.html -->
                <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close mdi mdi-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-default-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles default primary"></div>
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles light"></div>
                    </div>
                </div>
                <!-- partial -->
                <!-- partial:partials/_navbar.html -->
                <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                    <div class="navbar-menu-wrapper d-flex align-items-stretch">
                        <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                            data-toggle="minimize">
                            <span class="mdi mdi-chevron-double-left"></span>
                        </button>
                        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                            <a class="navbar-brand brand-logo-mini" href="index.html"><img
                                    src="assets_admin/images/logo-mini.svg" alt="logo" /></a>
                        </div>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item nav-logout d-none d-md-block mr-3">
                                <a class="nav-link" href="#">Status</a>
                            </li>
                            <li class="nav-item nav-logout d-none d-md-block">
                                <button class="btn btn-sm btn-danger">Trailing</button>
                            </li>

                            <li class="nav-item nav-logout d-none d-lg-block">
                                <a class="nav-link" href="index.html">
                                    <i class="mdi mdi-home-circle"></i>
                                </a>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                            data-toggle="offcanvas">
                            <span class="mdi mdi-menu"></span>
                        </button>
                    </div>
                </nav>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper pb-0">
                        <div class="page-header flex-wrap">
                            <div class="header-left">
                                <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Create new document </button>
                                <button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Import documents
                                </button>
                            </div>
                            <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <p class="m-0 pr-3">Dashboard</p>
                                    </a>
                                    <a class="pl-3 mr-4" href="#">
                                        <p class="m-0">ADE-00234</p>
                                    </a>
                                </div>
                                <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                                    <i class="mdi mdi-plus-circle"></i> Add Prodcut </button>
                            </div>
                        </div>
                        <!-- doughnut chart row starts -->
                        <div class="row">
                            <div class="col-sm-12 stretch-card grid-margin">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card border-0">
                                                <div class="card-body">
                                                    <div class="card-title">Channel Sessions</div>
                                                    <div class="d-flex flex-wrap">
                                                        <div class="doughnut-wrapper w-50">
                                                            <canvas id="doughnutChart1" width="100"
                                                                height="100"></canvas>
                                                        </div>
                                                        <div id="doughnut-chart-legend"
                                                            class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-0">
                                                <div class="card-body">
                                                    <div class="card-title">News Sessions</div>
                                                    <div class="d-flex flex-wrap">
                                                        <div class="doughnut-wrapper w-50">
                                                            <canvas id="doughnutChart2" width="100"
                                                                height="100"></canvas>
                                                        </div>
                                                        <div id="doughnut-chart-legend2"
                                                            class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-0">
                                                <div class="card-body">
                                                    <div class="card-title">Device Sessions</div>
                                                    <div class="d-flex flex-wrap">
                                                        <div class="doughnut-wrapper w-50">
                                                            <canvas id="doughnutChart3" width="100"
                                                                height="100"></canvas>
                                                        </div>
                                                        <div id="doughnut-chart-legend3"
                                                            class="pl-lg-3 rounded-legend align-self-center flex-grow legend-vertical legend-bottom-left">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                                bootstrapdash.com 2020</span>
                        </div>

                        <div>
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> Distributed
                                By: <a href="https://themewagon.com/" target="_blank">Themewagon</a></span>
                        </div>
                    </footer>
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ asset('assets_admin/vendors/js/vendor.bundle.base.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{ asset('assets_admin/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
        <script src="{{ asset('assets_admin/vendors/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('assets_admin/vendors/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('assets_admin/vendors/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('assets_admin/vendors/flot/jquery.flot.categories.js') }}"></script>
        <script src="{{ asset('assets_admin/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
        <script src="{{ asset('assets_admin/vendors/flot/jquery.flot.stack.js') }}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{ asset('assets_admin/js/off-canvas.js') }}"></script>
        <script src="{{ asset('assets_admin/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('assets_admin/js/misc.js') }}"></script>
        <script src="{{ asset('assets_admin/js/settings.js') }}"></script>
        <script src="{{ asset('assets_admin/js/todolist.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="{{ asset('assets_admin/js/dashboard.js') }}"></script>
        <!-- End custom js for this page -->
    </body>

</html>
