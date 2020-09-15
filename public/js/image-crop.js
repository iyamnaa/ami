$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
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


$('.upload-result').on('click', function (ev) {
	$uploadCrop.croppie('result', {
		type: 'canvas',
		size: 'viewport'
	}).then(function (resp) {
		$.ajax({
			url: "/image-crop",
			type: "POST",
			data: {"image":resp},
			success: function (data) {
				html = '<img src="' + resp + '" />'
				target = $('#imageTarget').val()
				$('#' + target).html(html)
				$('.image-crop-background').hide()
			}
		});
	});
});

function cropImage(element, target) {
	$('.image-crop-background').show()
	var file = window.URL.createObjectURL(element.files[0])
	$('#upload-image').find('img').attr('src', file)
	$('#upload-image').find('img').attr('alt', '')
}