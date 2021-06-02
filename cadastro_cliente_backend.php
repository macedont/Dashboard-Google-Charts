<?php
include 'conexao/conexao.php';

$dados = $_POST;

$insert = $pdo->prepare("INSERT INTO clientes (quantidade, cliente_mes) values(?, ?)")
			  ->execute([$dados["qtde"], $dados["ref"],]);

if($insert)
	header("Location: dashboard.php?pagina=clientes&success=1");

