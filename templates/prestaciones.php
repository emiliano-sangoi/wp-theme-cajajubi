<?php
/* Template Name: Prestaciones */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_PRESTACIONES);
if (!$pagina instanceof WP_Post) {
    wp_redirect( home_url(), 301 );
    exit;
}
?>

<?php
get_header();
?>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<?php //get_template_part("partials/mobile");    ?>
<!-- Offcanvas Menu End -->

<!-- Breadcrumb Begin -->
<!--<section class="breadcrumb-option set-bg" style="margin-top: 0px;" data-setbg="<?php //echo DIR_IMGS . '/prestaciones.jpg';  ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h2>Prestaciones</h2>
                    <div class="breadcrumb__widget">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- Breadcrumb End -->

<div class="container-lg navbar-separator p-5 altura-minima" id="prestaciones">
    <h1 class="font-weight-bold text-primary">
        <?php echo $pagina->post_title; ?>
    </h1>
    <hr/>
    <div>
        <?php if(empty($pagina->post_content)): ?>
        <p class="text-muted">
            No se ha cargado ningun contenido en esta secci&oacute;n.
        </p>
        <?php else: 
            echo $pagina->post_content; 
        ?>
        <?php endif; ?>
    </div>
    <div class="mt-lg-5 mt-sm-3 text-center btn-group d-flex" role="group">

        <a class="btn btn-lg btn-outline-primary " href="http://www.santafe.gob.ar/index.php/web/content/view/full/235057/(subtema)/102727" target="_blank">
            Jubilaciones
        </a>

        <a class="btn btn-lg btn-outline-primary " href="http://www.santafe.gob.ar/index.php/web/content/view/full/235059/(subtema)/102727" target="_blank">
            Retiros policiales y penitenciarios
        </a>

        <a class="btn btn-lg btn-outline-primary" href="https://www.santafe.gov.ar/index.php/web/content/view/full/111782/(subtema)/102727" target="_blank">
            Reconocimiento de servicios
        </a>

        <a class="btn btn-lg btn-outline-primary" href="https://www.santafe.gov.ar/index.php/web/content/view/full/235062/(subtema)/102727" target="_blank">
            Pensiones
        </a>
      
    </div>

</div>


<?php get_footer(); ?>