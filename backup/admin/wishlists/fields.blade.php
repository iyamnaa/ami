<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Campaign Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('campaign_id', 'Campaign Id:') !!}
    {!! Form::number('campaign_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('wishlists.index') }}" class="btn btn-secondary">Cancel</a>
</div>
