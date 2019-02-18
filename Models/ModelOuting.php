<?php

class Outing extends Database {

public $outing_id;
public $outing_title;
public $outing_place;
public $outing_date; 
public $outing_startTime;
public $outing_endTime;
public $outing_description;
public $outingType_id;
public $outingEnvironment_id;
public $outingAge_id;
public $outingPrice_id;
public $userOuting_id;

public function getOutingTypes() {
$database = $this->database;

$query = 'SELECT * FROM `outingType`';
$req = $database->prepare($query);
$req->execute();
return $req->fetchAll(PDO::FETCH_OBJ);
}

public function getOutingEnvironment() {
$database = $this->database;

$query = 'SELECT * FROM `outingEnvironment`';
$req = $database->prepare($query);
$req->execute();
return $req->fetchAll(PDO::FETCH_OBJ);
}

public function getOutingAge() {
$database = $this->database;

$query = 'SELECT * FROM `outingAge`';
$req = $database->prepare($query);
$req->execute();
return $req->fetchAll(PDO::FETCH_OBJ);
}

public function getOutingPrice() {
$database = $this->database;

$query = 'SELECT * FROM `outingPrice`';
$req = $database->prepare($query);
$req->execute();
return $req->fetchAll(PDO::FETCH_OBJ);
}

public function createOuting(){
    $database = $this->database;
    
    $query = 'INSERT INTO `outing` '
            . 'SET `outing_id` = :outing_id, '
            . '`outing_title` = :outing_title, '
            . '`outing_place` = :outing_place, '
            . '`outing_date` = :outing_date, '
            . '`outing_startTime` = :outing_startTime, '
            . '`outing_endTime` = :outing_endTime, '
            . '`outing_description` = :outing_description, '
            . '`outingType_id` = :outingType_id, '
            . '`outingEnvironment_id` = :outingEnvironment_id, '
            . '`outingAge_id` = :outingAge_id, '
            . '`outingPrice_id` = :outingPrice_id, '
            . '`userOuting_id` = :userOuting_id';
    
     $createOuting = $database->prepare($query);
     $createOuting->bindValue(':outing_id', $this->outing_id, PDO::PARAM_INT);
     $createOuting->bindValue(':outing_title', $this->outing_title, PDO::PARAM_STR);
     $createOuting->bindValue(':outing_place', $this->outing_place, PDO::PARAM_STR);
     $createOuting->bindValue(':outing_date', $this->outing_date, PDO::PARAM_STR);
     $createOuting->bindValue(':outing_startTime', $this->outing_startTime, PDO::PARAM_STR);
     $createOuting->bindValue(':outing_endTime', $this->outing_endTime, PDO::PARAM_STR);
     $createOuting->bindValue(':outing_description', $this->outing_description, PDO::PARAM_STR);
     $createOuting->bindValue(':outingType_id', $this->outingType_id, PDO::PARAM_INT);
     $createOuting->bindValue(':outingEnvironment_id', $this->outingEnvironment_id, PDO::PARAM_INT);
     $createOuting->bindValue(':outingAge_id', $this->outingAge_id, PDO::PARAM_INT);
     $createOuting->bindValue(':outingPrice_id', $this->outingPrice_id, PDO::PARAM_INT);
     $createOuting->bindValue(':userOuting_id', $this->userOuting_id, PDO::PARAM_INT);
      
     return $createOuting->execute();
 }
 
 public function getOutingInfos(){
     $database = $this->database;
     
     $query = 'SELECT * FROM `outing`'
             . 'INNER JOIN `outingType` '
             . 'ON `outing`.`outingType_id` = `outingType`.`outingType_id` '
             . 'INNER JOIN `outingEnvironment` '
             . 'ON `outing`.`outingEnvironment_id` = `outingEnvironment`.`outingEnvironment_id` '
             . 'INNER JOIN `outingAge` '
             . 'ON `outing`.`outingAge_id` = `outingAge`.`outingAge_id` '
             . 'INNER JOIN `outingPrice` '
             . 'ON `outing`.`outingPrice_id` = `outingPrice`.`outingPrice_id`';
             
    $getOutingInfos = $database->prepare($query);
    $getOutingInfos->execute();
    return $getOutingInfos->fetchAll(PDO::FETCH_OBJ);          
 }
}
