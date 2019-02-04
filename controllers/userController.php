<?php

//require 'formRules/UserFormRules.php';
require 'Models/ModelUser.php';
require 'Models/ModelUserType.php';

function createUser() {
    
    if (isset($_POST['submitCreateUser'])) {
        require 'formRules/UserFormRules.php'; //vérifs inputs formulaire
        
        if ($formValid) {
            $User = new User(); //j'instancie un nouvelle objet User qui bénéficie des meme attributs de la class User
            $User->lastname = $_POST['lastname']; // je fais le liens entre chasue attribut de la class et l'input du formulaire avec un POST
            $User->firstname = $_POST['firstname']; //j'hydrate mes valeurs
            $User->mail = $_POST['mail'];
            $User->pseudo = $_POST['pseudo'];
            $User->password = $_POST['password'];
            $User->reasons = $_POST['reasons'];
            $User->userType_id = $_POST['selectuser'];

            $User->createUser();
        }
        
    }
    $userType = new UserType();
    $type = $userType->getType();
    view('inscription.php', ['type'=>$type]);
}
