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
        @foreach($oAlbum as $album)
            <tr>
            <td>{!! $album->index !!}</td>
            <td>{!! $album->name !!}</td>
            <td>{!! $album->picture !!}</td>
                <td>
                    {!! Form::open(['route' => ['album.destroy', $album->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{!! route('album.show', [$album->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> --}}
                        <a href="{!! route('album.edit', [$album->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{{ route('album-picture.index', ['album_id'=>$album->id]) }}" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-picture" title="Add  Picture"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
