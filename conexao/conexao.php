<?php

$servidor = "localhost";
$banco = "dashboard"; //base_cidades é o outro banco
$senha = "";
$user = "root";
$dsn = ("mysql:host=$servidor; dbname=$banco");

$pdo = new \PDO($dsn, $user, $senha);