<?php

class Database {

    public $database;

    public function __construct() { //méthode magique
//        try {
            $this->database = new PDO('mysql:host=localhost;dbname=LH_KIDS', 'yacinemsd', 'yacine76620');
            $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        } catch (Exception $error) {
//            die('Erreur : ' . $error->getMessage());
//        }
    }

    public function __destruct() {
        $this->database = NULL;
    }

}

?>
