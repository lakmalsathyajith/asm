<div class="row">
    <div class="col-md-12">
        @if(isset($record) && isset($record->contents))
            <table class="table table-sm table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Locale</th>
                    <th scope="col">Created At</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($record->contents as $content)
                    <tr id="content_{{ $content->id }}">
                        <th scope="row">{{ $content->id }}</th>
                        <td>{{ \App\Traits\StringTrait::subString($content->name, 100) }}</td>
                        <td>{{ $content->type }}</td>
                        <td>{{ $content->locale }}</td>
                        <td>{{ $content->created_at }}</td>
                        <td>
                            <div class="float-right">
                                <a href="{{ route('content.edit', [
                                'contentable-id' => $record->id,
                                'contentable-type' => 'blog',
                                'content' => $content->id,
                                ]) }}">
                                    <div class="btn btn-xs">
                                            <i class="far fa-edit"></i>
                                    </div>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                @if(isset($noRecord))
                    @foreach($noRecord as $noContent)
                        <tr>
                            <th scope="row">-</th>
                            <td colspan="4">
                                No content available for the language
                                <strong>{{$noContent['locale']}}</strong>.

                                Add new content here
                            </td>
                            <td>
                                <div class="float-right">
                                    <a href="{{ route('content.create', [
                                        'contentable-id' => $record->id,
                                        'contentable-type' => 'blog',
                                        'content-type' => 'blog',
                                        'content-sub-type' => null,
                                        'locale' => $noContent['locale'],
                                        'name' => $record->name.' '.$noContent['locale'],
                                        'slug' => $record->slug.'_'.$noContent['locale'],
                                        'step' => 5
                                    ])}}">
                                        <div class="btn btn-xs">
                                                <i class="far fa-plus-square"></i>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
        @endif
    </div>
</div>