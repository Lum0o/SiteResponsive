<?php
require_once "config.php";
$sql = "SELECT * FROM user WHERE mail = :email AND password = :password";
$dataBinded=array(
  ':email'  => $_POST['email'],
  ':password'=> SHA1($_POST['password'])
<<<<<<< HEAD
);
$_POST['password'] = SHA1($_POST['password']);
$sql = "SELECT * FROM user WHERE mail = :email AND password = :password";
$dataBinded=array(
    ':email'=> $_POST['email'],
    ':password'=> $_POST['password']
=======
>>>>>>> ecb6598216626bf7a0fb9f8f6e7f5e7beefbd032
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = current($pre->fetchAll(PDO::FETCH_ASSOC));//current prend la première ligne du tableau
if(empty($user)){ //vérifie si le resultat est vide !
  //non connecté
  echo "Email ou mot de passe incorrect !";
}else{
  $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
}
header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>
