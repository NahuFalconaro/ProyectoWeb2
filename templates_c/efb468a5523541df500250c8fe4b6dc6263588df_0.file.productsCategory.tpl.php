<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-01 01:08:12
  from 'C:\xampp\htdocs\TPWEB2\Template\productsCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f750fdcea4a27_97290974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efb468a5523541df500250c8fe4b6dc6263588df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2\\Template\\productsCategory.tpl',
      1 => 1601507290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5f750fdcea4a27_97290974 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id producto</th>
                <th scope="col">nombre</th>
                <th scope="col">precio</th>
                <th scope="col">stock</th>
                <th scope="col">descripcion</th>
                <th scope="col">categoria</th>
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
                    <th scope="col"><?php echo $_smarty_tpl->tpl_vars['category']->value->id_product;?>
</th>
                    <th scope="col"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</th>
                    <th scope="col"><?php echo $_smarty_tpl->tpl_vars['category']->value->price;?>
</th>
                    <th scope="col"><?php echo $_smarty_tpl->tpl_vars['category']->value->stock;?>
</th>
                    <th scope="col"><?php echo $_smarty_tpl->tpl_vars['category']->value->descripcion;?>
</a></th>
                    <th scope="col"><?php echo $_smarty_tpl->tpl_vars['category']->value->category;?>
</a></th>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
