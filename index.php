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
  <div class="navbar-fixed">
    <nav class="nav-extended">
      <div class="nav-wrapper">
        <h1 class="brand-logo">Projet 4</h1>
        <!-- Modal Trigger -->
        <a class="right waves-effect waves-light button modal-trigger mr20" href="#modal1"><i class="material-icons">account_circle</i></a>


        <!-- Modal Structure -->
        <div id="modal1" class="modal">
          <div class="modal-content">
            <h4>Connexion</h4>
            <p>Vous pouvez accèder à votre compte ici! Vous êtes nouveaux? Créez votre compte dès maintenat!</p>
          </div>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" type="text" class="validate">
                  <label for="first_name">Nom</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Prénom</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                  <div class="input-field col s6">
                    <input id="password" type="password" class="validate">
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
            <li class="tab"><a href="index.html">Home</a></li>
            <li class="tab"><a href="Projet 1.html">Projet 1</a></li>
            <li class="tab"><a href="Projet 2.html">Projet 2</a></li>
            <li class="tab"><a href="Projet 3.html">Projet 3</a></li>
          </ul>
        </div>
      </nav>
    </div>


    <div class="l12 m12 s12 parallax-container mt45">
      <div class="python parallax"><img src="img/wallpaper-python.jpg" alt="Projet wallpaper code python"></div>
    </div>

    <div class="l12 m12 s12 block row">
      <div class="col l5 offset-l1 m6 offset-m1 s10 offset-s1">
        <h2 class="red-text lighten-2"> PYTHON - projet juste prix </h2>
        <p class="flow-text"> Projet réalisé par Guilian Pipart et Alexandre Gouveia encadré par Antoine Di Roberto</p>
      </div>
      <div class="col l2 offset-l2 m2 offset-1 s4 offset-s3">
        <a class="waves-effect waves-light btn red lighten-2" href="Projet 1.html">Projet 1</a>
      </div>
    </div>

    <div class="l12 m12 s12 parallax-container">
      <div class="c parallax"><img src="img/wallpaper-c.jpg" alt="Projet wallpaper code c"></div>
    </div>

    <div class="l12 m12 s12 block row">
      <div class="col l5 offset-l1 m6 offset-m1 s10 offset-s1">
        <h2 class="red-text lighten-2"> C et BASH - projet puissance 4 </h2>
        <p class="flow-text"> Projet réalisé par Guilian Pipart et Hugo Maestracci encadré par Nicolas Bercher </p>
      </div>
      <div class="col l2 offset-l2 m2 offset-1 s4 offset-s3">
        <a class="waves-effect waves-light btn red lighten-2" href="Projet 2.html">Projet 2</a>
      </div>
    </div>

    <div class="l12 m12 s12 parallax-container">
      <div class="site parallax"><img src="img/wallpaper-site.jpg" alt="Projet wallpaper code html"></div>
    </div>

    <div class="l12 m12 s12 block row">
      <div class="col l5 offset-l1 m6 offset-m1 s10 offset-s1">
        <h2 class="red-text lighten-2"> HTML et CSS - site basique </h2>
        <p class="flow-text"> Projet réalisé par Fol Killian et Emile Ricordel<br> encadré par Antoine Di Roberto </p>
      </div>
      <div class="col l2 offset-l2 m2 offset-1 s4 offset-s3">
        <a class="waves-effect waves-light btn red lighten-2" href="Projet 3.html">Projet 3</a>
      </div>
    </div>
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Merci de porter attention à ce projet</h5>
            <p class="grey-text text-lighten-4">Il à été réalisé par Fol Killian et Pipart Guilian</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="https://materializecss.com/">Materialize</a></li>
              <li><a class="grey-text text-lighten-3" href="https://jquery.com/">Jquery</a></li>
              <li><a class="grey-text text-lighten-3" href="https://github.com/">GitHub</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2021 Copyright Text
          <a class="grey-text text-lighten-4 right waves-effect waves-teal btn-flat" href="#!" Onclick="alder()" id="secret">;)</a>
        </div>
        <!-- Modal Trigger -->
        <a class="right waves-effect waves-light button modal-trigger mr20" href="#modal2"><i class="material-icons">chat</i></a>

        <!-- Modal Structure -->
        <div id="modal2" class="modal">
          <div class="modal-content">
            <h4>Formulaire de contact</h4>
            <p>Besoin de nous contacter? Aidez nous à vous identifier!</p>
          </div>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" type="text" class="validate">
                  <label for="first_name">Nom</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Prénom</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" class="validate">
                  <label for="email">Email</label>
                  <div class="input-field col s6">
                    <input id="observation" type="text" class="validate">
                    <label for="observation">Renseignez votre remarque/problème ici:</label>
                  </div>
                  <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Envoyer</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </footer>

    <div class="alder" id="alderiate">
      <img class="l12 m12 s12" src="img/alder.png" alt="alderiate projet">
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script src="js/jquery.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </body>
  </html>
