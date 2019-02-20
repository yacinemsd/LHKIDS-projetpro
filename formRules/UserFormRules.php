<!-- vérifications sur les input du formulaire -->

<?php
$formValidRegistration = FALSE;

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
        if (!isset($selectuser)) {
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
    if (isset($_FILES['image'])) {
        if (!empty($_FILES['image']['name'])) { // si je récupère mon index image avec un name je rentre dans ma condition
        $arrayExtension = ['jpg', 'png', 'jpeg', 'bmp'];// je créer un tableau contenant les extensions
        $imageExtension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));// j'utilise strtolower pour passer l'extension du fichier en miniscule
        if (mime_content_type($_FILES['image']['tmp_name']) != 'image/jpg' && mime_content_type($_FILES['image']['tmp_name']) != 'image/jpeg' && mime_content_type($_FILES['image']['tmp_name']) != 'image/bmp' && mime_content_type($_FILES['image']['tmp_name']) != 'image/png') {
            $formError['image'] = 'Le fichier choisi n\'est pas une image';
        }
        if (!in_array($imageExtension, $arrayExtension)) { // je vérifie l'extension de l'image télécharger par rapport au valeur de mon tableau d'extension
            $formError['image'] = 'L\'extension du fichier choisi n\'est pas autorisé';
        }
        if (file_exists('images/user_image/'.$_FILES['image']['name'])) { // je vérifie si le nom de l'image récupérer existe déjà
            $formError['image'] = 'Une image existe déjà avec ce nom de fichier';
        }
        }
    }
    if (count($formError) == 0) { // si je n'ai aucune erreurs j'hydrate mes valeurs en précisant que chaque colonne 
        $formValidRegistration = TRUE;
    }

