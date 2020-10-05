<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-27 23:55:57
  from 'C:\xampp\htdocs\TPWEB2\Template\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f710a6d63ee18_36763715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3a9e4b31256e6999f4832c6564335c943de875e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2\\Template\\category.tpl',
      1 => 1601243753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f710a6d63ee18_36763715 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id category</th>
      <th scope="col">nombre</th>

    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Category']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
    <tr>
      <th scope="row"><?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
</th>
      <th scope="col"><?php echo $_smarty_tpl->tpl_vars['category']->value->category;?>
</th>
    </tr>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table><?php }
}
