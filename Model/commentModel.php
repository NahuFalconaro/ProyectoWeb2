<?php

class commentModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=store;charset=utf8', 'root', '');
    }

    function insertProduct($text, $score, $id_product){
        $sentencia = $this->db->prepare("INSERT INTO comment(comment, score, id_product) VALUES (?,?,?)");
        $sentencia->execute(array($comment, $score, $id_product));
    }






}
