<!DOCTYPE html>
 <html>
 <head>
 <style type="text/css">
    body{
    background: url('background2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    width: 600px;
    margin-left: 340px;
    margin-top: 100px;
 }
 
 #chart {
     width: 100%;
     height: auto;
 }
 </style>
 <script type="text/javascript" src="jquery.min.js"></script>
 <script type="text/javascript" src="Chart.min.js"></script>
 </head>
 <body>
     <h2>A GRAPH OF TEMPERATURE COLLECTED AGAINST DEVICES USED</h2>
     <div id="chart">
         <canvas id="graphCanvas"></canvas>
     </div>
 
     <script>
         $(document).ready(function () {
             showGraph();
         });
 
 
         function showGraph()
         {
             {
                 $.post("data.php",
                 function (data)
                 {
                     // console.log(data);
                     var device = [];
                     var temperature = [];
 
                     for (var i in data) {
                         device.push(data[i].device);
                         temperature.push(data[i].temperature);
                     }
 
                     var myData = {
                         labels: device,
                         datasets: [
                             {
                                 label: 'temperature',
                                 backgroundColor: '#a707f7',
                                 borderColor: '#008080',
                                 hoverBackgroundColor: '#bd0426',
                                 hoverBorderColor: '#666666',
                                 data: temperature
                             }
                         ]
                     };
 
                     var graphTarget = $("#graphCanvas");
 
                     var barGraph = new Chart(graphTarget, {
                         type: 'bar',
                         data: myData
                     });
                 });
             }
         }
         setInterval(function(){
         showGraph()
     }, 5000)
     </script>
 
 </body>
 </html>