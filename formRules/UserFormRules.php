<!-- vérifications sur les input du formulaire -->

<?php
$formValid = FALSE;

if (isset($_POST['submitCreateUser'])) {
//    echo '<pre>';
//    print_r($_POST);
//    exit;
//    $regexname = '/^[a-zA-ZÀ-ÿ]+$/';
    $regexname = '/^[A-zÀ-ÿ\' -]+$/';
    $regexPseudo = '/^[0-9a-zA-ZÂ-ÿ\-._]+$/';

    global $formError; // je déclare formError en tableau

    if (isset($_POST['lastname'])) {
        $lastname = $_POST['lastname']; //je declare que la variable lastname = à l'input lastname en excluant tout caractère spécial avec htmlspecialchars qui va convertir toute balise ou autre en caractère
        if (!preg_match($regexname, $lastname)) { //si ca ne match pas j'envoi le msg d'erreur
            $formError['lastname'] = 'erreur syntaxe';
        }
        if (empty($lastname)) {
            $formError['lastname'] = 'le champ est vide';
        }
    }

    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname']; //je declare que la variable firstname = à l'input firstname en excluant tout caractère spécial avec htmlspecialchars qui va convertir toute balise ou autre en caractère
        if (!preg_match($regexname, $firstname)) { //si ca ne match pas j'envoi le msg d'erreur
            $formError['firstname'] = 'erreur syntaxe';
        }
        if (empty($firstname)) {
            $formError['firstname'] = 'le champ est vide';
        }
    }
        if (isset($_POST['selectuser'])) {
        $selectuser = $_POST['selectuser']; //je declare que la variable firstname = à l'input firstname en excluant tout caractère spécial avec htmlspecialchars qui va convertir toute balise ou autre en caractère
        if (empty($selectuser)) {
            $formError['selectuser'] = 'le champ est vide';
        }
    }
    if (isset($_POST['mail'])) {
        $mail = $_POST['mail']; //
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) { //si ca ne match pas j'envoi le msg d'erreur
            $formError['mail'] = 'format mail incorrect';
        }
        if (empty($mail)) {
            $formError['mail'] = 'le champ est vide';
        }
    }
    if (isset($_POST['pseudo'])) {
        $pseudo = $_POST['pseudo'];
        if (!preg_match($regexPseudo, $pseudo)) { //si ca ne match pas j'envoi le msg d'erreur
            $formError['pseudo'] = 'erreur syntaxe';
        }
        if (empty($pseudo)) {
            $formError['pseudo'] = 'le champ est vide';
        }
    }
    if (isset($_POST['password'])) {
        $pseudo = $_POST['password'];
        if (!preg_match($regexPseudo, $pseudo)) { //si ca ne match pas j'envoi le msg d'erreur
            $formError['password'] = 'erreur syntaxe';
        }
        if (empty($_POST['password'])) {
            $formError['password'] = 'le champ est vide';
        }
    }
    if ($_POST['confirm'] != $_POST['password']) {
        $formError['confirm'] = 'Confirmation du mot de passe non valide';
    }
    if (empty($_POST['confirm'])) {
        $formError['confirm'] = 'le champ est vide';
    }
    if (isset($_POST['reasons'])) {
        $reasons = $_POST['reasons'];
        if (empty($reasons)) {
            $formError['reasons'] = 'le champ est vide';
        }
    }
    if (count($formError) == 0) { // si je n'ai aucune erreurs j'hydrate mes valeurs en précisant que chaque colonne 
        $formValid = TRUE;
    }
}

