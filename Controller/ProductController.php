<?php

require_once "./View/ProductView.php";
require_once "./View/CategoryView.php";
require_once  "./Model/ProductModel.php";
require_once  "./Model/CategoryModel.php";
require_once  "./Model/UserModel.php";

class ProductController{

    private $view;
    private $model;
    private $viewCategory;
    private $modelCategory;
    private $modelUser;

    function __construct(){
        $this->view = new ProductView();
        $this->viewCategory = new CategoryView();
        $this->model = new ProductModel();
        $this->modelCategory = new CategoryModel();
        $this->modelUser = new UserModel();

    }
    private function checkLoggedIn(){
        session_start();
        
        if(!isset($_SESSION["USERNAME"])){
            header("Location: ". BASE_URL);
            die();
        }else{
            if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1000000)) { 
                header("Location: ". LOGOUT);
                die();
            } 
        
            $_SESSION['LAST_ACTIVITY'] = time();
        }
    }

    function Home(){
        $logged = $this->getAccess();;
        $this->view->Home($logged);
    }
    function getAccess(){
        session_start();
        if(isset($_SESSION['ID_USER'])){
            $loged = $this->modelUser->getUser($_SESSION['ID_USER']);
            return $loged->access;
        }else{
            return 0;
        }
    }
    function showProducts(){
        $Products = $this->model->getProducts();
        $Category = $this->modelCategory->getCategories();
        $logged = $this->getAccess();
        $this->view->showProducts($Products, $Category, $logged);
    }
    function showProduct($params = null){
        $id = $params[':ID'];
        $Product = $this->model->getProduct($id); 
        $logged = $this->getAccess();   
        $this->view->showProduct($Product, $logged);
    }
    function showProductCategory($params = null){
        $id = $params[':ID'];
        $logged = $this->getAccess();  
        $category = $this->model->getProductCategory($id);
        $this->view->showProductsCategory($category, $logged);
    }

    function insertProduct(){
        $this->checkLoggedIn();
            $nombre= $_POST['nombre'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];
            $descripcion = $_POST['descripcion'];
            $id_category = $_POST['category'];
            $this->model->insertProduct($nombre, $price, $stock, $descripcion, $id_category);   
            $this->view->ShowHomeLocation();
    }

    function deleteProduct($params = null){
        $this->checkLoggedIn();
        $id = $params[':ID'];
        $this->model->deleteProduct($id);
        $this->view->ShowHomeLocation();
    }

    function updateProduct($params = null){
        $this->checkLoggedIn();
        $id = $params[':ID'];
        $nombre= $_POST['nombreUpdate'];
        $price = $_POST['priceUpdate'];
        $stock = $_POST['stockUpdate'];
        $descripcion = $_POST['descripcionUpdate'];
        $id_category = $_POST['categoryUpdate'];
        $this->model->updateProduct($id, $nombre, $price, $stock, $descripcion, $id_category);
        $this->view->ShowHomeLocation();
    }
}


?>