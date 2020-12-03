<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 01:09:55
  from 'C:\xampp\htdocs\web2\ProyectoWeb2\Template\productSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc82cd324d4c6_00004910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9b7e714c0f4f4dcd4ab2ac6f0dc322f34e6171d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\ProyectoWeb2\\Template\\productSearch.tpl',
      1 => 1606766906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5fc82cd324d4c6_00004910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
<table class="table table-dark" style="margin-top: 100px;">
<thead>
  <tr>
  <th scope="col">imagen</th>
  <th scope="col">nombre</th>
  <th scope="col">precio</th>
  <th scope="col">stock</th>
  <th scope="col">category</th>
  <th scope="col">ver mas</th>
  </tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Searching']->value, 'search');
$_smarty_tpl->tpl_vars['search']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['search']->value) {
$_smarty_tpl->tpl_vars['search']->do_else = false;
?>
    <tr>
        <th scope="col"><img src="<?php echo $_smarty_tpl->tpl_vars['search']->value->imagen;?>
" class="card-img-top" alt="Card image cap"></th>
        <th scope="col"><?php echo $_smarty_tpl->tpl_vars['search']->value->nombre;?>
</th>
        <th scope="col"><?php echo $_smarty_tpl->tpl_vars['search']->value->price;?>
</th>
        <th scope="col"><?php echo $_smarty_tpl->tpl_vars['search']->value->stock;?>
</th>
        <th scope="col"><?php echo $_smarty_tpl->tpl_vars['search']->value->category;?>
</th>
        <th scope="col"><a href="productos/<?php echo $_smarty_tpl->tpl_vars['search']->value->id_product;?>
" class="btn btn-dark" value="<?php echo $_smarty_tpl->tpl_vars['search']->value->id_product;?>
">Descripcion</a></th>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>}
        </tbody>
</table>
</div><?php }
}
