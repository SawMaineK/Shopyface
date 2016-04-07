@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>
        New User
    </h1>
    @include('common.errors')
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>New User
        </div>
        <div class="clearfix">
		    {!! Form::open(['route' => 'admin.users.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('users.fields')

		    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

