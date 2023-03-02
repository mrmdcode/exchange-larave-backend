@extends('panel.layout.app-2')
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

                                <div class="col-lg-6">
                                    <div class="p-20">

                                        <div class="form-group">
                                            <label>نام :</label>
                                            <input type="text" class="form-control" value="{{$auth_1->Fname}}" readonly>

                                        </div>
                                        <div class="form-group">
                                            <label>کد ملی :</label>
                                            <input type="text" class="form-control" value="{{$auth_1->National_Code}}" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>تاریخ تولد به میلادی</label>
                                            <div>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="{{$auth_1->Date_Of_Birth}}" readonly>
                                                </div><!-- input-group -->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>جنسیت</label>
                                            @if($auth_1->sex==1)
                                                <input type="text" class="form-control" value="زن" readonly>
                                            @else
                                                <input type="text" class="form-control" value="مرد" readonly>
                                            @endif


                                        </div>

                                        <div class="form-group">
                                            <label>استان </label>
                                            <select class="form-control"  onChange="iranwebsv(this.value);">
                                                <option value="{{$auth_1->State}}"></option>
                                            </select>
                                        </div>

                                        <div class="m-t-20">
                                            <h6 class="text-muted">آدرس</h6>
                                            <p class="text-muted m-b-15">

                                            </p>
                                            <textarea id="textarea"  class="form-control"  rows="2" placeholder="{{$auth_1->Address}}"  readonly></textarea>

                                        </div>


                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="p-20">


                                        <div class="form-group">
                                            <label>نام خانوادگی</label>
                                            <input type="text" class="form-control" value="{{$auth_1->Lname}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>نام پدر</label>
                                            <input type="text" class="form-control" value="{{$auth_1->Fathers_Name}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>محل تولد</label>
                                            <input type="text" class="form-control" value="{{$auth_1->Place_Of_Birth}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>کد پستی</label>
                                            <input type="text" class="form-control" value="{{$auth_1->Postal_Code}}" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label>شهر </label>
                                            <select class="form-control" id="city">
                                                <option></option>

                                            </select>
                                        </div>
                                        <div class="form-group m-b-0">
                                            <label>پلاک</label>
                                            <input type="text" class="form-control" value="{{$auth_1->Plaque}}" readonly>
                                        </div>


                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <br>
                            <br>
                            <br>
                            <hr>
                            <br>
                            <br>
                            <br>



                            <div class="row">
                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group dr-form-group">
                                        <label class="form-label"><span class="mrg5L color-red">*</span> نام بانک</label>
                                        <input type="text" VALUE="BANK"class="form-control">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <label class="form-label"><span class="mrg5L color-red">*</span>نام شعبه</label>
                                        <input class="form-control" type="text" value="{{$auth_2->Branch_Name}}" readonly>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <label class="form-label"><span class="mrg5L color-red">*</span>کد شعبه</label>
                                        <input class="form-control" type="text" value="{{$auth_2->Branch_Code}}" readonly>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <label class="form-label"><span class="mrg5L color-red">*</span>شماره حساب</label>
                                        <input class="form-control" type="text" value="{{$auth_2->Account_Number}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <label class="form-label"><span class="mrg5L color-red">*</span>شماره شبا</label>
                                        <input class="form-control"  type="text" value="{{$auth_2->Shaba_Namber}}" readonly>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <div class="form-group">
                                        <label class="form-label"><span class="mrg5L color-red">*</span>شماره کارت</label>
                                        <input class="form-control" value="{{$auth_2->Card_Number}}" readonly>

                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-4" style="padding: 20px;">
                                    <img src="{{$auth_3->image_face}}" width="100%" class="img-responsive" alt="{{$auth_1->Fname}}">
                                </div>
                                <div class="col-md-4" style="padding: 20px;">
                                    <img src="{{$auth_3->image_card}}" width="100%"class="img-responsive" alt="{{$auth_1->Fname}}">
                                </div>
                                <div class="col-md-4" style="padding: 20px;">
                                    <img src="{{$auth_3->image_face_and_card}}" width="100%" class="img-responsive" alt="{{$auth_1->Fname}}">
                                </div>
                            </div>
                            <hr>
                            @if($auth_4->state_authentication==1)

                                <div class="col-md-row">
                                    <a href="/panel/admin/view_users">
                                        <button class="btn btn-block btn-outline-warning">بازگشت به صفحه قبل</button>
                                    </a>
                                </div>
                                @else
                                <div class="row">
                                        <div class="col-md-6">
                                            <a href="/panel/admin/confirm_auth">
                                                <button class="btn btn-block btn-outline-warning">بازگشت به صفحه قبل</button>
                                        </a>
                                    </div>
                                        <div class="col-md-6">
                                            <a href="/panel/admin/confirm/{{$auth_4->id}}">
                                                <button class="btn btn-block btn-outline-success">تایید کاربر</button>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script language="javascript" src="/js/city.js"></script>
@endsection