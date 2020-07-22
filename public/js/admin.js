var show_menu = true;
$('.sidebar-minimizer').click(function(){
  if (show_menu) {
    $('.menu-list').css('display','none');
    show_menu = false;
  }else{
    $('.menu-list').css('display','initial');
    show_menu = true;
  }
});