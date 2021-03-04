<?php
$pagina = get_page_by_path(PAGINA_NOVEDADES);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}

get_header();
?>

<div class="container navbar-separator px-3 px-lg-5 pt-3 pb-5 altura-minima" id="novedades">

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
                <?php $tiene_img = has_post_thumbnail(); ?>
                <h1 class="font-weight-bold text-primary">
                    <?php the_title(); ?>
                </h1>
                <hr/>
                <div class="text-muted">
                    <time class="d-block" datetime="<?php the_time('Y-m-d'); ?>" pubdate>
                        <?php the_date(); ?> <?php the_time(); ?>
                    </time>
                </div>

                <div class="row mx-0 mt-3">
                    <?php if ($tiene_img) : ?>
                        <div class="col-12 col-md-4 px-0 pt-2">
                            <?php
                            echo get_the_post_thumbnail(null, 'medium', array('class' => 'card-img-top w-100'));
                            ?>
                        </div>
                    <?php endif; ?>

                    <div class="<?php echo $tiene_img ? 'col-12 col-md-8 px-3' : ''; ?>">                                                
                            <?php the_content(); ?>                       
                    </div>
                </div>
            <?php endwhile; ?>
        <div class="mt-4">
            <a class="btn btn-outline-primary" href="<?php echo getLinkPagina(PAGINA_NOVEDADES); ?>">
                Todas las novedades
            </a>
            <a class="btn btn-outline-primary" href="<?php echo home_url(); ?>">
                Inicio
            </a>
        </div>
    </div>
</div>


<?php get_footer(); ?>