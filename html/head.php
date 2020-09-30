<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<div class="container">
    <div class="navigation-wrap">
        <div class="nav">
            <ul>
                <a href="/">
                    <li>Home</li>
                </a>
                <a href="login">
                    <li>Login</li>
                </a>
                <a href="signup">
                    <li>Sign Up</li>
                </a>
                <?php
                $id = isset($_SESSION['id']) ? $_SESSION['id'] : null;
                if ( $id ):?>
                <a href="posts">
                    <li>List posts</li>
                </a>
                <a href="profile">
                    <li>Profile</li>
                </a>
                <a href="logout">
                    <li>Logout</li>
                </a>
                <?php endif;?>
            </ul>
        </div>
    </div>
    <div class="content-wrap">
