<?php

class commentModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=store;charset=utf8', 'root', '');
    }


    