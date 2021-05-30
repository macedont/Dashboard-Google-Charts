<?php

$servidor = "localhost";
$banco = "base_cidades";
$senha = "";
$user = "root";
$dsn = ("mysql:host=$servidor; dbname=$banco");


$pdo = new \PDO($dsn, $user, $senha);

//$sql = $pdo->query("SELECT * FROM cidades")->fetchAll();
//print_r($sql);