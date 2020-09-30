<?php

require_once('config.php');

$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE login = ? AND password = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$login, $password]);

$rows = $stmt->fetch(PDO::FETCH_ASSOC);
if($rows < 1)
    exit('Not correct login or password');

foreach ($rows as $key => $value) {
    $_SESSION[$key] = $value;
}

header('Location: profile');