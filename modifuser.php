<?php
require_once "config.php";
$id=$_GET['id'];

if(!empty($_POST['email'])){

$dataBinded=array(
    ':email'=> $_POST['email']
);
  $sql = "UPDATE user SET mail = :email WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

if(!empty($_POST['first_name'])){

$dataBinded=array(
    ':first_name'=> $_POST['first_name']
);
  $sql = "UPDATE user SET nom = :first_name WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

if(!empty($_POST['last_name'])){

$dataBinded=array(
    ':last_name'=> $_POST['last_name']
);
  $sql = "UPDATE user SET prenom = :last_name WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}
if(!empty($_POST['admin'])){

$dataBinded=array(
    ':admin'=> strtolower($_POST['admin'])=="oui"?1:0
);
  $sql = "UPDATE user SET admin = :admin WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

header('Location:adminpanel.php');//on le redirige sur la page d'accueil du site !
?>
