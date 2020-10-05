{include file='./header.tpl'}
<div class="container " style="margin-top: 50px;">
    <table class="table localTable">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id producto</th>
                <th scope="col">nombre</th>
                <th scope="col">precio</th>
                <th scope="col">stock</th>
                <th scope="col">descripcion</th>
                <th scope="col">categoria</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$Category item=category}
                <tr>
                    <th scope="col">{$category->id_product}</th>
                    <th scope="col">{$category->nombre}</th>
                    <th scope="col">{$category->price}</th>
                    <th scope="col">{$category->stock}</th>
                    <th scope="col">{$category->descripcion}</a></th>
                    <th scope="col">{$category->category}</a></th>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{include file='./footer.tpl'}