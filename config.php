<?php

$host = '127.0.0.1';
$user = 'root';
$pass = 'root';
$db_name = 'nix';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);
