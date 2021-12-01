<?php
require_once "config.php";
$sql = "SELECT * FROM user WHERE mail = :email";
$dataBinded=array(
  ':email'   => $_POST['email']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = current($pre->fetchAll(PDO::FETCH_ASSOC));//current prend la première ligne du tableau
if(isset($user)){
  $msg = "Un utilisateur possède déjà cette email";
  header("Location:index.php?msg=".$msg);
}

$sql = "INSERT INTO user(nom,prenom,mail,password,admin) VALUES(:last_name,:first_name,:email,SHA1(:password),0)";
$dataBinded=array(
  ':email'   => $_POST['email'],
  ':password'=> $_POST['password'],
  ':first_name'=> $_POST['first_name'],
  ':last_name'=> $_POST['last_name'],
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

$msg = "vous pouver vous connecter";

$to = $_POST['email'];
$subject = 'Bienvenue parmis nous!';
$message = "
<html>
<head>
<title>Création de votre compte </title>
</head>
<body>

<h1>Bienvenue sur notre portfolio!</h1>

<p>Bienvenue sur notre site et merci de nous accorder votre temps. Sachez avant tout que toute remarque constructive nous étant adressée sera acceuillie avec grand plaisir afin de nous aider à développer notre projet.</br>Merci de votre aide et bonne visite!
</br>
</br>
<footer>
Fol Killian</br>Guillian Pipart
</footer>
</body>
</html>
";

mail($to,$subject,$message);//impossible à tester mais approuvé par thibault(il vous as autorisé à le frapper si ça marche pas)
header("Location:index.php?msg=$msg");//on le redirige sur la page d'accueil du site !
?>
