<?php
/* Template Name: Servicios */

// En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_SERVICIOS);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}
get_header();

$args = array('category' => get_cat_ID(CATEGORIA_SERVICIOS), 'posts_per_page' => -1);
$posts = get_posts($args);

//print_r($posts);
//exit;
?>


<!-- Offcanvas Menu Begin -->
<?php //get_template_part("partials/mobile");      ?>
<!-- Offcanvas Menu End -->
<!--<div class="container-lg navbar-separator px-5 pt-4 pb-5 altura-minima" id="servicios">-->
    
<div class="navbar-separator pb-5 altura-minima" id="servicios">
    <?php
    if (has_post_thumbnail($pagina)):
//        echo get_the_post_thumbnail($post, 'medium', array('class' => 'img-fluid w-100 rounded-circle'));
        $imagen = get_the_post_thumbnail_url($pagina, 'full', array('class' => 'img-fluid w-100 rounded-circle'));
        ?>
        <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $imagen; ?>"></div>
    <?php endif; ?> 


    <div class="container-lg px-5 pt-4">
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

        <?php foreach ($posts as $post): ?> 
            <?php if ($post->post_status !== 'publish'): continue;
            endif;
            ?>   
            <div class="enlaces mt-5">        
                <h2 class="h4 font-weight-bold">
    <?php echo $post->post_title; ?>
                </h2>
                <div class="my-2 mb-3">
                    <?php
                    echo $post->post_content;
                    ?>
                </div>
                <div>
                    <?php
                    $link = get_field('enlace', $post);
                    ?>
                    <a href="<?php echo $link; ?>"  target="_blank" class="card-link btn btn-outline-primary <?php echo $link ? '' : 'disabled' ?>">
                        Acceder
                    </a>    
                </div>                
            </div>
        
<?php endforeach; ?>
    </div>
</div>

<?php get_footer(); ?>