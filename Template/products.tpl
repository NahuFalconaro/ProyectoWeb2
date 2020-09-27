{include file='./header.tpl'}
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id producto</th>
      <th scope="col">nombre</th>
      <th scope="col">precio</th>
      <th scope="col">stock</th>
      <th scope="col">categoria</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$Products item=product}
    <tr>
      <th scope="row">{$product->id_product}</th>
      <th scope="col">{$product->name}</th>
      <th scope="col">{$product->price}</th>
      <th scope="col">{$product->stock}</th>
      <th scope="col">{$product->category}</th>
    </tr>
  {/foreach}
  </tbody>
</table>
{include file='./footer.tpl'}