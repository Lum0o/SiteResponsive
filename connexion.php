<?php require_once "config.php"; ?>
<html>
<head>
</head>
<body>
  <?php require "menu.php"; ?>
  <h1>Connexion</h1>
  <form method="post" action="login.php">
    <input type='email' name='email' />
    <input type='password' name='password' />
  </form>
</body>
</html>
