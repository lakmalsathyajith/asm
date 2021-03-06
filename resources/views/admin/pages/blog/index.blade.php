@extends('admin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ __('Blog List') }}</h3>
            <div class="card-tools">
                <div class="btn btn-tool">
                    <a href="{{ route('blog.create') }}"><i class="fas fa-plus-square"></i> New</a>
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
                                <th scope="col">Title</th>
                                <th scope="col">Short Description</th>
                                <th scope="col">Date</th>
                                <th scope="col">Created At</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($records as $record)
                                <tr id="blog_{{ $record->id }}">
                                    <th scope="row">{{ $record->id }}</th>
                                    <td>{{ \App\Traits\StringTrait::subString($record->name, 30) }}</td>
                                    <td>{{ \App\Traits\StringTrait::subString($record->description, 70) }}</td>
                                    <td>{{ $record->date }}</td>
                                    <td>{{ $record->created_at?$record->created_at->diffForHumans():'-' }}</td>
                                    <td>
                                        <div class="float-right">
                                            <a href="{{ route('blog.edit', ['blog' => $record->id]) }}">
                                                <div class="btn btn-xs">
                                                        <i class="far fa-edit"></i>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-xs dlt-record"
                                                     data-segment="blog"
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
