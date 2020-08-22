var show_sub = false

$('.has-sub-menu').click(function(){
  if (show_sub) {
    $('.sub-menu').css('display','none');
    show_sub = false;
  }else{
    $('.sub-menu').css('display','list-item');
    show_sub = true;
  }
})


function searchData(e, model){
  var key=e.keyCode || e.which;
  if (key==13){
    $.ajax({
      type:'POST',
      url:'/admin/'+model+'/search',
      data:{
        _token: $('meta[name="_token"]').attr('content'),
        params: $('#searchData').val()
      },
       success:function(data) {
        alert(data)
       }
    });
  }
}