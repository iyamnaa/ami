<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $campaign->title }}</p>
</div>

<!-- Short Desc Field -->
<div class="form-group">
    {!! Form::label('short_desc', 'Short Desc:') !!}
    <p>{{ $campaign->short_desc }}</p>
</div>

<!-- Image Cover Field -->
<div class="form-group">
    {!! Form::label('image_cover', 'Image Cover:') !!}
    <p>{{ $campaign->image_cover }}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $campaign->body }}</p>
</div>

<!-- Target Field -->
<div class="form-group">
    {!! Form::label('target', 'Target:') !!}
    <p>{{ $campaign->target }}</p>
</div>

<!-- Deadline Field -->
<div class="form-group">
    {!! Form::label('deadline', 'Deadline:') !!}
    <p>{{ $campaign->deadline }}</p>
</div>

<!-- Is Deleted Field -->
<div class="form-group">
    {!! Form::label('is_deleted', 'Is Deleted:') !!}
    <p>{{ $campaign->is_deleted }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $campaign->status }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $campaign->user_id }}</p>
</div>

<!-- Campaign Category Id Field -->
<div class="form-group">
    {!! Form::label('campaign_category_id', 'Campaign Category Id:') !!}
    <p>{{ $campaign->campaign_category_id }}</p>
</div>

