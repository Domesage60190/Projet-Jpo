<?php

//connexion a la base de donnée en pdo

class database {

// $db=stokage de l'objet de la base de donnée

    protected $db;

// _contruct = contruit la base
// getmessage = recupere le message saisie 


    public function __construct() {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=jpo', 'user', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function __destruct() {
        $this->db = NULL;
    }

}
?>
