<?php
  require "./config/config.php";
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Student', 'Amount'],
          <?php

          $query = mysqli_query($conn, "SELECT * FROM payments");
          while($row = mysqli_fetch_array($query)){
            echo "['".$row['student']."',".$row['amount']."],";
          }
          ?>
          
        ]);

        var options = {
          title: 'Project Contributions'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
