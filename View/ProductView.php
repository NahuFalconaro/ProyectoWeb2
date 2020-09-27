<?php

require_once "./libs/Smarty/Smarty.class.php";


class ProductView{

    private $title;

    function __construct(){
        $this->title = "Tienda comercial";
    }
    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }
    function Home(){
        $smarty = new Smarty();
        $smarty->display('./Template/home.tpl');
    }
    function showProducts($Products){
        $smarty = new Smarty();
        $smarty->assign('Products', $Products);
        //$smarty->assign('Category', $Category);
        $smarty->display('./Template/products.tpl');
    }

    function showProduct($Product){
        $smarty = new Smarty();
        $smarty->assing('Product', $Product);
        $smarty->display('Template/products.tpl');
    }

}


?>