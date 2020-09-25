<?php

require_once "./View/ProductView.php";
require_once  "./Model/ProductModel.php";

class TasksController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new TasksView();
        $this->model = new TasksModel();

    }

    function home(){
        $tasks = $this->model->GetTasks();
        $this->view->showHome($tasks);
    }
    function showProducts(){
        $tasks = $this->model->getProducts();
        $this->view->showHome($tasks);
    }
    function showProduct($id){
        $tasks = $this->model->getProduct();
        $this->view->showHome($tasks);
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
