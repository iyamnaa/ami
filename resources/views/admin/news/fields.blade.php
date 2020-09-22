<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Image Cover Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image_cover', 'Image Cover:') !!}
    {!! Form::text('image_cover', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Deleted Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_deleted', 'Is Deleted:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_deleted', 0) !!}
        {!! Form::checkbox('is_deleted', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('news.index') }}" class="btn btn-secondary">Cancel</a>
</div>
