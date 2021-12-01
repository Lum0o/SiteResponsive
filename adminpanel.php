<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen"/>
  <link rel="stylesheet" href="css/project.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title> Admin panel</title>
</head>
<body>
  <?php
  require_once "config.php";
  $titleNavbar="Admin panel";
  require_once "navbar.php";
  if (empty($_SESSION['user']) || $_SESSION['user']['admin'] == 0){
      header('Location:index.php');
  }
?>
<div class="mt45 block orange darken-1">
  <h2>users</h2>
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
        <form class="container" action="modifuser.php?id=<?php echo $user['id']; ?>" method="post">

          <div class="row">
            <div class="input-field col s6">
              <input name="first_name" type="text" class="validate">
              <label for="first_name">Nom ( <?php echo $user['nom']; ?> )</label>
            </div>
            <div class="input-field col s6">
              <input name="last_name" type="text" class="validate">
              <label for="last_name">Prénom ( <?php echo $user['prenom']; ?> )</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input name="email" type="email" class="validate">
              <label for="email">Email ( <?php echo $user['mail']; ?> )</label>
            </div>
            <div class="input-field col s6">
              <input name="admin" type="text" class="validate">
              <label for="admin">Admin ( <?php echo $user['admin']; ?> ) oui/non</label>
            </div>
          </div>
          <div class=" s12 modal-footer">
            <button type="submit" class="modal-close waves-effect waves-green btn-flat">Modifier</button>
            <a href="deluser.php?id=<?php echo $user['id']; ?>" class="modal-close waves-effect waves-red btn-flat">Supprimer</a>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>

<div class="block orange darken-2">
  <h2 class="center">projects</h2>
