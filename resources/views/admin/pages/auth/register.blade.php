@extends('admin.layouts.mainBlank')

@section('content')
<div class="hold-transition login-page">
    <div class="register-box">
        <div class="register-logo">
            {{-- <a href="#"><b>Admin</b> {{ env('APP_NAME') }}</a> --}}
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                    <div class="login-logo">
                            {{-- <a href="#"><b>Admin</b> {{ env('APP_NAME') }}</a> --}}
                            <img src="../images/main-logo.png" height="60px" alt="">
                        </div>
                <p class="login-box-msg">Register a new membership</p>

                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input name="name"
                               id="name"
                               type="text"
                               class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                               placeholder="Full name"
                               value="{{ old('name') }}"
                               required
                               autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input name="email"
                               id="email"
                               type="email"
                               class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                               placeholder="Email"
                               value="{{ old('email') }}"
                               required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input name="password"
                               id="password"
                               type="password"
                               class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                               placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="input-group mb-3">
                        <input name="password_confirmation"
                               id="password_confirmation"
                               type="password"
                               class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                               placeholder="Retype password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            {{--<div class="icheck-primary">--}}
                                {{--<input type="checkbox" id="agreeTerms" name="terms" value="agree">--}}
                                {{--<label for="agreeTerms">--}}
                                    {{--I agree to the <a href="#">terms</a>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                </form>

                <p class="mt-3 mb-1">
                    <a href="{{ route('login') }}">Sign In</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
