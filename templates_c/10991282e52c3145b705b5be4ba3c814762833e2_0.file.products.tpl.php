<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 03:04:04
  from 'C:\xampp\htdocs\TPWEB2\Template\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87a004b28de9_89438489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10991282e52c3145b705b5be4ba3c814762833e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2\\Template\\products.tpl',
      1 => 1602718920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5f87a004b28de9_89438489 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <div class="container " >
    <?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
        <h2 class="marginSection">Lista de productos</h2>
        <?php } else { ?>
        <h2 class="form">Lista de productos</h2>
    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
            <form action="insert" method="POST" >
                <div class="form-row  marginSection"  >
                    <div class="col">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre Producto">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="price" placeholder="Precio">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="stock" placeholder="Stock">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="descripcion" placeholder="Descripcion">
                    </div>
                    <div>
                        <select name="category" class="form-control">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Category']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->category;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-outline-dark">Insertar</button>
                    </div>
                </div>
            </form>
        <?php }?>
    </div>
    
    <div class="container ">
    
    
    <?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
        <table class="table table-striped table-dark tabla table-responsive-md marginSection" >
    <?php } else { ?>
        <table class="table table-striped table-dark tabla table-responsive-md marginSection">
    <?php }?> 

            <thead class="thead-dark">
        
                <tr>

                    <th scope="col">nombre</th>
                    <th scope="col">precio</th>
                    <th scope="col">stock</th>
                    <th scope="col">category</th>
                    <th scope="col">ver mas</th>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                    <?php }?>
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
                        <th scope="col"><?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
</th>
                        <th scope="col"><?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
</th>
                        <th scope="col"><?php echo $_smarty_tpl->tpl_vars['product']->value->stock;?>
</th>
                        <th scope="col"><?php echo $_smarty_tpl->tpl_vars['product']->value->category;?>
</th>
                        <th scope="col"><a href="productos/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
" class="btn btn-dark" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">Descripcion</a></th>
                        <?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
                            <th scope="col"><a href="delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
" class="btn btn-dark" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">Eliminar</a></th>
                            <th><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">Modificar</button></th>
                            <div class="modal fade" id="exampleModal<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="update/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
" method="POST" class="container">
        
                                                <div class="form-group">
        
                                                    <input type="text" class="form-control" name="nombreUpdate" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->nombre;?>
">
                                                </div>
                                                <div class="form-group">
        
                                                    <input type="text" class="form-control" name="priceUpdate" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->price;?>
">
                                                </div>
                                                <div class="form-group">
        
                                                    <input type="text" class="form-control" name="stockUpdate" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->stock;?>
">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="descripcionUpdate" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->descripcion;?>
">
                                                </div>
                                                <div>
                                                    <select name="categoryUpdate" class="form-control">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Category']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->category;?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    </select>
                                                </div>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-outline-dark">update</button>
                                            </form>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
            </div>
        <?php }?>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>

    <table class="table table-striped table-dark tabla table-responsive-md margentabla">
        <?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
            <form action="insertCategory" method="POST">
                <div class="form-row ">
                    <div class="col">
                        <input type="text" class="form-control" name="nameCategory" placeholder="Nombre Categoria">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-outline-dark">Insertar</button>
                    </div>
                </div>
            </form>
        <?php }?>
        <h2>Lista de categorias</h2>
        <p>Haz click en el nombre de las categorias para ver que productos contiene cada una!</p>
        <thead class="thead-dark">
            <tr>

                <th scope="col">nombre</th>
                <?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
                    <th scope="col">eliminar</th>
                    <th scope="col">modificar</th>
                <?php }?>
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

                    <th scope="col"><a href="category/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
"  class="letterCategory"><?php echo $_smarty_tpl->tpl_vars['category']->value->category;?>
</a></th>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value == 1) {?>
                        <th scope="col"><a href="deleteCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
" class="btn btn-dark" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
">Eliminar</a></th>
                        <th><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
">Modificar</button></th>
                        <div class="modal fade" id="exampleModal<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="updateCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
" method="POST" class="container">
        
                                            <div class="form-group">
        
                                                <input type="text" class="form-control" name="nombreUpdateCategory" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->category;?>
">
                                            </div>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-outline-dark">update</button>
                                        </form>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    </div>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
