<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Short Message</th>
                <th>Image Url</th>
                <th>Url link </th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($model as $article)
            <tr>
            <td>{!! $article->id !!}</td>
            <td>{!! $article->title !!}</td>
            <td>{!! $article->short_message !!}</td>
            <td>{!! $article->image_url !!}</td>
            <td>{!! $article->url_link !!}</td>
                <td>
                    {!! Form::open(['route' => ['broadcast.destroy', $article->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{!! route('broadcast.edit', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> --}}
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
