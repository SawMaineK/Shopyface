@extends('layouts.admin')

@section('content')
<div class="container">

	<h1>
        Edit Sms
    </h1>

    @include('common.errors')

    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>Edit Sms
        </div>
        <div class="clearfix">

		    {!! Form::model($sms, ['route' => ['admin.sms.update', $sms->id], 'method' => 'patch', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('sms.fields')

		    {!! Form::close() !!}
		    
		</div>
	</div>
</div>
@endsection
