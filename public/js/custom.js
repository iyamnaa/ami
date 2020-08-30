var formatter = new Intl.NumberFormat('en-US', {
  style: 'currency',
  currency: 'IDR',
});

$(document).ready(function () {
  $('.ckeditor').ckeditor();
});

function currencyFormat(number){
  return formatter.format(number).substring(4);
}
