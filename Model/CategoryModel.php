<?php

class CategoryModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=store;charset=utf8', 'root', '');
    }
         
      function getCategory(){
          $sentencia = $this->db->prepare("SELECT * FROM Category");
          $sentencia->execute();
          return $sentencia->fetchAll(PDO::FETCH_OBJ);
      }
    }


    //ADMIN
    function insertCategory($name){
        $sentencia = $this->db->prepare("INSERT INTO Category(name) VALUES(?)");
        $sentencia->execute(array($name));
      }

       function deleteCategory($id_category){
           $sentencia = $this->db->prepare("DELETE FROM Category WHERE id_category=?");
           $sentencia->execute(array($id_category));
      }

       function updateCategory($id_category,$name){
           $sentencia = $this->db->prepare("UPDATE Category SET name=? WHERE id_category=?");
           $sentencia->execute(array($name));
       }
       
?> 