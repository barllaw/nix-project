<?php head('Home page'); ?>

<h2>Profile</h2>

<p><span>Login: </span> <b><?=$_SESSION['login']?></b></p>
<p><span>Password: </span> <b><?=$_SESSION['password']?></b></p>

<?php footer(); ?>
