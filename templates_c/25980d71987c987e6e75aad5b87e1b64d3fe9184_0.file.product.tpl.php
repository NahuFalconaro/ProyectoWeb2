<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 16:04:16
  from 'C:\xampp\htdocs\Web2FinalProject\ProyectoWeb2\Template\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa565f0663a84_46865126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25980d71987c987e6e75aad5b87e1b64d3fe9184' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2FinalProject\\ProyectoWeb2\\Template\\product.tpl',
      1 => 1604675020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
  ),
),false)) {
function content_5fa565f0663a84_46865126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
    <div class="card" style="width: 18rem; margin-top: 60px/">
        <img src="images/58f800703a91328fe6b19291714fb0bf.jpg" class="card-img-top" alt="...">
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
  <div>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Usuario</th>
          <th scope="col">Comentario</th>
          <th scope="col">Puntaje</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Coment']->value, 'coment');
$_smarty_tpl->tpl_vars['coment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['coment']->value) {
$_smarty_tpl->tpl_vars['coment']->do_else = false;
?>
          <tr>
            <th scope="col"><?php echo $_smarty_tpl->tpl_vars['coment']->value->coment;?>
</th>
            <th scope="col"><?php echo $_smarty_tpl->tpl_vars['coment']->value->user;?>
</th>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>

<?php }
}
