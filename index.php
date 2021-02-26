<?php
get_header();

$titulo = $subtitulo = $link = $icon = '';
$link_calendario_pago = 'http://www.santafe.gov.ar/index.php/web/content/view/full/128047';
$link_solicitud_turno = 'http://turnos.santafe.gov.ar/turnos/web/frontend.php';

$cronograma = getCronogramaDePago();

$novedades = $novedades_destacadas = null;
$id_cat = get_cat_ID(CATEGORIA_NOVEDADES);
if ($id_cat) {
    $args = array('category' => $id_cat, 'posts_per_page' => 3);
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
<!--<div class="container bg-white">-->
<header class="navbar-separator">
    <div class='container pt-4 pt-lg-5'>
        <div class="row mb-3">
            <div class="col-12 col-md-3 col-lg-2">
                <img class="img-fluid w-100 px-3 px-lg-4 centrate-y" src="<?php echo DIR_IMGS . '/gob-santafe.png' ?>" alt="Gobierno de la Provincia de Santa Fe">
            </div>
            <div class="col-12 col-md-9 col-lg-10 px-3 px-lg-4">
                <h1 class="font-weight-bold text-dark">
                    Caja de Jubilaciones y Pensiones de la Provincia de Santa Fe
                </h1>
            </div>
        </div>
        <div>
            <?php
            get_template_part('partials/carousel/carousel');
            ?>
        </div>
    </div>
</header>

<section class="my-2">
    <div class='container'>
        <div class="row">
            <div class="col-12 col-lg-3 pr-1">
                <div class="card bg-warning">
                    <div class="card-body py-3 text-center">
                        <a href="https://www.santafe.gob.ar/ms/covid19/" target='_blank' class="text-white" style="text-decoration: none;">
                            <img class="img-fluid w-10" src='<?php echo DIR_IMGS . '/iconos/mask_white.png'; ?>' alt=''/>
                            <span class="d-none d-lg-inline">
                                Prevenci&oacute;n Covid
                            </span>
                            <span class="d-inline d-lg-none">
                                Covid
                            </span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-3 px-1">
                <div class="card bg-whatsapp text-white">
                    <div class="card-body py-3 text-center">
                        <i class="fa fa-whatsapp"></i>
                        342 5 128 800
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 pl-1">
                <div class="card bg-info text-white">
                    <div class="card-body py-3 text-center">
                        <i class="fa fa-envelope"></i>
                        <a class="" href="mailto:contactocaja@santafe.gov.ar" target="_blank" style="text-decoration: none; color: white;">
                            <span class="d-none d-lg-inline">
                                contactocaja@santafe.gov.ar
                            </span>
                            <span class="d-inline d-lg-none">
                                Correo
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-3" id='accesos-directos'>
    <div class='container'>
        <div class="row">
            <div class="col-12 col-lg-4 py-2">
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
            <div class="col-12 col-lg-4 py-2">
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
            <div class="col-12 col-lg-4 py-2">
                <?php
                $link = getLinkPagina(PAGINA_SERVICIOS);
                //$img = DIR_IMGS . '/iconos/link.png';
                $icon = 'fa-link';
                $titulo = 'Servicios';
                include locate_template('partials/home-link.php');
                ?>
            </div>
        </div>

        <div class="row mt-lg-3">
            <div class="col-12 col-lg-4 py-2">
                <?php
                $link = getLinkPagina(PAGINA_BIBLIOTECA);
                $img = DIR_IMGS . '/iconos/digital-library.png';
                $icon = 'dfdf';
                $titulo = 'Biblioteca digital';
                include locate_template('partials/home-link.php');
                ?>
            </div>

            <div class="col-12 col-lg-4 py-2">
                <?php
                $img = DIR_IMGS . '/iconos/salary.png';
                $link = getLinkPagina(PAGINA_DESCARGA_RECIBO);
                $icon = 'fa-money';
                $titulo = 'Descarga tu recibo';
                include locate_template('partials/home-link.php');
                unset($img);
                ?>
            </div>
            <div class="col-12 col-lg-4 py-2">
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
    </div>
</section>


<?php
$pagina_prestaciones = get_page_by_path(PAGINA_PRESTACIONES);
if ($pagina_prestaciones instanceof WP_Post && $pagina_prestaciones->post_status == 'publish'):
    ?>
    <section class="py-5 bg-primary text-light" id='prestaciones'>
        <div class='container py-lg-5'>
            <h2 class="text-center font-weight-bold">
                <?php echo $pagina_prestaciones->post_title; ?>
            </h2>
            <hr class="w-25 text-center border border-light">
            <div>
                <div class="text-center">
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
    <section class="py-3 py-lg-5" id='novedades-home'>
        <div class='container-lg'>
            <h2 class="text-center font-weight-bold mt-3 mt-lg-4">Novedades</h2>
            <hr class="w-25 text-center border border-dark">
            <div class="card-deck mt-4 mt-lg-5">
                <?php foreach ($novedades as $post): ?>
                    <!--<div class="col-12 col-lg-4">-->
                    <?php
                    include locate_template('partials/novedad.php');
                    ?>
                    <!--</div>-->
                <?php endforeach; ?>
            </div>
            <div class="my-5 text-center">
                <a class="btn btn-lg btn-outline-primary" href=<?php echo getLinkPagina(PAGINA_NOVEDADES); ?> >
                    M&aacute;s novedades&nbsp;&nbsp;<i class="fa fa-arrow-right"></i>
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
