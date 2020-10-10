var total_assets = 0 
var amount_of_zakat = 0, total_zakat = 0
var price_of_goods = new Object()
var nishab = new Object()

// $('.currency').on('keyup keypress blur change input', function() {
//   if(event.which >= 37 && event.which <= 40) return

//   $(this).val(function(index, value) {
//     return value
//     .replace(/\D/g, "")
//     .replace(/\B(?=(\d{3})+(?!\d))/g, ".")
//   })
// })

function delete_params(){
  $("input[type='text']").attr('name','')
  $("#kadarZakat").attr('name', 'kadar-zakat')
  $("#qtyZakat").attr('name', 'qty-zakat')

  return true
}

$(window).on('load', function () {
  refreshform(0)
  set_default_nishab()
 })

function set_value(){
  price_of_goods['harga-beras'] = 14000
  price_of_goods['harga-emas'] = 1035000
  price_of_goods['harga-perak'] = 460800

  for (const [name, value] of Object.entries(price_of_goods)) {
    $("input[name='"+name+"']").val(value)
  }
}

function set_default_nishab(){
  nishab['zakat-fitrah'] = 0
  nishab['zakat-rikaz'] = 0
  
  // 85 * Harga Emas
  nishab['zakat-tabungan'] = 
  nishab['zakat-perdagangan'] = 
  nishab['zakat-emas'] = 85 * price_of_goods['harga-emas']

  // 595 * Harga Perak
  nishab['zakat-perak'] = 595 * price_of_goods['harga_perak']

  // 524 * Harga Beras
  nishab['zakat-profesi'] = 
  nishab['zakat-pertanian'] = 524 * price_of_goods['harga-beras']
}

function refreshform(zakat_number){
  set_value()
  $('input').attr('autocomplete','off')
  $("input[type='text']").addClass('currency')
  mobileInputNumber('currency')
  switch (zakat_number){
    case 0 : fitrah_calculation()
             break
    case 1 : gold_calculation()
             break
    case 2 : profession_calculation()
             break
    case 3 : savings_calculation()
             break
    case 4 : trade_calculation()
             break
    case 5 : silver_calculation()
             break
    case 6 : rikaz_calculation()
             break
    case 7 : agricultural_calculation()
             break
    case 8 : mandiri_calculation()
             break
  }
}

function zakat_show(){
  if(check_condition(total_assets)){
    $("input[name='kadar-zakat']").val(toCurrency(amount_of_zakat))
    table_calc($("input[name='qty-zakat']"))
  }else{
      $("input[name='kadar-zakat-kg']").val(0)
      $("input[name='kadar-zakat']").val(0)
      $('.tb-list-1').html('Rp.0')
      $('.tb-list-2').html(0)
      $('.tb-total').html('Rp.0')
  }
}

function table_calc(field_qty){
    if ($(field_qty).val() < 0) {
      $(field_qty).val(0)
      table_calc(field_qty)
    }
    else if(!$(field_qty).val()){
      $('.tb-list-1').html('Rp. ' + toCurrency(amount_of_zakat))
      $('.tb-list-2').html('1')
      $('.tb-total').html('Rp. ' + toCurrency(amount_of_zakat))
    }else{
      total_zakat = ($(field_qty).val()) * amount_of_zakat
      $('.tb-list-1').html('Rp. ' + toCurrency(amount_of_zakat))
      $('.tb-list-2').html($(field_qty).val())
      $('.tb-total').html('Rp. ' + toCurrency(total_zakat))

      $('#zakatAmount').val(total_zakat)
    }
}

function check_condition(amount){
  zakat_type = $('#zakatType').val()
  $("input[name='nishab-zakat']").val(nishab[zakat_type])
  if(amount > nishab[zakat_type] || zakat_type == 'zakat-fitrah'){
    $('#zakatCondition').addClass('text-success')
    $('#zakatCondition').removeClass('text-danger')
    $('#zakatCondition').text('Ya')
    $('#bayarZakat').removeAttr('disabled')

    return true
  }else{
    $('#zakatCondition').addClass('text-danger')
    $('#zakatCondition').removeClass('text-success')
    $('#zakatCondition').text('Tidak')
    $('#bayarZakat').attr('disabled','disabled')

    return false
  }
}
  
