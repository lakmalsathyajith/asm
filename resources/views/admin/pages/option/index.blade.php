@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('Facility List') }}</h3>
            <div class="card-tools">
                <div class="btn btn-tool">
                    <a href="{{ route('option.create') }}"><i class="fas fa-plus-square"></i> New</a>
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
                                <th scope="col">Facility</th>
                                <th scope="col">Description</th>
                                <th scope="col">Created At</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($records as $record)
                                <tr id="option_{{ $record->id }}">
                                    <th scope="row">{{ $record->id }}</th>
                                    <td>{{ $record->name }}</td>
                                    <td>{{ $record->description }}</td>
                                    <td>{{ $record->created_at }}</td>
                                    <td>
                                        <div class="float-right">
                                            <a href="{{ route('option.edit', ['option' => $record->id]) }}">
                                                <div class="btn btn-xs">
                                                        <i class="far fa-edit"></i>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-xs dlt-record"
                                                     data-segment="option"
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
