<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Index</th>
                <th>Name</th>
                <th>Picture</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($oGallery as $user)
            <tr>
                <td>{!! $user->type !!}</td>
            <td>{!! $user->index !!}</td>
            <td>{!! $user->name !!}</td>
            <td>{!! $user->picture !!}</td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
