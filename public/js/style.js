function ajax_request(url, result_div){
  $.ajax({
    url: url,
    success: function(result){
                              $(result_div).html(result);
                             }
  });
}

function show_pop_up() {
  var popup = document.getElementById('pop-up');
  popup.display = 'flex';
}

function exit_pop_up(){
  popup.display = 'none';
}