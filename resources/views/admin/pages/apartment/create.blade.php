@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('Create New Apartment') }}</h3>
            <div class="card-tools">
                <div class="btn btn-tool">
                    <a href="{{ route('apartment.index') }}"><i class="fas fa-list"></i> List</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            @include('admin/pages/apartment/partial/form')
        </div>
    </div>
@endsection
