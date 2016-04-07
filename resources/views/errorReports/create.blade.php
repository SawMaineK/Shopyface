@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>
        New ErrorReport
    </h1>
    @include('common.errors')
    <div class="widget-container fluid-height clearfix">
        <div class="heading">
            <i class="fa fa-th-list"></i>New ErrorReport
        </div>
        <div class="clearfix">
		    {!! Form::open(['route' => 'admin.errorReports.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}

		        @include('errorReports.fields')

		    {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