</div>
<?php
$sql = "SELECT * FROM projet";
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach($data as $proj){ ?>
  <div class="row">
    <div class="col s3">
      <h3 class="mt45 center red-text lighten-2"><?php echo $proj['titre']; ?></h3>
      <p class="center flow-text"> <?php echo $proj['description']; ?> </p>
      <a class="modal-trigger" href="#modifproject<?php echo $proj['id'] ?>" style="margin-left: 20%;text-decoration: none;"><i class="col s3 center large material-icons">build</i></a>
    </div>
    <div class="parallax-container">
      <div class="python parallax"><img src="<?php echo $proj['img_background']; ?>" alt="<?php echo $proj['imgalt']; ?>"></div>
    </div>
  </div>
  <div id="modifproject<?php echo $proj['id'] ?>" class="modal">
    <div class="modal-content">
      <h4 class="center">Modifications <?php echo $proj['titre']?></h4>
      <form class="container" action="modifproj.php?id=<?php echo $user['id']; ?>" method="post" enctype="multipart/form-data">
        <div class="input-field col s12">
          <input name="titre" type="text" class="validate">
          <label for="titre">Titre ( <?php echo $proj['titre']; ?> )</label>
        </div>
        <div class="input-field col s12">
          <input name="description" type="text" class="validate">
          <label for="description">Description</label>
        </div>
        <div class="input-field">
          <input name="imgproj" type="file" class="validate">
        </div>
        <div class="">
          <img src="<?php echo $proj['img_background']; ?>" alt="<?php echo $proj['imgalt']; ?>" style="width : 100%;">
        </div>
        <div class="input-field col s6">
          <input name="alt" type="text" class="validate">
          <label for="alt">Description image ( <?php echo $proj['imgalt']; ?> )</label>
        </div>
        <div class="input-field">
          <textarea name="enjeux" type="textarea" class="validate materialize-textarea"></textarea>
          <label for="enjeux">Enjeux projet</label>
        </div>
        <div class="input-field">
          <textarea name="cdc" type="textarea" class="validate materialize-textarea"></textarea>
          <label for="cdc">Cahier des charges</label>
        </div>
        <div class="right">
          <button type="submit" class="modal-close waves-effect waves-green btn-flat">Modifier</button>
          <a href="deluser.php?id=<?php echo $user['id']; ?>" class="modal-close waves-effect waves-red btn-flat">Supprimer</a>
        </div>
        </form>
        <div class="stick"></div>
        <h3 class="center">concepteurs</h3>
        <?php
        $id = $proj['id'];
        $sql = "SELECT * FROM concepteurs WHERE projet_id = $id";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $programmers = $pre->fetchAll(PDO::FETCH_ASSOC); ?>
        <div class="row">
          <?php
          foreach ($programmers as $prog) {
            ?>
            <div class="col s10">
              <ul class="z-depth-1 collapsible">
                <li class="row">
                  <div class="grey lighten-4 collapsible-header">
                    <div class="col l1 m2 s3" >
                      <img src=" <?php echo $prog['img']; ?> " alt=" <?php echo $prog['imgalt']; ?> " class="circle responsive-img"> <!-- notice the "circle" class -->
                    </div>
                    <div class="col l11 m10 s9">
                      <p class="black-text">
                        <?php echo $prog['header']; ?>
                      </p>
                    </div>
                  </div>
                  <div class="grey lighten-4 collapsible-body">
                    <p>
                      <?php echo $prog['description']; ?>
                    </p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="valign-wrapper">
              <a href="#modifprog<?php echo $prog['id'] ?>" style="margin-top: 45px;margin-bottom: 45px;" class="grey lighten-1 modal-trigger btn-floating btn-large waves-effect waves-light red"><i class="material-icons">build</i></a>
            </div>
            <div id="modifprog<?php echo $prog['id'] ?>" class="modal">
              <div class="modal-content">
                <h4 class="center">Modifications <?php echo $prog['header']?></h4>
                <form class="container" action="modifprog.php?id=<?php echo $prog['id']; ?>" method="post" enctype="multipart/form-data">

                  <div class="input-field">
                    <input name="header" type="text" class="validate">
                    <label for="header">Nom Prénom ( <?php echo $prog['header']; ?> )</label>
                  </div>
                  <div class="row">
                    <div class="input-field col s8">
                      <input name="imgprog" type="file" class="validate">
                    </div>
                    <div class="col s4">
                      <img src="<?php echo $prog['img']; ?>" alt="<?php echo $prog['imgalt']; ?>"style="width : 100%;">
                    </div>
                  </div>
                  <div class="input-field s12">
                    <input name="alt" type="text" class="validate">
                    <label for="alt">Description image</label>
                  </div>
                  <div class="input-field">
                    <textarea name="description" type="textarea" class="validate materialize-textarea"></textarea>
                    <label for="description">Description</label>
                  </div>
                  <div class=" s12 modal-footer">
                    <button type="submit" class="modal-close waves-effect waves-green btn-flat">Modifier</button>
                    <a href="delprog.php?id=<?php echo $prog['id']; ?>" class="modal-close waves-effect waves-red btn-flat">Supprimer</a>
                  </div>
                </form>
              </div>
            </div>
            <?php
          }
          ?>
          <div class="stick"></div>
          <h3 class="center">Carrousel</h3>
          <?php
          $sql = "SELECT * FROM carrousel WHERE projet_id = $id";
          $pre = $pdo->prepare($sql);
          $pre->execute();
          $carrousel = $pre->fetchAll(PDO::FETCH_ASSOC);
          ?>
          <div class="row">
            <?php
            foreach ($carrousel as $car) {
              ?>
              <div class="col s1">
                <a href="#modifcar<?php echo $prog['id'] ?>" class="grey lighten-1 modal-trigger btn-floating btn-large waves-effect waves-light red" style="margin-top:10px;"enctype="multipart/form-data"><i class="material-icons">build</i></a>
              </div>
              <div class="col s7">
                <h5 class="center"><?php echo $car['titre']; ?></h5>
                <h6 class="center"><?php echo $car['description']; ?></h6>
              </div>
              <div class="col s4">
                <img src="<?php echo $car['img']; ?>" alt="<?php echo $car['imgalt']; ?>"style="width : 100%;">
              </div>
              <div id="modifcar<?php echo $car['id'] ?>" class="modal">
                <div class="modal-content">
                  <h4 class="center">Modifications <?php echo $car['titre'];?></h4>
                  <form class="container" action="modifcar.php?id=<?php echo $car['id']; ?>" method="post">


                      <div class="input-field s12">
                        <input name="titre" type="text" class="validate">
                        <label for="titre">Titre ( <?php echo $car['titre']; ?> )</label>
                      </div>
                      <div class="input-field s12">
                        <input name="description" type="text" class="validate">
                        <label for="description">Description</label>
                      </div>
                      <div class="input-field s12">
                        <input name="imgcar" type="file" class="validate">
                      </div>
                      <img src="<?php echo $car['img']; ?>" alt="<?php echo $car['imgalt']; ?>"style="width : 100%;">
                      <div class="input-field s12">
                        <input name="alt" type="text" class="validate">
                        <label for="alt">Description image</label>
                      </div>

                    <div class=" s12 modal-footer">
                      <button type="submit" class="modal-close waves-effect waves-green btn-flat">Modifier</button>
                      <a href="delcar.php?id=<?php echo $car['id']; ?>" class="modal-close waves-effect waves-red btn-flat">Supprimer</a>
                    </div>
                  </form>
                </div>
              </div>
              <?php
            }
            ?>
          </div>

      </div>
    </div>
  </div>
<?php } ?>

<?php require_once "footer.php" ?>
<script src="js/jquery.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
