@extends('admin.layouts.main')

@section('content')
    <div class="card">
            <div class="card-header">
                    <h3 class="card-title">{{ __('User List') }}</h3>
                    <div class="card-tools">
                        <div class="btn btn-tool">
                            <a href="{{ route('users.create') }}"><i class="fas fa-plus-square"></i> New</a>
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
                                <th scope="col">Code</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Type</th>
                                <th scope="col">Created At</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($records as $record)
                                <tr id="user_{{ $record->id }}">
                                    <th scope="row">{{ $record->id }}</th>
                                    <td>{{ $record->code }}</td>
                                    <td>{{ $record->name }}</td>
                                    <td>{{ $record->email }}</td>
                                    <td>{{ $record->type=='AGENT'?'Agent':'Admin' }}</td>
                                    <td>{{ $record->created_at?$record->created_at->diffForHumans():'-' }}</td>
                                    <td>
                                        <div class="float-right">
                                            <a href="#">
                                                <div class="btn btn-xs dlt-record"
                                                     data-segment="users"
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
