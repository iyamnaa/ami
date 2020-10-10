<!-- Topic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('topic', 'Topic:') !!}
    {!! Form::text('topic', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('fAQS.index') }}" class="btn btn-secondary">Cancel</a>
</div>
