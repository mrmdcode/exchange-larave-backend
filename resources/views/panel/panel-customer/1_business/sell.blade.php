@extends('panel.layout.app')
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
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30 container">
                        <div class="card-body container">
                          <div class="row container">
                              <form class=" container" action="/save/selandbuy/_save_3" method="post">
                                {{csrf_field()}}
                                  <div class="row">
                                      <div class="col-md-4"></div>
                                      <div class="col-md-4 container">{!! QrCode::size(195)->generate($num_wal->SHARE); !!}</div>
                                      <div class="col-md-4"></div>
                                  </div>
                                  <div class="row">
                                      <div class="container col-md-6">
                                          <input dir="ltr" class="col-md-12 form-control" type="text" name="tx_ex_3" id="" value="{!! $num_wal->SHARE !!}" readonly>
                                          <input style="display: none;" class="form-control" type="text" name="tx_ex_1" value="{!! $num_wal->NAME !!}" readonly>
                                      </div>
                                  </div>
                                  <br>
                                  <div class="row">
                                      <input class="col-md-4 container form-control" type="text" name="tx_ex_2" id="" placeholder="مقدار بیت کوین">
                                  </div>
                                  <br>
                                  <div class="row">
                                      <input type="submit" value=" ارسال بیت کوین و دریافت پول در حساب بانکی" class="btn-block btn-success btn">
                                  </div>
                              </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
