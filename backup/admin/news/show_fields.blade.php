<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $news->title }}</p>
</div>

<!-- Image Cover Field -->
<div class="form-group">
    {!! Form::label('image_cover', 'Image Cover:') !!}
    <p>{{ $news->image_cover }}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $news->body }}</p>
</div>

