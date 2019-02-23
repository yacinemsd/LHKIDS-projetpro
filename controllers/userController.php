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
            if (isset($_FILES['image'])) { // si ma valeur image existe j'hydrate ma valeur
                $User->user_image = $_FILES['image']['name']; // je récupère la valeur name de image
                move_uploaded_file($_FILES["image"]["tmp_name"], 'images/user_image/' . $_FILES["image"]["name"]);
            }
            else {
                $User->user_image = NULL;
            }
            $User->createUser();

            header('Location: index.php?page=connexion&inscription');
            exit();
        }
    }
    $UserType = new UserType();
    $type = $UserType->getType();
    view('inscription.php', ['type' => $type]);
}

//function connexion user  //function connexion user    //function connexion user
function userConnexion() {
    require 'formRules/ConnexionFormRules.php';
    $sentencePasswordIncorrect = '';
    $pseudoUnknowned = '' ;
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
                $pseudoUnknowned = 'Erreur :  pseudo inéxistant';
            }
        }
    }
    view('connexion.php', ['passwordIncorrect' => $sentencePasswordIncorrect, 'pseudoUnknowned' => $pseudoUnknowned ]);
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
            if (!empty($_FILES['image']['name'])) { // si name n'est pas vide (= si j'upload une image) je rentre dans la condition et je remplace mon image par la nouvelle updload
                $User->user_image = $_FILES['image']['name']; // je récupère la valeur name de image
                move_uploaded_file($_FILES["image"]["tmp_name"], 'images/user_image/' . $_FILES["image"]["name"]);
            }else{
                $User->user_image = $_SESSION['userInfos']->user_image;
            }
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
        $_SESSION['deleteuserOk'] = true;
        header('Location:index.php?page=home');
        exit();
    }
}
