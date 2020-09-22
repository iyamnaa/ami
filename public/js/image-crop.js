$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		}
	})

$('.upload-result').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {
		$.ajax({
			url: "/image-crop",
			type: "POST",
			data: {
				"image":resp,
				"dir":'campaign' 
			},
			success: function (data) {
				// html = '<img src="' + resp + '" />';
				// $("#upload-demo-i").html(html);
				$('.next-step').removeAttr('disabled')
				$('#imageCoverName').val(data.file_name)
				alert(data.message)
			}
		});
	});
});

$('#upload').on('change', function () { 
	var reader = new FileReader();
    reader.onload = function (e) {
    	$uploadCrop.croppie('bind', {
    		url: e.target.result
    	}).then(function(){
    		console.log('jQuery bind complete');
    	});
    }

    reader.readAsDataURL(this.files[0]);
});

function cropImage(element, target) {
	$('.image-crop-background').show()
	var file = window.URL.createObjectURL(element.files[0])
	$('#upload-image').find('img').attr('src', file)
	$('#upload-image').find('img').attr('alt', '')
}