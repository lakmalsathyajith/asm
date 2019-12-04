@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Upload New Files') }}</h3>
                    <div class="card-tools">
                        <div class="btn btn-tool">
                            <a href="{{ route('file.index', ['view' => 'gallery']) }}"><i class="fas fa-th-large"></i>
                                Gallery</a>
                        </div>
                        <div class="btn btn-tool">
                            <a href="{{ route('file.index') }}"><i class="fas fa-list"></i> List</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('admin/pages/file/partial/form')
                </div>
            </div>
        </div>
    </div>

    @if(isset($view) && $view === 'gallery')
        <div class="row">
            <div class="col-md-12">
                <div class="card-columns">
                    @foreach($records as $record)
                        <div class="card">
                            <img src="{{ $record->url }}" class="card-img-top" alt="{{ $record->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $record->name }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-12">
                <div class="card">
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
                                            <th scope="col">Name</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Extension</th>
                                            <th scope="col">Mime</th>
                                            <th scope="col">Is Temp</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($records as $record)
                                            <tr id="file_{{ $record->id }}">
                                                <th scope="row">{{ $record->id }}</th>
                                                <td>{{ $record->name }}</td>
                                                <td>{{ $record->user_id }}</td>
                                                <td>{{ $record->extension }}</td>
                                                <td>{{ $record->mime }}</td>
                                                <td>{{ $record->is_temp ? 'Yes' : 'No' }}</td>
                                                <td>{{ $record->created_at }}</td>
                                                <td>
                                                    <div class="float-right">
                                                        <a href="#">
                                                            <div class="btn btn-xs dlt-record"
                                                                 data-segment="file"
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
            </div>
        </div>
    @endif

@endsection
