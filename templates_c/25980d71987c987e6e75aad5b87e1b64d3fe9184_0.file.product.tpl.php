<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-18 15:53:19
  from 'C:\xampp\htdocs\Web2FinalProject\ProyectoWeb2\Template\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb5355fd64989_56020455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25980d71987c987e6e75aad5b87e1b64d3fe9184' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2FinalProject\\ProyectoWeb2\\Template\\product.tpl',
      1 => 1605711180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./vue/vueComment.vue' => 1,
  ),
),false)) {
function content_5fb5355fd64989_56020455 (Smarty_Internal_Template $_smarty_tpl) {
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
           
            <label class="loged" id="<?php echo $_smarty_tpl->tpl_vars['logged']->value;?>
"></label>
            <label class="ids" id="<?php echo $_smarty_tpl->tpl_vars['Product']->value->id_product;?>
"></label>
            <div>
                <?php if ($_smarty_tpl->tpl_vars['logged']->value == 0) {?>
                    <form id="form-comment" action="insert" method="post">
                    <div class="form-group">
                        <label for="title">Comment</label>
                        <input class="form-control" id="comment" name="input_comment" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Titulo de la Tarea</small>
                    </div>
                    <div class="form-group">
                        <label for="score">score</label>
                        <input class="form-control" id="score" name="input_score">
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>

                <?php }?>
                <section id="vue-comentarios">
                    <?php $_smarty_tpl->_subTemplateRender("file:./vue/vueComment.vue", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
