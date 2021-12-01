<?php
require_once "config.php";
$sql = "SELECT * FROM user WHERE mail = :email AND password = :password";
$dataBinded=array(
  ':email'  => $_POST['email'],
  ':password'=> SHA1($_POST['password'])
);
$_POST['password'] = SHA1($_POST['password']);
$sql = "SELECT * FROM user WHERE mail = :email AND password = :password";
$dataBinded=array(
  ':email'=> $_POST['email'],
  ':password'=> $_POST['password']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = current($pre->fetchAll(PDO::FETCH_ASSOC));//current prend la première ligne du tableau
if(empty($user)){ //vérifie si le resultat est vide !
  //non connecté
  $msg = "Email ou mot de passe incorrect !";
  header('Location:index.php?msg='.$msg);
}else{
  $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
}

$msg = "Bonjour ".$_SESSION['user']['prenom'];
header('Location:index.php?msg='.$msg);//on le redirige sur la page d'accueil du site !
?>
