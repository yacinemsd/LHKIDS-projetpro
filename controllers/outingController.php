<?php

require_once 'Models/ModelOuting.php';

function getOutingInfos() {
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
