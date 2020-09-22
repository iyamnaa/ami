<!-- Image Cover Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_cover', 'Image Cover:') !!}
    {!! Form::text('image_cover', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Number Of Recipients Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_of_recipients', 'Number Of Recipients:') !!}
    {!! Form::number('number_of_recipients', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Campaign Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('campaign_id', 'Campaign Id:') !!}
    {!! Form::number('campaign_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('campaignUpdates.index') }}" class="btn btn-secondary">Cancel</a>
</div>
