<?php
/* Template Name: Impuesto a las ganancias */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_GANANCIAS);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}

$faqs = null;
$cat = get_category_by_slug(CATEGORIA_FAQS_GANANCIAS);
if ($cat->term_id) {
    $args = array(
        'category' => $cat->term_id,
        'posts_per_page' => -1,
        'post_status' => 'publish'
    );
    $faqs = get_posts($args);
}

//var_dump($posts);exit;

get_header();
?>

<div class="container-lg navbar-separator px-3 px-lg-5 pt-3 pb-5 altura-minima" id="un-poco-de-historia">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo get_home_url(); ?>">Inicio</a>
            </li>  
            <li class="breadcrumb-item">
                Institucional
            </li> 
            <li class="breadcrumb-item active" aria-current="page">
                <?php echo $pagina->post_title; ?>
            </li>
        </ol>
    </nav>

    <section>
        <h1 class="font-weight-bold text-primary">
            <?php echo $pagina->post_title; ?>
        </h1>
        <hr/>
        <div class="mb-3">
            <a class="btn btn-outline-primary js-scroll-trigger" href="#video" target="_blank">
                Instructivo F572-web
            </a>
            <a class="btn btn-outline-primary js-scroll-trigger" href="#faqs" target="_blank">
                Preguntas frecuentes
            </a>
        </div>
        <div>
            <?php
            if (!empty($pagina->post_content)):
                echo nl2br($pagina->post_content);
                ?>
            <?php endif; ?>
        </div>

        <div class="mb-2">
            <?php
            $advertencia = get_field('advertencia');
            if ($advertencia):
                ?>
                <div class="alert alert-warning">
                    <span class="font-weight-bold">IMPORTANTE: </span> <?php echo $advertencia; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="mt-4 mt-lg-5">        
        <h2 class="font-weight-bold text-primary mb-3" id="video">
            Instructivo formulario F572-web
        </h2>

        <p>En el siguiente video se muestran los pasos necesarios para completar el F572-web.</p>
        <!-- Video -->
        <div class="">
            <?php
            $url_video_instructivo = get_field('url_video_instructivo');
            if ($url_video_instructivo):
                ?>            
                <iframe class="w-100" height="515"
                        src="<?php echo $url_video_instructivo; ?>">
                </iframe>            
            <?php endif; ?>
        </div>
    </section>

    <section class="mt-4 mt-lg-5">   
        <h2 class="font-weight-bold text-primary mb-3" id="faqs">
            Preguntas frecuentes
        </h2>

        <div id="accordion-faqs">

            <?php
            $i = 0;
            foreach ($faqs as $faq):
                ?>

                <div class="card">
                    <div class="card-header" id="heading<?php echo $i; ?>">
                        <h5 class="mb-0">
                            <a href="#" class="" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>" style="text-decoration: none;">
                                <?php echo $faq->post_title; ?>
                            </a>
                        </h5>
                    </div>

                    <div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion-faqs">
                        <div class="card-body">
                            <?php
                            echo nl2br($faq->post_content);
                            ?>
                        </div>
                    </div>
                </div>               

                <?php
                $i++;

            endforeach;
            ?>                                 
        </div>

    </section>

</div>



<?php get_footer(); ?>