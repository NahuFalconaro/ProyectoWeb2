{include file='./header.tpl'}
{if $logged == 1}
    <section>
        <div class="container">
            <h2 class="marginSection">Lista de usuarios</h2>
                <form action="insert" method="POST" >
                    <div class="form-row  marginSection"  >
                        <div class="col">
                            <input type="text" class="form-control" name="nombreUsuario" placeholder="Nombre de Usuario">
                        </div>
                        {*if $user->admin ==1 show esto*}
                        <div class="col">
                            <button type="submit" class="btn btn-outline-dark">Quitar permisos admin</button>
                        </div>
                        {*else show esto*}
                        <div class="col">
                            <button type="submit" class="btn btn-outline-dark">Agregar permisos admin</button>
                        </div>  
                        <div class="col">
                            <button type="submit" class="btn btn-outline-dark">Borrar</button>
                        </div>
                    </div>
                </form>
        </div>
    </section>
    {/if}

{include file='./footer.tpl'}