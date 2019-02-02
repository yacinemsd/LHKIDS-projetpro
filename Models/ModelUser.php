<?php
class User extends database {

  public $id;  // je déclare les collonnes de ma table en variable pour les réutiliser
  public $lastname;
  public $firstname;
  public $mail;
  public $pseudo;
  public $password;
  public $reasons;
  public $userType_id;

  public function createUser(){
    $database = $this->database; // Je stocke ma class database( donc la connexion a la bdd) dans une variable database
    
    $query = 'INSERT INTO `user`'
            . 'SET `lastname` = :lastname'
            . '`firstname` = :firstname'
            . '`mail` = :mail'
            . '`pseudo` = :pseudo'
            . '`password` = :password'
            . '`reasons` = :reasons'
            . '`userType_id` = :userType_id';
    
    $createUser = $database->prepare($query); // je stocke dans createUser la preparation de la requete avec la connexion a la bdd
    //j'attribue les valeurs des attributs nominatifs (hydratation)
    $createUser->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
    $createUser->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
    $createUser->bindValue(':mail', $this->mail, PDO::PARAM_STR);
    $createUser->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
    $createUser->bindValue(':password', $this->password, PDO::PARAM_STR);
    $createUser->bindValue(':lastname', $this->reasons, PDO::PARAM_STR);
    $createUser->bindValue(':userType_id', $this->userType_id, PDO::PARAM_INT);
    
     return $createUser->execute(); // j'éxécute la requête
   
             
  }

}
 ?>
