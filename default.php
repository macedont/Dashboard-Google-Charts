<?php
	include 'conexao/conexao.php';
	$clienteAno = $pdo->query("SELECT sum(quantidade) as total FROM clientes")->fetch();
	$totalFaturamento = $pdo->query("SELECT sum(valor_venda) as total FROM vendas")->fetch();
	$totalVendas = $pdo->query("SELECT sum(quantidade_venda) as total FROM vendas")->fetch();

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card text-white bg-primary">
					<div class="card-header">
						Total Clientes / Ano
					</div>
					<div class="card-body">
						<h2 class="card-title text-center"><?= $clienteAno["total"] ?> 
						<span style="font-size: 10px;">/ unid</span></h2>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card text-white bg-success">
					<div class="card-header">
						Faturamento Anual
					</div>
					<div class="card-body">
						<h2 class="card-title text-center">R$ <?= $totalFaturamento["total"] ?>
						<span style="font-size: 10px;">/ BRL</span></h2>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card text-white bg-dark">
					<div class="card-header">
						Quantidade Vendas
					</div>
					<div class="card-body">
						<h2 class="card-title text-center"><?= $totalVendas["total"] ?>
						<span style="font-size: 10px;">/ quantidade</span></h2>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>