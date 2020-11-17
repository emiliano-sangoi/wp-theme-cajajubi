<?php
/* Template Name: Certificacion negativa */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_CERTIFICACION_NEGATIVA);
if (!$pagina instanceof WP_Post) {
    wp_redirect( home_url(), 301 );
    exit;
}
get_header();
?>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>


<div class="container-lg navbar-separator p-5 altura-minima" id="certificacion-negativa">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Inicio</a></li>    
            <li class="breadcrumb-item active" aria-current="page">
                <?php echo $pagina->post_title; ?>
            </li>
        </ol>
    </nav>
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

        <a class="btn btn-lg btn-outline-primary " href="http://www.santa-fe.gov.ar/jubypen/constancias/constancia_beneficio.php"  target="_blank">
            DE BENEFICIO
        </a>

        <a class="btn btn-lg btn-outline-primary " href="http://www.santa-fe.gov.ar/jubypen/constancias/constancia_inicio_tramite.php" target="_blank">
            INICIO DE TRÁMITE
        </a>
      
    </div>

</div>

<?php get_footer(); ?>