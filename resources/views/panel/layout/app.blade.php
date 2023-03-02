<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rtl-temp.ir/Theme/Zinzer/vertical-rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2019 05:45:47 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>
        Cafe-Ex || Sell - Buy
    </title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- morris css -->
    <link rel="stylesheet" href="/assets/morris/morris.css">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
            <i class="mdi mdi-close"></i>
        </button>

        <div class="left-side-logo d-block d-lg-none">
            <div class="text-center">

                <a href="/panel/customer/dashboard" class="logo"><img src="/assets/images/logo_dark.png" height="20" alt="logo"></a>
            </div>
        </div>

        <div class="sidebar-inner slimscrollleft">

            <div id="sidebar-menu">
                <ul>
                    <li class="menu-title">اصلی</li>

                    <li>
                        <a href="/panel/customer/dashboard" class="waves-effect">
                            <i class="dripicons-home"></i>
                            <span> داشبورد <span class="badge badge-success badge-pill float-right"></span></span>
                        </a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> خرید و فروش </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/panel/customer/Business/buy">خرید</a></li>
                            <li><a href="/panel/customer/Business/sell">فروش</a></li>

                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-archive"></i> <span> احراز هویت  </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/panel/customer/authentication/personal_identity@1"> هویت شخصی </a></li>
                            <li><a href="/panel/customer/authentication/personal_identity@2">کارت های بانکی</a></li>
                            <li><a href="/panel/customer/authentication/personal_identity@3"> مدارک نهایی </a></li>

                        </ul>
                    </li>
<!--
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-rocket"></i> <span> زیرمجموعه گیری </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/panel/customer/subdivision/subdivision">افزودن</a></li>
                            <li><a href="/panel/customer/subdivision/subdivision_history">تعداد و مشخصات</a></li>

                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span> تاریجچها </span>  <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="/panel/customer/history/his_buy@@">خرید ها</a></li>
                            <li><a href="/panel/customer/history/his_sell@@">فروش ها</a></li>
                            <li><a href="/panel/customer/history/his_sub@@">زیرمجموعه ها</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="/panel/customer/calendar" class="waves-effect"><i class="dripicons-calendar"></i><span> تقویم </span></a>
                    </li>-->

                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            <div class="topbar">

                <div class="topbar-left	d-none d-lg-block">
                    <div class="text-center">
                        <a href="/panel/customer/dashboard" class="logo"><img src="/assets/images/logo.png" height="22" alt="logo"></a>
                    </div>
                </div>

                <nav class="navbar-custom">

                    <!-- Search input -->

                    <ul class="list-inline float-right mb-0">


                        <li class="list-inline-item dropdown notification-list nav-user">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="/assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                <span class="d-none d-md-inline-block ml-1"><i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> پروفایل</a>

                                <a class="dropdown-item" href="#"><span class="badge badge-success float-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> تنظیمات</a>
                                <a class="dropdown-item" href="#" onclick="openFullscreen();"><i class="dripicons-lock text-muted"></i> قفل صفحه</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form><i class="dripicons-exit text-muted"></i> خروج</a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="list-inline-item">
                            <button type="button" class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->
            <div class="page-content-wrapper ">
                <div class="container-fluid">
                    @yield("center")
                </div>
            </div>


        </div> <!-- content -->

        <footer class="footer">
            <span class="d-none d-md-inline-block">ساخته شده توسط سایت opofast.com</span>
        </footer>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->

<script>
    /* Get the documentElement (<html>) to display the page in fullscreen */
    var elem = document.documentElement;

    /* View in fullscreen */
    function openFullscreen() {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.mozRequestFullScreen) { /* Firefox */
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
            elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) { /* IE/Edge */
            elem.msRequestFullscreen();
        }
        //alert('برای خارج شدن از صفحه از کلید ESC استفاده کنید.');
    }

    /* Close fullscreen */

</script>
<!-- jQuery  -->
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/modernizr.min.js"></script>
<script src="/assets/js/detect.js"></script>
<script src="/assets/js/fastclick.js"></script>
<script src="/assets/js/jquery.slimscroll.js"></script>
<script src="/assets/js/jquery.blockUI.js"></script>
<script src="/assets/js/waves.js"></script>
<script src="/assets/js/jquery.nicescroll.js"></script>
<script src="/assets/js/jquery.scrollTo.min.js"></script>

<!--Morris Chart-->
<script src=/assets/morris/morris.min.js"></script>
<script src="/assets/raphael/raphael.min.js"></script>

<!-- dashboard js -->
<script src="/assets/pages/dashboard.int.js"></script>

<!-- App js -->
<script src="/assets/js/app.js"></script>

</body>


<!-- Mirrored from rtl-temp.ir/Theme/Zinzer/vertical-rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2019 05:45:47 GMT -->
</html>