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
        createUser(); // je fais appel a la fonction qui contient ma vue
    } elseif ($_GET['page'] == 'mentionslegales') {
        view('mentionsLegales.php');
    } elseif ($_GET['page'] == 'profil') {
        require 'controllers/userController.php';        
        require 'controllers/outingController.php'; 
        showOutingUser();
        deleteUser();
    } elseif ($_GET['page'] == 'sorties') {
        require 'controllers/outingController.php';
        showOuting();
    } elseif ($_GET['page'] == 'modifuser') {
        require 'controllers/userController.php';
        userUpdate();
    } elseif ($_GET['page'] == 'home') {
        view('home.php');
    } elseif ($_GET['page'] == 'deconnexion') {
        require 'controllers/userController.php';
        userLogout();
    } elseif ($_GET['page'] == 'typesuser') {
        require 'controllers/typeController.php';
        createType();
    }elseif ($_GET['page'] == 'outingForm') {
       require 'controllers/outingController.php';
       outing();
    } else {
        view('error404.php');
    }
} else {
    require 'views/templateHeader.php';
    require 'views/home.php';
    require 'views/templateFooter.php';
}
