@extends('panel.layout.app')
@section('center')
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

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

    <div class="account-pages">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <div class="mb-5">
                            <img src="assets/images/logo_dark.png" height="32" alt="logo">
                        </div>
                        <h4 class="mt-4 text-uppercase">بیایید با زینزر شروع کنیم</h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="comming-watch text-center mb-5">
                        <div class="countdown">
                            <div>
                                <div><span>121</span><span>روز</span></div>
                                <div><span>0</span><span>ساعت</span></div>
                            </div>
                            <div class="lj-countdown-ms">
                                <div><span>0</span><span>دقیقه</span></div>
                                <div><span>0</span><span>ثانیه</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
    </div>


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

    <!-- countdown js -->
    <script src="../plugins/countdown/jquery.countdown.min.js"></script>
    <script src="assets/pages/countdown.int.js"></script>
    @endsection

