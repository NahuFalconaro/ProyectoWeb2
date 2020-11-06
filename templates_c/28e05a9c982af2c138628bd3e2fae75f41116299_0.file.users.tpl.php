<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 17:39:08
  from 'C:\xampp\htdocs\Web2FinalProject\ProyectoWeb2\Template\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa57c2c9786a7_97838012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28e05a9c982af2c138628bd3e2fae75f41116299' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2FinalProject\\ProyectoWeb2\\Template\\users.tpl',
      1 => 1604680488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fa57c2c9786a7_97838012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container" style="margin-top: 80px;">
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre Usuario</th>
      <th scope="col">Delete User</th>
      <th scope="col">Permisos</th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
    <tr>
      <th scope="row"><?php echo $_smarty_tpl->tpl_vars['user']->value->user;?>
</th>
      <th scope="row"><a href="deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
" class="btn btn-dark">Eliminar</a></th>

      <th><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
">Modificar</button></th>
                            <div class="modal fade" id="exampleModal<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="updateUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->id_user;?>
" method="POST" class="container">
                                                <div class="form-group">
                                                <select name="permisos" class="form-control">
                                                    <option value="1">usuario</option>
                                                    <option value="2">admin</option>
                                            </select>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-outline-dark">update</button>
                                            </form>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
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
