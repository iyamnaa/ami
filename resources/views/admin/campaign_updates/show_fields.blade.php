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

<!-- Campaign Update Id Field -->
<div class="form-group">
    {!! Form::label('campaign_update_id', 'Campaign Update Id:') !!}
    <p>{{ $campaignUpdate->campaign_update_id }}</p>
</div>

