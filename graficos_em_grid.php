<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php include 'primeiroGrafico.php' ?>
			</div>
			<div class="col-md-6">
				<?php include 'terceiroGrafico.php'; ?>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<?php include 'segundoGrafico.php' ?>
			</div>
		</div>
	</div>
</body>
</html>