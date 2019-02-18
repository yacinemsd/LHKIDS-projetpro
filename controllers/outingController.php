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
            $Outing->createOuting();
            echo 'création ok';
        }
    } $OutingType = new Outing();
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

//        function createOuting() {
//            if (isset($_POST['submitCreateOuting'])) {
//                if ($formOutingValid) {
//                    $Outing = new Outing();
//                    $Outing->outing_title = $_POST['title'];
//                    $Outing->outing_place = $_POST['place'];
//                    $Outing->outing_date = $_POST['date'];
//                    $Outing->outing_startTime = $_POST['timestart'];
//                    $Outing->outing_endTime = $_POST['timeend'];
//                    $Outing->outing_description = $_POST['description'];
//                    $Outing->outingType_id = $_POST['selectType'];
//                    $Outing->outingEnvironment_id = $_POST['selectEnvironment'];
//                    $Outing->outingAge_id = $_POST['selectAge'];
//                    $Outing->outingPrice_id = $_POST['selectPrice'];
//                    $Outing->createOuting();
//                    echo 'cration ok';
//                }
//            }
//            view('outingForm.php', ['getOutingTypes' => $getOutingTypes,
//                'getOutingEnvironment' => $getOutingEnvironment,
//                'getOutingAge' => $getOutingAge,
//                'getOutingPrice' => $getOutingPrice]);
//        }
        