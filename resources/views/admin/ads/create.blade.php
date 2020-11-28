@extends('layouts.admin.app')

@push('stylesheet')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">
@endpush

@section('content')
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="{!! route('ads.index') !!}">Ads</a>
      </li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Create Ads</strong>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'ads.store', 'files' => true]) !!}
                                    <div id="fields-3">
                                        <div class="container" align="center">
                                            <div class="panel panel-default">
                                                <div class="panel-heading"> Gambar Cover Untuk Iklan</div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-12 text-center mid-content" align="center">
                                                            <div id="upload-demo" style="width:350px"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" style="padding-top:30px;" align="center">
                                                        <strong class="mb-2">Select Image:</strong><br><br>
                                                        <input type="file" id="upload">
                                                        {!! Form::hidden('dir', 'ads', ['id' => 'dir']) !!}       
                                                        <input type="button" class="btn btn-success upload-result" value="Upload Image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        {!! Form::hidden('image_url_name', 'das', ['id' => 'imageCoverName']) !!}
                                        {!! Form::submit('Simpan Gambar', ['class' => 'btn btn-success float-right mt-3']) !!}

                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
@endsection

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
    </script>
@endpush