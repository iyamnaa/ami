<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Short Desc Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_desc', 'Short Desc:') !!}
    {!! Form::textarea('short_desc', null, ['class' => 'form-control ckeditor']) !!}
</div>

<!-- Image Cover Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Gambar Cover', 'Image Cover:') !!}
    {!! Form::file('form_image_cover', ['class' => 'form-control-file', 'accept' => ".jpg,.jpeg,.png"]) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control ckeditor']) !!}
</div>

<!-- Target Field -->
<div class="form-group col-sm-6">
    {!! Form::label('target', 'Target:') !!}
    {!! Form::number('target', null, ['class' => 'form-control']) !!}
</div>

<!-- Deadline Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deadline', 'Deadline:') !!}
    {!! Form::text('deadline', null, ['class' => 'form-control','id'=>'deadline']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#deadline').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush


<!-- Confirmed At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Di setujui pada :', 'Confirmed At:') !!}
    {!! Form::text('confirmed_at', null, ['class' => 'form-control','id'=>'confirmed_at']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#confirmed_at').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endpush

<!-- Campaign Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('campaign_category_id', 'Campaign Category Id:') !!}
    <select class="form-control" name="campaign_category_id" id="campaign_category_id">
        @foreach($categories as $category)
           <option value="{{ $category->id }}"> {{ $category->name }} </option>
        @endforeach
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::hidden('user_id', Auth::id() , ['class' => 'form-control']) !!}
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('campaigns.index') }}" class="btn btn-secondary">Cancel</a>
</div>
