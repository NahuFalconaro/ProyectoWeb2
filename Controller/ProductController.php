<?php

require_once "./View/ProductView.php";
require_once  "./Model/ProductModel.php";

class ProductController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new ProductView();
        $this->model = new ProductModel();

    }

    function Home(){
       // $tasks = $this->model->GetTasks();
        $this->view->Home();
    }
    function showProducts(){
        $Products = $this->model->getProductCategory();
        $this->view->showProducts($Products);
    }
    function showProduct($id){
        $products = $this->model->getProduct();
        $this->view->showProducts($products);
    }
    function showProductCategory(){
        $tasks = $this->model->getProductCategory();
        $this->view->showHome($tasks);
    }

    function insertTask(){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        $description = $_POST['description'];
        $this->model->insertTask($name, $price, $stock, $description);
        $this->view->showHome();
    }

    function deleteProduct($params = null){
        $task_id = $params[':ID'];
        $this->model->deleteProduct($task_id);
        $this->view->showHome();
    }

    function updateProduct($params = null){
        $task_id = $params[':ID'];
        $this->model->updateProduct($task_id);
        $this->view->showHome();
    }
}


?>
