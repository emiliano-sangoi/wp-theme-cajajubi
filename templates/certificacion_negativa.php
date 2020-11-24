<?php
/* Template Name: Certificacion negativa */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_CERTIFICACION_NEGATIVA);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect( home_url(), 301 );
    exit;
}
get_header();
?>

<div class="container-lg navbar-separator px-3 px-lg-5 pt-4 pb-5 altura-minima" id="certificacion-negativa">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Inicio</a></li>
            <li class="breadcrumb-item"><a href="<?php echo getLinkPagina( PAGINA_SERVICIOS ); ?>">Servicios</a></li> 
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
        <?php
        if (!empty($pagina->post_content)):
            echo $pagina->post_content;
        endif;
        ?>
        
    </div>
    <div class="row mt-3">
        <div class="col-12 col-lg-6 mt-2">
            <a class="btn btn-lg btn-outline-primary w-100" href="http://www.santa-fe.gov.ar/jubypen/constancias/constancia_beneficio.php"  target="_blank">
                DE BENEFICIO
            </a>
        </div>
        <div class="col-12 col-lg-6 mt-2">
            <a class="btn btn-lg btn-outline-primary w-100" href="http://www.santa-fe.gov.ar/jubypen/constancias/constancia_inicio_tramite.php" target="_blank">
                INICIO DE TRÁMITE
            </a>      
        </div>
    </div>

</div>

<?php get_footer(); ?>