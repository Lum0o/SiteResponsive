<?php
require_once "config.php";
$id=$_GET['id'];
if(!empty($_FILES['imgprog'])){
  $destination = "img/".$_FILES['imgprog']['name'];
  move_uploaded_file($_FILES['imgprog']['tmp_name'],$destination);
  $sql = "UPDATE concepteurs SET img = '.$destination.' WHERE id='.$id.'";
  $pre = $pdo->prepare($sql);
  $pre->execute();
}

if(!empty($_POST['alt'])){

  $dataBinded=array(
    ':alt'=> $_POST['alt']
  );
  $sql = "UPDATE concepteurs SET imgalt = :alt WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

if(!empty($_POST['description'])){

  $dataBinded=array(
    ':description'=> $_POST['description']
  );
  $sql = "UPDATE concepteurs SET description = :description WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}

if(!empty($_POST['header'])){

  $dataBinded=array(
    ':header'=> $_POST['header']
  );
  $sql = "UPDATE concepteurs SET header = :header WHERE id=$id";
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
}
$msg = 'Concepteur bien modifié.';
header('Location:adminpanel.php?msg='.$msg);//on le redirige sur la page d'accueil du site !
?>
