<div class="row">
    <div class="col-md-12">
        @if(isset($record) && isset($record->contents))
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Type</th>
                    <th scope="col">Created At</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($record->contents as $content)
                    <tr id="content_{{ $content->id }}">
                        <th scope="row">{{ $content->id }}</th>
                        <td>{{ $content->name }}</td>
                        <td>{{ $content->slug }}</td>
                        <td>{{ $content->type }}</td>
                        <td>{{ $content->created_at }}</td>
                        <td>
                            <div class="float-right">
                                <a href="{{ route('content.edit', ['content' => $content->id]) }}">
                                    <div class="btn btn-xs">
                                        <i class="fas fa-edit"></i>
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