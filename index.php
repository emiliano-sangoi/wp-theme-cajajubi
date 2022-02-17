<?php
get_header();

$titulo = $subtitulo = $link = $icon = '';
$link_calendario_pago = 'http://www.santafe.gov.ar/index.php/web/content/view/full/128047';
$link_solicitud_turno = 'http://turnos.santafe.gov.ar/turnos/web/frontend.php';

$cronograma = getCronogramaDePago();

$novedades = $novedades_destacadas = null;
$id_cat = get_cat_ID(CATEGORIA_NOVEDADES);
if ($id_cat) {
    $args = array(
        'category' => $id_cat,
        'posts_per_page' => 3,
        'post_status' => 'publish'
    );
    $novedades = get_posts($args);
}

//$id_cat = get_cat_ID(CATEGORIA_NOVEDADES_DESTACADAS);
//if ($id_cat) {
//    $args = array('category' => $id_cat, 'posts_per_page' => -1);
//    $novedades_destacadas = get_posts($args);
//}
//
//var_dump($novedades_destacadas);exit;
//get_template_part('partials/masthead2');
?>

<header class="navbar-separator px-3">
    <div class='pt-2 pt-lg-3'>
        <!--        <div class="row my-3 my-lg-4">
                    <div class="col-12 col-md-3 col-lg-2">
                        <img class="img-fluid mx-auto d-block centrate w-80" src="<?php echo DIR_IMGS . '/logo-footer.png' ?>" alt="Gobierno de la Provincia de Santa Fe">
                    </div>
                    <div class="col-12 col-md-9 col-lg-10 px-3 px-lg-4">
                        <h1 class="font-weight-bold text-dark">
                            Caja de Jubilaciones y Pensiones de la Provincia de Santa Fe
                        </h1>
                    </div>
                </div>-->
        <div>
            <?php
            get_template_part('partials/carousel/carousel');
            ?>
        </div>
    </div>
</header>

<section class="my-2 px-3">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-3 my-1">

            <a class="btn btn-lg btn-warning w-100 h-100 text-white rounded-0 box-shadow" href="https://www.santafe.gob.ar/ms/covid19/" target="_blank">
                <img class="img-fluid w-10" src='<?php echo DIR_IMGS . '/iconos/mask2.png'; ?>' alt=''/>
                <span class='align-middle small text-uppercase'>
                    PREVENCIÓN <span class="font-weight-bold">COVID</span>
                </span>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-3 my-1">
            <a class="btn btn-lg btn-pink h-100 w-100 text-white rounded-0 box-shadow" href="https://www.santafe.gob.ar/santafevacunacovid/inicio" target="_blank">
                <img class="img-fluid w-8" src='<?php echo DIR_IMGS . '/iconos/vacuna.png'; ?>' alt=''/>
                <span class='align-middle small'>                    
                    VACUNACIÓN <span class="font-weight-bold">COVID</span>
                </span>
            </a>
        </div>
        <div class="col-12 col-md-6 col-lg-3 my-1">

            <a class="btn btn-lg btn-whatsapp w-100 h-100 text-white rounded-0 box-shadow" href="https://api.whatsapp.com/send?phone=5493425128800&text=Hola!%20Necesito%20Informacion" target="_blank">
                <span class='align-middle small'>
                    <i class="fa fa-whatsapp"></i>
                    342 5 128 800
                </span>
            </a>

        </div>
        <div class="col-12 col-md-6 col-lg-3 my-1">

            <a class="btn btn-lg btn-info w-100 rounded-0 box-shadow" href="mailto:contactocaja@santafe.gov.ar" target="_blank">
                <span class='small'>
                    <i class="fa fa-envelope"></i>
<!--                    <span class="d-none d-lg-inline">
                        contactocaja@santafe.gov.ar
                    </span>
                    <span class="d-inline d-lg-none">-->
                    Correo
                    <!--</span>-->
                </span>
            </a>
        </div>
    </div>
</section>

<section class="mb-4 px-3" id='accesos-directos'>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 my-1">
            <?php
            $link = 'http://www.santafe.gov.ar/index.php/web/content/view/full/128047';
            $blank = true;
            //$img = DIR_IMGS . '/iconos/calendar.png';
            $icon = 'fa-calendar';
            $titulo = 'Cronograma de pagos';
            $css = 'btn-crono-pago';
            include locate_template('partials/home-link.php');

            unset($css);
            ?>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-1">
            <?php
            $link = 'http://turnos.santafe.gov.ar/turnos/web/frontend.php';
            $blank = true;
            //$img = DIR_IMGS . '/iconos/clock.png';
            $icon = 'fa-clock-o';
            $titulo = 'Solicitud de turnos';
            $css = '';
            include locate_template('partials/home-link.php');
            ?>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-1">
            <?php
            $link = getLinkPagina(PAGINA_SERVICIOS);
            $blank = false;
            //$img = DIR_IMGS . '/iconos/link.png';
            $icon = 'fa-link';
            $titulo = 'Servicios';
            include locate_template('partials/home-link.php');
            ?>
        </div>

        <div class="col-12 col-md-6 col-lg-4 my-1">
            <?php
            $link = getLinkPagina(PAGINA_BIBLIOTECA);
            $img = DIR_IMGS . '/iconos/digital-library.png';
            $icon = 'dfdf';
            $titulo = 'Instructivos y Formularios';
            include locate_template('partials/home-link.php');
            ?>
        </div>

        <div class="col-12 col-md-6 col-lg-4 my-1">
            <?php
            $img = DIR_IMGS . '/iconos/salary.png';
            $link = getLinkPagina(PAGINA_DESCARGA_RECIBO);
            $icon = 'fa-money';
            $titulo = 'Descarga tu recibo';
            include locate_template('partials/home-link.php');
            unset($img);
            ?>
        </div>
        <div class="col-12 col-md-6 col-lg-4 my-1">
            <?php
            $link = getLinkPagina(PAGINA_LA_CAJA_EN_NUMEROS);
            $blank = false;
            //$img = DIR_IMGS . '/iconos/bar-chart.png';
            $icon = 'fa-line-chart';
            $titulo = 'La Caja en números';
            include locate_template('partials/home-link.php');
            ?>
        </div>
    </div>
