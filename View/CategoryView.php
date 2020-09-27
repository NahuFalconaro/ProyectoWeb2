<?php

require_once "./libs/Smarty/Smarty.class.php";


class CategoryView{

    private $title;

    function __construct(){
        $this -> title = "Tienda comercial";
    }

    function showCategorys($categorys){
        $smarty = new Smarty();
        $smarty->assing('title', $this->title);
        $smarty->assing('category', $categorys);
        $smarty->display('Template/products.tpl');
    }

}


?>