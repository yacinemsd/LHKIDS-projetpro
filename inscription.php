<?php
$regexMail = '/[a-z0-9.-_]+@[a-z.]+.[a-zA-Z]{2,}/';
$regexNom = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$/';
$regexPseudo = '/^[0-9a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ-]+$/';
$regexPassword = '/^[0-9a-zA-Z]+$/';

// vérification input name
$errorName = false;
if(isset($_POST['name'])){
  if (!preg_match($regexNom, $_POST['name'])){ //on vérifie que ce qui est entré dans l'input name est conforme à la regexNom
    $errorName = 'Erreur de syntaxe';
  }
}else{
  $_POST['name'] = '';
}
// vérification input firstname
$errorFirstname = false;
if(isset($_POST['firstname'])){
  if (!preg_match($regexNom, $_POST['firstname'])){
    $errorFirstname = 'Erreur de syntaxe';
  }
}else{
  $_POST['firstname'] = '';
}

// vérification input mail
$errorMail = false;
if(isset($_POST['email'])){
  if (!preg_match($regexMail, $_POST['email'])){
    $errorMail = 'Adresse mail non valide';
  }
}else{
  $_POST['email'] = '';
}

// vérification Pseudo
$errorPseudo = false;
if(isset($_POST['pseudo'])){
  if (!preg_match($regexPseudo, $_POST['pseudo'])){
    $errorPseudo = 'Pseudo non valide';
  }
}else{
  $_POST['pseudo'] = '';
}

// vérification Password
$errorPassword = false;
if( isset($_POST['password']) ){
  if (!preg_match($regexPassword, $_POST['password'])){
    $errorPassword = 'Mot de passe non valide';
  }
}else{
  $_POST['password'] = '';
}
// vérification confirmPassword
$errorConfirm = false;
if( isset($_POST['password']) && isset($_POST['confirm']) ){
  if ($_POST['confirm'] != $_POST['password']){
    $errorConfirm = 'Confirmation du mot de passe non valide';
  }
}else{
  $_POST['confirm'] = '';
}
 ?>





<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>
      <!-- formulaire -->
  <div class="container-fluid">
  <div class="row justify-content-md-center">
      <div class="col-6 text-center">
        <div class="FormTitle">
        <h2>Formulaire d'inscription</h2>
          </div>
          <form id="contact-form" class="form" action="#" method="POST" role="form">
              <div class="form-group">
                  <label class="form-label" for="name">Votre Nom</label>
                  <input type="text" class="form-control" id="firstname" name="name" placeholder="" tabindex="1" value="<?= $_POST['name']; ?>">
              </div>
              <div class="inputError">
                <?php
                if($errorName !== false){
                  echo $errorName;
                }
                ?>
              </div>

              <div class="form-group">
                  <label class="form-label" for="firstname">Votre Prénom</label>
                  <input type="text" class="form-control" id="name" name="firstname" placeholder="" tabindex="2" value="<?= $_POST['firstname']; ?>" >
              </div>
              <div class="inputError">
                <?php
                if($errorName !== false){
                  echo $errorName;
                }
                ?>
              </div>


              <div class="form-group">
                  <label class="form-label" for="email">Adresse Mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="" tabindex="3" value="<?= $_POST['email']; ?>" >
              </div>
              <div class="inputError">
                <?php
                if($errorMail !== false){
                  echo $errorMail;
                }
                ?>
              </div>


              <div class="form-group">
                  <label class="form-label" for="pseudo">Votre Pseudo</label>
                  <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="" tabindex="4" value="<?= $_POST['pseudo']; ?>">
              </div>
              <div class="inputError">
                <?php
                if($errorPseudo !== false){
                  echo $errorPseudo;
                }
                ?>
              </div>

              <div class="form-group">
                  <label class="form-label" for="password">Mot de passe</label>
                  <input type="text" class="form-control" id="password" name="password" placeholder="" tabindex="5" value="<?= $_POST['password']; ?>" >
              </div>
              <div class="inputError">
                <?php
                if($errorPassword !== false){
                  echo $errorPassword;
                }
                ?>
              </div>

              <div class="form-group">
                  <label class="form-label" for="confirm">Confirmez votre mot de passe</label>
                  <input type="text" class="form-control" id="confirm" name="confirm" placeholder="" tabindex="6" value="<?= $_POST['confirm']; ?>">
              </div>
              <div class="inputError">
                <?php
                if($errorConfirm !== false){
                  echo $errorConfirm;
                }
                ?>
              </div>

              <div class="form-group">
                  <label class="form-label" for="message">Motif d'inscription</label>
                  <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="" tabindex="6" ></textarea>
              </div>
              <div class="text-center">
                  <button type="submit" class="btn btn-start-order">Envoyer</button>
              </div>
          </form>
      </div>
  </div>
</div>
<!-- fin formulaire -->
  </body>
</html>
