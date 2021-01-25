Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

id_numbers = new Array();
$.ajax({
    url:"pie_chart.php",
    type:"POST",
    dataType:"json",
    success:function(msg){
        id_numbers[0] = msg.pm_mnsp;
        id_numbers[1] = msg.mnsp;
        id_numbers[2] = msg.bcp;
        id_numbers[3] = msg.report;
        console.log(id_numbers[0]);
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ["BCP", "PM", "Report","MNSP"],
            datasets: [{
              data: [id_numbers[2], id_numbers[0], id_numbers[3], id_numbers[1]],
              backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#ffa55b'],
              hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf','#ffa573'],
              hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
          },
          options: {
            maintainAspectRatio: false,
            tooltips: {
              backgroundColor: "rgb(255,255,255)",
              bodyFontColor: "#858796",
              borderColor: '#dddfeb',
              borderWidth: 1,
              xPadding: 15,
              yPadding: 15,
              displayColors: false,
              caretPadding: 10,
            },
            legend: {
              display: false
            },
            cutoutPercentage: 80,
          },
        });
        
    }
    
});
// Pie Chart Example
