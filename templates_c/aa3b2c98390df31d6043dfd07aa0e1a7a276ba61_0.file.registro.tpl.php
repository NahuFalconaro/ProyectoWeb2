<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 16:27:29
  from 'C:\xampp\htdocs\Web2FinalProject\ProyectoWeb2\Template\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa56b61874e60_58407489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa3b2c98390df31d6043dfd07aa0e1a7a276ba61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2FinalProject\\ProyectoWeb2\\Template\\registro.tpl',
      1 => 1604676443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fa56b61874e60_58407489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
    <div>
        <h3> Registrese en nuestro sitio web!</h3>
    </div>
    <div>
        <form method="POST" action="insertUser">
            <div class="form-group">
                <label >Nombre Usuario</label>
                <input type="text" class="form-control" name="usuario">
            </div>
            <div class="form-group">
                <label >Contraseña</label>
                <input type="password" class="form-control" name="contrasenia" >
            </div>
            <button type="submit" class="btn btn-primary">Registrarse!</button>
        </form>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
