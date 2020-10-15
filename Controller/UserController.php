<?php

require_once "./View/UserView.php";
require_once "./View/ProductView.php";
require_once "./Model/UserModel.php";

class UserController{

    private $view;
    private $viewProducts;
    private $model;

    function __construct(){
        $this->view = new UserView();
        $this->viewProducts = new ProductView();
        $this->model = new UserModel();

    }

    function home(){
        $user = $this->model->getUser();
        $this->view->showHome($user);
    }
    function Login(){
        $this->view->ShowLogin();
    }
    function Logout(){
        session_start();
        session_destroy();
        header("Location: ".BASE_URL);

    }

    public function verifyUser(){
       $user = $_POST['user'];
       $pass = $_POST['pass']; 
       
       $username = $this->model->getPassword($user);
        
       //if($pass == $username->password){
        if(password_verify($pass, $username->password)){
           session_start();
           $_SESSION['ID_USER'] = $username->id_user;
           $_SESSION['USERNAME'] = $username->user;
           $_SESSION['LAST_ACTIVITY'] = time();
           $this->viewProducts->showHomeLocation();
       }else{
           $this->viewProducts->Home(0);
       }
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
