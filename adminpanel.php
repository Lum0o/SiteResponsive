<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/project.css">
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
  ?>
  <!--
  if (isset($_SESSION['user'])){
  if (isset($_SESSION['user']) && $_SESSION['user']['admin'] == 1){
  header('Location:index.php');
}
}else{header('Location:index.php');}
?> -->
<div class="mt45 block orange darken-1">
  <h2 class="center">users</h2>
</div>
<div class="">
  <div class="row">
    <div class="col s3">
      <h3 class="center">Nom et prénom</h3>
    </div>
    <div class="col s3">
      <h3 class="center">Email</h3>
    </div>
    <div class="col s3">
      <h3 class="center">Admin</h3>
    </div>
    <div class="col s3">
      <h3 class="center">Modifier</h3>
    </div>
  </div>
  <?php
  $sql = "SELECT * FROM user ORDER BY admin DESC";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $data = $pre->fetchAll(PDO::FETCH_ASSOC);

  foreach($data as $user){ ?>
    <div class="row bloc_user">
      <h4 class="col s3 center"><?php echo $user['nom']." ".$user['prenom'] ?></h4>
      <h4 class="col s3 center"><?php echo $user['mail'] ?></h4>
      <h4 class="col s3 center"><?php
                              if($user['admin']==0){
                                echo 'Non';
                              } else {echo 'Oui';} ?></h4>
      <a class="modal-trigger" href="#modifuser<?php echo $user['id'] ?>"><i class="col s3 center medium material-icons">build</i></a>
    </div>

    <div id="modifuser<?php echo $user['id'] ?>" class="modal">
    <div class="modal-content">
      <h4 class="center">Modifications <?php echo $user['nom']." ".$user['prenom'] ?></h4>
      <form class="container" action="modifuser.php" method="post">
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Nom ( <?php echo $user['nom']; ?> )</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Prénom ( <?php echo $user['prenom']; ?> )</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email ( <?php echo $user['mail']; ?> )</label>
          </div>
          <div class="input-field col s6">
            <input id="admin" type="password" class="validate">
            <label for="admin">Admin ( <?php echo $user['admin']; ?> )</label>
          </div>
          </div>
          <div class=" s12 modal-footer">
            <a href="modifuser.php?id=<?php echo $user['id']; ?>" class="modal-close waves-effect waves-green btn-flat">Modifier</a>
            <a href="deluser.php?id=<?php echo $user['id']; ?>" class="modal-close waves-effect waves-red btn-flat">Supprimer</a>
          </div>
      </form>
    </div>
  </div>
</div>
  <?php } ?>
</div>

<div class="block orange darken-2">
  <h2 class="center">projects</h2>
</div>
<div class="">

</div>

<div class="block orange darken-3">
  <h2 class="center">contacts</h2>
</div>
<div class="">

</div>

<?php require_once "footer.php" ?>
<script src="js/jquery.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
