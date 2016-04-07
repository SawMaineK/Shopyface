<!-- Package Name Field -->
<div class="form-group">
    {!! Form::label('package_name', 'Package Name:') !!}
    <p>{!! $errorReport->package_name !!}</p>
</div>

<!-- Package Version Field -->
<div class="form-group">
    {!! Form::label('package_version', 'Package Version:') !!}
    <p>{!! $errorReport->package_version !!}</p>
</div>

<!-- Phone Model Field -->
<div class="form-group">
    {!! Form::label('phone_model', 'Phone Model:') !!}
    <p>{!! $errorReport->phone_model !!}</p>
</div>

<!-- Android Version Field -->
<div class="form-group">
    {!! Form::label('android_version', 'Android Version:') !!}
    <p>{!! $errorReport->android_version !!}</p>
</div>

<!-- Stacktrace Field -->
<div class="form-group">
    {!! Form::label('stacktrace', 'Stacktrace:') !!}
    <p>{!! $errorReport->stacktrace !!}</p>
</div>

<!-- Send Email 1 Field -->
<div class="form-group">
    {!! Form::label('send_email_1', 'Send Email 1:') !!}
    <p>{!! $errorReport->send_email_1 !!}</p>
</div>

<!-- Send Email 2 Field -->
<div class="form-group">
    {!! Form::label('send_email_2', 'Send Email 2:') !!}
    <p>{!! $errorReport->send_email_2 !!}</p>
</div>

