<?php
$formError = [];
require 'App/Functions.php';
require 'Models/DataBase.php';



if (isset($_GET['page'])) {
    if ($_GET['page'] == 'connexion') {
        view('connexion.php'); //je fais appels a ma fonction view avec en paramètres la page content à chargé
    } elseif ($_GET['page'] == 'inscription') {
        require 'controllers/userController.php';
        createUser(); // je fais appel a la fonction sui contient ma vue
    } elseif ($_GET['page'] == 'mentionslegales') {
        view('mentionsLegales.php');
    } elseif ($_GET['page'] == 'profil') {
        view('profilePage.php');
    } elseif ($_GET['page'] == 'sorties') {
        view('sorties.php');
    } elseif ($_GET['page'] == 'modifuser') {
        view('modifUser.php');
    }
     elseif ($_GET['page'] == 'home') {
        view('home.php');
    }
    elseif ($_GET['page'] == 'typesuser') {
        require 'controllers/typeController.php';
        createType();
    }else {
        view('error404.php');
    }
} else {
    require 'views/templateHeader.php';
    require 'views/home.php';
    require 'views/templateFooter.php';
}
?>
