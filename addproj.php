<?php
require_once "config.php";

$destination = "img/".$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],$destination);
$pre = $pdo->prepare($sql);
$pre->execute();


$sql = "INSERT INTO concepteurs(img_background,imgalt,titre,description,enjeux,cdc,navbar) VALUES(:destination,:alt,:titre,:description,:enjeux,:cdc,:navbar)";
$dataBinded=array(
  ':titre'   => $_POST['titre'],
  ':alt'=> $_POST['alt'],
  ':description'=> $_POST['description'],
  ':enjeux'=> $_POST['enjeux'],
  ':cdc'=> $_POST['cdc'],
  ':navbar'=> $_POST['navbar'],
  ':destination' => $destination
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:adminpanel.php');
?>
