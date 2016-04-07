<table class="table table-bordered table-striped dataTable">
    <thead>
    <th>Mobiles</th>
			<th>Message</th>
    <th width="100px;">Action</th>
    </thead>
    <tbody>
    @foreach($sms as $sms)
        <tr>
            <td>{!! $sms->mobiles !!}</td>
			<td>{!! $sms->message !!}</td>
            <td>
                <a href="{!! route('admin.sms.edit', [$sms->id]) !!}"><i class="fa fa-pencil"></i></a>
                <a href="{!! route('admin.sms.delete', [$sms->id]) !!}" onclick="return confirm('Are you sure wants to delete this Sms?')"><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
