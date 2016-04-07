@extends('layouts.admin')

@section('content')
<div class="container">

	<h1>
        Edit User
    </h1>

    @include('common.errors')

    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>Edit User
        </div>
        <div class="clearfix">

		    {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'patch', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('users.fields')

		    {!! Form::close() !!}
		    
		</div>
	</div>
</div>
@endsection
