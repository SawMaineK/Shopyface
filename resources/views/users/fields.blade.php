<!-- Name Field -->
<div class="row">
	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	    {!! Form::label('name', 'Name:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('name', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('name'))
	            <span class="help-block">
	                <strong>{{ $errors->first('name') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Email Field -->
<div class="row">
	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	    {!! Form::label('email', 'Email:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::email('email', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('email'))
	            <span class="help-block">
	                <strong>{{ $errors->first('email') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Password Field -->
<div class="row">
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	    {!! Form::label('password', 'Password:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('password', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('password'))
	            <span class="help-block">
	                <strong>{{ $errors->first('password') }}</strong>
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
		    <a class="btn btn-default-outline" href="{!! route('admin.users.index') !!}">Cancel</a>
	    </div>
	</div>
</div>
