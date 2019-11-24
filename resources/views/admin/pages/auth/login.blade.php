@extends('admin.layouts.mainBlank')

@section('content')
    <div class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Admin</b> {{ env('APP_NAME') }}</a>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Sign in to start your session</p>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <input name="email"
                                   type="email"
                                   class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   placeholder="Email"
                                   value="{{ old('email') }}"
                                   autofocus
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
                                   type="password"
                                   class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   placeholder="Password"
                                   required>
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
                        <div class="row">
                            <div class="col-8">
                                {{-- <div class="icheck-primary">
                                    <input type="checkbox"
                                           name="remember"
                                           id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div> --}}
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                        </div>
                    </form>

                    {{-- <p class="mb-1">
                        <a href="{{ route('password.request') }}">I forgot my password</a>
                    </p> --}}
                    <p class="mb-0">
                        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
