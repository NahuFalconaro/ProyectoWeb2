<?php

class UserModel{

    private $db;

    function __construct(){
     $this->db = new PDO('mysql:host=localhost;'.'dbname=store;charset=utf8', 'root', '');
    }
    
    function insertUser($name, $password){
        $sentencia = $this->db->prepare("INSERT INTO User(name, password) VALUES (?,?)");
        $sentecia->execute(array($name, $password));
    }

    function deleteUser($id_user){
        $sentencia = $this->db->prepare("DELETE FROM User WHERE id_user = ?");
        $sentencia-> execute(array($id_user));
    }



}
?>