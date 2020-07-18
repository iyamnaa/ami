var total = 0;

$(window).on('load', function () {
    $('.harga-beras').keyup();
 });

$('.harga-beras').keyup(function(){
  total = (($(this).val()) * 2.5).toFixed(0);
  $('.zakat-beras').eq(0).val(total);
  $('.anggota-keluarga').keyup();
});

$('.anggota-keluarga').keyup(function(){
  if ($(this).val() < 0) {
    $(this).val(0);
    $(this).keyup();
  }
  else if(!$(this).val()){
    $('.tb-list-1').html('Rp. ' + currencyFormat(total));
    $('.tb-list-2').html('0');
    $('.tb-total').html('Rp. 0'); 
  }else{
    total_zakat = ($(this).val()) * total;
    $('.tb-list-1').html('Rp. ' + currencyFormat(total));
    $('.tb-list-2').html($(this).val());
    $('.tb-total').html('Rp. ' + currencyFormat(total_zakat)); 
  }
});