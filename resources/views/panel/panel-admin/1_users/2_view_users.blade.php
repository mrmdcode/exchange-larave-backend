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
                                        <td>view_all</td>
                                        <td>name</td>
                                        <td>email</td>
                                        <td>img</td>
                                        <td>#</td>
                                    </tr>
                                    @foreach($users as $use)
                                        <tr class="text-center">

                                            <td>
                                                <a href="/panel/admin/view_confirm/{{$use->id}}">
                                                    <button class="btn btn-outline-warning btn-block">تمام اطلاعات</button>
                                                </a>
                                            </td>
                                            <td>{{$use->full_name}}</td>

                                            <td>{{$use->email}}</td>

                                            <td>
                                                <img src="{{$use->src_img_face}}" width="150px" height="150px" alt="">
                                            </td>
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