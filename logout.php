<?php
session_start();
$_SESSION['user'] = "" ;
echo 'You have been logged out.';
header('Location:index.php');
 ?>
