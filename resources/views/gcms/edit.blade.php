@extends('layouts.admin')

@section('content')
<div class="container">

	<h1>
        Edit Gcm
    </h1>

    @include('common.errors')

    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>Edit Gcm
        </div>
        <div class="clearfix">

		    {!! Form::model($gcm, ['route' => ['admin.gcms.update', $gcm->id], 'method' => 'patch', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('gcms.fields')

		    {!! Form::close() !!}
		    
		</div>
	</div>
</div>
@endsection
