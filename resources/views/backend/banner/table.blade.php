<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>index</th>
                <th>Picture</th>
                <th>Url link</th>
                <th>Url link 2</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($model as $article)
            <tr>
            <td>{!! $article->index !!}</td>
            <td>{!! $article->picture !!}</td>
            <td>{!! $article->url_link !!}</td>
            <td>{!! $article->url_link_2 !!}</td>
                <td>
                    {!! Form::open(['route' => ['banner.destroy', $article->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('banner.edit', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
