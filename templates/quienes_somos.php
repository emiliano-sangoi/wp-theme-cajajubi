<?php
/* Template Name: Quienes somos */

// En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_QUIENES_SOMOS);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}
get_header();

$post_director = $post_subdirector = $posts_otros = array();

$cat_id = get_cat_ID(CATEGORIA_DIRECTOR);
if ($cat_id) {
    $args_director = array('category' => $cat_id, 'posts_per_page' => 1);
    $post_director = get_posts($args_director);
}

$cat_id = get_cat_ID(CATEGORIA_SUBDIRECTOR);
if ($cat_id) {
    $args_subdirector = array('category' => $cat_id, 'posts_per_page' => 1);
    $post_subdirector = get_posts($args_subdirector);
}

$cat_id = get_cat_ID(CATEGORIA_OTROS);
if ($cat_id) {
    $args_otros = array('category' => $cat_id, 'posts_per_page' => -1);
    $posts_otros = get_posts($args_otros);
}
//print_r('<br><br><br><br><br><br>');
//print_r($post_director);
//print_r($post_subdirector);
//print_r($posts_otros);
//exit;
?>

<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->

<div class="container-lg navbar-separator px-3 px-lg-5 pt-4 pb-5 altura-minima" id="quienes-somos">
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
    
    <h2 class="h3 font-weight-bold mt-5">
        Autoridades
    </h2>
    
    <section class="py-3">

        <div class="row mb-lg-5 mb-3">

            <!--Director:--> 
            <div class='offset-lg-2 col-lg-4 col-12'>
                <?php
                if (isset($post_director[0])) {
                    $post = $post_director[0];
                    include locate_template('partials/autoridad.php');
                }
                ?>  
            </div>

            <div class='col-lg-4 col-12'>
                <!--SubDirector:-->
                <?php
                if (isset($post_subdirector[0])) {
                    $post = $post_subdirector[0];
                    if ($post->post_status === 'publish') {
                        include locate_template('partials/autoridad.php');
                    }
                }
                ?>  
            </div>
        </div>
        <div class="px-lg-5">
            <?php
            $i = 0;
            $items_por_fila = 3;
            $n = count($posts_otros);
            ?>

            <?php for ($j = 0; $j < $n; $j += $items_por_fila): ?>
                <div class='row mb-lg-5 mb-3'>
                    <?php for ($k = 0; $k < $items_por_fila && $post = array_pop($posts_otros) ; $k++): ?>                        
                        <?php
                        
                        if ($post->post_status !== 'publish'):
                            continue;
                        endif;
                        ?>
                        <div class='col-lg-4 col-12'>
                            <?php
                            include locate_template('partials/autoridad.php');
                            ?>                                        
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
        </div>

    </section>
</div>


<?php get_footer(); ?>