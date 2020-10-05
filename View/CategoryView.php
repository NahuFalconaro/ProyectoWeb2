<?php

require_once "./libs/Smarty/Smarty.class.php";


class CategoryView{

    private $title;

    function __construct(){
        $this ->title = "Tienda comercial";
    }

    function showCategorys($Category){
        $smarty = new Smarty();
        $smarty->assing('Category', $Category);
        $smarty->display('./Template/products.tpl');
    }
  
}


?>