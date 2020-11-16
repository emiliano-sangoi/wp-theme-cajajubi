<?php
/* Template Name: Novedades */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_NOVEDADES);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
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


<div class="container-lg navbar-separator p-5 altura-minima" id="novedades">
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

</div>
                      
<?php get_footer(); ?>