<?php
require_once '../controllers/controllerInscription.php';
 ?>
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
    <!-- fontawesom -->
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
                <li><a href="connexion.php">Connexion</a></li>
              </ul>
            </div>
          </nav>
          <ul class="sidenav" id="mobile-demo">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="sorties.php">Les sorties!</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="connexion.php">Connexion</a></li>
          </ul>
      <!-- fin navbar  formulaire -->
    </header>

<!-- formulaire -->
<div class="container">
<div class="row">
  <h1 class="center-align" id="formTitle">Formulaire d'inscription</h1>
  <form class="col s12 z-depth-3" id="FormInscription" class="form" action="#" method="POST" role="form">
    <div class="row">
      <div class="input-field col s12 l4">
        <input type="text" class="validate" id="firstname" name="firstname" tabindex="1" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : ''; ?>">
        <label for="firstname">Nom</label>
        <div>
          <p class="inputError"><?php
          if(isset($errorFirstname)) {
            echo $errorFirstname;
          }
          ?></p>
        </div>
      </div>
      <div class="input-field col s12 l4">
        <input type="text" class="validate" id="name" name="name"  tabindex="2" value="<?= isset($_POST['name']) ? $_POST['name'] : ''; ?>">
        <label for="name">Prénom</label>
      <div>
        <p class="inputError"><?php
        if($errorName !== false){
          echo $errorName;
        }
        ?></p>
      </div>
    </div>

  <div class="input-field col s12 l4">
   <select>
     <option value=" " disabled selected></option>
     <option value="1">Papa</option>
     <option value="2">Maman</option>
     <option value="4">Tonton</option>
     <option value="5">Tata</option>
     <option value="6">Papi</option>
     <option value="7">Mami</option>
     <option value="8">Nounou</option>
     <option value="9">Autres</option>
   </select>
   <label>Vous êtes :</label>
 </div>
    </div>

    <div class="row">
      <div class="input-field col  s12 l6">
        <input  class="validate" type="email"  id="email" name="email" tabindex="4" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>" > <!-- si $_POST['email'] existe je l'affiche sinon(?) j'affiche $_POST['email'] avec une chaine de caractère vide. -->
        <label for="email">Adresse Mail</label>
        <div>
        <p class="inputError"><?php
        if($errorMail !== false){
          echo $errorMail;
        }
        ?></p>
      </div>
    </div>
      <div class="input-field col s12 l6">
        <input class="validate" type="text" id="pseudo" name="pseudo" tabindex="5" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : ''; ?>">
        <label for="pseudo">Pseudo</label>
        <div>
          <p class="inputError"><?php
          if($errorPseudo !== false){
            echo $errorPseudo;
          }
          ?></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12 l6">
        <input class="validate" type="text" id="password" name="password" tabindex="6" value="<?= isset($_POST['password']) ? $_POST['password'] : ''; ?>">
        <label for="password">Mot de passe</label>
        <div>
          <p class="inputError"><?php
          if($errorPassword !== false){
            echo $errorPassword;
          }
          ?></p>
        </div>
      </div>
      <div class="input-field col s12 l6">
        <input class="validate" type="text" id="confirm" name="confirm" tabindex="6" value="<?= isset($_POST['confirm']) ? $_POST['confirm'] : ''; ?>">
        <label for="confirm">Confirmez votre mot de passe</label>
        <div>
          <p class="inputError"><?php
          if($errorConfirm !== false){
            echo $errorConfirm;
          }
          ?></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <div class="input-field">
            <textarea type="text" id="textarea1" name="motif" class="materialize-textarea"></textarea>
            <label for="textarea1">Motif d'inscription</label>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <div class="file-field input-field">
          <div class="btn grey lighten-1">
            <span>Image de profil</span>
            <input type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Choisissez une image de profil (facultatif)">
          </div>
      </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 center-align">
        <button  id="buttonSend" class="btn waves-effect waves-light yellow darken-3" type="submit" name="action">Envoyer !
          <i class="material-icons right">send</i>
        </button>
      </div>
    </div>
  </form>
</div>
</div>
<?php
  require_once 'footer.php'; //j'inclus ici mon footer
 ?>
<!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript" src="../script.js"></script>

</body>
</html>
