<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-27 04:11:41
  from 'C:\xampp\htdocs\Web2FinalProject\ProyectoWeb2\Template\vue\vueComment.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc06e6d3cb207_56708809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97f6cf99fa90bde68e90518f760c10832201c17e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2FinalProject\\ProyectoWeb2\\Template\\vue\\vueComment.vue',
      1 => 1606446263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc06e6d3cb207_56708809 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
    <table class="table table-dark" >
  <thead>
    <tr>
      <th scope="col-lg-4">Comentario</th>
      <th scope="col-lg-4">Puntaje</th>

    </tr>
  </thead>
  <tbody id="vue-comment" >
    <tr v-for="comment in comment" id="comentarios">
      <td class="td d-none elComentario" name="elComentario"  scope="col-lg-4"></td>
      <td class="td" scope="col-lg-4">{{ comment.comment }}</td>
      <td class="td" scope="col-lg-4">{{ comment.score}}</td>
      <td><input v-if="loged === '2'" type="submit" v-on:click="deleteComment(comment.id_comment)" v-bind:id="comment.id_comment" class="btn btn-danger" value="eliminar"></td>
    </tr>
  </tbody>
</table>
</section>
<?php }
}
