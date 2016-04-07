<!-- Package Name Field -->
<div class="row">
	<div class="form-group{{ $errors->has('package_name') ? ' has-error' : '' }}">
	    {!! Form::label('package_name', 'Package Name:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('package_name', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('package_name'))
	            <span class="help-block">
	                <strong>{{ $errors->first('package_name') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Package Version Field -->
<div class="row">
	<div class="form-group{{ $errors->has('package_version') ? ' has-error' : '' }}">
	    {!! Form::label('package_version', 'Package Version:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('package_version', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('package_version'))
	            <span class="help-block">
	                <strong>{{ $errors->first('package_version') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Phone Model Field -->
<div class="row">
	<div class="form-group{{ $errors->has('phone_model') ? ' has-error' : '' }}">
	    {!! Form::label('phone_model', 'Phone Model:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('phone_model', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('phone_model'))
	            <span class="help-block">
	                <strong>{{ $errors->first('phone_model') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Android Version Field -->
<div class="row">
	<div class="form-group{{ $errors->has('android_version') ? ' has-error' : '' }}">
	    {!! Form::label('android_version', 'Android Version:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('android_version', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('android_version'))
	            <span class="help-block">
	                <strong>{{ $errors->first('android_version') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Stacktrace Field -->
<div class="row">
	<div class="form-group{{ $errors->has('stacktrace') ? ' has-error' : '' }}">
	    {!! Form::label('stacktrace', 'Stacktrace:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('stacktrace', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('stacktrace'))
	            <span class="help-block">
	                <strong>{{ $errors->first('stacktrace') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Send Email 1 Field -->
<div class="row">
	<div class="form-group{{ $errors->has('send_email_1') ? ' has-error' : '' }}">
	    {!! Form::label('send_email_1', 'Send Email 1:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::email('send_email_1', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('send_email_1'))
	            <span class="help-block">
	                <strong>{{ $errors->first('send_email_1') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Send Email 2 Field -->
<div class="row">
	<div class="form-group{{ $errors->has('send_email_2') ? ' has-error' : '' }}">
	    {!! Form::label('send_email_2', 'Send Email 2:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::email('send_email_2', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('send_email_2'))
	            <span class="help-block">
	                <strong>{{ $errors->first('send_email_2') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>


<!-- Submit Field -->
<div class="row">
	<div class="form-group">
		<div class="col-sm-6 col-sm-offset-4 col-md-offset-4 col-lg-offset-2">
		    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
		    <a class="btn btn-default-outline" href="{!! route('admin.errorReports.index') !!}">Cancel</a>
	    </div>
	</div>
</div>
