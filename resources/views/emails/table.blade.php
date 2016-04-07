<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>Send Email</th>
			<th>Subject</th>
			<th>Message</th>
    <th width="100px;">Action</th>
    </thead>
    <tbody>
    @foreach($emails as $email)
        <tr>
            <td>{!! $email->send_email !!}</td>
			<td>{!! $email->subject !!}</td>
			<td>{!! $email->message !!}</td>
            <td>
                <a href="{!! route('admin.emails.edit', [$email->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('admin.emails.delete', [$email->id]) !!}" onclick="return confirm('Are you sure wants to delete this Email?')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
