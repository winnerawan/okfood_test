function initMap() {
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
    });
}
$(document).ready(function(){    
    // var scroll = new SmoothScroll('a[href*="#"]',{
    //     offset: 77
    // });    
    // var getHeaderHeight = $('.navbar-expand-lg').outerHeight();
    // $(window).scroll(function(){
    // if($(window).scrollTop() > getHeaderHeight){
    //     $('.fixed-top').addClass('navbar-new');
    // }
    // else{
    //     $('.fixed-top').removeClass('navbar-new');
    // }
    // });
    $(function(){
        $('#world-map').vectorMap({
            map: 'world_mill',
            backgroundColor:'rgb(255,82,84)',
            
        });
      });
});
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