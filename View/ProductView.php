<?php

require_once "./libs/Smarty/Smarty.class.php";


class ProductView{

    private $title;

    function __construct(){
    }
    function Home(){
        $smarty = new Smarty();
        $smarty->display('./Template/home.tpl');
    }
    function showProducts($Products, $Category, $logged){
        $smarty = new Smarty();
        $smarty->assign('Products', $Products);
        $smarty->assign('Category', $Category);
        $smarty->assign('logged', $logged);
        $smarty->display('./Template/products.tpl');
    }
    function showProductsCategory($Category){
        $smarty = new Smarty();
        $smarty->assign('Category', $Category);
        $smarty->display('Template/productsCategory.tpl');
    }
    function showProduct($Product){
        $smarty = new Smarty();
        $smarty->assign('Product', $Product);
        $smarty->assign('Category');
        $smarty->display('Template/product.tpl');
    }

    function ShowHomeLocation(){
       header("Location: ".BASE_URL."productos");
    }

    
}

?>