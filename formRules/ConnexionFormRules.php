<?php
$formValidConnexion = FALSE;
$formError = [];
$regexPseudo = '/^[0-9a-zA-ZÂ-ÿ\-._]+$/';
    if (isset($_POST['pseudo']) && isset($_POST['password'])) {
        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];
        if (!preg_match($regexPseudo, $pseudo)) { //si ca ne match pas j'envoi le msg d'erreur
            $formError['pseudo'] = 'erreur syntaxe';
        }
        if (empty($pseudo)) {
            $formError['pseudo'] = 'le champ est vide';
        }
        if (empty($password)){
            $formError['password'] = 'le champ est vide';
        }
    }
    if (count($formError) == 0) { // si je n'ai aucune erreurs j'hydrate mes valeurs en précisant que chaque colonne 
        $formValidConnexion = TRUE;
    }

