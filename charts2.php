<?php
  require "./config/config.php";
?>
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['line']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'Score ID');
      <?php
      $query = mysqli_query($conn, "SELECT * FROM subject_score ");
      while($row = mysqli_fetch_array($query)){
        $student = $row['student'];
        ?>
       data.addColumn('number', '<?php echo $student; ?>');
        <?php
      }
      ?>

      data.addRows([
        <?php
        $query = mysqli_query($conn, "SELECT * FROM subject_score");
        while($row = mysqli_fetch_array($query)){
          $id = $row['scoreid'];
          $student = $row['student'];
          $test1 = $row['test1'];
          $test2 = $row['test 2'];
          $test3 = $row['test 3'];

          ?>
           [<?php echo $id; ?>,  <?php echo $test1; ?>, <?php echo $test2; ?>, <?php echo $test3; ?>, 60.3],
          <?php
        }
        ?>
      ]);

      var options = {
        chart: {
          title: 'The students Performance in IT-PM',
          subtitle: 'In all the Tests'
        },
        width: 900,
        height: 500,
        axes: {
          x: {
            0: {side: 'bottom'}
          }
        }
      };

      var chart = new google.charts.Line(document.getElementById('line_top_x'));

      chart.draw(data, google.charts.Line.convertOptions(options));
    }
  </script>
</head>
<body>
  <div id="line_top_x"></div>
</body>
</html>

