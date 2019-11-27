<form method="POST" action="{{ $route }}" aria-label="{{ __($action) }}">
    @csrf
    @if(isset($method))
        @method($method)
    @endif

    @if(isset($params))
        @foreach($params as $param => $value)
            <input type="hidden"
                   id="{{$param}}"
                   value="{{$value}}"
                   name="{{"params[$param]"}}"/>
        @endforeach
    @endif

    @include('admin.common.alerts.error')

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name" class="col-form-label ">{{ __('Name') }}</label>
                <input id="name"
                       type="text"
                       class="form-control{{ $errors && $errors->has('name') ? ' is-invalid' : '' }}"
                       name="name"
                       value="{{ isset($record) && $record->name ? $record->name : old('name') }}"
                       required
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
                <label for="slug" class="col-form-label">{{ __('Slug') }}</label>
                <input id="slug"
                       type="text"
                       class="form-control{{ $errors && $errors->has('slug') ? ' is-invalid' : '' }}"
                       name="slug"
                       value="{{ isset($record) && $record->slug ? $record->slug : old('slug') }}"
                       required
                       autofocus>

                @if ($errors && $errors->has('slug'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('slug') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="type" class="col-form-label">{{ __('Type') }}</label>
                <select
                        id="type"
                        class="form-control {{ $errors && $errors->has('type') ? ' is-invalid' : '' }}"
                        name="type">
                    @foreach($contentTypes as $label => $value)
                        <option
                                {{isset($params) && isset($params['content-type']) && strtoupper(str_replace(' ', '_', $params['content-type'])) !== $value ? 'disabled' : ''  }}
                                {{isset($record) && isset($record->type) && $record->type === $value ? 'selected="selected"' : ''}}
                                value="{{ $value }}">{{ $label }}
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
                <label for="sub_type" class="col-form-label">{{ __('Sub Type') }}</label>
                <select
                        id="sub_type"
                        class="form-control {{ $errors && $errors->has('sub_type') ? ' is-invalid' : '' }}"
                        name="sub_type"
                        {{isset($record) && isset($record->type) && $record->type !== "APARTMENT" ? 'disabled="disabled"' : ''}}>
                    @foreach($contentSubTypes as $label => $value)
                        <option
                                {{isset($params) && isset($params['content-sub-type']) && strtoupper(str_replace(' ', '_', $params['content-sub-type'])) !== $value ? 'disabled' : ''  }}
                                {{isset($record) && isset($record->sub_type) && $record->sub_type === $value ? 'selected="selected"' : ''}}
                                value="{{ $value }}">{{ $label }}
                        </option>
                    @endforeach
                </select>

                @if ($errors && $errors->has('sub_type'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('sub_type') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="content" class="col-form-label">{{ __('Content') }}</label>
                <textarea
                        id="content"
                        class="tmce form-control{{ $errors && $errors->has('content') ? ' is-invalid' : '' }}"
                        name="content">{{ isset($record) && $record->content ? $record->content : old('content') }}</textarea>

                @if ($errors && $errors->has('content'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('content') }}</strong>
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
</form>