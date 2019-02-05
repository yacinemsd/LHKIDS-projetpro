<?php
class User extends Database {

  public $user_id;  // je déclare les collonnes de ma table en variable pour les réutiliser
  public $user_lastname;
  public $user_firstname;
  public $user_mail;
  public $user_pseudo;
  public $user_password;
  public $user_reasons;
  public $userType_id;

  public function createUser(){
    $database = $this->database; // Je stocke ma class database( donc la connexion a la bdd) dans une variable database
    
    $query = 'INSERT INTO `user` '
            . 'SET `user_lastname` = :user_lastname, '
            . '`user_firstname` = :user_firstname, '
            . '`user_mail` = :user_mail, '
            . '`user_pseudo` = :user_pseudo, '
            . '`user_password` = :user_password, '
            . '`user_reasons` = :user_reasons, '
            . '`userType_id` = :userType_id';
    
    $createUser = $database->prepare($query); // je stocke dans createUser la preparation de la requete avec la connexion a la bdd
    //j'attribue les valeurs des attributs nominatifs (hydratation)
    $createUser->bindValue(':user_lastname', $this->lastname, PDO::PARAM_STR);
    $createUser->bindValue(':user_firstname', $this->firstname, PDO::PARAM_STR);
    $createUser->bindValue(':user_mail', $this->mail, PDO::PARAM_STR);
    $createUser->bindValue(':user_pseudo', $this->pseudo, PDO::PARAM_STR);
    $createUser->bindValue(':user_password', $this->password, PDO::PARAM_STR);
    $createUser->bindValue(':user_reasons', $this->reasons, PDO::PARAM_STR);
    $createUser->bindValue(':userType_id', $this->userType_id, PDO::PARAM_INT);
    
     return $createUser->execute(); // j'éxécute la requête     
  }
  
  public function getUserInformations(){
     $database = $this->database;
     
     $query = 'SELECT * FROM `user`'
             . 'INNER JOIN `userType`'
             . 'ON `user`.`userType_id` = `userType`.`userType_id`'
             . 'WHERE `user_pseudo` = :user_pseudo';
     
     $getUserInformations = $database->prepare($query);
     $getUserInformations->bindValue(':user_pseudo', $this->user_pseudo, PDO::PARAM_STR);
     $getUserInformations->execute();
     return $getUserInformations->fetch(PDO::FETCH_OBJ);
  } 
}
 
