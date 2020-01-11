<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Type</th>
        <th>Number</th>
        <th>Name</th>
        <th>Email</th>
        <th>Vin</th>
        <th>Date Of Birth</th>
        <th>Address</th>
        <th>Mobile Phone</th>
        <th>License Plate</th>
        <th>Size</th>
        <th>Email Verified At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{!! $user->type !!}</td>
            <td>{!! $user->number !!}</td>
            <td>{!! $user->name !!}</td>
            <td>{!! $user->email !!}</td>
            <td>{!! $user->vin !!}</td>
            <td>{!! $user->date_of_birth !!}</td>
            <td>{!! $user->address !!}</td>
            <td>{!! $user->mobile_phone !!}</td>
            <td>{!! $user->license_plate !!}</td>
            <td>{!! $user->size !!}</td>
            <td>{!! $user->email_verified_at !!}</td>
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