</section>


<!--NO BORRAR!!!!!!!!!!!!-->
<!--<section class="text-light" id='la-caja-te-cuida'>
    <div class='container-fluid px-0'>
        <div class="row">
            <div class="col-12 col-md-12 pr-sm-0">-->
<?php
/*  $link = getLinkPagina(PAGINA_LA_CAJA_TE_CUIDA);
  $blank = false;
  $bg = 'btn-verde1';
  $img = DIR_IMGS . '/iconos/heart.png';
  $icon = 'fa-line-chart';
  $titulo = 'La caja te cuida';
  $class_title = 'text-uppercase font-weight-bold';
  include locate_template('partials/home-link-horizontal.php'); */
?>
<!--</div>
<div class="col-12 col-md-6 pl-sm-0">-->
<?php
/* $img = null;
  $blank = false;
  $img = DIR_IMGS . '/iconos/masks.png';
  $icon = 'fa-line-chart';
  $bg = 'btn-orange1';
  $bg = 'btn-violeta1';
  $titulo = 'Cultura';
  include locate_template('partials/home-link-horizontal.php'); */
?>                     
<!--</div>               
</div>
</div>
</section>-->

<?php
    $link = getLinkPagina(PAGINA_LA_CAJA_TE_CUIDA);
    $img = DIR_IMGS . '/iconos/heart.png';
?>

<section class="text-white mt-5" id='la-caja-te-cuida'>
    <div class='container-fluid'>
        <div class="row bg-verde1 py-4">
            <div class="col-12 col-md-4 text-center align-self-center">
                <img class='img-fluid p-2' src='<?php echo $img; ?>' alt=''/>
            </div>
            <div class="col-12 col-md-8 align-self-center pl-2">
                <div class="mb-3 mb-lg-4">
                    <h4 class="font-weight-bold">La Caja te cuida</h4>
                    <p>
                        Te cuidamos y te brindamos material interactivo para que conozcas otras maneras de estar saludable.
                    </p>
                </div>
                <div>
                    <a href="<?php echo $link ?: '#' ?>" class="btn btn-light">Acceder</a>
                </div>
            </div>
        </div>                 
    </div>
</section>





<?php
$pagina_prestaciones = get_page_by_path(PAGINA_PRESTACIONES);
if ($pagina_prestaciones instanceof WP_Post && $pagina_prestaciones->post_status == 'publish'):
    ?>
    <section class="py-5 px-3 px-md-4 px-lg-5 bg-primary text-light" id='prestaciones'>
        <div class='container py-lg-5'>
            <h2 class="text-center font-weight-bold">
                <?php echo $pagina_prestaciones->post_title; ?>
            </h2>
            <hr class="w-25 text-center border border-light">
            <div>
                <div class="text-center px-3 px-md-4 px-lg-5">
                    <?php if (empty($pagina_prestaciones->post_content)): ?>
                        <p class="text-muted">
                            No se ha cargado ningun contenido en esta secci&oacute;n.
                        </p>
                        <?php
                    else:
                        echo nl2br($pagina_prestaciones->post_content);
                        ?>
                    <?php endif; ?>
                </div>
                <?php
                get_template_part('partials/accesos-prestaciones');
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!--======================================================================================-->
<!--SECCION NOVEDADES-->
<?php if (!empty($novedades)): ?>
    <section class="py-5" id='novedades-home'>
        <div class='container px-3'>
            <h2 class="text-center font-weight-bold mt-3 mt-lg-4">Novedades</h2>
            <hr class="w-25 text-center border border-dark">
            <div class="mt-4 mt-lg-5">
                <?php
                foreach ($novedades as $post):
                    ?>
                    <div class="mb-3 mb-lg-4">
                        <?php
                        include locate_template('partials/novedad.php');
                        ?>
                    </div>

                    <?php
                endforeach;
                ?> 
            </div>
            <div class="my-5 text-center">
                <a class="btn btn-lg btn-outline-primary" href=<?php echo getLinkPagina(PAGINA_NOVEDADES); ?> >
                    Todas las novedades&nbsp;&nbsp;<i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
<?php endif; ?>

<!--======================================================================================-->
<!--MODALS-->
<div class='d-none' id='modal-cronograma' data-mostrar="<?php echo $cronograma['mostrar'] ? '1' : '0'; ?>">
    <img src="<?php echo $cronograma['imagen']; ?>" class="img-fluid w-100" alt='Cronograma de pagos'/>
</div>

<?php get_footer(); ?>
