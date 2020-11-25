{literal}
<section>
    <table class="table table-dark" >
  <thead>
    <tr>
      <th scope="col-lg-4">Comentario</th>
      <th scope="col-lg-4">Puntaje</th>

    </tr>
  </thead>
  <tbody id="vue-task" >
    <tr v-for="task in tasks" id="comentarios">
      <td class="td d-none elComentario" name="elComentario"  scope="col-lg-4"></td>
      <td class="td" scope="col-lg-4">{{ task.comment }}</td>
      <td class="td" scope="col-lg-4">{{ task.score}}</td>
      <td><input v-if="loged === '2'" type="submit" v-on:click="deleteComment(task.id_comment)" v-bind:id="task.id_comment" class="btn btn-danger" value="eliminar"></td>
    </tr>
  </tbody>
</table>
</section>
{/literal}