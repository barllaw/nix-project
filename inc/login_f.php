<?php

require_once('config.php');

$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE login = ? AND password = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$login, $password]);

$rows = $stmt->fetch(PDO::FETCH_OBJ);
if($rows < 1)
    exit('Not correct login or password');

$_SESSION['id'] = $rows->id;
$_SESSION['login'] = $rows->login;
$_SESSION['password'] = $rows->password;

header('Location: profile');