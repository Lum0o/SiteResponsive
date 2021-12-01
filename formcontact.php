<?php
$from = $_POST['email'];
$to = "kfol@gaming.tech";
$subject = 'Formulaire de contact';
$message = "$_POST['last_name'],$_POST['first_name'],$_POST['observation']";

mail($to,$subject,$message);//impossible à tester mais approuvé par thibault(il vous as autorisé à le frapper si ça marche pas)
$msg = "message bien envoyé !";
header('Location:index.php?msg='.$msg);
?>
