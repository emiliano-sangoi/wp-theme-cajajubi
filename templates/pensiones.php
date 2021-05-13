<?php
/* Template Name: Pensiones */

// En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_PENSIONES);
//var_dump($pagina);exit;
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}

$pensiones = null;
$cat = get_category_by_slug(CATEGORIA_PENSIONES);
if ($cat->term_id) {
    $args = array(
        'category' => $cat->term_id,
        'posts_per_page' => -1,
        'post_status' => 'publish'
    );
    $pensiones = get_posts($args);
}
//var_dump($retiros_vejez);exit;

get_header();
?>

<div class="container-lg navbar-separator px-3 px-lg-5 pt-3 pb-5 altura-minima" id="jubilaciones"> 
    <nav aria-label="breadcrumb" class="bg-light">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo get_home_url(); ?>">Inicio</a>
            </li>  
            <li class="breadcrumb-item">
                Prestaciones
            </li> 
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

    <div class="">
        <?php if (isset($pensiones[0])): ?>  

            <section>
                <div class="table-responsive box-shadow">
                    <table class="table mb-0">
                        <tbody>
                            <?php if (isset($pensiones[0])): ?>  
                                <tr>
                                    <td class="lead text-uppercase bg-light text-center align-middle">
                                        Tipos
                                    </td>
                                    <td>
                                        <ul class="my-1">
                                            <?php foreach ($pensiones as $post): ?> 
                                                <?php
                                                $tipo_pension = get_field('tipo_pension', $post);
                                                ?>   
                                                <li>
                                                    <a class="js-scroll-trigger" href="#<?php echo $post->post_name; ?>" target="_blank">
                                                        <?php echo $tipo_pension; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </section>

            <?php foreach ($pensiones as $post): ?> 

                <section class="mt-4 mt-lg-5">   
                    <h3 class="font-weight-bold text-primary mb-3" id="<?php echo $post->post_name; ?>">
                        <?php echo $post->post_title; ?>
                    </h3>
                    <hr/>
                    <div class="">
                        <?php
                        if (!empty($post->post_content)):
                            echo $post->post_content;
                        endif;
                        ?>
                    </div>

                    <div class="">
                        <?php
                        $beneficiarios = get_field('beneficiarios', $post);
                        if ($beneficiarios):
                            ?>    
                            <h6 class="font-weight-bold text-secondary mb-3" >
                                Beneficiarios:
                            </h6>
                            <div>
                                <?php echo $beneficiarios; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="">
                        <?php
                        $condiciones = get_field('condiciones', $post);
                        if ($condiciones):
                            ?>    
                            <h6 class="font-weight-bold text-secondary mb-3" >
                                Condiciones para poder acceder al beneficio:
                            </h6>
                            <div>
                                <?php echo $condiciones; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="">
                        <?php
                        $url_requisitos = get_field('url_requisitos', $post);
                        $url_etiqueta = get_field('url_etiqueta', $post) ? get_field('url_etiqueta', $post) : 'Descargar';
                        if ($url_requisitos):
                            ?>    
                            <div class="mt-3 mt-lg-4">
                                <h6 class="font-weight-bold text-secondary mb-3" >
                                    Descarga de requisitos para el inicio del trámite
                                </h6>
                                <a href="<?php echo $url_requisitos; ?>" class="btn btn-outline-primary"  target="_blank" >
                                    <?php echo $url_etiqueta; ?>
                                </a>    
                            </div>
                        <?php endif; ?>
                    </div>

                </section>
            <?php endforeach; ?>

        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>