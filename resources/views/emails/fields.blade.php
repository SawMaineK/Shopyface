<!-- Send Email Field -->
<div class="row">
	<div class="form-group{{ $errors->has('send_email') ? ' has-error' : '' }}">
	    {!! Form::label('send_email', 'Send Email:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::email('send_email', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('send_email'))
	            <span class="help-block">
	                <strong>{{ $errors->first('send_email') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Subject Field -->
<div class="row">
	<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
	    {!! Form::label('subject', 'Subject:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('subject', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('subject'))
	            <span class="help-block">
	                <strong>{{ $errors->first('subject') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Message Field -->
<div class="row">
	<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
	    {!! Form::label('message', 'Message:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::textarea('message', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('message'))
	            <span class="help-block">
	                <strong>{{ $errors->first('message') }}</strong>
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
		    <a class="btn btn-default-outline" href="{!! route('admin.emails.index') !!}">Cancel</a>
	    </div>
	</div>
</div>
