{include file='./header.tpl'}
<section>
    <div class="container" >
        {if $logged == 1}
            <form action="insert" method="POST" >
                <div class="form-row  form"  >
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
                            {foreach from=$Category item=category}
                                <option value="{$category->id_category}">{$category->category}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-outline-dark">Insertar</button>
                    </div>
                </div>
            </form>
        {/if}
    </div>
    <div class="container">
    {if $logged == 1}
        <table class="table table-striped table-dark tabla table-responsive-md " style="margin-top: 50px;">
    {else}
        <table class="table table-striped table-dark tabla table-responsive-md " style="margin-top: 150px;">
    {/if} 
            <thead class="thead-dark">
                <tr>
                    <th scope="col">nombre</th>
                    <th scope="col">precio</th>
                    <th scope="col">stock</th>
                    <th scope="col">ver mas</th>
                    {if $logged == 1}
                        <th scope="col">stock</th>
                        <th scope="col">ver mas</th>
                    {/if}
                </tr>
            </thead>
            <tbody>
                {foreach from=$Products item=product}
                    <tr>

                        <th scope="col">{$product->nombre}</th>
                        <th scope="col">{$product->price}</th>
                        <th scope="col">{$product->stock}</th>
                        <th scope="col"><a href="productos/{$product->id_product}" class="btn btn-dark" value="{$product->id_product}">Descripcion</a></th>
                        {if $logged == 1}
                            <th scope="col"><a href="delete/{$product->id_product}" class="btn btn-dark" value="{$product->id_product}">Eliminar</a></th>
                            <th><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal{$product->id_product}">Modificar</button></th>
                            <div class="modal fade" id="exampleModal{$product->id_product}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="update/{$product->id_product}" method="POST" class="container">
        
                                                <div class="form-group">
        
                                                    <input type="text" class="form-control" name="nombreUpdate" value="{$product->nombre}">
                                                </div>
                                                <div class="form-group">
        
                                                    <input type="text" class="form-control" name="priceUpdate" value="{$product->price}">
                                                </div>
                                                <div class="form-group">
        
                                                    <input type="text" class="form-control" name="stockUpdate" value="{$product->stock}">
                                                </div>
                                                <div class="form-group">
        
                                                    <input type="text" class="form-control" name="descripcionUpdate" value="{$product->descripcion}">
                                                </div>
                                                <div>
                                                    <select name="categoryUpdate" class="form-control">
                                                        {foreach from=$Category item=category}
                                                            <option value="{$category->id_category}">{$category->category}</option>
                                                        {/foreach}
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
        {/if}
        </tr>
    {/foreach}
    </tbody>

    <table class="table table-striped table-dark tabla table-responsive-md margentabla">
        {if $logged == 1}
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
        {/if}
        <thead class="thead-dark">
            <tr>

                <th scope="col">nombre</th>
                {if $logged == 1}
                    <th scope="col">eliminar</th>
                    <th scope="col">modificar</th>
                {/if}
            </tr>
        </thead>
        <tbody>
            {foreach from=$Category item=category}
                <tr>

                    <th scope="col"><a href="category/{$category->id_category}"  class="letterCategory">{$category->category}</a></th>
                    {if $logged == 1}
                        <th scope="col"><a href="deleteCategory/{$category->id_category}" class="btn btn-dark" value="{$category->id_category}">Eliminar</a></th>
                        <th><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal{$category->id_category}">Modificar</button></th>
                        <div class="modal fade" id="exampleModal{$category->id_category}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="updateCategory/{$category->id_category}" method="POST" class="container">
        
                                            <div class="form-group">
        
                                                <input type="text" class="form-control" name="nombreUpdateCategory" value="{$category->category}">
                                            </div>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-outline-dark">update</button>
                                        </form>
                                    </div>
        
                                </div>
                            </div>
                        </div>
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>
    </div>
</section>
{include file='./footer.tpl'}