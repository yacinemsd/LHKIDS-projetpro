<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Inscription</title>

    <link rel="stylesheet" href="../style.css" />
    <!-- materialize -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Galindo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slackey" rel="stylesheet">
  </head>
  <body>
    <header>
      <!-- navbar formulaire-->
          <nav id="navbar2">
            <div class="">
              <a href="#" class="brand-logo"><img class="logoNav" src="../images/logo.png" /></a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="sorties.php">Les sorties!</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="inscription.php">Inscription</a></li>
              </ul>
            </div>
          </nav>
          <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="sorties.php">Les sorties!</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="inscription.php">Inscription</a></li>
          </ul>
      <!-- fin navbar  formulaire -->
  </header>
  <div class="container">
    <div class="row">
      <h1 class="center-align" id="formTitle">Espace de connexion</h1>
      <form class="col s12 l6 offset-l3 z-depth-3" id="FormConnexion" class="form" action="#" method="POST" role="form">
        <div class="row"><!--row input pseudo-->
          <div class="input-field col s12">
            <input type="text" class="validate " id="pseudo" name="pseudo" tabindex="1" value="">
            <label for="pseudo">Pseudo</label>
          </div>
        </div><!--fin input pseudo-->
        <div class="row"><!--row mot de passe-->
          <div class="input-field col s12">
            <input type="text" class="validate" id="password" name="password" tabindex="2" value="">
            <label for="password">Mot de passe</label>
          </div>
        </div><!--fin row mot de passe-->
        <div class="row"><!--row bouton submit-->
          <div class="col s12 center-align">
            <button  id="sendConnexion" class="btn waves-effect waves-light yellow darken-3" type="submit" name="action">Connexion
              <i class="material-icons right">send</i>
            </button>
          </div>
        </div><!-- fin row bouton submit-->
      </form>
    </div>
  </div>
<?php
  require_once 'footer.php'; //j'inclus ici mon footer
 ?>
<!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="script.js"></script>

</body>
</html>
