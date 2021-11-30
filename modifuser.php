<?php
require_once "config.php";
$id=$_GET['id'];

if(!empty($_POST['email'])){
  $sql = "UPDATE user SET mail = :email WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

if(!empty($_POST['first_name'])){
  $sql = "UPDATE user SET nom = :first_name WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

if(!empty($_POST['last_name'])){
  $sql = "UPDATE user SET prenom = :last_name WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

if(!empty($_POST['admin'])){
  $sql = "UPDATE user SET admin = :admin WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

$dataBinded=array(
    ':email'=> $_POST['email'],
    ':first_name'=> $_POST['first_name'],
    ':last_name'=> $_POST['last_name'],
    ':admin'=> $_POST['admin']
);

header('Location:adminpanel.php');//on le redirige sur la page d'accueil du site !
?>
