<?php

class ProductModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=....;charset=utf8', 'root', '');
    }
       
    function getProducts(){
          $sentencia = $this->db->prepare("SELECT * FROM Product");
          $sentencia->execute();
          return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
    function getProduct($id_product){
        $sentencia = $this->db->prepare("SELECT * FROM Product WHERE id_product = ?");
        $sentencia->execute(array($id_product));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getProductCategory(){
        $sentencia = $this->db->prepare("SELECT Product.*, Category.nombre
         FROM Product JOIN Category ON Product.id_category = Category.id_category");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);

    }

    //ADMIN
    function insertProduct($name, $price, $stock, $description){
        $sentencia = $this->db->prepare("INSERT INTO Producto(name, price, stock, description) VALUES (?,?,?,?)");
        $sentecia->execute(array($name, $price, $stock, $description));
    }
    function deleteProduct($id_product){
        $sentencia = $this->db->prepare("DELETE FROM Product WHERE id_product = ?");
        $sentencia-> execute(array($id_product));
    }
    
    function updateProduct($id_product, $name, $price, $stock, $description){
        $sentencia = $this->db->prepare("UPDATE Product SET name=?, price=?, stock=?, description=? WHERE id_product = ?");
        $setencia->execute(array($id_product, $name, $price, $stock, $description));
    }
}



?>