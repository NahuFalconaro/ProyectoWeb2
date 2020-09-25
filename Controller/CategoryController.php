<?php

require_once "./View/TasksView.php";
require_once "./Model/TasksModel.php";

class TasksController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new CategoryView();
        $this->model = new CategoryModel();

    }

    function showCategory(){
        $category = $this->model->getCategory();
        $this->view->showHome($category);
    }

    function insertCategory(){
        $category_id = $_POST['name'];
        $this->model->insertCategory($category_id);
        $this->view->showProductsByCategories();
    }

    function deleteCategory($params = null){
        $category_id = $params[':ID'];
        $this->model->deleteCategory($category_id);
        $this->view->showProductsByCategories();
    }

    function updateCategory($params = null){
        $category_id = $params[':ID'];
        $this->model->updateCategory($category_id);
        $this->view->showProductsByCategories();
    }
}


?>
