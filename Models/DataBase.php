<?php

class Database {

    public $database;

    public function __construct() { //méthode magique (sera apellée a chaque instanciation de mon objet Database)
//connexion a la base de données
        try{
            $this->database = new PDO('mysql:host=localhost;dbname=LH_KIDS; charset=utf8', 'yacinemsd', 'yacine76620');
            $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
            echo 'Erreur : Connexion à la base de données impossible ' . $e->getMessage();
        }
    }

    public function __destruct() {
        $this->database = NULL;
    }

}
