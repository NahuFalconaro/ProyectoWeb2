{include file='./header.tpl'}

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{$Product->nombre}</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{$Product->price}</li>
    <li class="list-group-item">{$Product->stock}</li>
    <li class="list-group-item">{$Product->descripcion}</li>
    <li class="list-group-item">{$Product->category}</li>

  </ul>
</div>

{include file='./footer.tpl'}