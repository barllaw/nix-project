<?php

require_once 'config.php';


$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE login = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$login]);
$rows = $stmt->fetch(PDO::FETCH_OBJ);

if( $rows )
    exit('This login was registered!');


$sql2 = "INSERT INTO users(login, password) VALUES( ?, ?)";
$query = $pdo->prepare($sql2);
$query->execute([$login, $password]);

$sql = "SELECT * FROM users WHERE login = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$login]);
$rows = $stmt->fetch(PDO::FETCH_OBJ);
foreach ($rows as $key => $value) {
    $_SESSION[$key] = $value;
}
var_dump($_SESSION);

header('Location: profile');