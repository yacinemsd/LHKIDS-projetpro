<?php

class Outing extends Database {

    public $outing_id;
    public $outing_postDateTime;
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
    public $user_id;
    public $image_path;

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

    public function createOuting() {
        $database = $this->database;

        $query = 'INSERT INTO `outing` '
                . 'SET `outing_id` = :outing_id, '
                . '`outing_postDateTime` = :outing_postDateTime, '
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
        
        $this->outing_postDateTime = date('Y-m-d H:i:s');
        $createOuting = $database->prepare($query);
        $createOuting->bindValue(':outing_id', $this->outing_id, PDO::PARAM_INT);
        $createOuting->bindValue(':outing_postDateTime', $this->outing_postDateTime, PDO::PARAM_STR);
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
        $createOuting->execute(); 
        return $createOuting->lastInsertId();
    }
    
    public function insertImage() {
        $database = $this->database;

        $query = 'INSERT INTO `images` '
                . 'SET `image_id` = :image_id, '
                . '`image_path` = :image_path, '
                . '`outing_id` = :outing_id';
        
        $insertImage = $database->prepare($query);
        $insertImage->bindValue(':image_id', $this->image_id, PDO::PARAM_INT);
        $insertImage->bindValue(':image_path', $this->image_path, PDO::PARAM_STR);
        $insertImage->bindValue(':outing_id', $this->outing_id, PDO::PARAM_INT);
       
        return $insertImage->execute();
    
    }

    public function getOutingInfos() {
        $database = $this->database;
//requête  avec tout de la table outing + table user
        $query = 'SELECT * FROM `outing`'
                . 'INNER JOIN `outingType` '
                . 'ON `outing`.`outingType_id` = `outingType`.`outingType_id` '
                . 'INNER JOIN `outingEnvironment` '
                . 'ON `outing`.`outingEnvironment_id` = `outingEnvironment`.`outingEnvironment_id` '
                . 'INNER JOIN `outingAge` '
                . 'ON `outing`.`outingAge_id` = `outingAge`.`outingAge_id` '
                . 'INNER JOIN `outingPrice` '
                . 'ON `outing`.`outingPrice_id` = `outingPrice`.`outingPrice_id` '
                . 'INNER JOIN `user` '
                . 'ON `user`.`user_id` = `outing`.`userOuting_id` '
                . 'INNER JOIN `images` '
                . 'ON `images`.`outing_id` = `outing`.`outing_id`';

        $getOutingInfos = $database->prepare($query);
        $getOutingInfos->execute();
        return $getOutingInfos->fetchAll(PDO::FETCH_OBJ);
    }

    public function getOutingUser() { //requête pour récupérer tout de la table outing en fonction de l'utilisateur(user_id)
        $database = $this->database;

        $query = 'SELECT * FROM `outing`'
                . 'INNER JOIN `outingType` '
                . 'ON `outing`.`outingType_id` = `outingType`.`outingType_id` '
                . 'INNER JOIN `outingEnvironment` '
                . 'ON `outing`.`outingEnvironment_id` = `outingEnvironment`.`outingEnvironment_id` '
                . 'INNER JOIN `outingAge` '
                . 'ON `outing`.`outingAge_id` = `outingAge`.`outingAge_id` '
                . 'INNER JOIN `outingPrice` '
                . 'ON `outing`.`outingPrice_id` = `outingPrice`.`outingPrice_id` '
                . 'INNER JOIN `user` '
                . 'ON `user`.`user_id` = `outing`.`userOuting_id` '
                . 'WHERE `userOuting_id` = :user_id';

        $getOutingUser = $database->prepare($query);
        $getOutingUser->bindValue(':user_id', $this->user_id, PDO::PARAM_INT);
        $getOutingUser->execute();
        return $getOutingUser->fetchAll(PDO::FETCH_OBJ);
    }
//requete affichage sortie seule
    public function showOutingOne() {
        $database = $this->database;

        $query = 'SELECT * FROM `outing` '
                . 'INNER JOIN `outingType` '
                . 'ON `outing`.`outingType_id` = `outingType`.`outingType_id` '
                . 'INNER JOIN `outingEnvironment` '
                . 'ON `outing`.`outingEnvironment_id` = `outingEnvironment`.`outingEnvironment_id` '
                . 'INNER JOIN `outingAge` '
                . 'ON `outing`.`outingAge_id` = `outingAge`.`outingAge_id` '
                . 'INNER JOIN `outingPrice` '
                . 'ON `outing`.`outingPrice_id` = `outingPrice`.`outingPrice_id` '
                . 'INNER JOIN `user` '
                . 'ON `user`.`user_id` = `outing`.`userOuting_id` '
                . 'INNER JOIN `images` '
                . 'ON `images`.`outing_id` = `outing`.`outing_id` '
                . 'WHERE `outing`.`outing_id` = :outing_id';

        $showOutingOne = $database->prepare($query);
        $showOutingOne->bindValue(':outing_id', $this->outing_id, PDO::PARAM_INT);
        $showOutingOne->execute();
        return $showOutingOne->fetch(PDO::FETCH_OBJ);
    }
    
    public function updateOuting(){
        $database = $this->database;
        
        $query = 'UPDATE `outing` '
                . 'SET `outing_id` = :outing_id, '
                . '`outing_postDateTime` = :outing_postDateTime, '
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
                . '`userOuting_id` = :userOuting_id, '
                . 'WHERE `outing`.`outing_id` = :outing_id';
        
        $updateOuting = $database->prepare($query);
        $updateOuting->bindValue(':outing_id', $this->outing_id, PDO::PARAM_INT);
        $updateOuting->bindValue(':outing_postDateTime', $this->outing_postDateTime, PDO::PARAM_STR);
        $updateOuting->bindValue(':outing_title', $this->outing_title, PDO::PARAM_STR);
        $updateOuting->bindValue(':outing_place', $this->outing_place, PDO::PARAM_STR);
        $updateOuting->bindValue(':outing_date', $this->outing_date, PDO::PARAM_STR);
        $updateOuting->bindValue(':outing_startTime', $this->outing_startTime, PDO::PARAM_STR);
        $updateOuting->bindValue(':outing_endTime', $this->outing_endTime, PDO::PARAM_STR);
        $updateOuting->bindValue(':outing_description', $this->outing_description, PDO::PARAM_STR);
        $updateOuting->bindValue(':outingType_id', $this->outingType_id, PDO::PARAM_INT);
        $updateOuting->bindValue(':outingEnvironment_id', $this->outingEnvironment_id, PDO::PARAM_INT);
        $updateOuting->bindValue(':outingAge_id', $this->outingAge_id, PDO::PARAM_INT);
        $updateOuting->bindValue(':outingPrice_id', $this->outingPrice_id, PDO::PARAM_INT);
        $updateOuting->bindValue(':userOuting_id', $this->userOuting_id, PDO::PARAM_INT);
        $updateOuting->bindValue(':outing_id', $this->userOuting_id, PDO::PARAM_INT);
        
        return $updateOuting->execute(); 
    }
    public function updateImage() {
        $database = $this->database;

        $query = 'UPDATE `images` '
                . 'SET `image_path` = :image_path, '
                . 'WHERE `outing`.`outing_id` = :outing_id';
        
        $insertImage = $database->prepare($query);
        $insertImage->bindValue(':image_path', $this->image_path, PDO::PARAM_STR);
        $insertImage->bindValue(':outing_id', $this->outing_id, PDO::PARAM_INT);
       
        return $insertImage->execute();
    
    }
}
