<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Vendas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<?php
			$retorno = isset($_GET['success']) ?? null;
			if($retorno){
				echo "<div class='alert alert-success'>
					  	<h4>Venda cadastrada com sucesso.</h4>
					  </div>";
			}
		?>
		
		<div style="float: right; margin-bottom: 5px;" >
			<a href="#" class="btn btn-primary">Relatório</a>
		</div>
		<form action="cadastro_vendas_backend.php" method="post">
			<div class="form-group">
					<label for="qtde">Quantidade:</label>
					<input type="text" class="form-control" id="qtde" name="qtde">
					<label for="valor">Valor:</label>
					<input type="text" class="form-control" id="valor" name="valor">
					<label for="ref_venda">Mês Venda:</label>
					<select class="form-control" name="ref_venda" id="ref_venda">
						<option value="202101">Janeiro</option>
						<option value="202102">Fevereiro</option>
						<option value="202103">Março</option>
						<option value="202104">Abril</option>
						<option value="202105">Maio</option>
						<option value="202106">Junho</option>
						<option value="202107">Julho</option>
						<option value="202108">Agosto</option>
						<option value="202109">Setembro</option>
						<option value="202110">Outubro</option>
						<option value="202111">Novembro</option>
						<option value="202112">Dezembro</option>
					</select>
			</div>
			<div style="float: right; margin-top: 3px;">
				<button type="submit" class="btn btn-success">Enviar</button>
			</div>
		</form>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>