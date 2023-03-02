@extends('panel.layout.app')



@section('center')


    <div class="row">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12">


                </div></div>
                <br>
                <br>

        </div>
    </div>
    <div class="row">
        <div class="col-md-10 container">
            <div class="card m-b-30">
                <div class="card-body container">
                    <div class="row container">
                        <div class="container">
                            <form action="/save/selandbuy/_save_4" class="col-md-12" style="margin: 30px auto;" method="post">
                                <div class="form-group">
                                    {{csrf_field()}}

                                    <select class="form-control" name="tx_ex_1">
                                        <option value="0">ارز خود را انتخاب کنید</option>
                                        <option value="1">Bitcoin</option>
                                        <option value="2">Etheruem</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <div class="">
                                            <input type="text" name="tx_ex_2" class="form-control" placeholder="مقدار ارز">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <div class="">
                                            <input type="text" name="tx_ex_3" class="form-control" placeholder="شماره حساب ارز (number deposit wallet)">
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-success btn-block" placeholder="خرید و پرداخت" value="خرید و پرداخت">
                            </form>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="container" dir="rtl" align="rtl" style="margin-right:20px;font-size: 12px;color: rgba(69,69,69,0.43); ">
                            <span>1_انتقال کامل ارز به wallet حدود ۳ الی ۴ ساعت پس از خرید در هر زمان از شبانه روز</span>
                            <br>
                            <span>2_از شماره حساب (Deposit Number) خود مطمئن شوید</span>
                            <br>
                            <span>3_در صورت اشتباه در ثبت Deposit Number برای تماس با پشتیبانی و لغو خرید فقط 10 دقیقه فرصت (- - - - - - -091)</span>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection