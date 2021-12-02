<?php
require_once "config.php";
$id=$_GET['id'];

$sql = "DELETE FROM carrousel WHERE projet_id = $id";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

$sql = "DELETE FROM carrousel WHERE projet_id = $id";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

$sql = "DELETE FROM carrousel WHERE id = $id";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$msg = 'projet bien supprimé.';
header('Location:adminpanel.php?msg='.$msg);//on le redirige sur la page d'accueil du site !
?>
