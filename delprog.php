<?php
require_once "config.php";
$id=$_GET['id'];
$sql = "DELETE FROM concepteurs WHERE id = $id";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$msg = 'concepteur bien supprimé.';
header('Location:adminpanel.php?msg='.$msg);//on le redirige sur la page d'accueil du site !
?>
