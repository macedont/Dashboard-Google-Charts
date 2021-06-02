<?php
include 'conexao/conexao.php';

$dados = $_POST;

$insert = $pdo->prepare("INSERT INTO vendas (quantidade_venda, ref_venda, valor_venda) values(?, ?, ?)")
			  ->execute([$dados["qtde"], $dados["ref_venda"], $dados["valor"]]);

if($insert)
	header("Location: dashboard.php?pagina=vendas&success=1");

