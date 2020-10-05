<?php

require_once "./libs/Smarty/Smarty.class.php";


class ProductView{

    private $title;

    function __construct(){
    }
    function Home($logged){
        $smarty = new Smarty();
        $smarty->assign('logged', $logged);
        $smarty->display('./Template/home.tpl');
    }
    function showProducts($Products, $Category, $logged){
        $smarty = new Smarty();
        $smarty->assign('Products', $Products);
        $smarty->assign('Category', $Category);
        $smarty->assign('logged', $logged);
        $smarty->display('./Template/products.tpl');
    }
    function showProductsCategory($Category, $logged){
        $smarty = new Smarty();
        $smarty->assign('Category', $Category);
        $smarty->assign('logged', $logged);
        $smarty->display('Template/productsCategory.tpl');
    }
    function showProduct($Product, $logged){
        $smarty = new Smarty();
        $smarty->assign('Product', $Product);
        $smarty->assign('logged', $logged);
        $smarty->assign('Category');
        $smarty->display('Template/product.tpl');
    }

    function ShowHomeLocation(){
       header("Location: ".BASE_URL."productos");
    }
    
}

?>