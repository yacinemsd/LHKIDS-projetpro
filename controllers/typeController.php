<?php
require 'Models/ModelUserType.php';

function createType(){
    if(isset($_POST['submitType'])){
        $userType = new UserType;
        $userType->userType_type = $_POST['type'];
        
        $userType->createType();
    }
    view('formType.php');
}

