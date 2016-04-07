

<li>
	<a href="{{ asset('admin/users') }}">
		<div class="notifications label label-warning">{!! App\Models\User::count() !!}</div>
		<p>Users</p>
	</a>
</li>

<li>
	<a href="{{ asset('admin/gcms') }}">
		<div class="notifications label label-warning">{!! App\Models\Gcm::count() !!}</div>
		<p>Gcms</p>
	</a>
</li>

<li>
	<a href="{{ asset('admin/sms') }}">
		<div class="notifications label label-warning">{!! App\Models\Sms::count() !!}</div>
		<p>Sms</p>
	</a>
</li>

<li>
	<a href="{{ asset('admin/errorReports') }}">
		<div class="notifications label label-warning">{!! App\Models\ErrorReport::count() !!}</div>
		<p>ErrorReports</p>
	</a>
</li>

<li>
	<a href="{{ asset('admin/emails') }}">
		<div class="notifications label label-warning">{!! App\Models\Email::count() !!}</div>
		<p>Emails</p>
	</a>
</li>