<?php
session_start();
session_destroy();
$msg = 'Vous avez été déconnecté.';
header('Location:index.php?msg='.$msg);
?>
