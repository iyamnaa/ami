function create_chart(element_content,type){
  if (type == 'bar'){
    create_bar_chart(element_content,['Baju', 'Selimut', 'Cover', 'Kiloan', 'Kasur', 'Otak', 'Hati'],['10', '12', '15','17','13','8','22']);
  }
  else if(type == 'line'){
    create_line_chart(element_content,'das','asd')
  }
  else if(type == 'pie'){
    create_pie_chart(element_content,'das','asd')
  }else if(type == 'doughnut'){
    create_doughnut_chart(element_content,'das','asd')
  }
}

function create_bar_chart(element_content,chart_labels,chart_datas){
  var ctxB = document.getElementsByClassName(element_content)[0].getContext('2d');
  var myBarChart = new Chart(ctxB, {
    type: 'bar',
    data: {
      labels: chart_labels,
      datasets: [{
        label: '# Jumlah Masuk',
        data: chart_datas,
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
}

function create_line_chart(element_content,chart_labels,chart_datas){
  //line
var ctxL = document.getElementsByClassName(element_content)[0].getContext('2d');
var myLineChart = new Chart(ctxL, {
  type: 'line',
  data: {
  labels: ["January", "February", "March", "April", "May", "June", "July"],
  datasets: [{
              label: "My First dataset",
              data: [65, 59, 80, 81, 56, 55, 40],
              backgroundColor: [ 
                                'rgba(105, 0, 132, .2)',
                               ],
              borderColor: [
                            'rgba(200, 99, 132, .7)',
                           ],
              borderWidth: 2
            },
            {
              label: "My Second dataset",
              data: [28, 48, 40, 19, 86, 27, 90],
              backgroundColor: [
                                'rgba(0, 137, 132, .2)',
                               ],
              borderColor: [
                            'rgba(0, 10, 130, .7)',
                           ],
              borderWidth: 2
            }
            ]
  },
  options: {
  responsive: true
  }
  });
}

function create_pie_chart(element_content,chart_labels,chart_datas){
  var ctxP = document.getElementsByClassName(element_content)[0].getContext('2d');
  var myPieChart = new Chart(ctxP, {
    type: 'pie',
    data: {
          labels: ["Red", "Green", "Yellow", "Grey"],
          datasets: [{
                      data: [300, 50, 100, 40],
                      backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1"],
                      hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5"]
                    }]
    },
    options: {
      responsive: true
    }
    });
}

function create_doughnut_chart(element_content,chart_labels,chart_datas){
  var ctxD = document.getElementsByClassName(element_content)[0].getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: ["Red", "Green", "Yellow", "Grey", "Dark"],
      datasets: [{
                  data: [150, 50, 100, 40,30],
                  backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
                  hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
                }]
    },
    options: {
      responsive: true
    }
  });
}

// function ajax_request(url, result_div){
//   $.ajax({
//     url: url,
//     success: function(result){
//                               $(result_div).html(result);
//                              }
//   });
// }
