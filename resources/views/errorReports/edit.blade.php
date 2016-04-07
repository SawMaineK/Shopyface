@extends('layouts.admin')

@section('content')
<div class="container">

	<h1>
        Edit ErrorReport
    </h1>

    @include('common.errors')

    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>Edit ErrorReport
        </div>
        <div class="clearfix">

		    {!! Form::model($errorReport, ['route' => ['admin.errorReports.update', $errorReport->id], 'method' => 'patch', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('errorReports.fields')

		    {!! Form::close() !!}
		    
		</div>
	</div>
</div>
@endsection
