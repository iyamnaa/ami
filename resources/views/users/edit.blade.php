@extends('layouts.app')
@section('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">
@endsection

@section('content')

<div class="image-crop-background mid-content" style="display:none">
    <div class="image-crop-modal mid-content">
        <div class="col-md-12 full-width" align="center">
            <div id="upload-image" style="width:320px"></div>
                <input type="hidden" name="target" value="coverPict" id="imageTarget">
				<button class="btn btn-success upload-result mt-4">Upload Image</button>
        </div>
    </div>
</div>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{!! route('users.index') !!}">User</a>
    </li>
    <li class="breadcrumb-item active">
        Edit
    </li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        @include('coreui-templates::common.errors')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-edit fa-lg"></i>
                        <strong>Edit Profil</strong>
                    </div>
                    <div class="card-body">
                        {!! Form::model($user, ['route' => ['profil.update', $user->id], 'method' => 'post', 'files' => true]) !!}
                            <!-- Photo Field -->
                            <div class="header user-header">
                                <div class="header-box rectangle-box mid-content image-edit">
                                    <div class="form-group">
                                        <div id="coverPict">
                                            <img src="{{ asset($user->bg_cover) }}">
                                        </div>
                                        {!! Form::file('form_bg_cover', ['class' => 'form-control-file', 'accept' => ".jpg,.jpeg,.png", 'style' => 'display:none', 'id' => 'imageCover', 'onchange' => "cropImage(this)"]) !!}
                                        <input type="button" value="Edit..." onclick="document.getElementById('imageCover').click();" />
                                    </div>
                                </div>
                            </div>
                            <div class="full-width mid-content">
                                <div class="user-profile-photo image-edit mid-content">
                                    <img src="{{ asset($user->photo) }}">
                                    {!! Form::file('form_photo', ['class' => 'form-control-file', 'accept' => ".jpg,.jpeg,.png", 'style' => 'display:none', 'id' => 'photo']) !!}
                                    <input type="button" value="Edit..." onclick="document.getElementById('photo').click();" />
                                </div>
                            </div>
                            <!-- Name Field -->
                            <div class="form-group col-sm-8">
                                {!! Form::label('name', 'Nama Lengkap:') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Username Field -->
                            <div class="form-group col-sm-8">
                                {!! Form::label('username', 'Username:') !!}
                                {!! Form::text('username', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Gender Field -->
                            <div class="form-group col-sm-8">
                                {!! Form::label('gender', 'Jenis Kelamin:') !!} <br>
                                {!! Form::select('gender', array('Perempuan' => 'Perempuan', 'Laki-laki' => 'Laki Laki'), null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Phone Field -->
                            <div class="form-group col-sm-8">
                                {!! Form::label('telephone', 'Phone:') !!}
                                {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Address Field -->
                            <div class="form-group col-sm-12 col-lg-12">
                                {!! Form::label('address', 'Alamat:') !!}
                                {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => '2']) !!}
                            </div>

                            <!-- Bio Field -->
                            <div class="form-group col-sm-12 col-lg-12">
                                {!! Form::label('bio', 'Biodata:') !!}
                                {!! Form::textarea('bio', null, ['class' => 'form-control', 'rows' => '2']) !!}
                            </div>

                            <!-- Submit Field -->
                            <div class="form-group col-sm-12">
                                {!! Form::hidden('email', $user->email ) !!}
                                {!! Form::hidden('role', $user->role ) !!}
                                {!! Form::hidden('password', 'password' ) !!}
                                {!! Form::submit('Save', ['class' => 'btn main-btn btn-success']) !!}
                                <a href="{{ route('users.index') }}" class="btn btn-light text-dark">Cancel</a>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

<script>
$uploadCrop = $('#upload-image').croppie({
    enableExif: true,
    viewport: {
        width: 320,
        height: 320,
        type: 'rectangle'
    },
    boundary: {
        width: 320,
        height: 320

    }
})

$(window).ready( function () {
    width = $('.header-box').css('width')
    $('.rectangle-box').css('height', width)
})
</script>
<script src="{{ asset('js/image-crop.js') }}"></script>
@endsection
