@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('Type List') }}</h3>
            <div class="card-tools">
                <div class="btn btn-tool">
                    <a href="{{ route('type.create') }}"><i class="fas fa-plus-square"></i> New</a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    @if(!isset($records) || (isset($records) && $records->isEmpty()))
                        @include('admin.common.alerts.infoNoRecords');
                    @else
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Apartment</th>
                                <th scope="col">Status</th>
                                <th scope="col">Adults</th>
                                <th scope="col">Children</th>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Rent</th>
                                <th scope="col">RMS Reference</th>
                                <th scope="col">Agent</th>
                                <th scope="col">Created At</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($records as $record)
                                <tr id="type_{{ $record->id }}">
                                    <th scope="row">{{ $record->id }}</th>
                                    <td>{{ $record->apartment->name }}</td>
                                    <td>{{ $record->formattedStatus }}</td>
                                    <td>{{ $record->adults }}</td>
                                    <td>{{ $record->children }}</td>
                                    <td>{{ $record->formattedCheckIn }}</td>
                                    <td>{{ $record->formattedCheckOut }}</td>
                                    <td>{{ $record->rent }}</td>
                                    <td>{{ $record->rms_reference }}</td>
                                    <td>{{ $record->user ? $record->user->name : null }}</td>
                                    <td>{{ $record->created_at }}</td>
                                    <td>
                                        <div class="float-right">
                                            <a href="{{ route('booking.show', ['booking' => $record->id]) }}">
                                                <div class="btn btn-xs">
                                                    <i class="fas fa-eye"></i>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-xs dlt-record"
                                                     data-segment="type"
                                                     data-id="{{ $record->id }}">
                                                    <i class="fas fa-trash"></i>
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
