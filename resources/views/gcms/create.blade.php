@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>
        New Gcm
    </h1>
    @include('common.errors')
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>New Gcm
        </div>
        <div class="clearfix">
		    {!! Form::open(['route' => 'admin.gcms.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('gcms.fields')

		    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

