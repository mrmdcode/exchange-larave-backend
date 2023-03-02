@extends('panel.layout.app')

@section('center')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="page-title m-0">   </h4>
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

                        <h4 class="mt-0 header-title">هویت شخصی</h4>
                            <p class="text-muted m-b-30">در این مرحله اطلاعاتی مانند نام و نام خانوادگی و آدرس و پلاک را برای احراز هویت برای ربات در سایت ذخیره میکنید
                            </p>
                            <form action="/save/authentication/_save_1" method="post" id="form">
                                {{csrf_field()}}
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="p-20">

                                            <div class="form-group">
                                                <label>نام :</label>
                                                <input type="text" class="form-control" name="tx_ex_1">
                                                <span class="font-13 text-muted">مانند : سعید</span>
                                            </div>
                                            <div class="form-group">
                                                <label>کد ملی :</label>
                                                <input type="text" class="form-control" name="tx_ex_3">
                                                <span class="font-13 text-muted">مانند : 0791234567</span>
                                            </div>

                                            <div class="form-group">
                                                <label>تاریخ تولد به میلادی</label>
                                                <div>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" name="tx_ex_5" id="datepicker">
                                                        <div class="input-group-append bg-custom b-0"><span class="input-group-text"><i class="mdi mdi-calendar"></i></span></div>
                                                    </div><!-- input-group -->
                                                    <span class="font-13 text-muted">مانند : 12/25/2020</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>جنسیت</label>

                                                    <select class="form-control" name="tx_ex_7">
                                                        <option value="0">جنسیت</option>
                                                        <option value="1">مرد</option>
                                                        <option value="2">زن</option>
                                                    </select>
                                                <span class="font-13 text-muted">مانند : مرد</span>

                                            </div>

                                            <div class="form-group">
                                                <label>استان </label>
                                                <select class="form-control" name="tx_ex_9" onChange="iranwebsv(this.value);">

                                                    <option value="0" selected>لطفا استان را انتخاب نمایید</option>
                                                    <option value="1">تهران</option>
                                                    <option value="2">گیلان</option>
                                                    <option value="3">آذربایجان شرقی</option>
                                                    <option value="4">خوزستان</option>
                                                    <option value="5">فارس</option>
                                                    <option value="6">اصفهان</option>
                                                    <option value="7">خراسان رضوی</option>
                                                    <option value="8">قزوین</option>
                                                    <option value="9">سمنان</option>
                                                    <option value="10">قم</option>
                                                    <option value="11">مرکزی</option>
                                                    <option value="12">زنجان</option>
                                                    <option value="13">مازندران</option>
                                                    <option value="14">گلستان</option>
                                                    <option value="15">اردبیل</option>
                                                    <option value="16">آذربایجان غربی</option>
                                                    <option value="17">همدان</option>
                                                    <option value="18">کردستان</option>
                                                    <option value="19">کرمانشاه</option>
                                                    <option value="20">لرستان</option>
                                                    <option value="21">بوشهر</option>
                                                    <option value="22">کرمان</option>
                                                    <option value="23">هرمزگان</option>
                                                    <option value="24">چهارمحال و بختیاری</option>
                                                    <option value="25">یزد</option>
                                                    <option value="26">سیستان و بلوچستان</option>
                                                    <option value="27">ایلام</option>
                                                    <option value="28">کهگلویه و بویراحمد</option>
                                                    <option value="29">خراسان شمالی</option>
                                                    <option value="30">خراسان جنوبی</option>
                                                    <option value="31">البرز</option>
                                                </select>
                                                <span class="font-13 text-muted">مانند : خراسان رضوی</span>
                                            </div>

                                            <div class="m-t-20">
                                                <h6 class="text-muted">آدرس</h6>
                                                <p class="text-muted m-b-15">

                                                </p>
                                                <textarea id="textarea" name="tx_ex_11" class="form-control"  rows="2" placeholder="سبزوار ، خیابان طالقانی ، نبش خیابان پرستار"></textarea>

                                            </div>


                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="p-20">


                                            <div class="form-group">
                                                <label>نام خانوادگی</label>
                                                <input type="text" class="form-control" name="tx_ex_2">
                                                <span class="font-13 text-muted">مانند : یوسفی</span>
                                            </div>
                                            <div class="form-group">
                                                <label>نام پدر</label>
                                                <input type="text" class="form-control" name="tx_ex_4">
                                                <span class="font-13 text-muted">مانند :علی</span>
                                            </div>
                                            <div class="form-group">
                                                <label>محل تولد</label>
                                                <input type="text" class="form-control"name="tx_ex_6">
                                                <span class="font-13 text-muted">مانند : تهران</span>
                                            </div>
                                            <div class="form-group">
                                                <label>کد پستی</label>
                                                <input type="text" class="form-control" name="tx_ex_8">
                                                <span class="font-13 text-muted">مانند : 01234-56789</span>
                                            </div>

                                            <div class="form-group">
                                                <label>شهر </label>
                                                <select class="form-control" id="city" name="tx_ex_10">
                                                    <option value="0">لطفا استان را انتخاب نمایید</option>

                                                </select>
                                                <span class="font-13 text-muted">مانند : سبزوار</span>
                                            </div>
                                            <div class="form-group m-b-0">
                                                <label>پلاک</label>
                                                <input type="text" class="form-control" name="tx_ex_12">
                                            </div>


                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                                <br>
                                <br>
                                <button class="btn btn-block btn-success">ارسال</button>
                            </form>


                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div><!-- container fluid -->

    </div>

    <!-- Plugins js -->
    <script src="/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Plugins Init js -->
    <script src="/assets/pages/form-advanced.js"></script>
    <script language="javascript" src="/js/city.js"></script>
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

    <!-- App js -->

@endsection
