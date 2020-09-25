<?php

require_once "./View/TasksView.php";
require_once "./Model/TasksModel.php";

class TasksController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new TasksView();
        $this->model = new TasksModel();

    }

    function home(){
        $user = $this->model->getUser();
        $this->view->showHome($user);
    }

    function insertTask(){
        $user = $_POST['user'];
        $password = $_POST['password'];
        $this->model->insertTask($user,$password);
        $this->view->showHome();
    }

    function deleteUser($params = null){
        $user = $params[':ID'];
        $this->model->deleteUser($user);
        $this->view->showHome();
    }
    // Cambiar contraseña? 
   // function updateUser($params = null){
     //   $user = $params[':ID'];
     //  $this->model->MarkAsCompletedTask($task_id);
     //   $this->view->ShowHomeLocation();
   // }
}


?>
