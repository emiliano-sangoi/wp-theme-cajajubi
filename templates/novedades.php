<?php
/* Template Name: Novedades */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_NOVEDADES);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}
get_header();

$posts = null;
$id_cat = get_cat_ID(CATEGORIA_NOVEDADES);
if ($id_cat) {
    $args = array('category' => $id_cat, 'posts_per_page' => -1);
    $posts = get_posts($args);
}


//print_r($posts);
//exit;
?>

<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->


<div class="container-lg navbar-separator px-3 px-lg-5 pt-3 pb-5 altura-minima" id="novedades">

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

    <div class="mt-4">
        <?php if (isset($posts[0])): ?>    
            <div class='mb-4'>
                <?php
                    foreach ($posts as $post):
                        if ($post->post_status !== 'publish') {
                            continue;
                        }                  
                ?>
                <div class="mb-3 mb-lg-4">
                <?php
                      include locate_template('partials/novedad.php');
                ?>
                </div>
                
                <?php
                    endforeach;
                ?> 


            </div>
        <?php else: ?>
            <div class="alert alert-info">
                No existen novedades para mostrar.
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>