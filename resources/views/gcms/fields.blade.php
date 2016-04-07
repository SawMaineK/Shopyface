<!-- Reg Id Field -->
<div class="row">
	<div class="form-group{{ $errors->has('reg_id') ? ' has-error' : '' }}">
	    {!! Form::label('reg_id', 'Reg Id:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('reg_id', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('reg_id'))
	            <span class="help-block">
	                <strong>{{ $errors->first('reg_id') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Device Id Field -->
<div class="row">
	<div class="form-group{{ $errors->has('device_id') ? ' has-error' : '' }}">
	    {!! Form::label('device_id', 'Device Id:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('device_id', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('device_id'))
	            <span class="help-block">
	                <strong>{{ $errors->first('device_id') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- User Id Field -->
<div class="row">
	<div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
	    {!! Form::label('user_id', 'User Id:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	    	{!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
	        @if ($errors->has('user_id'))
	            <span class="help-block">
	                <strong>{{ $errors->first('user_id') }}</strong>
	            </span>
	        @endif
	    </div>
	</div>

</div>

<!-- Is Allow Field -->
<div class="row">
	<div class="form-group{{ $errors->has('is_allow') ? ' has-error' : '' }}">
	    <div class="col-sm-6 col-lg-6 col-lg-6 col-sm-offset-4 col-md-offset-4 col-lg-offset-2"> 
	        <div class="checkbox">
				<label>{!! Form::checkbox('is_allow', 1, true) !!}<span>Is Allow</span></label>
			</div>
	        @if ($errors->has('is_allow'))
	            <span class="help-block">
	                <strong>{{ $errors->first('is_allow') }}</strong>
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
		    <a class="btn btn-default-outline" href="{!! route('admin.gcms.index') !!}">Cancel</a>
	    </div>
	</div>
</div>
