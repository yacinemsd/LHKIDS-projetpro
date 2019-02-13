<?php

//require 'formRules/UserFormRules.php';
require 'Models/ModelUser.php';
require 'Models/ModelUserType.php';
//fonction création user   //fonction création user   //fonction création user  
function createUser() {
    if (isset($_POST['submitCreateUser'])) {
        require 'formRules/UserFormRules.php'; //vérifs inputs formulaire

        if ($formValidRegistration) {
            $User = new User(); //j'instancie un nouvelle objet User qui bénéficie des meme attributs de la class User
            $User->user_lastname = $_POST['lastname']; // je fais le liens entre chasue attribut de la class et l'input du formulaire avec un POST
            $User->user_firstname = $_POST['firstname']; //j'hydrate mes valeurs
            $User->user_mail = $_POST['mail'];
            $User->user_pseudo = $_POST['pseudo'];
            $User->user_password = password_hash($_POST['password'], PASSWORD_DEFAULT); // cript du passsword à l'inscription
            $User->user_reasons = $_POST['reasons'];
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
//function connexion user  //function connexion user    //function connexion user
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
// fonction deconnexion user     // fonction deconnexion user   
function userLogout() {
    if (isset($_GET['page']) && $_GET['page'] == 'deconnexion') {
        session_destroy();
        header('Location: index.php?page=home');
        exit();
    }
}
// fonction modification user   // fonction modification user
function userUpdate() {
    if (isset($_POST['submitUpdateUser'])) {
        require 'formRules/updateFormRules.php'; //vérifs inputs formulaire

        if ($formValidUpdate) {
            $User = new User(); //j'instancie un nouvelle objet User qui bénéficie des meme attributs de la class User
            $User->user_lastname = $_POST['lastname']; // je fais le liens entre chasue attribut de la class et l'input du formulaire avec un POST
            $User->user_firstname = $_POST['firstname']; //j'hydrate mes valeurs
            $User->user_mail = $_POST['mail'];
            $User->user_pseudo = $_POST['pseudo'];
            $User->user_password = password_hash($_POST['password'], PASSWORD_DEFAULT); // cript du passsword à l'inscription
            $User->userType_id = $_POST['selectuser'];
            $User->user_reasons = $_POST['reasons'];
            $User->user_id = $_SESSION['userInfos']->user_id;
            $User->updateUser();
            $getUser = $User->getUserInformations();
            $_SESSION['userInfos'] = $getUser;
            $_SESSION['modifok'] = true;
            header('Location: index.php?page=profil');
            exit();
        }
    }
    $userType = new UserType();
    $type = $userType->getType();
    view('modifUser.php', ['type' => $type]);
}

function deleteUser(){
    if(isset($_POST['submitDelete'])){
        
        $User = new User();
        $User->user_id = $_SESSION['userInfos']->user_id;
        $User->deleteUser();
        $_SESSION['deleteuserOk'] = 'Votre compte a bien été supprimé';
        header('Location:index.php?page=home');
        exit();
    }
    view('profilePage.php');
}
