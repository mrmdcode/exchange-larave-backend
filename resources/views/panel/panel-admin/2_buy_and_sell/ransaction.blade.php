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

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table table-bordered col-md-12" >

                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">زمان</th>
                                            <th scope="col">مقدار</th>
                                            <th scope="col">وضعیت</th>
                                        </tr>

                                        <tbody>
                                        @foreach($buys as $as)
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
                                <div class="col-md-6">
                                    <table class="table table-bordered col-md-12" >

                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">زمان</th>
                                            <th scope="col">مقدار</th>
                                            <th scope="col">وضعیت</th>
                                        </tr>

                                        <tbody>
                                        @foreach($sells as $as)
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection