<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Project Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>

</head>

<body class="loading" data-layout-color="light" data-leftbar-theme="default" data-layout-mode="fluid" data-rightbar-onstart="true" data-leftbar-compact-mode="fixed">
<!-- Begin page -->
<div class="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    <div class="leftside-menu">

        <!-- LOGO -->
        <a href="{{route('admin.dashboard')}}" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('backend/assets/images/logo.png')}}" alt="" height="16">
                    </span>
            <span class="logo-sm">
                        <img src="{{asset('backend/assets/images/logo_sm.png')}}" alt="" height="16">
                    </span>
        </a>

        <!-- LOGO -->
        <a href="{{route('admin.dashboard')}}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="" height="16">
                    </span>
            <span class="logo-sm">
                        <img src="{{asset('backend/assets/images/logo_sm_dark.png')}}" alt="" height="16">
                    </span>
        </a>

        <div class="h-100" id="leftside-menu-container" data-simplebar>

            <!--- Sidemenu -->
            <ul class="side-nav">


                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                        <i class="uil-store"></i>
                        <span> Ecommerce </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="apps-ecommerce-products.html">Products</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-products-details.html">Products Details</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-orders.html">Orders</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-orders-details.html">Order Details</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-customers.html">Customers</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-shopping-cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="apps-ecommerce-sellers.html">Sellers</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topbar-menu float-end mb-0">
                    <li class="dropdown notification-list d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-search noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>

                    <li class="notification-list">
                        <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                            <i class="dripicons-gear noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                           aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="{{asset('backend/assets/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                                    </span>
                            <span>
                                        <span class="account-user-name">Dominic Keller</span>
                                        <span class="account-position">Founder</span>
                                    </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-edit me-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lifebuoy me-1"></i>
                                <span>Support</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline me-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="button-menu-mobile open-left">
                    <i class="mdi mdi-menu"></i>
                </button>
            </div>
            <div class="container-fluid">
                @section('breadcrumb')

                @show
                @section('content')

                @show
            </div>

        </div> <!-- content -->


    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->


<!-- Right Sidebar -->
<div class="end-bar">

    <div class="rightbar-title">
        <a href="javascript:void(0);" class="end-bar-toggle float-end">
            <i class="dripicons-cross noti-icon"></i>
        </a>
        <h5 class="m-0">Settings</h5>
    </div>

    <div class="rightbar-content h-100" data-simplebar>

        <div class="p-3">
            <div class="alert alert-warning" role="alert">
                <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
            </div>

            <!-- Settings -->
            <h5 class="mt-3">Color Scheme</h5>
            <hr class="mt-1" />

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked>
                <label class="form-check-label" for="light-mode-check">Light Mode</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
            </div>


            <!-- Width -->
            <h5 class="mt-4">Width</h5>
            <hr class="mt-1" />
            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked>
                <label class="form-check-label" for="fluid-check">Fluid</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                <label class="form-check-label" for="boxed-check">Boxed</label>
            </div>


            <!-- Left Sidebar-->
            <h5 class="mt-4">Left Sidebar</h5>
            <hr class="mt-1" />
            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                <label class="form-check-label" for="default-check">Default</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked>
                <label class="form-check-label" for="light-check">Light</label>
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                <label class="form-check-label" for="dark-check">Dark</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked>
                <label class="form-check-label" for="fixed-check">Fixed</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                <label class="form-check-label" for="condensed-check">Condensed</label>
            </div>

            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                <label class="form-check-label" for="scrollable-check">Scrollable</label>
            </div>

            <div class="d-grid mt-4">
                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
            </div>
        </div> <!-- end padding-->

    </div>
</div>

<div class="rightbar-overlay"></div>
<!-- /End-bar -->

<!-- bundle -->
<script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>
<script src="{{asset('backend/assets/js/app.min.js')}}"></script>

<!-- third party js -->
<script src="{{asset('backend/assets/js/vendor/chart.min.js')}}"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="{{asset('backend/assets/js/pages/demo.dashboard-projects.js')}}"></script>
<!-- end demo js-->
<script>
    if(localStorage.getItem('themeCompact') !== null){
        $('body').attr('data-leftbar-compact-mode',localStorage.getItem('themeCompact'));
    }
    if(localStorage.getItem('themeSidebar') !== null){
        $('body').attr('data-leftbar-theme',localStorage.getItem('themeSidebar'));
    }
    if(localStorage.getItem('themeWidth') !== null){
        $('body').attr('data-layout-mode',localStorage.getItem('themeWidth'));
    }
    if(localStorage.getItem('colorSchema') !== null){
        $('body').attr('data-layout-color',localStorage.getItem('colorSchema'));
    }
</script>
</body>

</html>
