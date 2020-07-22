<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $campaignReport->body }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $campaignReport->user_id }}</p>
</div>

<!-- Campaign Id Field -->
<div class="form-group">
    {!! Form::label('campaign_id', 'Campaign Id:') !!}
    <p>{{ $campaignReport->campaign_id }}</p>
</div>

<!-- Report Category Id Field -->
<div class="form-group">
    {!! Form::label('report_category_id', 'Report Category Id:') !!}
    <p>{{ $campaignReport->report_category_id }}</p>
</div>

