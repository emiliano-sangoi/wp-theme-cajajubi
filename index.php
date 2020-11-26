<?php
get_header();

$titulo = $subtitulo = $link = $icon = '';
$link_calendario_pago = 'http://www.santafe.gov.ar/index.php/web/content/view/full/128047';
$link_solicitud_turno = 'http://turnos.santafe.gov.ar/turnos/web/frontend.php';

//get_template_part('partials/carousel');

$novedades = null;
$id_cat = get_cat_ID(CATEGORIA_NOVEDADES);
if ($id_cat) {
    $args = array('category' => $id_cat, 'posts_per_page' => 3);
    $novedades = get_posts($args);
}

get_template_part('partials/masthead');
?>

<section class="py-3 py-lg-5" id='accesos-directos'>
    <div class='container'>
        <div class="row mx-0">
            <div class="col-12 col-lg-4 py-2">
                <?php
                $link = 'http://www.santafe.gov.ar/index.php/web/content/view/full/128047';
                $blank = true;                
                //$img = DIR_IMGS . '/iconos/calendar.png';
                $icon = 'fa-calendar';
                $titulo = 'Cronograma de pagos';
                include locate_template('partials/home-link.php');
                ?>                
            </div>  
            <div class="col-12 col-lg-4 py-2">
                <?php
                $link = 'http://turnos.santafe.gov.ar/turnos/web/frontend.php';
                $blank = true;
                //$img = DIR_IMGS . '/iconos/clock.png';
                $icon = 'fa-clock-o';
                $titulo = 'Solicitud de turnos';
                include locate_template('partials/home-link.php');
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

        <div class="row mt-lg-3 mx-0">
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
                            $link = getLinkPagina(PAGINA_SITIOS_DE_INTERES);
                            //$img = DIR_IMGS . '/iconos/link.png';
                            $icon = 'fa-link';
                            $titulo = 'Enlaces de interés';
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
        <div class='container'>
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
                <div class="mt-lg-5 py-lg-4 text-center links">

                    <a class="btn btn-lg btn-light" href="http://www.santafe.gob.ar/index.php/web/content/view/full/235057/(subtema)/102727" target="_blank">
                        Jubilaciones
                    </a>

                    <a class="btn btn-lg btn-light" href="http://www.santafe.gob.ar/index.php/web/content/view/full/235059/(subtema)/102727" target="_blank">
                        Retiros policiales y penitenciarios
                    </a>

                    <a class="btn btn-lg btn-light" href="https://www.santafe.gov.ar/index.php/web/content/view/full/235062/(subtema)/102727" target="_blank">
                        Pensiones
                    </a>

                    <a class="btn btn-lg btn-light" href="https://www.santafe.gov.ar/index.php/web/content/view/full/111782/(subtema)/102727" target="_blank">
                        Reconocimiento de servicios
                    </a>            
                </div>                                              
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
