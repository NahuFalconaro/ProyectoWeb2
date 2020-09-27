<?php
    require_once 'Controller/UserController.php';
    require_once 'Controller/ProductController.php';
    require_once 'Controller/CategoryController.php';
    require_once 'route.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    $r = new Router();
    $r->addRoute("home", "GET", "ProductController", "Home");
    
    // rutas
    $r->addRoute("productos", "GET", "ProductController", "showProducts");
    $r->addRoute("productos", "GET", "CategoryController", "Categories");
    $r->addRoute("productos/:ID", "GET", "CategoryController", "ProductID");

    //Esto lo veo en View
    $r->addRoute("insertproduct", "POST", "ProductController", "InsertProduct");
    $r->addRoute("insertcategory", "POST", "CategoryController", "InsertCategory");
    $r->addRoute("insertuser", "POST", "UserController", "InsertUser");
    

    $r->addRoute("deleteuser/:ID", "GET", "ProductController", "BorrarElProdcutoQueVienePorParametro");
    $r->addRoute("deleteproduct/:ID", "GET", "UserController", "BorrarElUsuarioQueVienePorParametro");
    $r->addRoute("deletecategory/:ID", "GET", "CategoryController", "BorrarLaCategoriaQueVienePorParametro");

    //Ruta por defecto.
    $r->setDefaultRoute("ProductController", "Home");



    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
