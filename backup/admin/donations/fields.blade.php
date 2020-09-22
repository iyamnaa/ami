<!-- Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number', 'Number:') !!}
    {!! Form::number('number', null, ['class' => 'form-control']) !!}
</div>

<!-- Transaction Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_id', 'Transaction Id:') !!}
    {!! Form::text('transaction_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone', 'Telephone:') !!}
    {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- As Anonymous Field -->
<div class="form-group col-sm-6">
    {!! Form::label('as_anonymous', 'As Anonymous:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('as_anonymous', 0) !!}
        {!! Form::checkbox('as_anonymous', '1', null) !!}
    </label>
</div>


<!-- Nia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NIA', 'Nia:') !!}
    {!! Form::text('NIA', null, ['class' => 'form-control']) !!}
</div>

<!-- Amil Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amil_name', 'Amil Name:') !!}
    {!! Form::text('amil_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Akad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('akad', 'Akad:') !!}
    {!! Form::text('akad', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

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
    <a href="{{ route('donations.index') }}" class="btn btn-secondary">Cancel</a>
</div>
