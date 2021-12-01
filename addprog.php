<?php
require_once "config.php";
$id=$_GET['id'];


$destination = "img/".$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],$destination);
$pre = $pdo->prepare($sql);
$pre->execute();


$sql = "INSERT INTO concepteurs(img,imgalt,header,description,projet_id) VALUES(:destination,:alt,:header,:description,:id)";
$dataBinded=array(
  ':header'   => $_POST['header'],
  ':alt'=> $_POST['alt'],
  ':description'=> $_POST['description'],
  ':id'=> $id,
  ':destination' => $destination
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:adminpanel.php');
?>
