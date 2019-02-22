<?php

class User extends Database {

    public $user_id;  // je déclare les collonnes de ma table en variable pour les réutiliser
    public $user_lastname;
    public $user_firstname;
    public $user_mail;
    public $user_pseudo;
    public $user_password;
    public $user_reasons;
    public $user_image;
    public $userType_id;

    public function createUser() {
        $database = $this->database; // Je stocke ma class database( donc la connexion a la bdd) dans une variable database

        $query = 'INSERT INTO `user` '
                . 'SET `user_lastname` = :user_lastname, '
                . '`user_firstname` = :user_firstname, '
                . '`user_mail` = :user_mail, '
                . '`user_pseudo` = :user_pseudo, '
                . '`user_password` = :user_password, '
                . '`user_reasons` = :user_reasons, '
                . '`user_image` = :user_image, '
                . '`userType_id` = :userType_id';

        $createUser = $database->prepare($query); // je stocke dans createUser la preparation de la requete avec la connexion a la bdd
        //j'attribue les valeurs des attributs nominatifs (hydratation)
        $createUser->bindValue(':user_lastname', $this->user_lastname, PDO::PARAM_STR);
        $createUser->bindValue(':user_firstname', $this->user_firstname, PDO::PARAM_STR);
        $createUser->bindValue(':user_mail', $this->user_mail, PDO::PARAM_STR);
        $createUser->bindValue(':user_pseudo', $this->user_pseudo, PDO::PARAM_STR);
        $createUser->bindValue(':user_password', $this->user_password, PDO::PARAM_STR);
        $createUser->bindValue(':user_reasons', $this->user_reasons, PDO::PARAM_STR);
        $createUser->bindValue(':user_image', $this->user_image, PDO::PARAM_STR);
        $createUser->bindValue(':userType_id', $this->userType_id, PDO::PARAM_INT);

        return $createUser->execute(); // j'éxécute la requête     
    }

    public function getUserInformations() {
        $database = $this->database;

        $query = 'SELECT * FROM `user`'
                 . 'INNER JOIN `userType` '
                 . 'ON `user`.`userType_id` = `userType`.`userType_id`  '
                 . 'WHERE `user_pseudo` = :user_pseudo';

        $getUserInformations = $database->prepare($query);
        $getUserInformations->bindValue(':user_pseudo', $this->user_pseudo, PDO::PARAM_STR);
        $getUserInformations->execute();
        return $getUserInformations->fetch(PDO::FETCH_OBJ);
    }

    public function updateUser() {
        $database = $this->database;

        $query = 'UPDATE `user`'
                . 'SET `user_lastname` = :user_lastname, '
                . '`user_firstname` = :user_firstname, '
                . '`user_mail` = :user_mail,'
                . '`userType_id` = :userType_id, '
                . '`user_pseudo` = :user_pseudo, '
                . '`user_password` = :user_password, '
                . '`user_reasons` = :user_reasons, '
                . '`user_image` = :user_image '
                . 'WHERE `user_id` = :user_id';

        $updateUser = $database->prepare($query);
        $updateUser->bindValue(':user_lastname', $this->user_lastname, PDO::PARAM_STR);
        $updateUser->bindValue(':user_firstname', $this->user_firstname, PDO::PARAM_STR);
        $updateUser->bindValue(':userType_id', $this->userType_id, PDO::PARAM_INT);
        $updateUser->bindValue(':user_mail', $this->user_mail, PDO::PARAM_STR);
        $updateUser->bindValue(':user_pseudo', $this->user_pseudo, PDO::PARAM_STR);
        $updateUser->bindValue(':user_password', $this->user_password, PDO::PARAM_STR);
        $updateUser->bindValue(':user_reasons', $this->user_reasons, PDO::PARAM_STR);
        $updateUser->bindValue(':user_image', $this->user_image, PDO::PARAM_STR);
        $updateUser->bindValue(':user_id', $this->user_id, PDO::PARAM_INT);

        return $updateUser->execute();
    }
    
    public function deleteUser(){
        $database = $this->database;    
        $query= 'DELETE FROM `user` '
                . 'WHERE `user_id` = :user_id';
       
        $deleteUser = $database->prepare($query);
        $deleteUser->bindvalue(':user_id', $this->user_id, PDO::PARAM_INT);        
        return $deleteUser->execute();      
    }
}
