@extends('panel.layout.app-2')
@section('center')


    <div class="row">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12">


            </div>
        </div>
        <br>
        <br>

    </div>

    <div class="row">
        <div class="col-md-10 container">
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
                                <td>Confirmation</td>
                                <td>view_all</td>
                                <td>name</td>
                                <td>email</td>
                                <td>img</td>
                                <td>#</td>
                            </tr>
                            @foreach($users as $use)
                                <tr class="text-center">
                                    <td>
                                        <a href="/panel/admin/confirm/{{$use->id}}">
                                            <button class="btn btn-outline-success btn-block"> تایید کاربر</button>
                                        </a>
                                    </td>
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
@endsection