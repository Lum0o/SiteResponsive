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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Oswald:wght@300;400&family=Teko:wght@600&display=swap" rel="stylesheet">
  <?php
  require_once "config.php";

  $id=$_GET['id'];

  $sql = "SELECT * FROM projet WHERE id = $id";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $proj = current($pre->fetchAll(PDO::FETCH_ASSOC));

  $sql = "SELECT * FROM concepteurs WHERE projet_id = $id";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $programmers = $pre->fetchAll(PDO::FETCH_ASSOC);

  $sql = "SELECT * FROM carrousel WHERE projet_id = $id";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $carrousel = $pre->fetchAll(PDO::FETCH_ASSOC);

  $titleNavbar = $proj['Navbar'];
  ?>

  <title> <?php echo $proj['titre']; ?> </title>
</head>

  <body>

    <?php require_once "navbar.php"; ?>

    <div class="l12 m12 s12 parallax-container mt45">
      <div class="python parallax"><img src="<?php echo $proj['img_background']; ?>" alt="<?php echo $proj['imgalt']; ?>"></div>
    </div>

    <div class="block red lighten-2">
      <h2 class="white-text">Les concepteurs du projet</h2>
    </div>



    <div class="row mt20">
      <?php
      foreach ($programmers as $prog) {
        ?>
        <div class="col s10 offset-s1 m8 offset-m2 l6">
          <ul class="z-depth-1 collapsible">
            <li class="row">
              <div class="grey lighten-4 collapsible-header">
                <div class="col l1 m2 s3">
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

        <?php
      }
      ?>
      </div>

      <div class="row">

        <div class="col l6 m6 s12">
          <div class="block red lighten-2">
            <h2 class="white-text">Enjeux du projet</h2>
          </div>

          <div class="block2">
            <p class="dark-text flow-text fontOswald">
              <?php echo $proj['enjeux']; ?>
            </div>
          </div>

          <div class="col l6 m6 s12">
            <div class="block red lighten-2">
              <h2 class="white-text">Cahier des charges</h2>
            </div>
            <div class="block2">
              <p class="dark-text flow-text fontOswald">
                <?php echo $proj['cdc']; ?>
              </p>
            </div>
          </div>

        </div>
        <div class="block red lighten-2">
          <h2 class="white-text">Forme finale du projet</h2>
        </div>

        <div class="carousel carousel-slider center">
          <div class="carousel-fixed-item center">
          </div>
          <?php
          $i=0;
          foreach ($carrousel as $page) {
            $i++;
            $url="";
            switch ($i) {
              case 1:
              $url="one";
              break;

              case 2:
              $url="two";
              break;

              case 3:
              $url="three";
              break;

              case 4:
              $url="four";
              break;

              case 5:
              $url="five";
              break;

              default:
              $url = "one";
              break;
            }
            ?>

            <div class="carousel-item dark-text" href="#<?php echo $url ?>!">
              <h2><?php echo $page['titre']; ?></h2>
              <p class="dark-text"><?php echo $page['description']; ?></p>
              <img src="<?php echo $page['img']; ?>" alt="<?php echo $page['imgalt']; ?>">
            </div>

            <?php
          }
        ?>
      </div>
      <?php require_once "footer.php"; ?>
        <!--JavaScript at end of body for optimized loading-->
        <script src="js/jquery.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/script.js"></script>
      </body>
      </html>
