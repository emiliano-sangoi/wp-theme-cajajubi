<?php
/* Template Name: Biblioteca digital */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_BIBLIOTECA);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}
get_header();

//$biblioteca = getArchivosBiblioteca();
//print_r($biblioteca);exit;

$posts_formularios = $posts_instructivos = $posts_normativas = array();

$catF_id = get_cat_ID(CATEGORIA_FORMULARIOS);
if ($catF_id) {
    $args_form = array('category' => $catF_id, 'posts_per_page' => -1);
    $posts_formularios = get_posts($args_form);
}
$catI_id = get_cat_ID(CATEGORIA_INSTRUCTIVOS);
if ($catI_id) {
    $args_inst = array('category' => $catI_id, 'posts_per_page' => -1);
    $posts_instructivos = get_posts($args_inst);
}
$catN_id = get_cat_ID(CATEGORIA_NORMATIVAS);
if ($catN_id) {
    $args_norm = array('category' => $catN_id, 'posts_per_page' => -1);
    $posts_normativas = get_posts($args_norm);
}
?>

<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->

<div class="navbar-separator pb-5 altura-minima" id="biblioteca">
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo DIR_IMGS . '/paginas/biblioteca.jpg'; ?>"></div>


    <div class="container-lg px-3 pt-3 px-lg-5">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Inicio</a></li> 
                <li class="breadcrumb-item"><a href="<?php echo getLinkPagina(PAGINA_SERVICIOS); ?>">Servicios</a></li> 
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

        <div>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingFormularios">
                        <h5 class="mb-0">
                            <a href='#' class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration: none;">
                            Formularios
                        </a>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingFormularios" data-parent="#accordion">
                        <div class="card-body">
                            <?php if (isset($posts_formularios[0])): ?>  

                                <?php foreach ($posts_formularios as $post): ?> 
                                    <?php if ($post->post_status !== 'publish'): continue;
                                    endif;
                                    ?>   
                                    <?php
                                    $link = get_field('enlace', $post);
                                    ?>
                                    <p>
                                        <a href="<?php echo $link; ?>" target="_blank" class="<?php echo $link ? '' : 'disabled' ?>">
        <?php echo $post->post_title; ?>
                                        </a>                                
                                    </p>

                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="text-muted">No se cargado ning&uacute;n formulario.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingInstructivos">
                        <h5 class="mb-0">
                            <a href='#' class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="text-decoration: none;">
                            Instructivos
                        </a>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingInstructivos" data-parent="#accordion">
                        <div class="card-body">   
                            <?php if (isset($posts_instructivos[0])): ?>  

                                <?php foreach ($posts_instructivos as $post): ?> 
                                    <?php
                                    if ($post->post_status !== 'publish'): continue;
                                    endif;
                                    ?>   
                                    <?php
                                    $link = get_field('enlace', $post);
                                    ?>
                                    <p>
                                        <a href="<?php echo $link; ?>" target="_blank" class="<?php echo $link ? '' : 'disabled' ?>">
        <?php echo $post->post_title; ?>
                                        </a>
                                    </p>

                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="text-muted">No se cargado ning&uacute;n instructivo.</p>
<?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingNormativas">
                        <h5 class="mb-0">
                            <a href='#' class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none;">
                            Normativas
                        </a>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingNormativas" data-parent="#accordion">
                        <div class="card-body">
                            <?php if (isset($posts_normativas[0])): ?>  

                                <?php foreach ($posts_normativas as $post): ?> 
                                    <?php
                                    if ($post->post_status !== 'publish'): continue;
                                    endif;
                                    ?>   
        <?php
        $link = get_field('enlace', $post);
        ?>
                                    <p>
                                        <a href="<?php echo $link; ?>" target="_blank" class="<?php echo $link ? '' : 'disabled' ?>">
                                    <?php echo $post->post_title; ?>
                                        </a>
                                    </p>

                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="text-muted">No se cargado ninguna normativa o decreto.</p>
                            <?php endif; ?>

                            <?php
                            //$i = 0;
                            //foreach ($biblioteca['norm'] as $finfo):
                            ?>
<!--                                <p>
                                    <a href="<?php //echo $biblioteca['url'] . $finfo->fname; ?>" target="_blank">
                            <?php
                            //echo $finfo->titulo;
                            //$i++;
                            ?>
                                    </a>
                                </p>-->
                            <?php //endforeach; ?>
<?php //if ($i === 0):    ?>
                                <!--<p class="text-muted">No se cargado ninguna normativa o decreto.</p>-->
<?php //endif;    ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?php
unset($biblioteca);

get_footer();
?>