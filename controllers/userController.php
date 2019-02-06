<?php

//require 'formRules/UserFormRules.php';
require 'Models/ModelUser.php';
require 'Models/ModelUserType.php';

function createUser() {

    if (isset($_POST['submitCreateUser'])) {
        require 'formRules/UserFormRules.php'; //vérifs inputs formulaire

        if ($formValidRegistration) {
            $User = new User(); //j'instancie un nouvelle objet User qui bénéficie des meme attributs de la class User
            $User->lastname = $_POST['lastname']; // je fais le liens entre chasue attribut de la class et l'input du formulaire avec un POST
            $User->firstname = $_POST['firstname']; //j'hydrate mes valeurs
            $User->mail = $_POST['mail'];
            $User->pseudo = $_POST['pseudo'];
            $User->password = password_hash($_POST['password'], PASSWORD_DEFAULT); // cript du passsword à l'inscription
            $User->reasons = $_POST['reasons'];
            $User->userType_id = $_POST['selectuser'];
            $User->createUser();
           
            header('Location: index.php?page=connexion&inscription');
            exit();
        }
    }
    $userType = new UserType();
    $type = $userType->getType();
    view('inscription.php', ['type' => $type]);
}

function userConnexion() {
    require 'formRules/ConnexionFormRules.php';
    $sentencePasswordIncorrect = '';

    if (isset($_POST['submitConnexion'])) {
        if ($formValidConnexion) {
            $User = new User();
            $User->user_pseudo = $_POST['pseudo'];
            $getUser = $User->getUserInformations();
            if (isset($getUser) && $getUser != FALSE) {
                if (password_verify($_POST['password'], $getUser->user_password)) {
                    $_SESSION['userInfos'] = $getUser;
                    header('Location: index.php?page=profil');
                    exit();
                } else {
                    $sentencePasswordIncorrect = 'Mot de passe incorrect';
                }
            } else {
                echo 'nul';
            }
        }
    }
    view('connexion.php', ['passwordIncorrect' => $sentencePasswordIncorrect]);
}

function userLogout() {
    if (isset($_GET['page']) && $_GET['page'] == 'deconnexion') {
        session_destroy();
        header('Location: index.php?page=home');
        exit();
    }
}
function userUpdate(){
     if (isset($_POST['submitUpdateUser'])) {
        require 'formRules/updateFormRules.php'; //vérifs inputs formulaire

        if ($formValidUpdate) {
            $User = new User(); //j'instancie un nouvelle objet User qui bénéficie des meme attributs de la class User
            $User->lastname = $_POST['lastname']; // je fais le liens entre chasue attribut de la class et l'input du formulaire avec un POST
            $User->firstname = $_POST['firstname']; //j'hydrate mes valeurs
            $User->mail = $_POST['mail'];
            $User->pseudo = $_POST['pseudo'];
            $User->password = password_hash($_POST['password'], PASSWORD_DEFAULT); // cript du passsword à l'inscription
            $User->reasons = $_POST['reasons'];
            $User->userType_id = $_POST['selectuser'];
            $User->createUser();
            header('Location: index.php?page=connexion&inscription');
            exit();
        }
    }
    $userType = new UserType();
    $type = $userType->getType();
    view('modifUser.php', ['type' => $type]);
    
}