<?php
$formOutingValid = FALSE;


//    echo '<pre>';
//    print_r($_POST);
//    exit;
//    $regexname = '/^[a-zA-ZÀ-ÿ]+$/';


    global $formError; // je déclare formError en tableau

    if (isset($_POST['title'])) {
        $title = $_POST['title']; //je declare que la variable lastname = à l'input lastname en excluant tout caractère spécial avec htmlspecialchars qui va convertir toute balise ou autre en caractère
        if (empty($title)) {
            $formError['title'] = 'le champ est vide';
        }
    }

    if (isset($_POST['place'])) {
        $place = $_POST['place']; //je declare que la variable firstname = à l'input firstname en excluant tout caractère spécial avec htmlspecialchars qui va convertir toute balise ou autre en caractère

        if (empty($place)) {
            $formError['place'] = 'le champ est vide';
        }
    }
        if (isset($_POST['date'])) {
        $date = $_POST['date']; //je declare que la variable firstname = à l'input firstname en excluant tout caractère spécial avec htmlspecialchars qui va convertir toute balise ou autre en caractère
        if (empty($date)) {
            $formError['date'] = 'le champ est vide';
        }
    }
    if (isset($_POST['timestart'])) {
        $timestart = $_POST['timestart']; //
        if (empty($timestart)) {
            $formError['timestart'] = 'le champ est vide';
        }
    }
    if (isset($_POST['timeend'])) {
        $timeend = $_POST['timeend'];
        if (empty($timeend)) {
            $formError['timeend'] = 'le champ est vide';
        }
    }
        if (isset($_POST['selectType'])) {
        $type = $_POST['selectType'];
        if (empty($type)) {
            $formError['type'] = 'le champ est vide';
        }
    }
    if (isset($_POST['selectEnvironment'])) {
        $environment = $_POST['selectEnvironment'];
        if (empty($environment)) {
            $formError['environment'] = 'le champ est vide';
        }
    }
    if (isset($_POST['selectAge'])) {
        $age = $_POST['selectAge'];
        if (empty($age)) {
            $formError['age'] = 'le champ est vide';
        }
    }
    if (isset($_POST['selectPrice'])) {
        $price = $_POST['selectPrice'];
        if (empty($price)) {
            $formError['price'] = 'le champ est vide';
        }
    }
//      if (isset($_POST['description'])) {
//        $description = $_POST['description'];
// 
//    }
//          if (isset($_POST['image'])) {
//        $image = $_POST['image'];
// 
//    }
    if (count($formError) == 0) { // si je n'ai aucune erreurs j'hydrate mes valeurs en précisant que chaque colonne 
        $formOutingValid = TRUE;
    }


