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


$args = array('category' => CATEGORIA_NOVEDADES, 'posts_per_page' => -1);
$posts = get_posts($args);

//print_r($posts);
//exit;
?>

<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->


<div class="container-lg navbar-separator p-5 altura-minima" id="novedades">

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
        <?php if (empty($pagina->post_content)): ?>
            <p class="text-muted">
                No se ha cargado ningun contenido en esta secci&oacute;n.
            </p>
        <?php else: echo $pagina->post_content; ?>
        <?php endif; ?>
    </div>

    <div class="mt-4">
        <div class='card-columns mb-4'>
            <?php foreach ($posts as $post): ?>                
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3 font-weight-bold">
                            <?php echo $post->post_title; ?>
                        </h5>
                        <h6 class="card-subtitle mb-3 text-muted">
                            <?php
                            echo get_the_date('d/M/Y H:i', $post) . ' Hs.';
                            ?>
                        </h6>
                        <p class="card-text">
                            <?php
                            if (strlen($post->post_content) >= POST_CONTENT_MAX_LENGTH) {
                                echo substr($post->post_content, 0, POST_CONTENT_MAX_LENGTH) . '...';
                            } else {
                                echo nl2br($post->post_content);
                            }
                            ?>
                        </p>
                        <a href="<?php echo get_permalink($post) ?>"  class="card-link btn btn-outline-primary">
                            Ver m&aacute;s
                        </a>                    
                    </div>
                </div>                

            <?php endforeach; ?>
        </div>

    </div>

</div>

<?php get_footer(); ?>