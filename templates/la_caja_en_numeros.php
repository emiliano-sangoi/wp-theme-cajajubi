<?php
/* Template Name: La caja en numeros */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_LA_CAJA_EN_NUMEROS);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}

get_header();

//$laCajaEnNumeros = getArchivosLaCajaEnNumeros();

/* Esto es anterior, para sacar los pdf que se subieron y luego subirlos para anteriores */
//$posts_estadisticas = array();
//
//$cat_id = get_cat_ID(CATEGORIA_ESTADISTICAS);

//if ($cat_id) {
//    $args_form = array('category' => $cat_id, 'posts_per_page' => -1);
//    $posts_estadisticas = get_posts($args_form);
//}

/* Desde aca es lo nuevo con los acordeon */
$posts_actual = $posts_anteriores = $posts_previsional = $posts_gestion = array();

if (get_category_by_slug(CATEGORIA_PERIODOS_ACTUALES) instanceof WP_Term) {
    $catPAct_id = get_category_by_slug(CATEGORIA_PERIODOS_ACTUALES)->term_id;

    if ($catPAct_id) {
        $args_pact = array('category' => $catPAct_id, 'posts_per_page' => -1);
        $posts_actual = get_posts($args_pact);
    }
}

if (get_category_by_slug(CATEGORIA_PERIODOS_ANTERIORES) instanceof WP_Term) {
    $catPAnt_id = get_category_by_slug(CATEGORIA_PERIODOS_ANTERIORES)->term_id;

    if ($catPAnt_id) {
        $args_pant = array('category' => $catPAnt_id, 'posts_per_page' => -1);
        $posts_anteriores = get_posts($args_pant);
    }
}

if (get_category_by_slug(CATEGORIA_PREVISIONAL) instanceof WP_Term) {
    $catPrev_id = get_category_by_slug(CATEGORIA_PREVISIONAL)->term_id;
    if ($catPrev_id) {
        $args_prev = array('category' => $catPrev_id, 'posts_per_page' => -1);
        $posts_previsional = get_posts($args_prev);
    }
}

if (get_category_by_slug(CATEGORIA_GESTION) instanceof WP_Term) {
    $catGest_id = get_category_by_slug(CATEGORIA_GESTION)->term_id;

    if ($catGest_id) {
        $args_gest = array('category' => $catGest_id, 'posts_per_page' => -1);
        $posts_gestion = get_posts($args_gest);
    }
}
?>

<div class="container-lg navbar-separator px-3 px-lg-5 pt-3 pb-5 altura-minima" id="la-caja-en-numeros">

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
            Estadísticas Mensuales
    </h2>
      
    <p>Los datos que aquí se reflejan son un resumen de la información extraída de las liquidaciones mensuales de haberes de los beneficiarios de nuestra Caja de Jubilaciones y Pensiones.-</p>
    
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingPeriodosActuales">
                <h5 class="mb-0">
                    <a href='#' class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-decoration: none;">
                        Año 2023
                    </a>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingPeriodosActuales" data-parent="#accordion">
            
                <div class="card-body">
                    <?php if (isset($posts_actual[0])): ?>  

                        <?php foreach ($posts_actual as $post): ?> 
                            <?php
                            if ($post->post_status !== 'publish'): continue;
                            endif;
                            ?>   
                            <?php
                            $link = get_field('enlace', $post);
                            ?>
                    
                            <a href="<?php echo isset($link['url']) ? $link['url'] : '#'; ?>" target="_blank" class="btn btn-light d-inline-block mr-1 mb-1 <?php echo isset($link['url']) ? '' : 'disabled' ?>">
                                <?php echo $post->post_title; ?>
                            </a>   

                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-muted">No se cargo ning&uacute;n período actual.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingPeriodosAnteriores">
                <h5 class="mb-0">
                    <a href='#' class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="text-decoration: none;">
                        Períodos Anteriores
                    </a>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingPeriodosAnteriores" data-parent="#accordion">
                <div class="card-body">
                    <?php if (isset($posts_anteriores[0])): ?>  

                        <?php foreach ($posts_anteriores as $post): ?> 
                            <?php
                            if ($post->post_status !== 'publish'): continue;
                            endif;
                            ?>   
                            <?php
                            $link = get_field('enlace', $post);
                            ?>                            
                                <a href="<?php echo isset($link['url']) ? $link['url'] : '#'; ?>" target="_blank" class="btn btn-light d-inline-block mr-1 mb-1 <?php echo isset($link['url']) ? '' : 'disabled' ?>">
                                <?php echo $post->post_title; ?>
                                </a>            
                            
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-muted">No se cargo ning&uacute;n período anterior.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
       
        <h2 class="h3 font-weight-bold mt-5">
            Series Estadísticas
        </h2>
        <p>Aqui encontrarás información detallada de la evolución historica de indicadores, relacionada tanto al sistema previsional provincial como a la gestión administrativa de nuestro organismo previsional.-</p>

        <div class="card">
            <div class="card-header" id="headingPrevisional">
                <h5 class="mb-0">
                    <a href='#' class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="text-decoration: none;">
                        Sistema Previsional
                    </a>
                </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingPrevisional" data-parent="#accordion">
                <div class="card-body">
                    <?php if (isset($posts_previsional[0])): ?>  

                        <?php foreach ($posts_previsional as $post): ?> 
                            <?php
                            if ($post->post_status !== 'publish'): continue;
                            endif;
                            ?>   
                            <?php
                            $link = get_field('enlace', $post);
                            ?>
                            <p>
                                <a href="<?php echo isset($link['url']) ? $link['url'] : '#'; ?>" target="_blank" class="<?php echo isset($link['url']) ? '' : 'disabled' ?>">
                                <?php echo $post->post_title; ?>
                                </a>
                            </p>

                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-muted">No se cargo ning&uacute;n archivo de sistema previsional.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingGestion">
                <h5 class="mb-0">
                    <a href='#' class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="text-decoration: none;">
                        De Gestión
                    </a>
                </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headinGestion" data-parent="#accordion">
                <div class="card-body">
                    <?php if (isset($posts_gestion[0])): ?>  

                        <?php foreach ($posts_gestion as $post): ?> 
                            <?php
                            if ($post->post_status !== 'publish'): continue;
                            endif;
                            ?>   
                            <?php
                            $link = get_field('enlace', $post);
                            ?>
                            <p>                                
                                <a href="<?php echo isset($link['url']) ? $link['url'] : '#'; ?>" target="_blank" class="<?php echo isset($link['url']) ? '' : 'disabled' ?>">
                                <?php echo $post->post_title; ?>
                                </a>                               
                            </p>

                        <?php endforeach; ?>
                    <?php else: ?>
                        <p class="text-muted">No se cargo ning&uacute;n archivo de gestión.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
          
    </div>
    
</div>

<?php
unset($estadisticas);

get_footer();
?>