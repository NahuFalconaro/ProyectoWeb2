<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-12 00:44:47
  from 'C:\xampp\htdocs\Web2FinalProject\ProyectoWeb2\Template\vue\vueComment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fac776f5d7056_05021982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a294fac75ae7c46394613abfb46298d0adcb2d7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2FinalProject\\ProyectoWeb2\\Template\\vue\\vueComment.tpl',
      1 => 1605138284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fac776f5d7056_05021982 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
      <td class="td" scope="col-lg-4">{{ task.comment }}</td>
      <td class="td" scope="col-lg-4">{{ task.score}}</td>
    </tr>
  </tbody>
</table>
</section>

<?php }
}
