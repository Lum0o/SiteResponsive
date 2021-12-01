<?php
require_once "config.php";
$id=$_GET['id'];


$destination = "img/".$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],$destination);
$pre = $pdo->prepare($sql);
$pre->execute();


$sql = "INSERT INTO carrousel(img,imgalt,titre,description,projet_id) VALUES(:destination,:alt,:titre,:description,:id)";
$dataBinded=array(
  ':titre'   => $_POST['titre'],
  ':alt'=> $_POST['alt'],
  ':description'=> $_POST['description'],
  ':id'=> $id,
  ':destination' => $destination
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location:adminpanel.php');
?>
