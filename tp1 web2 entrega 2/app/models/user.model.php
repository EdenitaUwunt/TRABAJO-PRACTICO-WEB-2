<?php

class userModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=dbweb2;charset=utf8', 'root', '');
    }

    public function getByUser($usuario) {
        $query = $this->db->prepare('SELECT * FROM `dbweb2` WHERE usuario = ?');
        $query->execute([$usuario]);

        return $query->fetch(PDO::FETCH_OBJ);
    }
}
