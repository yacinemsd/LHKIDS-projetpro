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
            $Outing->createOuting();
            $_SESSION['createOutingOk'] = true;
            header('Location: index.php?page=profil');
            exit();
            echo 'création ok';
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
function showOuting(){
    $getOutingInfos = false;
    $ShowOuting = new Outing();
    $getOutingInfos = $ShowOuting->getOutingInfos();

    view('sorties.php', ['getOutingInfos' => $getOutingInfos]);
}
function showOutingUser(){
    $getOutingUser = false;
    $ShowOutingUser = new Outing();
    $ShowOutingUser->user_id = $_SESSION['userInfos']->user_id;
    $getOutingUser = $ShowOutingUser->getOutingUser();
    
    view('profilePage.php', ['getOutingUser' => $getOutingUser]);
}
