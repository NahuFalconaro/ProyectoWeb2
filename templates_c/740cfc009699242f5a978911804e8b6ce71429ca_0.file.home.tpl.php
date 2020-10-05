<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-02 19:25:11
  from 'C:\xampp\htdocs\TPWEB2\Template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f77627726b968_18629686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '740cfc009699242f5a978911804e8b6ce71429ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPWEB2\\Template\\home.tpl',
      1 => 1601659509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5f77627726b968_18629686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<article>
      <div class="row container">
        <div class="col-3 ">
          <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active navbar-dark bg-dark " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Products</a>
            <a class="nav-link navbar-dark bg-dark " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Information</a>
            <a class="nav-link navbar-dark bg-dark " id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Events</a>
          </div>
        </div>
        <section class="col-lg-3 col-sm-12">
          <div id="carouselExampleIndicators" class="carousel slide hiddencarr" data-ride="carousel" data-interval="2000">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block carrusel" src="https://www.mundodeportivo.com/r/GODO/MD/p4/Polideportivo/Imagenes/2017/09/07/Recortada/img_cpiedrabuena_20170906-225956_imagenes_md_otras_fuentes_garmin-kNp-U431098837089jBG-980x554@MundoDeportivo-Web.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block carrusel" src="C:\xampp\htdocs\TPWEB2\images\zapatillas-zx-2k-boost.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block carrusel" src="../images/zapatillas-zx-2k-boost.jpg" alt="Third slide">
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
            </div>
      </section><div>
       <video loop="" autoplay="" playsinline="" src="../images/originals-fw20-zx-bb-launch-hp-mh-t-R2_ilsjh0.mp4" ></video>
    </article>
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
