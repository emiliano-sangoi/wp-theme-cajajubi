<?php
get_header();
?>


<?php //get_template_part("parts/masthead");  ?>
<?php //get_template_part("parts/presentacion"); ?>
<?php //get_template_part("parts/inscripcion-y-envio"); ?>
<?php // get_template_part("parts/sobre-el-congreso"); ?>
<?php //get_template_part("parts/sedes"); ?>




<?php
//  $posts = getPostsPorSlugCat(SLUG_CAT_CONTACTO, 1);
//  $post = isset($posts[0]) ? $posts[0] : null;
//var_dump(wp_get_upload_dir());exit;
$post = null;
$link_calendario_pago = 'http://www.santafe.gov.ar/index.php/web/content/view/full/128047';
$link_solicitud_turno = 'http://turnos.santafe.gov.ar/turnos/web/frontend.php';
?>

<?php if ($post instanceof WP_Post && $post->post_status == 'publish'): ?>
    <section class="py-5" id="contacto">
        <h1 class="text-center mb-4">
            <?php echo $post->post_title; ?>
        </h1>
        <hr class="divider" />

        <div class="container py-5 text-center">
            <?php echo $post->post_content; ?>
        </div>
    </section>
<?php endif; ?>

<?php
// liberar memoria
//unset($posts, $post);
?>



<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->


<?php
get_template_part('partials/carousel');
?>

<?php
$novedades = null;
$id_cat = get_cat_ID(CATEGORIA_NOVEDADES);
if ($id_cat) {
    $args = array('category' => $id_cat, 'posts_per_page' => 3);
    $novedades = get_posts($args);
}
?>

<section class="py-3 py-lg-5" id='accesos-directos'>
    <div class='container-lg'>
        <div class="row">
            <div class="col-12 col-lg-4">
                <?php
                $link = 'http://www.santafe.gov.ar/index.php/web/content/view/full/128047';
                //$img = DIR_IMGS . '/iconos/calendar.png';
                $icon = 'fa-calendar';
                $titulo = 'Cronograma de pagos';
                include locate_template('partials/home-link.php');
                ?>                
            </div>  
            <div class="col-12 col-lg-4">
                <?php
                $link = 'http://turnos.santafe.gov.ar/turnos/web/frontend.php';
                //$img = DIR_IMGS . '/iconos/clock.png';
                $icon = 'fa-clock-o';
                $titulo = 'Solicitud de turnos';
                include locate_template('partials/home-link.php');
                ?>                
            </div>

            <div class="col-12 col-lg-4">
                <?php
                $link = getLinkPagina(PAGINA_LA_CAJA_EN_NUMEROS);
                //$img = DIR_IMGS . '/iconos/bar-chart.png';
                $icon = 'fa-line-chart';
                $titulo = 'La Caja en numeros';
                include locate_template('partials/home-link.php');
                ?>                
            </div>
        </div>
        <div class="card-deck mt-4">
            <div class="card border-0">
                <div class="card-body p-0 mb-0">
                    <div class="d-inline-block p-4 w-100 h-100 border border-primary">
                        <!--getLinkPagina(PAGINA_BIBLIOTECA);-->
                        <div class="text-center">
                             <img class='w-30 img-fluid' src='<?php echo DIR_IMGS . '/iconos/digital-library.png'; ?>' alt=''/>
                        </div>
                        <div class="text-center mt-3 mt-lg-4">
                            <h4 class="mb-0 text-primary">
                                Biblioteca digital
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="card-footer p-0 btn-group d-flex border-0 mt-2" role="group">
                    <a class="btn btn-primary border-0  w-100" href='<?php echo getLinkPagina(PAGINA_INSTRUCTIVOS); ?>'>
                        Instructivos
                    </a>
                    <a class="btn btn-primary border-primary border-0 w-100" href=''>
                        Formularios
                    </a>
                    <a class="btn btn-primary border-primary border-0 w-100" href=''>
                        Normativas
                    </a>
                </div>

            </div>

            <div class="card acceso">
                <div class="card-body p-0">
                    <?php                                        
                    $img = DIR_IMGS . '/iconos/salary.png';
                    $link = getLinkPagina(PAGINA_DESCARGA_RECIBO);
                    $icon = 'fa-money';
                    $titulo = 'Descarga tu recibo';
                    include locate_template('partials/home-link.php');
                    unset($img);
                    ?>
                </div>
            </div>
            
            <div class="card acceso">
                <div class="card-body p-0">
                    <?php
                    $link = getLinkPagina(PAGINA_SITIOS_DE_INTERES);
                    //$img = DIR_IMGS . '/iconos/link.png';
                    $icon = 'fa-link';
                    $titulo = 'Enlaces de interes';
                    include locate_template('partials/home-link.php');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>


<!--======================================================================================-->
<!--SECCION NOVEDADES-->
<?php if (!empty($novedades)): ?>
    <section class="py-3 py-lg-5" id='novedades-home'>
        <div class='container-lg'>
            <h2 class="text-center font-weight-bold mt-3 mt-lg-4">Novedades</h2>
            <hr class="w-25 text-center border border-dark">
            <div class="card-columns mt-4 mt-lg-5">
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

<?php get_footer(); ?>
