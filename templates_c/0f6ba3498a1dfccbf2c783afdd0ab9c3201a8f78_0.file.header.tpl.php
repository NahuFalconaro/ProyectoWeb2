<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 19:02:53
  from 'C:\xampp\htdocs\TPWEB2\Template\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f775d3de0f0e5_06884772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f6ba3498a1dfccbf2c783afdd0ab9c3201a8f78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2\\Template\\header.tpl',
      1 => 1601658070,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f775d3de0f0e5_06884772 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../images/adidas.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <base href="<?php echo BASE_URL;?>
">
    <title></title>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
        <a class="navbar-brand" href="home">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="navbar-brand" href="productos">Productos <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
        <form action="verifyUser" method="POST" class="form-inline">
          <div class="form-group mb-2">
              <input type="text" class="form-control" name="user" placeholder="user">
          </div>
          <div class="form-group mx-sm-3 mb-2">
              <input type="password" name="pass" class="form-control" id="inputPassword2" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary mb-2">Login</button>
      </form>
      <a href="logout">logout</a>
      </nav>
    </header><?php }
}
