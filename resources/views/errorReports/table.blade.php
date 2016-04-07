<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>Package Name</th>
			<th>Package Version</th>
			<th>Phone Model</th>
			<th>Android Version</th>
			<th>Stacktrace</th>
			<th>Send Email 1</th>
			<th>Send Email 2</th>
    <th width="100px;">Action</th>
    </thead>
    <tbody>
    @foreach($errorReports as $errorReport)
        <tr>
            <td>{!! $errorReport->package_name !!}</td>
			<td>{!! $errorReport->package_version !!}</td>
			<td>{!! $errorReport->phone_model !!}</td>
			<td>{!! $errorReport->android_version !!}</td>
			<td>{!! $errorReport->stacktrace !!}</td>
			<td>{!! $errorReport->send_email_1 !!}</td>
			<td>{!! $errorReport->send_email_2 !!}</td>
            <td>
                <a href="{!! route('admin.errorReports.edit', [$errorReport->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('admin.errorReports.delete', [$errorReport->id]) !!}" onclick="return confirm('Are you sure wants to delete this ErrorReport?')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
