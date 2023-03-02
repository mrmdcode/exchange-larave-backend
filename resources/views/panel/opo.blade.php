<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rtl-temp.ir/Theme/Zinzer/vertical-rtl/calendar.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2019 05:46:11 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>زینزر - داشبورد ادمین بوت استرپ 4</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--calendar css-->
    <link href="../plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

<!-- Top Bar End -->

<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">تقویم</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings mr-1"></i> تنظیمات
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                        <a class="dropdown-item" href="#">عملیات</a>
                                        <a class="dropdown-item" href="#">اقدام دیگر</a>
                                        <a class="dropdown-item" href="#">چیز های دیگر</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">پیوند جدا شده</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title-box -->
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4">

                                <h4 class="m-t-5 m-b-15 font-14">رویدادهای ایجاد شده</h4>
                                <form method="post" id="add_event_form" class="m-t-5 m-b-20">
                                    <input type="text" class="form-control new-event-form" placeholder="افزودن رویداد جدید..." />
                                </form>

                                <div id='external-events'>
                                    <h4 class="m-b-15 font-14">رویداد های موجود</h4>
                                    <div class='fc-event'>رویداد من 1</div>
                                    <div class='fc-event'>رویداد من 2</div>
                                    <div class='fc-event'>رویداد من 3</div>
                                    <div class='fc-event'>رویداد من 4</div>
                                    <div class='fc-event'>رویداد من 5</div>
                                </div>

                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox mt-3">
                                    <input type="checkbox" class="custom-control-input" id="drop-remove" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                    <label class="custom-control-label" for="drop-remove">حذف پس از افتادن</label>
                                </div>

                            </div>

                            <div id='calendar' class="col-xl-10 col-lg-9 col-md-8"></div>

                        </div>
                        <!-- end row -->

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->

<footer class="footer">
    © 1398 زینزر <span class="d-none d-md-inline-block"> - طراحی با <i class="mdi mdi-heart text-danger"></i> فارسی سازی توسط جعفر عباسی.</span>
</footer>

</div>
<!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>

<!-- Jquery-Ui -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="../plugins/moment/moment.js"></script>
<script src='../plugins/fullcalendar/js/fullcalendar.min.js'></script>
<script src="assets/pages/calendar-init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from rtl-temp.ir/Theme/Zinzer/vertical-rtl/calendar.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jun 2019 05:46:13 GMT -->
</html> -->