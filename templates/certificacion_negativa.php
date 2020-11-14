<?php
/* Template Name: Certificacion negativa */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_CERTIFICACION_NEGATIVA);
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
<?php //get_template_part("partials/mobile");   ?>
<!-- Offcanvas Menu End -->


<!-- Breadcrumb Begin -->
<!--<section class="breadcrumb-option set-bg" style="margin-top: 0px;" data-setbg="<?php //echo DIR_IMGS . '/servicios.jpg'; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h2>Certificación negativa</h2>
                    <div class="breadcrumb__widget">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- Breadcrumb End -->

                            
<div class="container-lg navbar-separator p-5 altura-minima" id="certificacion-negativa">
    <h1 class="font-weight-bold text-primary">
        <?php echo $pagina->post_title; ?>
    </h1>
    <hr/>
    <div>
        <?php if(empty($pagina->post_content)): ?>
        <p class="text-muted">
            A través de este servicio, podrás obtener la constancia que acredita si posees o no un beneficio acordado en este organismo previsional, como así también si iniciaste un trámite en nuestro Organismo.
            <!--No se ha cargado ningun contenido en esta secci&oacute;n.-->
        </p>
        <?php else: 
            echo $pagina->post_content; 
        ?>
        <?php endif; ?>
    </div>
    <div class="mt-lg-5 mt-sm-3 text-center btn-group d-flex" role="group">

        <a class="btn btn-lg btn-outline-primary " href="http://www.santa-fe.gov.ar/jubypen/constancias/constancia_beneficio.php"  target="_blank">
            DE BENEFICIO
        </a>

        <a class="btn btn-lg btn-outline-primary " href="http://www.santa-fe.gov.ar/jubypen/constancias/constancia_inicio_tramite.php" target="_blank">
            INICIO DE TRÁMITE
        </a>
      
    </div>

</div>

<?php get_footer(); ?>