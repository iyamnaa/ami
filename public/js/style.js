var formatter = new Intl.NumberFormat('en-US', {
  style: 'currency',
  currency: 'IDR',
});

$('form').on('focus', 'input[type=number]', function (e) {
  $(this).on('wheel.disableScroll', function (e) {
    e.preventDefault()
  })
})
$('form').on('blur', 'input[type=number]', function (e) {
  $(this).off('wheel.disableScroll')
})

function confirmation_check(checked, btn){
  if(checked){
    $(btn).removeAttr('disabled')
  }else{
    $(btn).attr('disabled', 'disabled')
  }
}

function positiveVariable(value){
  return value > 0 ? value : 1 
}

function show_pop_up() {
  var popup = document.getElementById('pop-up');
  popup.display = 'flex';
}

function exit_pop_up(){
  popup.display = 'none';
}

function toCurrency(number) {
  number = formatter.format(number)
  number = number.substring(4,(number.length - 3))
  number = number.replace(/,/g, '.')

  return number
}

function toNumber(number) {
  number = number.replace(/\./g, '')

  return number
}

function mobileInputNumber(class_name){
   $('.' + class_name).attr('inputmode','numeric')
   $('.' + class_name).keyup()
}