<?php

class commentModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=store;charset=utf8', 'root', '');
    }

    function deleteComent($id_coment){
        $sentencia = $this->db->prepare("DELETE FROM product WHERE id_coment = ?");
        $sentencia-> execute(array($id_category));
    }


    