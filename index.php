<?php
require 'App/Functions.php';





if (isset($_GET['page'])) {
  if ($_GET['page'] == 'connexion') {
    view('connexion.php'); //je fais appels a ma fonction view avec en paramètres la page content à chargé
  }elseif($_GET['page'] == 'inscription'){
    view('inscription.php');
  }elseif ($_GET['page'] == 'mentionslegales') {
    view('mentionsLegales.php');
  }elseif ($_GET['page'] == 'profil') {
    view('profilPage.php');
  }elseif ($_GET['page'] == 'sorties') {
    view('sorties.php');
  }elseif ($_GET['page'] == 'modifuser') {
    view('modifUser.php');
  }else{
    view('error404.php');
  }
}else{
  require 'views/templateHeader.php';
  require 'views/home.php';
  require 'views/templateFooter.php';
}
 ?>
