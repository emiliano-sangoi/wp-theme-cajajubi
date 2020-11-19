<?php
$pagina = get_page_by_path(PAGINA_NOVEDADES);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}

get_header();
?>

<div class="container-lg navbar-separator p-5 altura-minima" id="novedades">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Inicio</a></li>    
            <li class="breadcrumb-item active" aria-current="page">
                <?php echo $pagina->post_title; ?>
            </li>
        </ol>
    </nav>

    <div>
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>

                <div class="content">
                    <h1 class="font-weight-bold text-primary">
                        <?php the_title(); ?>
                    </h1>
                    <hr/>
                    <div class="text-muted">
                        <time class="d-block" datetime="<?php the_time('Y-m-d'); ?>" pubdate>
                            <?php the_date(); ?> <?php the_time(); ?>
                        </time>
                    </div>
                    <div class="mt-4">

                        <?php the_content(); ?>                       

                    </div>
                    
                    <div class="mt-4">
                        <a class="btn btn-outline-secondary" href="<?php echo getLinkPagina(PAGINA_NOVEDADES); ?>">
                            <i class="fa fa-arrow-left"></i>&nbsp;Volver
                        </a>
                    </div>
                </div>

            <?php endwhile; ?>
    </div>
</div>


<?php get_footer(); ?>