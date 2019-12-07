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
        <div class="col-md-3">
            <div class="form-group">
                <label for="state" class="col-form-label">{{ __('State') }}</label>
                <select id="state" name="state"
                    class="select2bs4 multi-select form-control {{ $errors && $errors->has('state') ? ' is-invalid' : '' }}"
                    required>
                    <option value="">Select State</option>
                    @foreach($states as $state)
                    <option value="{{ $state }}"
                        {{ isset($record) && $record->state == $state ? 'selected="selected"' : ''}}>
                        {{ $state }}
                    </option>
                    @endforeach

                </select>

                @if ($errors && $errors->has('state'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('state') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="suburb" class="col-form-label">{{ __('Suburb') }}</label>
                <select id="suburb" name="suburb"
                    class="select2bs4 multi-select form-control {{ $errors && $errors->has('suburb') ? ' is-invalid' : '' }}"
                    required>
                    <option value="{{ isset($record) && isset($record->suburb)?$record->suburb:'' }}"
                        {{isset($record) && isset($record->suburb)? 'selected="selected"' : ''}}>
                        {{ isset($record) && isset($record->suburb)?$record->suburb:'Select Suburb' }}
                    </option>
                </select>

                @if ($errors && $errors->has('suburb'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('suburb') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-3">
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
        <div class="col-md-3">
            <div class="form-group">
                <label for="address" class="col-form-label">{{ __('Address') }}</label>
                <input id="address" type="text"
                    class="form-control{{ $errors && $errors->has('address') ? ' is-invalid' : '' }}" name="address"
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
        <div class="col-md-4">
            <div class="form-group">
                <label for="parking_slots" class="col-form-label ">{{ __('Parking Slots') }}</label>
                <input id="parking_slots" type="text"
                    class="form-control{{ $errors && $errors->has('parking_slots') ? ' is-invalid' : '' }}"
                    name="parking_slots"
                    value="{{ isset($record) && $record->parking_slots ? $record->parking_slots : old('parking_slots') }}"
                    required autofocus>

                @if ($errors && $errors->has('parking_slots'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('parking_slots') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="beds" class="col-form-label">{{ __('Beds Count') }}</label>
                <input id="beds" type="text"
                    class="form-control{{ $errors && $errors->has('beds') ? ' is-invalid' : '' }}" name="beds"
                    value="{{ isset($record) && $record->beds ? $record->beds : old('beds') }}" required>

                @if ($errors && $errors->has('beds'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('beds') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="bath_rooms" class="col-form-label">{{ __('Bath Rooms') }}</label>
                <input id="bath_rooms" type="text"
                    class="form-control{{ $errors && $errors->has('bath_rooms') ? ' is-invalid' : '' }}"
                    name="bath_rooms"
                    value="{{ isset($record) && $record->bath_rooms ? $record->bath_rooms : old('bath_rooms') }}"
                    required>

                @if ($errors && $errors->has('bath_rooms'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('bath_rooms') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="map_url" class="col-form-label">{{ __('Map Url') }}</label>
                <input id="map_url" type="text"
                    class="form-control{{ $errors && $errors->has('map_url') ? ' is-invalid' : '' }}" name="map_url"
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
        <div class="col-md-4">
            <div class="form-group">
                <label for="type" class="col-form-label ">{{ __('Type') }}</label>
                <select id="type"
                    class="select2bs4 form-control{{ $errors && $errors->has('type') ? ' is-invalid' : '' }}"
                    name="type" data-placeholder="Select Type for the Apartment">
                    @foreach($types as $value => $label)
                    <option {{ (isset($record) && $record->type_id === $value) ? 'selected="selected"' : ''}}
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
        <div class="col-md-4">
            <div class="form-group">
                <label for="rms_apartment_id" class="col-form-label">{{ __('RMS Apartment Type ID') }}</label>
                <input id="rms_apartment_id" type="text"
                    class="form-control{{ $errors && $errors->has('rms_apartment_id') ? ' is-invalid' : '' }}"
                    name="rms_apartment_id"
                    value="{{ isset($record) && $record->rms_apartment_id ? $record->rms_apartment_id : old('rms_apartment_id') }}"
                    required>

                @if ($errors && $errors->has('rms_apartment_id'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('rms_apartment_id') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="rms_key" class="col-form-label">{{ __('RMS Apartment ID') }}</label>
                <input id="rms_key" type="text"
                    class="form-control{{ $errors && $errors->has('rms_key') ? ' is-invalid' : '' }}" name="rms_key"
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
                <label for="files" class="col-form-label">{{ __('Images') }}</label>
                <select id="files"
                    class="select2bs4 multi-select form-control {{ $errors && $errors->has('files') ? ' is-invalid' : '' }}"
                    name="files[]" multiple="multiple" data-placeholder="Select Images for the Apartment">
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
                <select id="option"
                    class="select2bs4 multi-select form-control {{ $errors && $errors->has('options') ? ' is-invalid' : '' }}"
                    name="options[]" multiple="multiple" data-placeholder="Select Options for the Apartment">
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
                <label for="price" class="col-form-label">{{ __('Per Week Rent A$ - 12 Month') }}</label>
                <input id="price" type="text" placeholder="Ex: 50.00"
                    class="form-control{{ $errors && $errors->has('price') ? ' is-invalid' : '' }}" name="price"
                    value="{{ isset($record) && $record->price ? $record->price : old('price') }}" required>

                @if ($errors && $errors->has('price'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" {{ isset($counts) && count($counts) >0 ? 'disabled' : '' }}
                    class="btn btn-primary float-right">
                    {{ __($action) }}
                </button>
            </div>
        </div>
    </div>
</form>