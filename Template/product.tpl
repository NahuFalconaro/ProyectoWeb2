{include file='./header.tpl'}

<div class="card container-fluid" style="width: 18rem; margin-top: 60px/*">
  <img src="images/58f800703a91328fe6b19291714fb0bf.jpg" class="card-img-top"  alt="...">
  <div class="card-body">
    <h5 class="card-title">{$Product->nombre}</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{$Product->price}</li>
    <li class="list-group-item">{$Product->stock}</li>
    <li class="list-group-item">{$Product->descripcion}</li>
    <li class="list-group-item">{$Product->category}</li>
  </ul>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">Usuario</th>
        <th scope="col">Comentario</th>
        <th scope="col">Puntaje</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Usuario1</th>
        <td>Comentario1></td>
        <td>Puntaje1</td>
      </tr>
    </tbody>
  </table>

</div>

{*{include file='./footer.tpl'}*}