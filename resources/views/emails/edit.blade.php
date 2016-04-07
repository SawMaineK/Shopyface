@extends('layouts.admin')

@section('content')
<div class="container">

	<h1>
        Edit Email
    </h1>

    @include('common.errors')

    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>Edit Email
        </div>
        <div class="clearfix">

		    {!! Form::model($email, ['route' => ['admin.emails.update', $email->id], 'method' => 'patch', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('emails.fields')

		    {!! Form::close() !!}
		    
		</div>
	</div>
</div>
@endsection
