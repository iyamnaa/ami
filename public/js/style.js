var formatter = new Intl.NumberFormat('en-US', {
  style: 'currency',
  currency: 'IDR',
});

function currencyFormat(number){
  return formatter.format(number).substring(4);
}

$('form').on('focus', 'input[type=number]', function (e) {
  $(this).on('wheel.disableScroll', function (e) {
    e.preventDefault()
  })
})
$('form').on('blur', 'input[type=number]', function (e) {
  $(this).off('wheel.disableScroll')
})

function positive_variable(value){
  return value > 0 ? value : 1 
}

function show_pop_up() {
  var popup = document.getElementById('pop-up');
  popup.display = 'flex';
}

function exit_pop_up(){
  popup.display = 'none';
}