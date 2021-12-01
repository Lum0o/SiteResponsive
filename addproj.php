<?php
require_once "config.php";

if (isset($_POST['upload'])) {
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder = "img/".$filename;
  move_uploaded_file($tempname, $folder);
}

$sql = "INSERT INTO concepteurs(img_background,imgalt,titre,description,enjeux,cdc,navbar) VALUES(:destination,:alt,:titre,:description,:enjeux,:cdc,:navbar)";
$dataBinded=array(
  ':titre'   => $_POST['titre'],
  ':alt'=> $_POST['alt'],
  ':description'=> $_POST['description'],
  ':enjeux'=> $_POST['enjeux'],
  ':cdc'=> $_POST['cdc'],
  ':navbar'=> $_POST['navbar'],
  ':destination' => $folder
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:adminpanel.php');
?>
