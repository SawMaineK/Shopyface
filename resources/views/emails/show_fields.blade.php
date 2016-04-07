<!-- Send Email Field -->
<div class="form-group">
    {!! Form::label('send_email', 'Send Email:') !!}
    <p>{!! $email->send_email !!}</p>
</div>

<!-- Subject Field -->
<div class="form-group">
    {!! Form::label('subject', 'Subject:') !!}
    <p>{!! $email->subject !!}</p>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p>{!! $email->message !!}</p>
</div>

