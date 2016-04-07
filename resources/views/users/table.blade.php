<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>Name</th>
			<th>Email</th>
			<th>Password</th>
    <th width="100px;">Action</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->name !!}</td>
			<td>{!! $user->email !!}</td>
			<td>{!! $user->password !!}</td>
            <td>
                <a href="{!! route('admin.users.edit', [$user->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('admin.users.delete', [$user->id]) !!}" onclick="return confirm('Are you sure wants to delete this User?')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
