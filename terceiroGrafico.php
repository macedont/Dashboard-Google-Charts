<?php
  include 'conexao.php';
  $sql = $pdo->query("SELECT * FROM cidades limit 6")->fetchAll();
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Cidades', 'População'],
          <?php
            foreach($sql as $value){
              $cidade = $value["cidade"];
              $populacao = $value["populacao"];
          ?>
          ["<?php echo $cidade ?>", <?php echo $populacao ?>],

        <?php } ?>
        ]);

        var options = {
          title: 'População das cidades',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="height: 500px;"></div>
  </body>
</html>