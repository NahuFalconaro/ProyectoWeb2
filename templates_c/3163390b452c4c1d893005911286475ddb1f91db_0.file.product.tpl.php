<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 19:17:37
  from 'C:\xampp\htdocs\TPWEB2\Template\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7760b16e3151_12818521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3163390b452c4c1d893005911286475ddb1f91db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2\\Template\\product.tpl',
      1 => 1601659053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5f7760b16e3151_12818521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['Product']->value->nombre;?>
</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['Product']->value->price;?>
</li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['Product']->value->stock;?>
</li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['Product']->value->descripcion;?>
</li>
    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['Product']->value->category;?>
</li>

  </ul>
</div>
<video loop="" autoplay="" playsinline="" src="../images/originals-fw20-zx-bb-launch-hp-mh-t-R2_ilsjh0.mp4" ></video>

<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
