<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-05 04:54:04
  from 'C:\xampp\htdocs\TPWEB2\Template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7a8acccefe77_97887953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '740cfc009699242f5a978911804e8b6ce71429ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2\\Template\\home.tpl',
      1 => 1601866326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5f7a8acccefe77_97887953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<article class="localTable">
<div class="row">
<div class="col-3">
  <div class="list-group" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Productos Destacados</a>
    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">La Empresa</a>
    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">aas</a>
    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">iii</a>
  </div>
</div>
<div class="col-8 example">
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><div id="carouselExampleIndicators" class="carousel slide hiddencarr" data-ride="carousel" data-interval="2000">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img class="d-block carrusel carrouselLocal" src="images/zapatillas-zx-2k-boost.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block carrusel carrouselLocal" src="images/zapatillas-zx-2k-boost (1).jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block carrusel carrouselLocal" src="https://tecvolucion.com/wp-content/uploads/2019/01/Sp19_BB_Nike_Adapt_20181218_NIKE0538_Detail5_rectangle_1600.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block carrusel carrouselLocal" src="https://static.nike.com/a/images/f_auto/q_auto:eco/t_PDP_864_v1/da114da7-6cd6-43cc-b498-cc1bfbff3981/air-zoom-tempo-next-womens-running-shoe-ZWMnV0.jpg" alt="Four slide">
        </div>
        <div class="carousel-item">
            <img class="d-block carrusel carrouselLocal" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/3ff35334-2143-4003-b2a7-6c9a32400d3d/sportswear-nsw-mens-pullover-hoodie-knslnv.jpg" alt="Five slide">
        </div>
        <div class="carousel-item">
            <img class="d-block carrusel carrouselLocal" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/fba96c87-826e-4741-81aa-396e17e3dd4b/sportswear-club-fleece-mens-full-zip-hoodie-nR8tst.jpg" alt="Six slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div></div>
    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
    <video loop="" autoplay="" playsinline="" src="images/fw20-zx-bb-launch-hp-tc01-m_ol82dj.mp4"></video></div>
    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">eee</div>
    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">iiii</div>
  </div>
</div>
</div>
</article>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
