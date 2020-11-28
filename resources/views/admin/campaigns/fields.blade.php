@push('stylesheet')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">
@endpush

<div id="fields-1">
    <div class="alert alert-danger" id="alert-1">
        Isi Form Dengan Lengkap
    </div>
    <!-- Title Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('title', 'Judul :') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Campaign Category Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('campaign_category_id', 'Kategori Campaign :') !!}
        <select class="form-control" name="campaign_category_id" id="campaign_category_id">
            @foreach($categories as $category)
            <option value="{{ $category->id }}"> {{ $category->name }} </option>
            @endforeach
        </select>
    </div>

    <!-- Short Desc Field -->
    <div class="form-group col-sm-8">
        {!! Form::label('short_desc', 'Penjelasan Singkat Campaign :') !!}
        {!! Form::textarea('short_desc', null, ['class' => 'form-control', 'rows' => '3']) !!}
    </div>

    <div class="form-group col-sm-12 pt-3 pb-3">
        <input type="button" class="next-step btn btn-success float-right" value="Selanjutnya">
    </div>
</div>

<div id="fields-2">
    <div class="alert alert-danger" id="alert-2">
        Isi Form Dengan Lengkap
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

    <div class="form-group col-sm-12 pt-3 pb-3">
        <input type="button" class="next-step btn btn-success float-right" value="Selanjutnya">
        <input type="button" class="previous-step btn btn-light float-right mr-3" value="Kembali">
    </div>
</div>

<div id="fields-3">

    <div class="container" align="center">
        <div class="panel panel-default">
        <div class="panel-heading"> Gambar Cover Untuk Campaign</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-12 text-center mid-content" align="center">
                    <div id="upload-demo" style="width:350px"></div>
                </div>
            </div>
            <div class="col-12" style="padding-top:30px;" align="center">
                <strong class="mb-2">Select Image:</strong><br><br>
                <input type="file" id="upload">
                {!! Form::hidden('dir', 'campaign', ['id' => 'dir']) !!}    
                <input type="button" class="btn btn-success upload-result" value="Upload Image">
            </div>
        </div>
        </div>
    </div>

    {!! Form::hidden('image_cover_name', 'das', ['id' => 'imageCoverName']) !!}

    <div class="form-group col-sm-12 pt-3 pb-3">
        <input type="button" class="next-step btn btn-success float-right" value="Selanjutnya" disabled="disabled">
        <input type="button" class="previous-step btn btn-light float-right mr-3" value="Kembali">
    </div>
</div>

<div id="fields-4">
    <!-- Body Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control ckeditor']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::hidden('status', 'diminta' , ['class' => 'form-control']) !!}
        {!! Form::hidden('user_id', Auth::check() ? Auth::id() : 1, ['class' => 'form-control']) !!}
        {!! Form::submit('Simpan Campaign', ['class' => 'btn btn-success float-right']) !!}
        <input type="button" class="previous-step btn btn-light float-right mr-3" value="Kembali">
    </div>
</div>

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
    <script src="{{ asset('js/image-crop.js') }}"></script>
    <script type="text/javascript">

        $uploadCrop = $('#upload-demo').croppie({
            enableExif: true,
            viewport: {
                width: 400,
                height: 225,
                type: 'rectangle'
            },
            boundary: {
                width: 400,
                height: 225

            }
        });

        $('#deadline').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            icons: {
                up: "icon-arrow-up-circle icons font-2xl",
                down: "icon-arrow-down-circle icons font-2xl"
            },
            sideBySide: true
        })

        step = 1;
        $(window).on('load', function () {
        for (let i = 1; i <= 4; i++) {
            $('#fields-' + i).hide()
            $('#alert-' + i).hide()
        }
        $('#fields-' + step).show()
        })
    
        $('.previous-step').click(function () {
        $('#fields-' + step).hide()
        step--
        $('#fields-' + step).fadeIn(700)
        })

        $('.next-step').eq(0).click(function () {
            if( $("input[name='title']").val() == '' ||  $("textarea[name='short_desc']").val() == ''){
                $('#alert-1').show()
            }else{
                $('#alert-1').hide()
                next_step()
            }
        })

        $('.next-step').eq(1).click(function () {
            if( $("input[name='target']").val() == '' ||  $("input[name='deadline']").val() == ''){
                $('#alert-2').show()
            }else{
                $('#alert-2').hide()
                next_step()
            }
        })

        $('.next-step').eq(2).click(function () {
            next_step()
        })

        function next_step(){
            $('#fields-' + step).hide()
            step++
            $('#fields-' + step).fadeIn(700)
        }
    </script>
@endpush
