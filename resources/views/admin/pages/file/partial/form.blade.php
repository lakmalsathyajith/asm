<form method="POST" action="{{ $route }}" aria-label="{{ __($action) }}" enctype="multipart/form-data">
    @csrf
    @if(isset($method))
        @method($method)
    @endif

    @include('admin.common.alerts.error')

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file"
                               name="uploads"
                               class="custom-file-input {{ $errors && $errors->has('uploads') ? ' is-invalid' : '' }}"
                               id="file">
                        <label class="custom-file-label" for="file">Select a file to upload</label>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">{{ __($action) }}</button>
                    </div>
                </div>

                @if ($errors && $errors->has('uploads'))
                    <span style='display: block;' class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('uploads') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>
</form>