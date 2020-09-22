@extends('layouts.app')

@push('stylesheet')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">

<style>
#app{
    width:100vw !important;
    max-width:100vw !important;
}
</style>
@endpush

@section('content')
@include('layouts.modal')

<div class="container">
	<div class="panel panel-default">
	  <div class="panel-heading">Laravel crop image before upload using croppie plugins</div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-4 text-center">
				<div id="upload-demo" style="width:350px"></div>
	  		</div>
	  		<div class="col-md-4" style="padding-top:30px;">
				<strong>Select Image:</strong>
				<br/>
				<input type="file" id="upload">
				<br/>
				<button class="btn btn-success upload-result">Upload Image</button>
	  		</div>
	  		<div class="col-md-4" style="">
				<div id="upload-demo-i" style="background:#e1e1e1;width:300px;padding:30px;height:300px;margin-top:30px"></div>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>

@endsection

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>

<script>
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
<script src="{{ asset('js/image-crop.js') }}"></script>
@endpush
