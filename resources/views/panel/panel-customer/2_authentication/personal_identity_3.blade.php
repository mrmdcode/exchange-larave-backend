@extends('panel.layout.app')


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

                            <div class="row">


                                    <div class="row" style="margin-right: 30px;text-align: left;" ><form action="/save/authentication/_save_3" method="post"  enctype="multipart/form-data" dir="rtl">
                                        {{csrf_field()}}
                                            <div class="row">
                                            <div class="col-md-4">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile" name="tx_ex_im_1">
                                                    <label class="custom-file-label" for="customFile">فایل اول</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile" name="tx_ex_im_2">
                                                    <label class="custom-file-label" for="customFile">فایل دوم</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile" name="tx_ex_im_3" >
                                                    <label class="custom-file-label" for="customFile">فایل سوم</label>
                                                </div>
                                            </div>
                                        </div>
                                            <br>
                                            <br>
                                            <br>
                                        <div class="row">
                                            <button type="submit" class="btn btn-success btn-block">ارسال اطلاعات نهایی و پایان</button>
                                        </div>
                                        </form>
                                    </div>

                                <div class="row">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <style>
                                        span.res{
                                            color: #4e555b;
                                            font-size: 10px;
                                            margin-right: 30px;

                                        }
                                        span.res.ser{
                                            margin-top: 63px;
                                            margin-bottom: 0px;
                                        }
                                        span.reds{
                                            margin-top: 20px;
                                        }

                                    </style>
                                    <span class="res ser">1_شما در فایل اول میباست عکس از چهره ی خود به صورت واضح آپلود کنید . (چه بصورت 3.4 چه عکس با گوشی)</span>
                                    <span class="res" style="margin-bottom: 0px;">2_شما در فایل دو باید عکس از کارت ملی و کارت بانکی آپلود کنید. (چه بصورت اسکن شده چه عکس با گوشی)</span>
                                    <span class="res reds">3_شما در فایل سوم باید عکس از چهره و کارت ملی و بانکی به صورت واضح آپلود کنید(چه بصورت fildmaner شده چه با گوشی)</span>
                                    <span class="res"></span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection





