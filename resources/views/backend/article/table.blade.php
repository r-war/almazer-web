<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>cover</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($model as $article)
            <tr>
            <td>{!! $article->date !!}</td>
            <td>{!! $article->name !!}</td>
            <td>{!! $article->picture !!}</td>
                <td>
                    {!! Form::open(['route' => ['article.destroy', $article->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('article.edit', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
