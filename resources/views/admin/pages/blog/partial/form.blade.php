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
                <label for="name" class="col-form-label ">{{ __('Title (English)') }}
                    <span class="text-danger">*</span>
                </label>
                <input id="name" type="text"
                    class="form-control{{ $errors && $errors->has('name') ? ' is-invalid' : '' }}"
                    name="name"
                    value="{{ isset($record) && $record->name ? $record->name : old('name') }}"
                    required autofocus>

                @if ($errors && $errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="name_zh" class="col-form-label ">{{ __('Title (Chinese)') }}
                </label>
                <input id="name_zh" type="text"
                       class="form-control{{ $errors && $errors->has('name_zh') ? ' is-invalid' : '' }}"
                       name="name_zh"
                       value="{{ isset($record) && $record->name_zh ? $record->name_zh : old('name_zh') }}"
                       required autofocus>

                @if ($errors && $errors->has('name_zh'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name_zh') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="description" class="col-form-label">{{ __('Short Description (English)') }}
                    <span class="text-danger">*</span>
                </label>
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
        <div class="col-md-6">
            <div class="form-group">
                <label for="description_zh" class="col-form-label">{{ __('Short Description (Chinese)') }}
                    <span class="text-danger">*</span>
                </label>
                <textarea id="description_zh"
                          name="description_zh"
                          class="form-control{{ $errors && $errors->has('description_zh') ? ' is-invalid' : '' }}">{{ isset($record) && $record->description_zh ? $record->description_zh : old('description_zh') }}</textarea>

                @if ($errors && $errors->has('description_zh'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description_zh') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="date" class="col-form-label ">{{ __('Date') }}
                    <span class="text-danger">*</span>
                </label>
                <input id="date" type="date"
                       class="form-control{{ $errors && $errors->has('date') ? ' is-invalid' : '' }}"
                       name="date"
                       value="{{ isset($record) && $record->date ? $record->date : (old('date') ?  old('date') : date("Y-m-d"))}}"
                       max="{{date("Y-m-d")}}"
                       required autofocus>

                @if ($errors && $errors->has('date'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('date') }}</strong>
                </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="files" class="col-form-label">{{ __('Images') }}
                    <span class="text-danger">*</span>
                </label>
                <select id="files"
                        class="select2bs4 multi-select form-control {{ $errors && $errors->has('files') ? ' is-invalid' : '' }}"
                        name="files[]" multiple="multiple" data-placeholder="Select Images for the Apartment">
                    @foreach($files as $value => $label)
                        <option
                                {{ isset($record) && \App\Traits\HelperTrait::isSelected($record->files, $value) ? 'selected="selected"' :
                                (old('files') && is_array(old('files')) && in_array($value, old('files')) ? 'selected="selected"' : '')}}
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

    <hr/>

    @if($locales)
        @foreach($locales as $name => $value)
            <?php
            $selectedMeta = Arr::first(isset($record) && $record->metas ? $record->metas : [], function($val, $key) use($value) {
                return ($val->locale === $value);
            })
            ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="{{'meta_'.$value.'_name'}}" class="col-form-label">{{ __('Meta ('.$name.')') }}</label>
                        <input id="{{'meta_'.$value.'_name'}}" type="text"
                               class="form-control{{ $errors && $errors->has('meta') ? ' is-invalid' : '' }}"
                               name="{{'meta['.$value.'][name]'}}"
                               value="{{ isset($selectedMeta) && $selectedMeta->name ? $selectedMeta->name :
                               (old('meta') && isset(old('meta')[$value]) && isset(old('meta')[$value]['name'])) ? old('meta')[$value]['name'] : null}}"
                               autofocus>

                        @if ($errors && $errors->has('meta'))
                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('meta') }}</strong>
                </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="{{'meta_'.$value.'_description'}}" class="col-form-label">{{ __('Meta Description ('.$name.')') }}</label>
                        <textarea id="{{'meta_'.$value.'_description'}}"
                                  name="{{'meta['.$value.'][description]'}}"
                                  class="form-control{{ $errors && $errors->has('meta_description') ? ' is-invalid' : '' }}">{{ isset($selectedMeta) && $selectedMeta->description ? $selectedMeta->description : (old('meta') && isset(old('meta')[$value]) && isset(old('meta')[$value]['description'])) ? old('meta')[$value]['description'] : null }}</textarea>

                        @if ($errors && $errors->has('meta_description'))
                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('meta_description') }}</strong>
                </span>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    @endif


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