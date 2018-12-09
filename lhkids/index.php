<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>lh kids</title>
    <link rel="stylesheet" href="style.css" />
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
    <!-- navbar   -->
        <?php
        require_once 'navbar.php'  // j'inclus a cet endroit mon fichier navbar.php contenant ma navbar
         ?>
  <!-- fin navbar       -->
  <div class="container-fluid">
    <div class="row" id="fondHeader">
      <div class="col s5 m6 l3">
        <div class="collection" id="menu1">
        <a href="#!" class="collection-item">Accueil</a>
        <a href="#!" class="collection-item">Les Bons plans sorties !</a>
        <a href="#!" class="collection-item">Je partage !</a>
        <a href="#!" class="collection-item">Contact</a>
      </div>
    </div>
    <div class="col s7 m6 l9 ">
        <h1 class="titreHeader1">LH KIDS</h1>
        <h2 class="titreHeader2">Échange et partage de bons plans sorties au Havre pour vous et vos enfants !</h2>
          <div id="buttons">
            <a  id="buttonheader1" class="waves-effect waves-light btn"><i class="fas fa-user"></i>  S'inscrire !</a>
            <a  id="buttonheader2" class="waves-effect waves-light btn"><i class="fas fa-sign-in-alt"></i>  Se connecter</a>
          </div>
    </div>

  </div>
</div>
    </header>

    <!-- presentation -->
<div class="container-fluid">
  <div class="row">
    <div class="col s12">
      <div class="center-align presentation1">
         <h1 class="center-align" id="title1">LH Kids, c'est quoi ?</h1>
         <p id="text1">LH kids, le site des parents pour les enfants a pour but de vous proposer les meilleurs plans sorties à faire avec vos enfants au Havre et ses alentours.<br>
                  La selection de sorties LH kids est faite par vous ! LH Kids c'est des parents, des grands-parents, des nounous, tontons, marraines… qui partagent et commentent leurs bons plans. Autant dire que ce sont les meilleurs, et les plus adaptées pour vos enfants !</p>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col s12">
      <div class="center-align">
        <h1 class="center-align" id="title1">Comment ça marche ?</h1>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col s12 l4">
      <div class="card center-align" id="card1">
        <span class="card-title titlecard">1. Je m'inscris ! </span>
        <div class="card-image imgcard">
          <img src="images/inscription.jpg">
        </div>
        <div class="card-content cardContent">
          <p>Simple, rapide et gratuite l'inscription vous permettra d'avoir votre compte LH Kids</p>
        </div>
        <div class="card-action" id="cardLink">
          <a href="#">Je m'inscris !</a>
        </div>
      </div>
    </div>
    <div class="col s12 l4">
      <div class="card center-align" id="card2">
        <span class="card-title titlecard">2. Je me connecte !</span>
        <div class="card-image imgcard">
          <img src="images/connexion.png">
        </div>
        <div class="card-content cardContent">
          <p>Accéder à votre compte LH Kids, consulter le contenu partagé par la communauté LH Kids</p>
        </div>
        <div class="card-action" id="cardLink">
          <a href="#">Me connecter</a>
        </div>
      </div>
    </div>
    <div class="col s12 l4">
      <div class="card center-align" id="card3">
        <span class="card-title titlecard">3. Je partage !</span>
        <div class="card-image imgcard">
          <img src="images/share.png">
        </div>
        <div class="card-content cardContent">
          <p>À votre tour partagez vos sorties et enrichissez le catologue de bons plans LH Kids!</p>
        </div>
        <div class="card-action" id="cardLink">
          <a href="#">Je partage !</a>
        </div>
      </div>
    </div>
  </div>
</div>
    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="http://materializecss.com/js/init.js"></script>
  </body>
</html>
