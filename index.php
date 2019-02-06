<?php

session_start();
$formError = [];
require 'App/Functions.php';
require 'Models/DataBase.php';



if (isset($_GET['page'])) {
    if ($_GET['page'] == 'connexion') {
        require 'controllers/userController.php';
        userConnexion();
        //je fais appels a ma fonction view avec en paramètres la page content à chargé
    } elseif ($_GET['page'] == 'inscription') {
        require 'controllers/userController.php';
        createUser(); // je fais appel a la fonction sui contient ma vue
    } elseif ($_GET['page'] == 'mentionslegales') {
        view('mentionsLegales.php');
    } elseif ($_GET['page'] == 'profil') {
        require 'controllers/userController.php';
        view('profilePage.php');
    } elseif ($_GET['page'] == 'sorties') {
        view('sorties.php');
    } elseif ($_GET['page'] == 'modifuser') {
        require 'controllers/userController.php';
        view('modifUser.php');
    } elseif ($_GET['page'] == 'home') {
        view('home.php');
    } elseif ($_GET['page'] == 'deconnexion') {
        require 'controllers/userController.php';
        userLogout();
    } elseif ($_GET['page'] == 'typesuser') {
        require 'controllers/typeController.php';
        createType();
    } else {
        view('error404.php');
    }
} else {
    require 'views/templateHeader.php';
    require 'views/home.php';
    require 'views/templateFooter.php';
}
