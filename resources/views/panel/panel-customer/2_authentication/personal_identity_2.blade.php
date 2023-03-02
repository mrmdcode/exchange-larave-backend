@extends('panel.layout.app')

<link rel="stylesheet" href="/css/app.css">
@section('center')

    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form action="/save/authentication/_save_2" method="post" id="form">
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="form-group dr-form-group">
                                                <label class="form-label"><span class="mrg5L color-red">*</span> نام بانک</label>
                                                <select class="form-control" type="select" name="tx_ex_1">
                                                    <option value="0">انتخاب بانک..</option>
                                                    <option value="1">بانک ملی ایران</option>
                                                    <option value="2">بانک صادرات ایران</option>
                                                    <option value="3">بانک آینده</option>
                                                    <option value="4">بانک ملت</option>
                                                    <option value="5">بانک دی</option>
                                                    <option value="6">بانک رفاه کارگران</option>
                                                    <option value="7">بانک پارسیان</option>
                                                    <option value="8">بانک اقتصاد نوین</option>
                                                    <option value="9">بانک انصار</option>
                                                    <option value="10">بانک ایران زمین</option>
                                                    <option value="11">بانک پاسارگاد</option>
                                                    <option value="12">بانک تجارت</option>
                                                    <option value="13">بانک توسعه صادرات ایران</option>
                                                    <option value="14">بانک حکمت ایرانیان</option>
                                                    <option value="15">بانک خاورمیانه</option>
                                                    <option value="16">بانک سامان</option>
                                                    <option value="17">بانک سپه</option>
                                                    <option value="18">بانک شهر</option>
                                                    <option value="19">بانک صنعت و معدن</option>
                                                    <option value="20">بانک مسکن</option>
                                                    <option value="21">بانک کارآفرین</option>
                                                    <option value="22">بانک کشاورزی</option>
                                                    <option value="23">بانک سرمایه</option>
                                                    <option value="24">بانک مهر اقتصاد</option>
                                                    <option value="25">بانک سینا</option>
                                                    <option value="26">بانک گردشگری</option>
                                                    <option value="27">بانک قوامین</option>
                                                    <option value="28">بانک قرض الحسنه رسالت</option>
                                                    <option value="29">بانک توسعه تعاون</option>
                                                    <option value="30">بانک پست بانک ایران</option>
                                                    <option value="31">بانک قرض الحسنه مهر ایران</option>
                                                    <option value="32">موسسه مالی و اعتباری کوثر</option>
                                                    <option value="33">موسسه مالی و اعتباری ملل</option>
                                                    <option value="34">بانک مرکزی</option>
                                                    <option value="35">بانک مشترک ایران ونزوئلا</option>
                                                    <option value="36">موسسه اعتباری نور</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-3">
                                            <div class="form-group">
                                                <label class="form-label"><span class="mrg5L color-red">*</span>نام شعبه</label>
                                                <input class="form-control" type="text"  name="tx_ex_2">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="form-group">
                                                <label class="form-label"><span class="mrg5L color-red">*</span>کد شعبه</label>
                                                <input class="form-control" type="text"  name="tx_ex_3">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="form-group">
                                                <label class="form-label"><span class="mrg5L color-red">*</span>شماره حساب</label>
                                                <input class="form-control" type="text"  name="tx_ex_4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="form-group">
                                                <label class="form-label"><span class="mrg5L color-red">*</span>شماره شبا</label>
                                                <input class="form-control"  type="text" name="tx_ex_5" placeholder="IR00000000000000000000">

                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="form-group">
                                                <label class="form-label"><span class="mrg5L color-red">*</span>شماره کارت</label>
                                                <input class="form-control"  type="text" name="tx_ex_6">

                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-12 ">
                                            <div class="form-group text-center">
                                                <button type="submit" class="col-lg-3 btn btn-success btn-main" id="btnSubmit">ثبت</button>
                                                <a href="" class="btn btn-danger btn-main-outlined col-lg-2">لغو</a>
                                            </div>
                                        </div>
                                    </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection  <script language="javascript" src="/js/city.js"></script>