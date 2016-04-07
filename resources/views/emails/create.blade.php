@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>
        New Email
    </h1>
    @include('common.errors')
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>New Email
        </div>
        <div class="clearfix">
		    {!! Form::open(['route' => 'admin.emails.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('emails.fields')

		    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

