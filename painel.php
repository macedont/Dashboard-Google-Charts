  <?php 
  	include 'conexao/conexao.php';
  	$total = $pdo->query("SELECT * FROM clientes")->fetchAll();
  	$vendas = $pdo->query("SELECT * FROM vendas")->fetchAll();

  ?>
  <html>
  <head>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(graficoLinha);

      function graficoLinha	() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Quantidade'],
          <?php 
          	foreach($total as $value){
          		$mes = $value['cliente_mes'];
          		$quantidade = $value['quantidade'];
          ?>
          ["<?php echo $mes ?>", <?php echo $quantidade ?>],
      	  <?php } ?>
        ]);

        var options = {
          title: 'Clientes Cadastrados',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('graficoLinha'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
    	google.charts.load('current', {'packages':['corechart']});
    	google.charts.setOnLoadCallback(graficoPizza);
	      function graficoPizza() {
	        var data = google.visualization.arrayToDataTable([
	          ['Mês', 'Quantidade'],
	          <?php
	            foreach($vendas as $value){
	              $quantidade = $value["quantidade_venda"];
	              $mes = $value["ref_venda"];
	          ?>
	          ["<?php echo $mes ?>", <?php echo $quantidade ?>],

	        <?php } ?>
	        ]);

	        var options = {
	          title: 'Quantidade Venda',
	          is3D: true,
	        };

	        var chart = new google.visualization.PieChart(document.getElementById('graficoPizza'));
	        chart.draw(data, options);
	    }
    </script>
  </head>
  <body>
  	<div class="container-fluid" style="margin-top: 30px;">
  		<div class="row">
  			<div class="col-md-8">
    			<div id="graficoLinha"></div>
  			</div>

  			<div class="col-md-4">
    			<div id="graficoPizza" style="width: 288px;"></div>
  			</div>
  		</div>
  	</div>
  </body>
</html>