<?php

class Database {

    public $database;

    public function __construct() { //méthode magique
            $this->database = new PDO('mysql:host=localhost;dbname=LH_KIDS; charset=utf8', 'yacinemsd', 'yacine76620');
            $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    public function __destruct() {
        $this->database = NULL;
    }

}
