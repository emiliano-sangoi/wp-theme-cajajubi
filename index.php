<?php
get_header();
?>


<?php //get_template_part("parts/masthead");  ?>
<?php //get_template_part("parts/presentacion"); ?>
<?php //get_template_part("parts/inscripcion-y-envio"); ?>
<?php // get_template_part("parts/sobre-el-congreso"); ?>
<?php //get_template_part("parts/sedes"); ?>




<?php
//  $posts = getPostsPorSlugCat(SLUG_CAT_CONTACTO, 1);
//  $post = isset($posts[0]) ? $posts[0] : null;
//var_dump(wp_get_upload_dir());exit;
$post = null;
?>

<?php if ($post instanceof WP_Post && $post->post_status == 'publish'): ?>
    <section class="py-5" id="contacto">
        <h1 class="text-center mb-4">
            <?php echo $post->post_title; ?>
        </h1>
        <hr class="divider" />

        <div class="container py-5 text-center">
            <?php echo $post->post_content; ?>
        </div>
    </section>
<?php endif; ?>

<?php
// liberar memoria
//unset($posts, $post);
?>



<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>


<?php
    get_template_part('partials/carousel');
?>



<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a href="http://www.santafe.gov.ar/index.php/web/content/view/full/128047" target="_blank">
                    <img class="img-fluid" src="<?php echo DIR_IMGS . '/instructor/banners-02.png'; ?>" alt="">
                </a>
            </div>
            <div class="col-3">
                <a href="http://www.santafe.gov.ar/index.php/web/content/view/full/128047" target="_blank">
                    <img class="img-fluid" src="<?php echo DIR_IMGS . '/instructor/banners-03.png'; ?>" alt="">
                </a>
            </div>
            <div class="col-3">
                <a href="http://www.santafe.gov.ar/index.php/web/content/view/full/128047" target="_blank">
                    <img class="img-fluid" src="<?php echo DIR_IMGS . '/instructor/banners-04.png'; ?>" alt="">
                </a>
            </div>
            <div class="col-3">
                <a href="http://www.santafe.gov.ar/index.php/web/content/view/full/128047" target="_blank">
                    <img class="img-fluid" src="<?php echo DIR_IMGS . '/instructor/banners-05-05.png'; ?>" alt="">
                </a>
            </div>
        </div>
    </div>
</section>


<div class="bg-gray-4 py-5">
    <div class="container">
        <div class="row">
            <div class="col-6 px-0">
                <a href="descarga_recibo.html">
                    <img class="img-fluid" src="<?php echo DIR_IMGS . '/boton-07.png' ?>" alt="">
                </a>                    
            </div>
            <div class="col-6 px-0">
                <a href="biblioteca.html">
                    <img class="img-fluid" src="<?php echo DIR_IMGS . '/boton-08.png' ?>" alt="">
                </a>  
            </div>            
        </div>
    </div>
</div>


<?php get_footer(); ?>
