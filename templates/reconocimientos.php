<?php
/* Template Name: Reconocimientos */

// En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_RECONOCIMIENTO_SERVICIOS);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}
//var_dump(get_field('observaciones', $pagina));
//exit;
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
            echo nl2br($pagina->post_content);
        endif;
        ?> 
    </div>

    <div class="">

        <section class="mt-4 mt-lg-5">   

            <div class="">
                <?php
                $url_requisitos_rec_servicios = get_field('url_rec_servicios', $pagina);
                $url_etiqueta_rec_servicios = get_field('url_etiqueta_rec_servicios', $pagina) ? get_field('url_etiqueta_rec_servicios', $pagina) : 'Descargar';
                $url_rec_servicios_region_centro = get_field('url_rec_servicios_region_centro', $pagina);
                $url_etiqueta_rec_servicios_region_centro = get_field('url_etiqueta_rec_servicios_region_centro', $pagina) ? get_field('url_etiqueta_rec_servicios_region_centro', $pagina) : 'Descargar';

                if ($url_requisitos_rec_servicios or $url_rec_servicios_region_centro):
                    ?>
                    <h6 class="font-weight-bold text-secondary mb-3" >
                        Requisitos para el inicio del tr&aacute;mite:
                    </h6>
                    <?php if ($url_requisitos_rec_servicios): ?>                            
                        <div class="mt-3 mt-lg-4">
                            <a href="<?php echo $url_requisitos_rec_servicios; ?>" class="btn btn-outline-primary"  target="_blank" >
                                <?php echo $url_etiqueta_rec_servicios; ?>
                            </a>    
                        </div>
                    <?php endif; ?>
                </div>

                <div class="">
                    <?php
                    if ($url_rec_servicios_region_centro):
                        ?>    
                        <div class="mt-3 mt-lg-4">
                            <a href="<?php echo $url_rec_servicios_region_centro; ?>" class="btn btn-outline-primary"  target="_blank" >
                                <?php echo $url_etiqueta_rec_servicios_region_centro; ?>
                            </a>    
                        </div>
                    <?php endif; ?>
                </div>

            <?php endif; ?>
        </section>
        <section class="mt-4 mt-lg-5">   
            <div class="">
                <?php
                $observaciones = get_field('observaciones', $pagina);
                if ($observaciones):
                    ?>    
                    <h6 class="font-weight-bold text-secondary mb-3" >
                        Observaciones:
                    </h6>
                    <div>
                        <?php echo $observaciones; ?>
                    </div>
                <?php endif; ?>
            </div>

        </section>

    </div>

</div>

<?php get_footer(); ?>