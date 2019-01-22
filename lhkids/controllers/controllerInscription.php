<!-- vérifications sur les input du formulaire -->
<?php
// $regexMail = '/[a-z0-9.-_]+@[a-z.]+.[a-zA-Z]{2,}/';
$regexNom = '/^[a-zA-ZÀ-ÿ]+$/';
$regexPseudo = '/^[0-9a-zA-ZÂ-ÿ\-._]+$/';
// $regexPassword = '/^[0-9a-zA-Z]+$/';

//  je déclare mes variables error en false
$errorName = false; // je déclare $errorName = false; donc si $errorName est affiché $ errorName=true donc ma condition attendue dsns l'input est false;
$errorFirstname = false;
$errorMail = false;
$errorPseudo = false;
$errorPassword = false;
$errorConfirm = false;
$errorMotif = false;


if(isset($_POST['firstname'], $_POST['name'], $_POST['email'] , $_POST['pseudo'], $_POST['password'], $_POST['confirm'])) {

// vérification input firstname
  if (!preg_match($regexNom, $_POST['firstname'])){ /*si la saisie dans l'input fistname n'est pas conforme a la regexNom j'affiche le message d'erreur $errorFirstname*/
    $errorFirstname = 'Erreur de syntaxe';
  }
  if (empty($_POST['firstname'])){
    $errorFirstname = 'Vous n`avez rien entré dans ce champ';
  }

  // vérification input name
  if (!preg_match($regexNom, $_POST['name'])){   /*on vérifie avec  que ce qui est saisie dans l'input name est conforme à la regexNom
                                                  si la saisie dans l'input name n'est pas conforme a la regexNom j'affiche $errorName*/
    $errorName = 'Erreur de syntaxe';
  }
  if (empty($_POST['name'])){
    $erroName = 'Vous n`avez rien entré dans ce champ';
  }
// vérification input mail
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ //je filtre avec la fonction filter_var afin de savoir si le format de l'adresse mail est valide
    $errorMail = 'Adresse mail non valide';
  }
  if (empty($_POST['email'])){
    $erroMail = 'Vous n`avez rien entré dans ce champ';
  }
// vérification Pseudo
  if (!preg_match($regexPseudo, $_POST['pseudo'])){
    $errorPseudo = 'Pseudo non valide';
}
if (empty($_POST['pseudo'])) {
  $errorPseudo = 'Vous n`avez rien entré dans ce champ';
}
// vérification Password
  if (strlen($_POST['password'])<6){ // je vérifie avec strlen(sting lenght) le nom nombre de caractères dans l'input password.
    $errorPassword = 'Mot de passe non valide, choisissez un mot de passe avec un minimum de 6caractères';
  }
  if (empty($_POST['password'])) {
    $errorPassword = 'Vous n`avez rien entré dans ce champ';
  }
// vérification confirmPassword
  if ($_POST['confirm'] != $_POST['password']){
    $errorConfirm = 'Confirmation du mot de passe non valide';
  }
  if (empty($_POST['confirm'])) {
    $errorConfirm = 'Vous n`avez rien entré dans ce champ';
  }

   // condition empty pour le champ motif
   if (empty($_POST['motif'])) {
     $errorMotif = 'Vous n`avez rien entré dans ce champ';
   }
  // if(!$errorName && !$errorFirstname && !$errorPseudo && !$errorMail && !$errorPassword && !$errorConfirm) { // Si il n'y a aucune erreur, on fait ça:
  //   $_POST = [];
  // }
}
 ?>
 <!-- fin vérification des input du formulaire -->
