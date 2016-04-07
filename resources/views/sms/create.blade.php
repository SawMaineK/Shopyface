@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>
        New Sms
    </h1>
    @include('common.errors')
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>New Sms
        </div>
        <div class="clearfix">
		    {!! Form::open(['route' => 'admin.sms.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('sms.fields')

		    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

