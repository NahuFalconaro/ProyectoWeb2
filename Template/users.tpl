{include file='./header.tpl'}
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nombre Usuario</th>
      <th scope="col">Admin</th>
      <th scope="col">Delete User</th>
    </tr>
  </thead>
  <tbody>
  {foreach from=$Users item=user}
    <tr>
      <th scope="row">{$user->name}</th>
      <th scope="row"><a href="modifyAdmin/{$user->id_user}" class="btn btn-dark" value="{$user->id_user}">Admin</a></th>
      <th scope="row"><a href="deleteUser/{$user->id_user}" class="btn btn-dark" value="{$user->id_user}">Eliminar</a></th>
    </tr>
  {/foreach}
  </tbody>
</table>

{include file='./footer.tpl'}