<?php

require_once "./libs/smarty/Smarty.class.php";

class UserView{

    private $title;
    

    function __construct(){
        $this->title = "Login";
    }

    function ShowLogin(){

        $smarty = new Smarty();
        $smarty->display('./Template/products.tpl'); // muestro el template 
    }

}


?>
