<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 00:41:27
  from 'C:\xampp\htdocs\Web2FinalProject\ProyectoWeb2\Template\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fac76a7707210_37664014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25980d71987c987e6e75aad5b87e1b64d3fe9184' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2FinalProject\\ProyectoWeb2\\Template\\product.tpl',
      1 => 1605138045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./vue/vueComment.tpl' => 1,
  ),
),false)) {
function content_5fac76a7707210_37664014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem; margin-top: 150px;">
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
        </div>
        <div class="col-8">
            <input type="hidden" name="idproducto" value="<?php echo $_smarty_tpl->tpl_vars['Product']->value->id_product;?>
">
            <label class="loged" id="<?php echo $_smarty_tpl->tpl_vars['logged']->value;?>
"></label>
            <label class="ids" id="<?php echo $_smarty_tpl->tpl_vars['Product']->value->id_product;?>
"></label>
            <div>
                <?php if ($_smarty_tpl->tpl_vars['logged']->value == 0) {?>
                    <form action="addComment" id="addComment"method="POST" class="form-inline" style="margin-top: 100px;">
                        <div class="form-group mb-2">
                            <input type="text" class="form-control" name="comment" placeholder="comment">
                        </div>
                        <div class="form-group mx-sm-2 mb-2">
                            <input type="number" name="score" class="form-control"  placeholder="score">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">insertar</button>
                    </form>
                <?php }?>
                <section id="vue-comentarios">
                    <?php $_smarty_tpl->_subTemplateRender("file:./vue/vueComment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </section>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="./js/comment.js"><?php echo '</script'; ?>
>
<?php }
}
