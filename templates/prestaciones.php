<?php
/* Template Name: Prestaciones */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_PRESTACIONES);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}

get_header();
?>

<div class="navbar-separator pb-5 altura-minima" id="prestaciones">

    <?php
    if (has_post_thumbnail($pagina)):
        $imagen = get_the_post_thumbnail_url($pagina, 'full', array('class' => 'img-fluid w-100 rounded-circle'));
        ?>
        <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $imagen; ?>"></div>
    <?php endif; ?> 

    <div class="container-lg px-3 pt-3 px-lg-5">

        <nav aria-label="breadcrumb" class="bg-light">
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
            <?php if (empty($pagina->post_content)): ?>
                <p class="text-muted">
                    No se ha cargado ningun contenido en esta secci&oacute;n.
                </p>
                <?php
            else:
                echo nl2br($pagina->post_content);
                ?>
            <?php endif; ?>
        </div>
        <?php
            get_template_part('partials/accesos-prestaciones');
        ?>
    </div>
</div>


<?php get_footer(); ?>


<script>
    $('a.nav-link').removeClass('active');
    $('.nav-link-prestaciones').addClass('active');
</script>