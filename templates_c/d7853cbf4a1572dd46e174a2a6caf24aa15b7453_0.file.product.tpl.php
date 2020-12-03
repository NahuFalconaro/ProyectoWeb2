<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 01:10:34
  from 'C:\xampp\htdocs\web2\ProyectoWeb2\Template\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc82cfa86f8e0_93994571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7853cbf4a1572dd46e174a2a6caf24aa15b7453' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\ProyectoWeb2\\Template\\product.tpl',
      1 => 1606954155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./vue/vueComment.vue' => 1,
  ),
),false)) {
function content_5fc82cfa86f8e0_93994571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem; margin-top: 150px;">
                <img src="<?php echo $_smarty_tpl->tpl_vars['Product']->value->imagen;?>
" class="card-img-top" alt="Card image cap">
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
                    <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['Product']->value->imagen;?>
</li>

                </ul>
            </div>
        </div>
        <div class="col-8">
        
        <h1 style="margin-top: 100px ;">Tabla de comentarios</h1>
        <label class="loged" id="<?php echo $_smarty_tpl->tpl_vars['logged']->value;?>
"></label>
        <label class="ids" id="<?php echo $_smarty_tpl->tpl_vars['Product']->value->id_product;?>
"></label>
        <?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
            <div>
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
