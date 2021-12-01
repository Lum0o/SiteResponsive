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
header('Location:adminpanel.php');//on le redirige sur la page d'accueil du site !
?>
