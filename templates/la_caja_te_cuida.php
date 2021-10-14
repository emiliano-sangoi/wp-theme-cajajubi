<?php
/* Template Name: La caja te cuida */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_LA_CAJA_TE_CUIDA);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}

$posts = null;
$id_cat = get_category_by_slug(CATEGORIA_CAJA_TE_CUIDA);
if ($id_cat) {
    $args = array('category' => $id_cat->term_id, 'posts_per_page' => -1);
    $posts = get_posts($args);
}

get_header();
?>



<div class="container-lg navbar-separator px-3 px-lg-5 pt-3 pb-5 altura-minima" id="la-caja-te-cuida">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Inicio</a></li>  
            <li class="breadcrumb-item active" aria-current="page">
                La caja te cuida</li>
            </li>
        </ol>
    </nav>

    <section>
        <h1 class="font-weight-bold text-primary">
            <?php echo $pagina->post_title; ?>
        </h1>
        <hr/>
        <div>
            <?php
            if (!empty($pagina->post_content)):
                echo nl2br($pagina->post_content);
                ?>
            <?php endif; ?>
        </div>

    </section>

<section class="mt-4 mt-lg-5">        
    <div class="">

        <?php if (isset($posts[0])): ?>    
            <div class=''>
                <?php
                foreach ($posts as $post):
                    
                    if ($post->post_status !== 'publish') {
                        continue;
                    }
                    ?>
                    <div class="mt-4 mt-lg-5">
                        <?php
                       
                        if ($post):
                            $p_video = get_field('video_url_cuida');
                            ?> 
                        <h3 class="font-weight-bold text-primary"><?php echo $post->post_title; ?></h3>

                        <iframe class="w-100" height="515" src="<?php echo $p_video; ?>"></iframe> 
   
                     <?php endif; ?>

                    </div>

                    <?php
                endforeach;
                ?> 
            </div>
        <?php endif; ?>
    </div>
</section>

</div>

<?php get_footer(); ?>