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
  <title> Portofolio - Acceuil Projet</title>
</head>

<body>

  <?php
  require_once "config.php";
  $titleNavbar="Projet 4 & 5";
  require_once "navbar.php";
  ?>



<<<<<<< HEAD
=======
        <!-- Modal Structure -->
        <div id="modal1" class="modal">
          <div class="modal-content">
            <h4>Inscription</h4>
            <p>Bienvenue! Vous êtes nouveaux? Créez votre compte dès maintenat!</p>
          </div>
          <div class="row">
            <form class="col s12" method="post" action="signup.php">
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" name="first_name" type="text" class="validate">
                  <label for="first_name">Prénom</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" name="last_name" type="text" class="validate">
                  <label for="last_name">Nom</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" name="email" type="email" class="validate">
                  <label for="email">Email</label>
                  <div class="input-field col s6">
                    <input id="password" name="password" type="password" class="validate">
                    <label for="password">Mot de passe</label>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Envoyer</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="nav-content">
          <ul class="tabs tabs-transparent">
            <li class="tab"><a href="index.php">Home</a></li>
            <li class="tab"><a href="Projet 1.php">Projet 1</a></li>
            <li class="tab"><a href="Projet 2.php">Projet 2</a></li>
            <li class="tab"><a href="Projet 3.php">Projet 3</a></li>
          </ul>
        </div>
      </nav>
    </div>
>>>>>>> cc7bb1e57812446444771df0073aee7c20ade8f2

    <?php
    $sql = "SELECT * FROM projet"; //number of project
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $projects = $pre->fetchAll(PDO::FETCH_ASSOC);

    foreach($projects as $proj){
      ?>
      <div class="l12 m12 s12 parallax-container mt45">
        <div class="python parallax"><img src="<?php echo $proj['img_background']; ?>" alt="<?php echo $proj['imgalt']; ?>"></div>
      </div>

      <div class="l12 m12 s12 block row">
        <div class="col l5 offset-l1 m6 offset-m1 s10 offset-s1">
          <h2 class="red-text lighten-2"> <?php echo $proj['titre']; ?> </h2>
          <p class="flow-text"> <?php echo $proj['description']; ?> </p>
        </div>
        <div class="col l2 offset-l2 m2 offset-1 s4 offset-s3">
          <a class="waves-effect waves-light btn red lighten-2" href="<?php echo $proj['link']; ?>"> <?php echo $proj['Navbar']; ?></a>
        </div>
      </div>

      <?php
    }
    require_once "footer.php";
    ?>
    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </body>
  </html>
