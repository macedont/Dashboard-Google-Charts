 <?php
            include 'coneccao.php';
            $sql = $pdo->query("SELECT * FROM cidades limit 6")->fetchAll();
?>
        
  <html>
  <head>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cidade', 'População', {role: 'annotation'}],
          <?php
            foreach($sql as $value){
              $cidade = $value["cidade"];
              $populacao = $value["populacao"];
          ?>
          ["<?php echo $cidade ?>", <?php echo $populacao ?>, <?php echo $populacao ?>],

        <?php } ?>
        ]);

        var options = {
          title: 'População das cidades',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="height: 400px"></div>
  </body>
</html>