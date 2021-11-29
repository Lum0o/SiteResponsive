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
  <title> Portofolio - Projet juste prix </title>
</head>

<body>
  <div class="navbar-fixed">
    <nav class="nav-extended">
      <div class="nav-wrapper">
        <h1 class="brand-logo">Project n°1</h1>
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
      </div>
    </nav>
  </div>

  <div class="l12 m12 s12 parallax-container mt45">
    <div class="python parallax"><img src="img/wallpaper-python.jpg" alt="Projet wallpaper code python"></div>
  </div>

  <div class="block red lighten-2">
    <h2 class="white-text">Les concepteurs du projet</h2>
  </div>

  <div class="row mt20">
    <div class="col s10 offset-s1 m8 offset-m2 l4 offset-l1">
      <ul class="z-depth-1 collapsible">
        <li class="row">
          <div class="grey lighten-4 collapsible-header">
            <div class="col l1 m2 s3">
              <img src="img/guilian.jpg" alt="guilian pp projet" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col l11 m10 s9">
              <p class="black-text">
                Guilian Pipart
              </p>
            </div>
          </div>
          <div class="grey lighten-4 collapsible-body">
            <p>
              - 17 ans<br>
              - Spécialité NSI<br>
              - Programmation en Python<br>
              - Création de site HTML/CSS/PHP<br>
            </p>
          </div>
        </li>
      </ul>
    </div>
    <div class="col s10 offset-s1 m8 offset-m2 l4 offset-l2">
      <ul class="z-depth-1 collapsible">
        <li class="row">
          <div class="grey lighten-4 collapsible-header">
            <div class="col l2 m3 s4">
              <img src="img/alex.jpg" alt="Alex pp projet" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col l10 m9 s8">
              <p class="black-text">
                Alexandre Gouveia
              </p>
            </div>
          </div>
          <div class="grey lighten-4 collapsible-body">
            <p>
              - 21 ans<br>
              - Bac S<br>
              - 2 ans Fac Math/Info<br>
              - Programmation Python et C<br>
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="row">

    <div class="col l6 m6 s12">
      <div class="block red lighten-2">
        <h2 class="white-text">Enjeux du projet</h2>
      </div>

      <div class="block2">
        <p class="dark-text flow-text fontOswald">
          × Comprendre comment rédiger un algorithme.<br>
          × Comprendre comment interagir avec votre machine.<br>
          × Éviter les mauvaises pratiques.<br>
          × Avoir connaissance des bases pour être un bon programmeur.</p>
        </div>
      </div>

      <div class="col l6 m6 s12">
        <div class="block red lighten-2">
          <h2 class="white-text">Cahier des charges</h2>
        </div>
        <div class="block2">
          <p class="dark-text flow-text fontOswald">
            × L’ordinateur choisit un nombre au hasard entre 1 et 100.<br>
            × Vous devez essayer de trouver ce nombre.<br>
            × Si vous êtes en dessous du nombre choisi par l’ordinateur, un message s’affiche : “C’est plus”.<br>
            × Inversement si vous êtes au dessus du nombre, le message indique : “C’est moins”.<br>
            × Vous avez 7 tentatives pour trouver le nombre.<br>
            × Si vous ne trouvez pas, un message de défaite doit apparaître et le jeu propose au joueur de lancer une nouvelle partie ou non.<br>
            × Si vous trouvez, un message de victoire doit apparaître et le jeu propose au joueur de lancer une nouvelle partie ou non.</p>
          </div>
        </div>

      </div>
      <div class="block red lighten-2">
        <h2 class="white-text">Forme finale du projet</h2>
      </div>

      <div class="carousel carousel-slider center">
        <div class="carousel-fixed-item center">
        </div>
        <div class="carousel-item dark-text" href="#one!">
          <h2>Un jeu remplie de bonus !</h2>
          <p class="dark-text">Plusieurs joueurs, difficultés et rounds</p>
          <img src="img/Capturebonuspy.jpg" alt="projet bonus python">
        </div>
        <div class="carousel-item dark-text" href="#two!">
          <h2>Interface visuel et gestion d'égalité</h2>
          <p class="dark-text">jeu visuel et tableau des scores</p>
          <img src="img/CaptureEndpy.jpg" alt="projet end python">
        </div>
        <div class="carousel-item dark-text" href="#three!">
          <h2>Un code propre et optimisé !</h2>
          <p class="dark-dark">Partition clair et description du programme</p>
          <img src="img/CaptureCodepy.jpg" alt="projet code python">
        </div>
      </div>

      <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">Merci d'avoir porter attention à ce projet</h5>
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
