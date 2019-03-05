<?php
$formOutingValid = FALSE;


//    echo '<pre>';
//    print_r($_POST);
//    exit;
       $regextitle = '/^[a-zA-ZÀ-ÿ]+$/';


    global $formError; // je déclare formError en tableau

    if (isset($_POST['title'])) {
        if (empty($_POST['title'])) {
            $formError['title'] = 'le champ est vide';
        }
    }

    if (isset($_POST['place'])) {
        if (empty($_POST['place'])) {
            $formError['place'] = 'le champ est vide';
        }
    }
        if (isset($_POST['date'])) {
        if (empty($_POST['date'])) {
            $formError['date'] = 'le champ est vide';
        }
    }
    if (isset($_POST['timestart'])) {
        if (empty($_POST['timestart'])) {
            $formError['timestart'] = 'le champ est vide';
        }
    }
    if (isset($_POST['timeend'])) {
        if (empty($_POST['timeend'])) {
            $formError['timeend'] = 'le champ est vide';
        }
    }
        if (isset($_POST['selectType'])) {
        if (empty($_POST['selectType'])) {
            $formError['type'] = 'le champ est vide';
        }
    }
    if (isset($_POST['selectEnvironment'])) {
        if (empty($_POST['selectEnvironment'])) {
            $formError['environment'] = 'le champ est vide';
        }
    }
    if (isset($_POST['selectAge'])) {
        if (empty($_POST['selectAge'])) {
            $formError['age'] = 'le champ est vide';
        }
    }
    
    if (isset($_POST['selectPrice'])) {
        if (empty($_POST['selectPrice'])) {
            $formError['price'] = 'le champ est vide';
        }
    } if (isset($_FILES['image'])) {
        if (!empty($_FILES['image']['name'])) { // si je récupère mon index image avec un name je rentre dans ma condition
        $arrayExtension = ['jpg', 'png', 'jpeg', 'bmp'];// je créer un tableau contenant les extensions
        $imageExtension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));// j'utilise strtolower pour passer l'extension du fichier en miniscule
        if (mime_content_type($_FILES['image']['tmp_name']) != 'image/jpg' && mime_content_type($_FILES['image']['tmp_name']) != 'image/jpeg' && mime_content_type($_FILES['image']['tmp_name']) != 'image/bmp'){
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
        $formOutingValid = TRUE;
    }


