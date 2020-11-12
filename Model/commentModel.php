<?php

class commentModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=store;charset=utf8', 'root', '');
    }
    function getComment(){
        $sentencia = $this->db->prepare("SELECT * FROM comment");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
    function getCommentID($id){
        $sentencia = $this->db->prepare("SELECT * FROM comment WHERE id_product = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

}
