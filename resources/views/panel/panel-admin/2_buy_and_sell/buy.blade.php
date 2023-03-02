@extends('panel.layout.app-2')
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
                            <div class="row">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <table class="table table-bordered">
                                    <tr class="text-center">
                                        <td>تایید سفارش</td>
                                        <td>پول پرداختی</td>
                                        <td>زمان</td>
                                        <td>اطلاعات بانکی</td>
                                        <td>QR</td>
                                        <td>#</td>
                                    </tr>
                                    {{$a=0}}
                                    @foreach($sells as $sell)
                                        <tr class="text-center">
                                            <td>
                                                <a href="/panel/admin/confirm-buy/{{$sell->Deposit_wallet_name}}/$/{{$sell->id}}">
                                                    <button class="btn-outline-success btn btn-block">پرداخت</button>
                                                </a>
                                            </td>

                                            <td>{{$sell->Purchase_Price}}</td>
                                            <td>{{$sell->Registration_time}}</td>
                                            <td>
                                                <ul class="fa-ul">
                                                    <li>{{$sell->Account_Number}}</li>
                                                    <li>{{$sell->Card_Number}}</li>
                                                    <li>{{$sell->Shaba_Number}}</li>
                                                    <li>{{$sell->Cardholder_Name}}</li>

                                                </ul>
                                            </td>
                                            <td>{!! QrCode::size(195)->generate($sell->Deposit_wallet_SHARE); !!}</td>
                                            <td>{{$a+1}}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection