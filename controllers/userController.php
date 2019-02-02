<?php

//require 'formRules/UserFormRules.php';
require 'Models/ModelUser.php';

function createUser() {
    if (isset($_POST['submitCreateUser'])) {
        require 'formRules/UserFormRules.php'; //vérifs inputs formulaire
        
        if ($formValid) {
            $User = new User(); //j'instancie un nouvelle objet User qui bénéficie des meme attributs de la class User
            $user->lastname->$_POST['lastname']; // je fais le liens entre chasue attribut de la class et l'input du formulaire avec un POST
            $user->firstname->$_POST['firstname']; //j'hydrate mes valeurs
            $user->mail->$_POST['mail'];
            $user->pseudo->$_POST['pseudo'];
            $user->password->$_POST['password'];
            $user->reasons->$_POST['reasons'];
            $user->userType_id->$_POST['userType_id'];

            $User->createUser();
        }
        
    }
    view('inscription.php');
}
