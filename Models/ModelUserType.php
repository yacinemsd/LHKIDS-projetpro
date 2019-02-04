<?php

class UserType extends Database {

    public $userType_id;
    public $userType_type;

    public function getType() {
        $database = $this->database; // Je stocke ma class database( donc la connexion a la bdd) dans une variable database
        $query = 'SELECT * FROM `userType`';
        $getType = $database->query($query);
        return $getType->fetchAll(PDO::FETCH_OBJ);
    }
    public function createType(){
        $database = $this->database;
        $query = 'INSERT INTO `userType`'
                . 'SET `userType_type` = :userType_type';
        $createType = $database->prepare($query);
        $createType->bindValue(':userType_type', $this->userType_type, PDO::PARAM_STR);
        return $createType->execute();
    }

}
