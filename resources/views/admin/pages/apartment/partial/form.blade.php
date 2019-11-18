<form method="POST" action="{{ $route }}" aria-label="{{ __($action) }}">
    @csrf
    @if(isset($method))
        @method($method)
    @endif

    @include('admin.common.alerts.error')

    @if(isset($counts) && count($counts) > 0)
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info" role="alert">
                    <h4 class="alert-heading">Important!</h4>
                    <p>You have to set content in below sections before creating your first <b>Apartment</b></p>
                    <hr>
                    @foreach($counts as $count)
                        <ul class="mb-0">
                            <li>Apartment <b>{{ ucfirst($count) }}.</b>
                                <a target="_blank"
                                   href="{{ $count === 'file' ? route($count.'.index') : route($count.'.create') }}">
                                    Click to add new {{ ucfirst($count) }}(s)
                                </a>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
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
                <label for="address" class="col-form-label">{{ __('Address') }}</label>
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
                <label for="parking_slots" class="col-form-label ">{{ __('Parking Slots') }}</label>
                <input id="parking_slots"
                       type="text"
                       class="form-control{{ $errors && $errors->has('parking_slots') ? ' is-invalid' : '' }}"
                       name="parking_slots"
                       value="{{ isset($record) && $record->parking_slots ? $record->parking_slots : old('parking_slots') }}"
                       required
                       autofocus>

                @if ($errors && $errors->has('parking_slots'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('parking_slots') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="beds" class="col-form-label">{{ __('Beds Count') }}</label>
                <input id="beds" type="text"
                       class="form-control{{ $errors && $errors->has('beds') ? ' is-invalid' : '' }}"
                       name="beds"
                       value="{{ isset($record) && $record->beds ? $record->beds : old('beds') }}" required>

                @if ($errors && $errors->has('beds'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('beds') }}</strong>
                        </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="type" class="col-form-label ">{{ __('Type') }}</label>
                <select
                        id="type"
                        class="select2bs4 form-control{{ $errors && $errors->has('type') ? ' is-invalid' : '' }}"
                        name="type"
                        data-placeholder="Select Type for the Apartment">
                    @foreach($types as $value => $label)
                        <option
                                {{ (isset($record) && $record->type_id === $value) ? 'selected="selected"' : ''}}
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
        <div class="col-md-6">
            <div class="form-group">
                <label for="map_url" class="col-form-label">{{ __('Map Url') }}</label>
                <input id="map_url" type="text"
                       class="form-control{{ $errors && $errors->has('map_url') ? ' is-invalid' : '' }}"
                       name="map_url"
                       value="{{ isset($record) && $record->map_url ? $record->map_url : old('map_url') }}" required>

                @if ($errors && $errors->has('map_url'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('map_url') }}</strong>
                        </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="contents" class="col-form-label">{{ __('Contents') }}</label>
                <select
                        id="contents"
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

                @if ($errors && $errors->has('contents'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('contents') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="files" class="col-form-label">{{ __('Images') }}</label>
                <select
                        id="files"
                        class="select2bs4 multi-select form-control {{ $errors && $errors->has('files') ? ' is-invalid' : '' }}"
                        name="files[]"
                        multiple="multiple"
                        data-placeholder="Select Images for the Apartment">
                    @foreach($files as $value => $label)
                        <option
                                {{ isset($record) && \App\Traits\HelperTrait::isSelected($record->files, $value) ? 'selected="selected"' : ''}}
                                value="{{ $value }}">
                            {{ $label }}
                        </option>
                    @endforeach
                </select>

                @if ($errors && $errors->has('files'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('files') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="option" class="col-form-label">{{ __('Options') }}</label>
                <select
                        id="option"
                        class="select2bs4 multi-select form-control {{ $errors && $errors->has('options') ? ' is-invalid' : '' }}"
                        name="options[]"
                        multiple="multiple"
                        data-placeholder="Select Options for the Apartment">>
                    @foreach($options as $value => $label)
                        <option
                                {{ isset($record) && \App\Traits\HelperTrait::isSelected($record->options, $value) ? 'selected="selected"' : ''}}
                                value="{{ $value }}">
                            {{ $label }}
                        </option>
                    @endforeach
                </select>

                @if ($errors && $errors->has('options'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('options') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="rms_key" class="col-form-label">{{ __('RMS Key') }}</label>
                <input id="rms_key" type="text"
                       class="form-control{{ $errors && $errors->has('rms_key') ? ' is-invalid' : '' }}"
                       name="rms_key"
                       value="{{ isset($record) && $record->rms_key ? $record->rms_key : old('rms_key') }}" required>

                @if ($errors && $errors->has('rms_key'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('rms_key') }}</strong>
                        </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit"
                        {{ isset($counts) && count($counts) >0 ? 'disabled' : '' }}
                        class="btn btn-primary float-right">
                    {{ __($action) }}
                </button>
            </div>
        </div>
    </div>
</form>