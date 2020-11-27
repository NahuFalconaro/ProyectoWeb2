<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-27 03:40:06
  from 'C:\xampp\htdocs\Web2FinalProject\ProyectoWeb2\Template\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc0670676d864_64670380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b23b41b92d5c8b74977beb9a12d7e8ba222669bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2FinalProject\\ProyectoWeb2\\Template\\products.tpl',
      1 => 1606444656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fc0670676d864_64670380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section>
    <div class="container " >
    <?php if ($_smarty_tpl->tpl_vars['logged']->value == 2) {?>
        <h2 class="marginSection">Lista de productos</h2>
        <?php } else { ?>
        <h2 class="form">Lista de productos</h2>
    <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['logged']->value == 2) {?>
            <form action="insert" method="POST" enctype="multipart/form-data" >
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
                        <input type="file" class="form-control" name="input_name" id="imagenUpload" >
                    </div>
                </div>
                    <div class="col">
                        <button type="submit" class="btn btn-outline-dark">Insertar</button>
                    </div>
            </form>
        <?php }?>
    </div>
    

    <div class="container ">
    <div class="container "> 
    <?php if ($_smarty_tpl->tpl_vars['logged']->value == 2) {?>
        <table class="table table-striped table-dark tabla table-responsive-md marginSection" >
    <?php } else { ?>
        <table class="table table-striped table-dark tabla table-responsive-md marginSection">
    <?php }?> 
            <thead class="thead-dark">
                <tr>
                    <th scope="col">imagen</th>
                    <th scope="col">nombre</th>
                    <th scope="col">precio</th>
                    <th scope="col">stock</th>
                    <th scope="col">category</th>
                    <th scope="col">ver mas</th>
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value == 2) {?>
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
                        <th scope="col"><img src="<?php echo $_smarty_tpl->tpl_vars['product']->value->imagen;?>
" class="card-img-top" alt="Card image cap"></th>
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
                        <?php if ($_smarty_tpl->tpl_vars['logged']->value == 2) {?>
                            <th scope="col"><a href="delete/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
" class="btn btn-dark" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">Eliminar</a></th>
                            <th><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
">Modificar</button></th>
                            <div class="modal fade" id="exampleModal<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
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
                                            <form action="update/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_product;?>
" method="POST" class="container" enctype="multipart/form-data">
        
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
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="iamge" id="iamge" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->imagen;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['product']->value->imagen;?>
">
                                                    <input type="file" class="form-control" name="imagen" id="imagenUpload" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->imagen;?>
" >
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
        <?php if ($_smarty_tpl->tpl_vars['logged']->value == 2) {?>
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
        <div class="paginador">
            <ul>            <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['CantidadProductos']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['CantidadProductos']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                <li><a href="pagina/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
            <?php }
}
?>
            </ul>
        </div>
        <p>Haz click en el nombre de las categorias para ver que productos contiene cada una!</p>
        <thead class="thead-dark">
            <tr>

                <th scope="col">nombre</th>
                <?php if ($_smarty_tpl->tpl_vars['logged']->value == 2) {?>
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
                    <?php if ($_smarty_tpl->tpl_vars['logged']->value == 2) {?>
                        <th scope="col"><a href="deleteCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
" class="btn btn-dark" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
">Eliminar</a></th>
                        <th><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
">Modificar</button></th>
                        <div class="modal fade" id="exampleModal<?php echo $_smarty_tpl->tpl_vars['category']->value->id_category;?>
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
