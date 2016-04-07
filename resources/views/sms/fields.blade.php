<!-- Mobiles Field -->
<div class="row">
	<div class="form-group{{ $errors->has('mobiles') ? ' has-error' : '' }}">
	    {!! Form::label('mobiles', 'Mobiles:',['class' => 'col-sm-4 col-lg-2 control-label']) !!}
	    <div class="col-sm-6 col-lg-6"> 
	        
			{!! Form::text('mobiles', null, ['class' => 'form-control']) !!}
	        @if ($errors->has('mobiles'))
	            <span class="help-block">
	                <strong>{{ $errors->first('mobiles') }}</strong>
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
		    <a class="btn btn-default-outline" href="{!! route('admin.sms.index') !!}">Cancel</a>
	    </div>
	</div>
</div>
