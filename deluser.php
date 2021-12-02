<?php
require_once "config.php";
$id=$_GET['id'];
$sql = "DELETE FROM user WHERE id = $id";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$msg = 'Utilisateur bien supprimé.';
header('Location:adminpanel.php?msg='.$msg);
?>
