<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-27 23:22:41
  from 'C:\xampp\htdocs\TPWEB2\Template\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7102a10217b2_81629675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10991282e52c3145b705b5be4ba3c814762833e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2\\Template\\products.tpl',
      1 => 1601241622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5f7102a10217b2_81629675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id producto</th>
      <th scope="col">nombre</th>
      <th scope="col">precio</th>
      <th scope="col">stock</th>
      <th scope="col">categoria</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <tr>
      <th scope="row"><?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
</th>
      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['product']->value->name;?>
</th>
      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</th>
      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['product']->value->stock;?>
</th>
      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['product']->value->category;?>
</th>
    </tr>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
