<?php

require_once 'Models/ModelOuting.php';

function outing() {
    if (isset($_POST['submitCreateOuting'])) {
        require 'formRules/outingFormRules.php'; //vérifs inputs formulaire

        if ($formOutingValid) {
            $Outing = new Outing();
            $Outing->outing_title = $_POST['title'];
            $Outing->outing_place = $_POST['place'];
            $Outing->outing_date = $_POST['date'];
            $Outing->outing_startTime = $_POST['timestart'];
            $Outing->outing_endTime = $_POST['timeend'];
            $Outing->outing_description = $_POST['description'];
            $Outing->outingType_id = $_POST['selectType'];
            $Outing->outingEnvironment_id = $_POST['selectEnvironment'];
            $Outing->outingAge_id = $_POST['selectAge'];
            $Outing->outingPrice_id = $_POST['selectPrice'];
            $Outing->userOuting_id = $_SESSION['userInfos']->user_id;
            $outingId = $Outing->createOuting(); //la méthode createOuting retourne le dernier id qui a été inseré, cela servira pour l'insertion d'image
            $Outing->outing_id = $outingId;
            if (isset($_FILES['image'])) { // si ma valeur image existe j'hydrate ma valeur
                $Outing->image_path = $_FILES['image']['name']; // je récupère la valeur name de image
                move_uploaded_file($_FILES["image"]["tmp_name"], 'images/user_image/' . $_FILES["image"]["name"]);
            }
            else {
                $Outing->image_path = NULL;
            }
            $Outing->insertImage();
            $_SESSION['createOutingOk'] = true;
            header('Location: index.php?page=profil');
            exit();
        }
    }
    $OutingType = new Outing();
    $getOutingTypes = $OutingType->getOutingTypes();

    $OutingEnvironment = new Outing();
    $getOutingEnvironment = $OutingEnvironment->getOutingEnvironment();

    $OutingAge = new Outing();
    $getOutingAge = $OutingAge->getOutingAge();

    $OutingPrice = new Outing();
    $getOutingPrice = $OutingPrice->getOutingPrice();


    view('outingForm.php', ['getOutingTypes' => $getOutingTypes,
        'getOutingEnvironment' => $getOutingEnvironment,
        'getOutingAge' => $getOutingAge,
        'getOutingPrice' => $getOutingPrice]);
}

function showOutings() {
    $getOutingInfos = false;
    $ShowOutings = new Outing();
    $getOutingInfos = $ShowOutings->getOutingInfos();

    view('sorties.php', ['getOutingInfos' => $getOutingInfos]);
}

function showOutingUser() {
    $getOutingUser = false;
    $ShowOutingUser = new Outing();
    $ShowOutingUser->user_id = $_SESSION['userInfos']->user_id;
    $getOutingUser = $ShowOutingUser->getOutingUser();

    view('profilePage.php', ['getOutingUser' => $getOutingUser]);
}

function showOutingOne() {
    $ShowOutingOne = new Outing();
    $ShowOutingOne->outing_id = $_GET['id'];
    $getOutingOne = $ShowOutingOne->showOutingOne();

    view('outingOne.php', ['getOutingOne' => $getOutingOne]);
}

function updateOuting() {
    if (isset($_POST['submitUpdateOuting'])) {
            $UpdateOuting = new Outing();
            $UpdateOuting->outing_title = $_POST['title'];
            $UpdateOuting->outing_place = $_POST['place'];
            $UpdateOuting->outing_date = $_POST['date'];
            $UpdateOuting->outing_startTime = $_POST['timestart'];
            $UpdateOuting->outing_endTime = $_POST['timeend'];
            $UpdateOuting->outing_description = $_POST['description'];
            $UpdateOuting->outingType_id = $_POST['selectType'];
            $UpdateOuting->outingEnvironment_id = $_POST['selectEnvironment'];
            $UpdateOuting->outingAge_id = $_POST['selectAge'];
            $UpdateOuting->outingPrice_id = $_POST['selectPrice'];
            $UpdateOuting->userOuting_id = $_SESSION['userInfos']->user_id;
            $UpdateOuting->createOuting(); //la méthode createOuting retourne le dernier id qui a été inseré, cela servira pour l'insertion d'image
            $UpdateOuting->outing_id = $_GET['id'];
            if (isset($_FILES['image'])) { // si ma valeur image existe j'hydrate ma valeur
                $UpdateOuting->image_path = $_FILES['image']['name']; // je récupère la valeur name de image
                move_uploaded_file($_FILES["image"]["tmp_name"], 'images/user_image/' . $_FILES["image"]["name"]);
            }
            else {
                $UpdateOuting->image_path = NULL;
            }
            $UpdateOuting->updateImage();
            $_SESSION['createOutingOk'] = true;
            header('Location: index.php?page=profil');
            exit();
    }
    $OutingType = new Outing();
    $getOutingTypes = $OutingType->getOutingTypes();

    $OutingEnvironment = new Outing();
    $getOutingEnvironment = $OutingEnvironment->getOutingEnvironment();

    $OutingAge = new Outing();
    $getOutingAge = $OutingAge->getOutingAge();

    $OutingPrice = new Outing();
    $getOutingPrice = $OutingPrice->getOutingPrice();


    view('modifOuting.php', ['getOutingTypes' => $getOutingTypes,
        'getOutingEnvironment' => $getOutingEnvironment,
        'getOutingAge' => $getOutingAge,
        'getOutingPrice' => $getOutingPrice]);
}
