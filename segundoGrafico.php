<?php
  include 'conexao.php';
  $sql = $pdo->query("SELECT * FROM cidades limit 6")->fetchAll();
?>
<html>
<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([  
          ['Cidade', 'População', {role: 'style'}],
          <?php
            foreach($sql as $value){
              $cidade = $value["cidade"];
              $populacao = $value["populacao"];
          ?>
          ["<?php echo $cidade ?>", <?php echo $populacao ?>, '#ADD8E6' ],

        <?php } ?>
        ]);

        var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "População das cidades",
        bar: {groupWidth: "75%"},
        legend: { position: "bottom" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("graficoCidades"));
      chart.draw(view, options);
  }
  </script>  </head>
  <body>
    <div id="graficoCidades" style="height: 400px;"></div>
  </body>
</html>