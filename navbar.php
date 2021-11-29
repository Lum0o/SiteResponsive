<?php
require_once "config.php";
?>

<div class="navbar-fixed">
  <nav class="nav-extended">
    <div class="nav-wrapper">
      <h1 class="brand-logo"> <?php echo $titleNavbar; ?> </h1>
      <!-- Modal Trigger -->
      <?php
        if (isset($_SESSION['user']) && $_SESSION['user']['admin'] == 1){
          echo '<a class="right waves-effect waves-light button modal-trigger mr20" href="adminpanel.php"><i class="material-icons">build</i></a>';
        }
      ?>
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
