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

<div class="container-lg navbar-separator px-5 pt-4 pb-5 altura-minima" id="quienes-somos">
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

    <h2 class="h3 font-weight-bold mt-5">
        Autoridades
    </h2>
    <section class="py-3">

        <div class="row mb-lg-5 mb-3">

            <!--Director:--> 
            <div class='offset-lg-2 col-4'>
                <?php
                if (isset($post_director[0])) {
                    $post = $post_director[0];
                    $img = get_the_post_thumbnail($post, 'medium', array('class' => 'img-fluid w-100 rounded-circle'));
                    $titulo = $post->post_title;
                    $contenido = $post->post_content;
                    include locate_template('partials/autoridad-sup.php');
                }
                ?>  
            </div>

            <div class='col-4'>
                <!--SubDirector:-->
                <?php
                if (isset($post_subdirector[0])) {
                    $post = $post_subdirector[0];
                    if ($post->post_status === 'publish') {
                        $img = get_the_post_thumbnail($post, 'medium', array('class' => 'img-fluid w-100 rounded-circle'));
                        $titulo = $post->post_title;
                        $contenido = $post->post_content;
                        include locate_template('partials/autoridad-sup.php');
                    }
                }
                ?>  
            </div>
        </div>
        <div class="px-lg-5">
        <?php
        $i = 0;
        $n = count($posts_otros);

        foreach ($posts_otros as $post):
            if ($post->post_status !== 'publish') {
                continue;
            }
            ?>   

            <?php if ($i % 2 === 0) : ?>
                <div class='row mb-lg-5 mb-3'>
                <?php endif; ?>            

                <div class='col-6'>
                <?php
                if ($post->post_status === 'publish') {
                    $img = get_the_post_thumbnail($post, 'medium', array('class' => 'img-fluid w-100 rounded-circle'));
                    $titulo = $post->post_title;
                    $contenido = $post->post_content;
                    include locate_template('partials/autoridad.php');
                }
                ?>                                        
                </div>

                <?php if ($i % 2 !== 0 || $i === $n - 1): ?>
                </div>
            <?php endif;
            $i++; ?>


        <?php endforeach; ?>
        </div>

        <!--        <div class="row mb-4">
        
                    Director:
                    <div class='col-6'>
                        <div class='card'>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <img class='img-fluid' src="https://via.placeholder.com/100"/>
                                    </div>
                                    <div class="col-9 px-3">
                                        <h3 class="h4">
                                            Dra. Florencia Lacava
                                        </h3>
                                        <p>
                                            Secretaria General
                                        </p>    
                                                                        <div>
                                                                            <a class="btn btn-sm btn-outline-secondary" href='#'>
                                                                                Curriculum Vitae
                                                                                <img class="img-fluid w-20" src="<?php //echo DIR_IMGS . '/social-media/linkedin.png'                     ?>" />
                                                                            </a>
                                                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
        
                    <div class='col-6'>
                        Director:
                        <div class='card'>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <img class='img-fluid' src="https://via.placeholder.com/100"/>
                                    </div>
                                    <div class="col-9 px-3">
                                        <h3 class="h4">
                                            CPN Silvia Galán
                                        </h3>
                                        <p>
                                            Directora Previsional
                                        </p>    
                                                                        <div>
                                                                            <a class="btn btn-sm btn-outline-secondary" href='#'>
                                                                                Curriculum Vitae
                                                                                <img class="img-fluid w-20" src="<?php //echo DIR_IMGS . '/social-media/linkedin.png'                    ?>" />
                                                                            </a>
                                                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->


        <!--        <div class="row mb-4">
        
                    Director:
                    <div class='col-6'>
                        <div class='card'>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <img class='img-fluid' src="https://via.placeholder.com/100"/>
                                    </div>
                                    <div class="col-9 px-3">
                                        <h3 class="h4">
                                            CPN Julio Rugna
                                        </h3>
                                        <p>
                                            Contador General
                                        </p>    
                                                                        <div>
                                                                            <a class="btn btn-sm btn-outline-secondary" href='#'>
                                                                                Curriculum Vitae
                                                                                <img class="img-fluid w-20" src="<?php //echo DIR_IMGS . '/social-media/linkedin.png'                     ?>" />
                                                                            </a>
                                                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
        
                    <div class='col-6'>
                        Director:
                        <div class='card'>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <img class='img-fluid' src="https://via.placeholder.com/100"/>
                                    </div>
                                    <div class="col-9 px-3">
                                        <h3 class="h4">
                                            Dr. Esteban Mántaras
                                        </h3>
                                        <p>
                                            Director General de Asuntos Jurídicos
                                        </p>    
                                                                        <div>
                                                                            <a class="btn btn-sm btn-outline-secondary" href='#'>
                                                                                Curriculum Vitae
                                                                                <img class="img-fluid w-20" src="<?php //echo DIR_IMGS . '/social-media/linkedin.png'                    ?>" />
                                                                            </a>
                                                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->

        <!--        <div class="row mb-4">
        
                    Director:
                    <div class='col-6'>
                        <div class='card'>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-3">
                                        <img class='img-fluid' src="https://via.placeholder.com/100"/>
                                    </div>
                                    <div class="col-9 px-3">
                                        <h3 class="h4">
                                            Dra. Luciana Sbresso
                                        </h3>
                                        <p>
                                            Sub Dirección de Auditoría Interna
                                        </p>    
                                                                        <div>
                                                                            <a class="btn btn-sm btn-outline-secondary" href='#'>
                                                                                Curriculum Vitae
                                                                                <img class="img-fluid w-20" src="<?php //echo DIR_IMGS . '/social-media/linkedin.png'                     ?>" />
                                                                            </a>
                                                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                </div>-->


    </section>
</div>


<?php get_footer(); ?>