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
        @foreach($oPicture as $picture)
            <tr>
            <td>{!! $picture->index !!}</td>
            <td>{!! $picture->name !!}</td>
            <td>{!! $picture->picture !!}</td>
                <td>
                    {!! Form::open(['route' => ['album-picture.destroy', $picture->id, 'album_id'=>$id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{!! route('album-picture.show', [$picture->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> --}}
                        <a href="{!! route('album-picture.edit', [$picture->id, 'album_id'=>$id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
