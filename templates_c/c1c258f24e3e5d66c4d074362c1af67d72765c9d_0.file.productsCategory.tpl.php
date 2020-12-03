<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 14:47:37
  from 'C:\xampp\htdocs\Web2FinalProject\ProyectoWeb2\Template\productsCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc254f990fa65_48373178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1c258f24e3e5d66c4d074362c1af67d72765c9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2FinalProject\\ProyectoWeb2\\Template\\productsCategory.tpl',
      1 => 1604675020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5fc254f990fa65_48373178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container marginSection" style="margin-top: 120px">
    <table class="table ">
        <thead class="thead-dark">
            <tr>

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
<?php }
}
