<?php
/* Template Name: Asignaciones familiares */

// En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_ASIGNACIONES_FAMILIARES);
//var_dump($pagina);exit;
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}

$asignaciones_familiares = null;
$cat = get_category_by_slug(CATEGORIA_ASIGNACIONES_FAMILIARES);

if ($cat->term_id) {
    $args = array(
        'category' => $cat->term_id,
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'meta_key' => 'nro_asig_familiar',
        'orderby' => 'nro_asig_familiar',
        'order' => 'ASC',
    );
    $asignaciones_familiares = get_posts($args);
}
//var_dump($asignaciones_familiares);
//exit;

get_header();
?>

<div class="container-lg navbar-separator px-3 px-lg-5 pt-3 pb-5 altura-minima" id="jubilaciones"> 
    <nav aria-label="breadcrumb" class="bg-light">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo get_home_url(); ?>">Inicio</a>
            </li>  
            <li class="breadcrumb-item"><a href="<?php echo getLinkPagina(PAGINA_SERVICIOS); ?>">Servicios</a></li> 
            <li class="breadcrumb-item"><a href="<?php echo getLinkPagina(PAGINA_BIBLIOTECA); ?>">Biblioteca digital</a></li> 
            <li class="breadcrumb-item">Instructivos</li> 
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
        <?php if (isset($asignaciones_familiares)): ?>  

            <section>
                <div class="table-responsive box-shadow" id="tabla-asignaciones-familiares">
                    <table class="table mb-0">
                        <thead>
                            <tr class="bg-light">
                                <th class="text-center align-middle">
                                    N°
                                </th>
                                <th class="text-center align-middle" style="width: 20%;">
                                    Nombre Hoja
                                </th>
                                <th class="text-center align-middle">
                                    Solicitante
                                </th>
                                <th class="text-center align-middle">
                                    Caso
                                </th>
                                <th class="text-center align-middle">
                                    Pago
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($asignaciones_familiares as $post): ?> 
                                <?php
                                $nro_asig_familiar = get_field('nro_asig_familiar', $post);
                                $archivo_nombre_hoja_asig_familiar = get_field('archivo_nombre_hoja_asig_familiar', $post);
                                $solicitante_asig_familiar = get_field('solicitante_asig_familiar', $post);
                                $caso_asig_familiar = get_field('caso_asig_familiar', $post);
                                $pago_asig_familiar = get_field('pago_asig_familiar', $post);
                                ?>
                                <tr>
                                    <td><?php echo $nro_asig_familiar; ?></td>
                                    <td>
                                        <a href="<?php echo $archivo_nombre_hoja_asig_familiar; ?>" target="_blank" class="<?php echo $archivo_nombre_hoja_asig_familiar ? '' : 'disabled' ?>">
                                            <?php echo $post->post_title; ?>
                                        </a>    
                                    </td>
                                    <td><?php echo $solicitante_asig_familiar; ?></td>
                                    <td><?php echo $caso_asig_familiar; ?></td>
                                    <td><?php echo $pago_asig_familiar; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>

        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>
