@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('Apartment List') }}</h3>
            <div class="card-tools">
                <div class="btn btn-tool">
                    <a href="{{ route('apartment.create') }}"><i class="fas fa-plus-square"></i> New</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    @if(!isset($records) || (isset($records) && $records->isEmpty()))
                        @include('admin.common.alerts.infoNoRecords');
                    @else
                        <table class="table table-sm table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Apartment</th>
                                <th scope="col">Type</th>
                                <th scope="col">Address</th>
                                <th scope="col">Parking</th>
                                <th scope="col">Beds</th>
                                <th scope="col">Price</th>
                                <th scope="col">Apartment<br>Type ID</th>
                                <th scope="col">Apartment<br>ID</th>
                                <th scope="col">Created At</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($records as $record)
                                <tr id="apartment_{{ $record->id }}">
                                    <th scope="row">{{ $record->id }}</th>
                                    <td>{{ $record->name }}</td>
                                    <td>{{ $record->type->name }}</td>
                                    <td>{{ $record->address }}</td>
                                    <td>{{ $record->parking_slots }}</td>
                                    <td>{{ $record->beds }}</td>
                                    <td>{{ $record->price }}</td>
                                    <td>{{ $record->rms_apartment_id }}</td>
                                    <td>{{ $record->rms_key }}</td>
                                    <td>{{ $record->created_at }}</td>
                                    <td>
                                        <div class="float-right">
                                            <a href="{{ route('apartment.edit', ['apartment' => $record->id]) }}">
                                                <div class="btn btn-xs">
                                                        <i class="far fa-edit"></i>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-xs dlt-record"
                                                     data-segment="apartment"
                                                     data-id="{{ $record->id }}">
                                                     <i class="far fa-trash-alt"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
