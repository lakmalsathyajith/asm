<form method="POST" action="{{ $route }}" aria-label="{{ __($action) }}">
    @csrf
    @if(isset($method))
    @method($method)
    @endif

    @if(isset($params))
    @foreach($params as $param => $value)
    <input type="hidden" id="{{$param}}" value="{{$value}}" name="{{"params[$param]"}}" />
    @endforeach
    @endif

    @include('admin.common.alerts.error')

    <div class="row">
            <div class="col-md-4">
                    <div class="form-group">
                        <label for="code" class="col-form-label ">{{ __('Code') }}</label>
                        <input id="code" readonly="" type="text" class="form-control" name="code" value="{{ $code }}" required autofocus>
                    </div>
                </div>
                
        <div class="col-md-4">
            <div class="form-group">
                <label for="name" class="col-form-label ">{{ __('Name') }}</label>
                <input id="name" type="text"
                    class="form-control{{ $errors && $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                    value="{{ isset($record) && $record->name ? $record->name : old('name') }}" required autofocus>

                @if ($errors && $errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-group">
                <label for="email" class="col-form-label">{{ __('Email') }}</label>
                <input id="email" type="email"
                    class="form-control{{ $errors && $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                    value="{{ isset($record) && $record->email ? $record->email : old('email') }}" required autofocus>

                @if ($errors && $errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="type" class="col-form-label">{{ __('Type') }}</label>
                <select id="type" class="form-control {{ $errors && $errors->has('type') ? ' is-invalid' : '' }}"
                    name="type">
                    <option value="ADMIN">Admin</option>
                    <option value="AGENT">Agent</option>
                </select>

                @if ($errors && $errors->has('type'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('type') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="password" class="col-form-label">{{ __('Password') }}</label>
                <input id="password" type="password"
                    class="form-control{{ $errors && $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autofocus>

                @if ($errors && $errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                    <button type="submit" class="btn btn-primary float-left">
                            {{ __($action) }}
                        </button>
            </div>
        </div>
    </div>
</form>