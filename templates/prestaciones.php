<?php
/* Template Name: Prestaciones */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_PRESTACIONES);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect( home_url(), 301 );
    exit;
}

get_header();
?>

<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->

<div class="container-lg navbar-separator px-5 pt-4 pb-5 altura-minima" id="prestaciones">
    
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
            echo nl2br($pagina->post_content);
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


<script>
    $('a.nav-link').removeClass('active');
    $('.nav-link-prestaciones').addClass('active');
</script>