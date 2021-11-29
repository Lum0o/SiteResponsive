<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen"/>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title> Admin panel</title>
</head>
<body>
  <?php
  require_once "config.php";
  $titleNavbar="Admin panel";
  require_once "navbar.php";
  if (isset($_SESSION['user'])){
    if (isset($_SESSION['user']) && $_SESSION['user']['admin'] == 1){
      header('Location:index.php');
    }
  }else{header('Location:index.php');}
  ?>

</body>
</html>
