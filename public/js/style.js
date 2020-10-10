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

function fee_calculation(method) {
  amount = $('#amount').val()
  administration_fee = 0
  switch (method) {
    case "Bank Transfer":
        administration_fee = 4000
        break;
    case "Credit Card":
        administration_fee = (amount * 0.029) + 2000
        break;
    case "Gopay":
        administration_fee = amount * 0.02
        break;
    case "Qris":
        administration_fee = amount  * 0.007
        break;
    case "Akulaku":
        administration_fee = amount * 0.02
        break;
    case "Shopee Pay":
        administration_fee = amount * 0.15
        break;
    case "Lain-Lainnya":
        administration_fee = 5000
        break;
    default:
      administration_fee = 0
      break;
  }
  $('#administration_fee').val(administration_fee)
}