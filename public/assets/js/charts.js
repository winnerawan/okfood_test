var ctx = document.getElementById("revenueChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
      labels: ["January", "February", "March", "April", "May", "June"],
      datasets: [{
          label: 'Revenue Six Month',
          data: [12, 19, 3, 5, 2, 3],
          pointRadius:0,
          backgroundColor: [
              'rgba(255, 99, 132, 0.2)',
              'rgba(54, 162, 235, 0.2)',
              'rgba(255, 206, 86, 0.2)',
              'rgba(75, 192, 192, 0.2)',
              'rgba(153, 102, 255, 0.2)',
              'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
              'rgb(255,82,84)'
          ],
          borderWidth: 3,
          pointDot: false
      }]
  },
  options: {
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero:true
              }
          }]
      }
  }
});

var ctx = document.getElementById("revenueChart2");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
      labels: ["January", "February", "March", "April", "May", "June"],
      datasets: [{
          label: 'Revenue Six Month',
          data: [12, 19, 3, 5, 2, 3],
          pointRadius:4,
          pointBackgroundColor:'rgb(255,82,84)',
          backgroundColor: [
              'rgba(255, 99, 132, 0.0)',
              'rgba(54, 162, 235, 0.0)',
              'rgba(255, 206, 86, 0.0)',
              'rgba(75, 192, 192, 0.0)',
              'rgba(153, 102, 255, 0.0)',
              'rgba(255, 159, 64, 0.0)'
          ],
          borderColor: [
              'rgb(255,82,84)'
          ],
          borderWidth: 3,
          pointDot: true
      },{
        label: 'Revenue Six Month',
        data: [20, 50, 10, 30, 60, 40],
        pointRadius:4,
        pointBackgroundColor:'#fdba04',
        backgroundColor: [
            'rgba(255, 99, 132, 0.0)',
            'rgba(54, 162, 235, 0.0)',
            'rgba(255, 206, 86, 0.0)',
            'rgba(75, 192, 192, 0.0)',
            'rgba(153, 102, 255, 0.0)',
            'rgba(255, 159, 64, 0.0)'
        ],
        borderColor: [
            '#fdba04'
        ],
        borderWidth: 3,
        pointDot: true
    }]
  },
  options: {
      scales: {
          yAxes: [{
              ticks: {
                  beginAtZero:true
              }
          }]
      }
  }
});

var ctx = document.getElementById("revenueChart3");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["January", "February", "March", "April", "May", "June"],  
        datasets: [{
            label: 'Revenue Six Month',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
var ctx = document.getElementById("revenueChart4");
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["January", "February", "March", "April", "May", "June"],          
        datasets: [{
            label: 'Revenue Six Month',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});