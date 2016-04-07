<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>Reg Id</th>
			<th>Device Id</th>
			<th>User Id</th>
			<th>Is Allow</th>
    <th width="100px;">Action</th>
    </thead>
    <tbody>
    @foreach($gcms as $gcm)
        <tr>
            <td>{!! $gcm->reg_id !!}</td>
			<td>{!! $gcm->device_id !!}</td>
			<td>{!! $gcm->user->name !!}</td>
			<td>{!! $gcm->is_allow !!}</td>
            <td>
                <a href="{!! route('admin.gcms.edit', [$gcm->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('admin.gcms.delete', [$gcm->id]) !!}" onclick="return confirm('Are you sure wants to delete this Gcm?')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
