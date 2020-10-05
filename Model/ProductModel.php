<?php

class ProductModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=store;charset=utf8', 'root', '');
    }
       
    function getProducts(){
          $sentencia = $this->db->prepare("SELECT * FROM product");
          $sentencia->execute();
          return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
    function getProduct($id){
        $sentencia = $this->db->prepare("SELECT product.*, category.*
        FROM product JOIN category ON product.id_product = ? AND product.id_category = category.id_category ");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }  

    function getProductCategory($id_category){
        $sentencia = $this->db->prepare("SELECT product.*, category.*
         FROM product JOIN category ON product.id_category = ? AND category.id_category = product.id_category ");
        $sentencia->execute(array($id_category));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);

    }

    //ADMIN
    function insertProduct($name, $price, $stock, $description, $id_category){
        $sentencia = $this->db->prepare("INSERT INTO product(nombre, price, stock, descripcion, id_category) VALUES (?,?,?,?,?)");
        $sentencia->execute(array($name, $price, $stock, $description, $id_category));
    }
    function deleteProduct($id_product){
        $sentencia = $this->db->prepare("DELETE FROM product WHERE id_product = ?");
        $sentencia-> execute(array($id_product));
    }
    function deleteProductCategory($id_category){
        $sentencia = $this->db->prepare("DELETE FROM product WHERE id_category = ?");
        $sentencia-> execute(array($id_category));
    }
    function updateProduct($id_product, $nombre, $price, $stock, $descripcion, $id_category){
        $sentencia = $this->db->prepare("UPDATE product SET nombre=?, price=?, stock=?, descripcion=?, id_category=? WHERE id_product = ?");
        $sentencia->execute(array($nombre, $price, $stock, $descripcion, $id_category,$id_product));
    }
}



?>