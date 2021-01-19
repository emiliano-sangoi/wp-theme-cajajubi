<?php
/* Template Name: Descarga tu recibo */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_DESCARGA_RECIBO);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect( home_url(), 301 );
    exit;
}

get_header();

$link_descarga_recibo = 'https://sso.santafe.gov.ar/service-auth/login?service=https://www.santafe.gov.ar/intranetv2/login';
$link_obtener_id_ciudadana = 'https://www.santafe.gob.ar/idciudadana/registro/';

?>


<div class="container-lg navbar-separator px-3 px-lg-5 pt-3 pb-5 altura-minima" id="descarga-tu-recibo">
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
    <div>
        <?php 
            if (!empty($pagina->post_content)):
                echo $pagina->post_content;
            endif;
        ?> 
    </div>

    <div class="mt-4">        
        <p class="">
            La Caja pone a disposición de los beneficiarios sus recibo de haberes en versión digital. Para ello es necesario poseer Identificación Ciudadana en el portal de la provincia e ingresar en el sitio apuntado a continuación. Luego en el box “Recibos de Sueldos” seleccionar el botón “Pasivos”.
        </p>         
        <p>
            El sistema garantiza confidencialidad y privacidad de la información.
        </p>
        <div>
            <a class="btn btn-outline-primary" href="<?php echo $link_descarga_recibo; ?>" target="_blank">
                DESCARGA TU RECIBO
            </a>
        </div> 
    </div>

    <div class="enlaces mt-4">        
        <p>
            Si usted no posee Identificación Ciudadana deberá registrarse ingresando en el siguiente link y luego seguir las instrucciones que dicho sitio le brinda.
        </p>
        <div>
            <a class="btn btn-outline-primary" href="<?php echo $link_obtener_id_ciudadana; ?>" target="_blank">
                OBTENÉ TU ID. CIUDADANA
            </a>
        </div>  
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

</div>

<?php get_footer(); ?>