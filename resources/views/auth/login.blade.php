@extends('layouts.app')

@section('content')
<div class="account">
<div class="row">
            <div class="col-md-3"></div>
        <div class="col-md-6 justify-content-center">
            <div class="card " dir="rtl" >
                <div class="card-header text-right"><h3>ورود</h3></div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf

                        <div class="form-group row ">

                           <label for="phone" class="col-md-4 col-form-label text-md-right">تلفن</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="password" class="col-md-4 col-form-label text-md-right">رمز عبور</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                               </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4 text-right">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> ذخیره رمز عبور
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-shop">
                                   ورود
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    رمز عبور را فراموش کردید؟
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
        <div class="col-md-3"></div>
</div>
</div>
@endsection
