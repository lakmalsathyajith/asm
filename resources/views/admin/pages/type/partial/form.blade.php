<form method="POST" action="{{ $route }}" aria-label="{{ __($action) }}">
    @csrf
    @if(isset($method))
        @method($method)
    @endif

    @include('admin.common.alerts.error')

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
                <label for="tag" class="col-form-label ">{{ __('Tag') }}</label>
                <input id="tag"
                       type="text"
                       class="form-control{{ $errors && $errors->has('tag') ? ' is-invalid' : '' }}"
                       name="tag"
                       value="{{ isset($record) && $record->tag ? $record->tag : old('tag') }}" required
                       autofocus>

                @if ($errors && $errors->has('tag'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('tag') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="description" class="col-form-label">{{ __('Description') }}</label>
                <textarea id="description"
                          name="description"
                          class="form-control{{ $errors && $errors->has('description') ? ' is-invalid' : '' }}">{{ isset($record) && $record->description ? $record->description : old('description') }}</textarea>

                @if ($errors && $errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
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