<?php
require_once "config.php";
$sql = "INSERT INTO user(nom,prenom,mail,password,admin) VALUES(:last_name,:first_name,:email,SHA1(:password),0)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':first_name'=> $_POST['first_name'],
    ':last_name'=> $_POST['last_name'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


$sql = "SELECT * FROM user WHERE mail = ':email'";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = current($pre->fetchAll(PDO::FETCH_ASSOC));
$_SESSION ['user'] = $user;
header('Location:index.php');//on le redirige sur la page d'accueil du site !
?>
