<?php
require_once "config.php";
$sql = "INSERT INTO user(nom,prenom,mail,password) VALUES(:last_name,:first_name,:email,:password)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':first_name'=> $_POST['first_name'],
    ':last_name'=> $_POST['last_name']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>
