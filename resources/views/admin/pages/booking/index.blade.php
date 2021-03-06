@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('Booking List') }}</h3>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    @if(!isset($records) || (isset($records) && $records->isEmpty()))
                        @include('admin.common.alerts.infoNoRecords')
                    @else
                        <table class="table table-sm table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Apartment</th>
                                <th scope="col">Adults</th>
                                <th scope="col">Children</th>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Rent</th>
                                <th scope="col">RMS Reference</th>
                                <th scope="col">Created By</th>
                                <th scope="col">Created At</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($records as $record)
                                <tr id="booking_{{ $record->id }}">
                                    <th scope="row">{{ $record->id }}</th>
                                    <td>{{ (isset($record->apartment)) ? $record->apartment->name : "" }}</td>
                                    <td>{{ $record->adults }}</td>
                                    <td>{{ $record->children }}</td>
                                    <td>{{ $record->formattedCheckIn }}</td>
                                    <td>{{ $record->formattedCheckOut }}</td>
                                    <td>{{ $record->rent }}</td>
                                    <td>{{ $record->rms_reference }}</td>
                                    <td>{{ $record->user && $record->user->name ? $record->user->name : 'Guest' }}</td>
                                    <td>{{ $record->created_at?$record->created_at->diffForHumans():'-' }}</td>
                                    <td>
                                        <div class="float-right">
                                            <a href="{{ route('booking.show', ['booking' => $record->id]) }}">
                                                <div class="btn btn-xs">
                                                    <i class="fas fa-eye"></i>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-xs dlt-record"
                                                     data-segment="booking"
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
