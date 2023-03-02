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
                                        <td>قیمت با تاریخ و با نرخ آن روز</td>
                                        <td>زمان خرید</td>
                                        <td>مقدار ارز</td>
                                        <td>نوع ارز</td>
                                        <td>QR</td>
                                        <td>#</td>
                                    </tr>
                                    @foreach($buys as $buy)
                                        <tr class="text-center">
                                            <td>
                                                <a href="/panel/admin/confirm-buy/{{$buy->id}}">
                                                    <button class="btn-outline-success btn">واریز</button>
                                                </a>
                                            </td>
                                            <td>{{$buy->Purchase_Price}}</td>
                                            <td>{{$buy->Registration_time}}</td>
                                            <td>{{$buy->Amount}}</td>

                                                @if($buy->Currency==1)
                                                <td> بیت کوین</td>
                                                    @else
                                                <td> اتریوم</td>
                                                @endif

                                            <td>{!! QrCode::size(195)->generate($buy->Deposit_wallet); !!}</td>
                                            <td>{{$a=0+1}}</td>
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
