<?php

$servidor = "localhost";
$banco = "base_cidades";
$senha = "";
$user = "root";
$dsn = ("mysql:host=$servidor; dbname=$banco");

$pdo = new \PDO($dsn, $user, $senha);