<?php
require_once "config.php";
$id=$_GET['id'];
if(!empty($_FILES['imgcar'])){
  $destination = "img/".$_FILES['imgcar']['name'];
  move_uploaded_file($_FILES['imgcar']['tmp_name'],$destination);
  $sql = "UPDATE carrousel SET img = '.$destination.' WHERE id='.$id.'";
  $pre = $pdo->prepare($sql);
  $pre->execute();
}

if(!empty($_POST['alt'])){

  $dataBinded=array(
    ':alt'=> $_POST['alt']
  );
  $sql = "UPDATE carrousel SET imgalt = :alt WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

if(!empty($_POST['description'])){

  $dataBinded=array(
    ':description'=> $_POST['description']
  );
  $sql = "UPDATE carrousel SET description = :description WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

if(!empty($_POST['titre'])){

  $dataBinded=array(
    ':titre'=> $_POST['titre']
  );
  $sql = "UPDATE carrousel SET titre = :titre WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

$msg = 'Carrousel bien modifié.';
header('Location:adminpanel.php?msg='.$msg);//on le redirige sur la page d'accueil du site !
?>
