@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('Edit Blog') }}</h3>
            <div class="card-tools">
                <div class="btn btn-tool">
                    <a href="{{ route('blog.index') }}"><i class="fas fa-list"></i> List</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            @include('admin/pages/blog/partial/form')
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('Blog Contents') }}</h3>
        </div>

        <div class="card-body">
            @include('admin/pages/blog/partial/contentTable')
        </div>
    </div>
@endsection
