<?php
  require "./config/config.php";
?>
 
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['student', 'Test 1', 'Test 2', 'Test 3'],
          <?php
        $query = mysqli_query($conn, "SELECT * FROM subject_score");
        while($row = mysqli_fetch_array($query)){
          $student = $row['student'];
          $test1 = $row['test1'];
          $test2 = $row['test 2'];
          $test3 = $row['test 3'];

          ?>
          ['<?php echo $student; ?>',<?php echo $test1; ?>,<?php echo $test2; ?>,<?php echo $test3; ?>],
          <?php
        }
        ?>
        ]);

        var options = {
          chart: {
            title: 'Students Performance',
            subtitle: 'Test 1, Test 2, and Test 3: Cloud Computing',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
  </body>
</html>
