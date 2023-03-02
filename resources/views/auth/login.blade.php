@extends('layouts.app')

@section('content')

    <br>
    <br><br><br><br><br>

<div class="container"dir="rtl" align="rtl">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ورود</div>

                <div class="panel-body"align="rtl">
                    <form  class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="email" class="col-md-2 control-label">آدرس ایمیل</label>


                        </div>

                        <div align="rtl" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="password" class="col-md-2 control-label">رمز عبور</label>


                        </div>

                        <div align="rtl" class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><span> مرا بخاطر بسپار </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 col-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    ورود
                                </button>


                            </div>
                            <br>
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                رمز خود را فراموش کرده اید ؟
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection