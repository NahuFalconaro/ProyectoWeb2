<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 22:37:13
  from 'C:\xampp\htdocs\Web2FinalProject\ProyectoWeb2\Template\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc56609636784_65004983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '769540a376d56e3af7544fcd460d5abd65690a9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2FinalProject\\ProyectoWeb2\\Template\\error.tpl',
      1 => 1606772229,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fc56609636784_65004983 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="../css/styles.css">
    <base href="<?php echo BASE_URL;?>
">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
    <title>documento</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="home">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="navbar-brand" href="pagina/1">Productos <span class="sr-only">(current)</span></a>
                    </li>
                        <li class="nav-item active">
                            <a class="navbar-brand" href="registro">Registrarse <span class="sr-only">(current)</span></a>
                        </li>
                    <li class="nav-item active">
                        <div class="container ">
                            <form action="searchProducts" method="POST" class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" name="inputBuscar" placeholder="Buscar Producto" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                            </form>
                        </div>
                    </li>
                </ul>
                    <form action="verifyUser" method="POST" class="form-inline">
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" name="user" placeholder="user">
                        </div>
                        <div class="form-group mx-sm-2 mb-2">
                            <input type="password" name="pass" class="form-control" id="inputPassword2" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Login</button>
                    </form>
        </nav>
    </header>

<section>
    <h3 style="margin-top: 280px; color:red">Campo/s Vacio/s</h3>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
