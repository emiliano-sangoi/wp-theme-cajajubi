<?php
/* Template Name: La caja en numeros */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_LA_CAJA_EN_NUMEROS);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect( home_url(), 301 );
    exit;
}

get_header();

//$laCajaEnNumeros = getArchivosLaCajaEnNumeros();

$posts_estadisticas = array();

$cat_id = get_cat_ID(CATEGORIA_ESTADISTICAS);

if ($cat_id) {
    $args_form = array('category' => $cat_id, 'posts_per_page' => -1);
    $posts_estadisticas = get_posts($args_form);
}

?>

<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->

<div class="container-lg navbar-separator p-5 altura-minima" id="la-caja-en-numeros">

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
        <?php 
            if (!empty($pagina->post_content)):
                echo $pagina->post_content;
            endif;
        ?> 
    </div>

    <div>
        <div class="card-header" id="reportesAnteriores">
            <h4 class="mb-0">
                Reportes anteriores
            </h4>
        </div>

        <div>
            <div class="card-body">

                <?php if (isset($posts_estadisticas[0])): ?>  

                    <?php foreach ($posts_estadisticas as $post): ?> 
                        <?php if ($post->post_status !== 'publish'): continue;
                        endif; ?>   
                        <?php
                        $link = get_field('enlace', $post);
                        ?>
                        <p>
                            <a href="<?php echo $link; ?>" target="_blank" class="<?php echo $link ? '' : 'disabled' ?>"><?php echo $post->post_title; ?>
                            </a>
                        </p>

                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-muted">No se cargado ningun reporte.</p>
                <?php endif; ?>
                    
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>