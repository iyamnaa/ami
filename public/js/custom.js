var formatter = new Intl.NumberFormat('en-US', {
  style: 'currency',
  currency: 'IDR',
});

function currencyFormat(number){
  return formatter.format(number).substring(4);
}
