<?php
require_once "config.php";
?>

<div class="navbar-fixed">
  <nav class="nav-extended">
    <div class="nav-wrapper">
      <h1 class="brand-logo"> <?php echo $titleNavbar; ?> </h1>
      <!-- Modal Trigger -->
      <a class='right waves-effect waves-light mr20 dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons">account_circle</i></a>

      <ul id='dropdown1' class='dropdown-content'>
        <?php
        if (isset($_SESSION['user'])){
          if ($_SESSION['user']['admin'] == 1){
            echo '<li><a class="red-text lighten-2" href="adminpanel.php">Admin panel</a></li>';
          }
          echo '<li><a class="red-text lighten-2" href="logout.php">Logout</a></li>';
        }else{
          echo '<li><a class="red-text lighten-2 modal-trigger" href="#modal1">Register</a></li>';
          echo '<li><a class="red-text lighten-2 modal-trigger" href="#modal3">Login</a></li>';
        }
        ?>
        <li><a class="red-text lighten-2 button modal-trigger" href="#modal2">Nous contacter</a></li>
      </ul>

      <div id="modal1" class="modal">
        <form class="s12 container" method="post" action="signup.php">
          <div class="modal-content">
            <h4 class="center">Register</h4>
            <p class="center">Vous êtes nouveaux? Créez votre compte dès maintenat!</p>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" name="last_name" class="validate" required>
              <label for="first_name">Nom</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" name="first_name" class="validate" required>
              <label for="last_name">Prénom</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" name="email" class="validate" required>
              <label for="email">Email</label>
            </div>
            <div class="input-field col s6">
              <input id="password" type="password" name="password" class="validate" required>
              <label for="password">Mot de passe</label>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" value="Envoyer">
          </div>
        </form>
      </form>
    </div>

    <div id="modal2" class="modal">
      <div class="modal-content">
        <h4 class="center">Formulaire de contact</h4>
        <p class="center">Besoin de nous contacter? Aidez nous à vous identifier!</p>
      </div>
      <form class="s12 container">
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate" required>
            <label for="first_name">Nom</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate" required>
            <label for="last_name">Prénom</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate" required>
            <label for="email">Email</label>
          </div>
          <div class="input-field col s12 m12 l12">
            <input id="observation" type="text" class="validate">
            <label for="observation">Renseignez votre remarque/problème ici:</label>
          </div>
        </div>
      </form>
      <div class="modal-footer">
        <input type="submit" value="Envoyer">
      </div>
    </div>

    <div id="modal3" class="modal">
      <div class="modal-content">
        <h4 class="center">Log in</h4>
        <p class="center">Connectez vous</p>
      </div>
      <form class="s12 l12 m12 container" method="post" action="login.php">
        <div class="input-field s12 l12 m12">
          <input id="email" type="email" name="email" required>
          <label for="email">Email</label>
        </div>
        <div class="input-field s12 l12 m12">
          <input id="password" type="password" name="password" required>
          <label for="password">Mot de passe</label>
        </div>
        <div class="modal-footer">
          <input type="submit" value="Envoyer">
        </div>
      </form>
    </div>

    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="index.php">Home</a></li>
        <?php
        $sql = "SELECT * FROM projet";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $project = $pre->fetchAll(PDO::FETCH_ASSOC);
        foreach($project as $proj){
          ?>
          <li class="tab"><a href="Projet.php?id=<?php echo $proj['id']; ?>">Projet <?php echo $proj['id']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
</div>
