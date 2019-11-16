<form method="POST" action="{{ $route }}" aria-label="{{ __($action) }}">
    @csrf
    @if(isset($method))
        @method($method)
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="col-form-label ">{{ __('Name') }}</label>
                <input id="name" type="text"
                       class="form-control{{ $errors && $errors->has('name') ? ' is-invalid' : '' }}"
                       name="name" value="{{ isset($record) && $record->name ? $record->name : old('name') }}" required
                       autofocus>

                @if ($errors && $errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="col-form-label">{{ __('Address') }}</label>
                <input id="address" type="text"
                       class="form-control{{ $errors && $errors->has('address') ? ' is-invalid' : '' }}"
                       name="address"
                       value="{{ isset($record) && $record->address ? $record->address : old('address') }}" required>

                @if ($errors && $errors->has('address'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="type" class="col-form-label">{{ __('Contents') }}</label>
                <select
                        id="type"
                        class="select2bs4 multi-select form-control {{ $errors && $errors->has('contents') ? ' is-invalid' : '' }}"
                        name="contents[]"
                        multiple="multiple"
                        data-placeholder="Select Contents for the Apartment">
                    @foreach($contents as $value => $label)
                        <option
                                {{ isset($record) && \App\Traits\HelperTrait::isSelected($record->contents, $value) ? 'selected="selected"' : ''}}
                                value="{{ $value }}">
                            {{ $label }}
                        </option>
                    @endforeach
                </select>

                @if ($errors && $errors->has('type'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('type') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit"
                        class="btn btn-primary float-right">
                    {{ __($action) }}
                </button>
            </div>
        </div>
    </div>

    {{--<div class="form-group row">--}}
    {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="name" type="text"--}}
    {{--class="form-control{{ $errors && $errors->has('name') ? ' is-invalid' : '' }}"--}}
    {{--name="name" value="{{ isset($record) && $record->name ? $record->name : old('name') }}" required--}}
    {{--autofocus>--}}

    {{--@if ($errors && $errors->has('name'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('name') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<label for="email"--}}
    {{--class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="address" type="text"--}}
    {{--class="form-control{{ $errors && $errors->has('address') ? ' is-invalid' : '' }}"--}}
    {{--name="address" value="{{ isset($record) && $record->address ? $record->address : old('address') }}"--}}
    {{--required>--}}

    {{--@if ($errors && $errors->has('address'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('address') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row mb-0">--}}
    {{--<div class="col-md-6">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--{{ __($action) }}--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
</form>