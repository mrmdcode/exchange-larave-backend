@extends('panel.layout.app')
<!--
    Buy_History
    Sell_History
    Sales_Under_Review_buy
    Sales_Under_Review_Sell
-->
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
                                <div class="col-md-5">
                                    <div class="row">
                                            <table class="table table-bordered col-md-12" >

                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">زمان</th>
                                                <th scope="col">مقدار</th>
                                                <th scope="col">وضعیت</th>
                                            </tr>

                                            <tbody>
                                            @foreach($as_1 as $as)
                                                <tr>
                                                    <th scope="row">{{$a=0+1}}</th>
                                                    <td>{{$as->Registration_time}}</td>
                                                    <td>{{$as->Amount}}</td>
                                                    @if($as->Condition==0)
                                                        <td class="bg-warning">
                                                             در حال پرداخت ....
                                                        </td>
                                                        @else
                                                        <td class="bg-success">
                                                            پرداخت شد .
                                                        </td>
                                                    @endif

                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <table class="table col-md-12 table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">تایید</th>
                                                <th scope="col" style="margin-right: 20px;">وضیت</th>

                                            </tr>
                                            </thead>
                                            @if(Auth::user()->state_authentication==0 or Auth::user()->state_authentication==2)
                                                <tbody>
                                                <tr >
                                                    <th scope="row">1</th>
                                                    <td>تایید هویت شخصی</td>
                                                    <th class="bg-warning">منتظر تایید...</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>تایید اطلاعات بانکی</td>
                                                    <th class="bg-warning">منتظر تایید...</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>تایید عکس ها </td>
                                                    <th class="bg-warning"> منتظر تایید...</th>
                                                </tr>

                                                </tbody>
                                                @else
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>تایید هویت شخصی</td>
                                                    <th class="bg-success">تایید شد.</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>تایید اطلاعات بانکی</td>
                                                    <th class="bg-success">تایید شد.</th>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>تایید عکس ها </td>
                                                    <th class="bg-success">تایید شد.</th>
                                                </tr>

                                                </tbody>
                                            @endif
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <div class="row ">
                                            <table class="table table-bordered col-md-12">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">زمان</th>
                                                <th scope="col">مقدار</th>
                                                <th scope="col">وضعیت</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($as_2 as $as)
                                                <tr>
                                                    <th scope="row">{{$a=0+1}}</th>
                                                    <td>{{$as->Registration_time}}</td>
                                                    <td>{{$as->Amount}}</td>
                                                    @if($as->Condition==0)
                                                        <td class="bg-warning">
                                                            در حال واریز ...
                                                        </td>
                                                    @else
                                                        <td class="bg-success">
                                                            واریز شد .
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>

                                    <br>
                                    <div class="row">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

