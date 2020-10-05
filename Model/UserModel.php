<?php

class UserModel{

    private $db;

    function __construct(){
     $this->db = new PDO('mysql:host=localhost;'.'dbname=store;charset=utf8', 'root', '');
    }
    function getUser($id){
        $sentencia = $this->db->prepare("SELECT * FROM user WHERE id_user = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
  }
  function getPassword($user){
    $sentencia = $this->db->prepare("SELECT * FROM user WHERE user = ?");
    $sentencia->execute(array($user));
    return $sentencia->fetch(PDO::FETCH_OBJ);
}
    //function insertUser($name, $password){
       // $sentencia = $this->db->prepare("INSERT INTO User(name, password) VALUES (?,?)");
      //  $sentecia->execute(array($name, $password));
    //}

   // function deleteUser($id_user){
      //  $sentencia = $this->db->prepare("DELETE FROM User WHERE id_user = ?");
     //   $sentencia-> execute(array($id_user));
   // }



}
?>