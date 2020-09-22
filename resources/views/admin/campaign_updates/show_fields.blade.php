<!-- Image Cover Field -->
<div class="form-group">
    {!! Form::label('image_cover', 'Image Cover:') !!}
    <p>{{ $campaignUpdate->image_cover }}</p>
</div>

<!-- Number Of Recipients Field -->
<div class="form-group">
    {!! Form::label('number_of_recipients', 'Number Of Recipients:') !!}
    <p>{{ $campaignUpdate->number_of_recipients }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $campaignUpdate->title }}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $campaignUpdate->body }}</p>
</div>

<!-- Campaign Id Field -->
<div class="form-group">
    {!! Form::label('campaign_id', 'Campaign Id:') !!}
    <p>{{ $campaignUpdate->campaign_id }}</p>
</div>

