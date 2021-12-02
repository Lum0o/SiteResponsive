<?php
require_once "config.php";
$id = $_GET['id'];

if(!empty($_FILES['imgproj'])){
  $destination = "img/".$_FILES['imgproj']['name'];
  move_uploaded_file($_FILES['imgproj']['tmp_name'], $destination);

  $sql = "UPDATE projet SET img_background = '.$destination.' WHERE id = '.$id.'";
);

$pre = $pdo->prepare($sql);
$pre->execute();
}

if(!empty($_POST['alt'])){

  $dataBinded=array(
    ':alt'=> $_POST['alt']
  );
  $sql = "UPDATE projet SET imgalt = :alt WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

if(!empty($_POST['description'])){

  $dataBinded=array(
    ':description'=> $_POST['description']
  );
  $sql = "UPDATE projet SET description = :description WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

if(!empty($_POST['titre'])){

  $dataBinded=array(
    ':titre'=> $_POST['titre']
  );
  $sql = "UPDATE projet SET titre = :titre WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}
if(!empty($_POST['enjeux'])){

  $dataBinded=array(
    ':enjeux'=> $_POST['enjeux']
  );
  $sql = "UPDATE projet SET enjeux = :enjeux WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}
if(!empty($_POST['cdc'])){

  $dataBinded=array(
    ':cdc'=> $_POST['cdc']
  );
  $sql = "UPDATE projet SET cdc = :cdc WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}


$msg = 'Projet bien modifié.';
header('Location:adminpanel.php?msg='.$msg);//on le redirige sur la page d'accueil du site !
?>