function fitrah_calculation(){
  total_assets = toNumber($("input[name='harga-beras']").val())
  amount_of_zakat = (total_assets * 2.5).toFixed(0)
  zakat_show()
}

function gold_calculation(){
  var amount_of_gold = 1, gold_price = 1
  amount_of_gold = positiveVariable($("input[name='jumlah-emas']").val())
  gold_price = positiveVariable($("input[name='harga-emas']").val())

  nishab['zakat-emas'] = 85 * gold_price
  total_assets = amount_of_gold * gold_price
  amount_of_zakat = (total_assets * 0.025).toFixed(0)
  zakat_show()
}

function profession_calculation(){
  var income = 0, outcome = 0, rice_price = 1
  income = positiveVariable($("input[name='jumlah-penghasilan']").val())
  outcome = $("input[name='jumlah-pengeluaran']").val() >= 0 ? $("input[name='jumlah-pengeluaran']").val() : 0
  rice_price = positiveVariable($("input[name='harga-beras']").val())


  nishab['zakat-profesi'] = 524 * rice_price
  total_assets = income - outcome
  amount_of_zakat = (total_assets * 0.025).toFixed(0)
  zakat_show()
}

function agricultural_calculation(){
  var amount_of_harvest = 1, gold_price = 1
  var amount_of_zakat_kg = 1

  amount_of_harvest = positiveVariable($("input[name='jumlah-panen']").val())
  harvest_price = positiveVariable($("input[name='harga-panen']").val())

  total_assets = amount_of_harvest * harvest_price
  if ($("input[name='irigasi']").prop('checked')) {
    amount_of_zakat = (total_assets * 0.05).toFixed(0)
    amount_of_zakat_kg = (amount_of_harvest * 0.05).toFixed(0)

  }else{
    amount_of_zakat = (total_assets * 0.1).toFixed(0)
    amount_of_zakat_kg = (amount_of_harvest * 0.1).toFixed(0)
  }

  $("input[name='kadar-zakat-kg']").val(amount_of_zakat_kg)
  zakat_show()
}

function silver_calculation(){
  var amount_of_gold = 1, silver_price = 1
  amount_of_gold = positiveVariable($("input[name='jumlah-perak']").val())
  silver_price = positiveVariable($("input[name='harga-perak']").val())

  nishab['zakat-perak'] = 595 * silver_price
  total_assets = amount_of_gold * silver_price
  amount_of_zakat = (total_assets * 0.025).toFixed(0)
  zakat_show()

}

function rikaz_calculation() {
  total_assets = positiveVariable($("input[name='harga-penemuan']").val())
  amount_of_zakat = (total_assets / 5).toFixed(0)
  zakat_show()
}

function savings_calculation(){
  var gold_price = 1
  total_assets = positiveVariable($("input[name='jumlah-tabungan']").val())
  gold_price = positiveVariable($("input[name='harga-emas']").val())

  nishab['zakat-emas'] = 85 * gold_price
  amount_of_zakat = (total_assets * 0.025).toFixed(0)
  zakat_show()
}

function trade_calculation(){
  var residual_capital = 0, income = 0, claim = 0
  var outcome = 0, debt = 0

  residual_capital = $("input[name='modal-sisa']").val() >= 0 ? $("input[name='modal-sisa']").val() : 0
  income = $("input[name='dana-untung']").val() >= 0 ? $("input[name='dana-untung']").val() : 0
  claim = $("input[name='jumlah-piutang']").val() >= 0 ? $("input[name='jumlah-piutang']").val() : 0
  
  outcome = $("input[name='dana-rugi']").val() >= 0 ? $("input[name='dana-rugi']").val() : 0
  debt = $("input[name='jumlah-hutang']").val() >= 0 ? $("input[name='jumlah-hutang']").val() : 0

  total_assets = (income + residual_capital + claim) - (outcome + debt)
  amount_of_zakat = ((total_assets) * 0.025).toFixed(0)
  zakat_show()
}

function mandiri_calculation(total_zakat = 0){
  $('.tb-list-1').html('Rp. ' + toCurrency(total_zakat))
  $('.tb-list-2').html(1)
  $('.tb-total').html('Rp. ' + toCurrency(total_zakat))

  $('#zakatAmount').val(total_zakat)
}