<?php
/* Template Name: Organismos aportantes */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_ORG_APORTANTES);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect( home_url(), 301 );
    exit;
}
get_header();

//Aplicativos
$link_siafca = 'https://www.santafe.gov.ar/index.php/web/Estructura-de-Gobierno/Ministerios/Trabajo-y-Seguridad-Social/Secretaria-de-Trabajo-y-Seguridad-Social/Subsecretaria-de-Seguridad-Social/Direccion-Provincial-Caja-de-Jubilaciones-y-Pensiones/Temas-Especificos/Organismos-adheridos/Aplicativos2/Sistema-de-Afiliados-a-la-Caja-Si.Af.Ca-Version-con-opcion-de-liquidaciones-complementarias-para-organismos-desde-el-ano-1996';
$link_siafca_w32 = 'https://www.santafe.gov.ar/index.php/web/Estructura-de-Gobierno/Ministerios/Trabajo-y-Seguridad-Social/Secretaria-de-Trabajo-y-Seguridad-Social/Subsecretaria-de-Seguridad-Social/Direccion-Provincial-Caja-de-Jubilaciones-y-Pensiones/Temas-Especificos/Organismos-adheridos/Aplicativos2/Sistema-de-Afiliados-a-la-Caja-Si.Af.Ca.-Version-Windows-32-bits';
$link_siafca_act = 'https://www.santafe.gov.ar/index.php/web/Estructura-de-Gobierno/Ministerios/Trabajo-y-Seguridad-Social/Secretaria-de-Trabajo-y-Seguridad-Social/Subsecretaria-de-Seguridad-Social/Direccion-Provincial-Caja-de-Jubilaciones-y-Pensiones/Temas-Especificos/Organismos-adheridos/Aplicativos2/Actualizacion-Si.Af.Ca.-V-5.4-Sistema-de-Afiliados-a-la-Caja-W.32-bits-2020-2021';

//Tramites:
$link_present_ddjj = 'https://www.santafe.gob.ar/index.php/tramites/modul1/index?m=descripcion&id=164812';
$link_gen_boletas = 'https://www.santafe.gob.ar/index.php/tramites/modul1/index?m=descripcion&id=213008';
$link_gen_boletas_fuera_term = 'https://www.santafe.gob.ar/index.php/tramites/modul1/index?m=descripcion&id=97600';

?>


<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->


<!-- Offcanvas Menu End -->
<!--<div class="container-lg navbar-separator px-5 pt-4 pb-5 altura-minima" id="org-aportantes">-->

<div class="navbar-separator pb-5 altura-minima" id="org-aportantes">
    <?php
    if (has_post_thumbnail($pagina)):

        $imagen = get_the_post_thumbnail_url($pagina, 'full', array('class' => 'img-fluid w-100 rounded-circle'));
        ?>
        <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $imagen; ?>"></div>
    <?php endif; ?> 

    <div class="container-lg px-5 pt-4">

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
        <h2 class="h3 font-weight-bold mt-5">Aplicativos informaticos</h2>

        <section class="py-3">
            <h3 class="h4">
                Sistema de Afiliados a la Caja(Si.Af.Ca)
            </h3>
            <p>
                Versión con opción de liquidaciones complementarias para organismos desde el año 1996.
            </p>
            <p>
                <a class="btn btn-outline-primary" href="<?php echo $link_siafca; ?>" target="_blank">
                    Ver m&aacute;s
                </a>
            </p>
        </section>

        <section class="py-3">
            <h3 class="h4">
                Sistema de Afiliados a la Caja(Si.Af.Ca) para Windows 32 bits
            </h3>
            <p>
                Versión para Windows de 32 bits del sistema.
            </p>
            <p>
                <a class="btn btn-outline-primary" href="<?php echo $link_siafca_w32; ?>" target="_blank">
                    Ver m&aacute;s
                </a>
            </p>
        </section>

        <section class="py-3">
            <h3 class="h4">
                Actualización Si.Af.Ca. V 5.4
            </h3>
            <p>
                Actualización del sistema Si.Af.Ca. para Windows 32 bits (V&aacute;lida para 2020-2021).
            </p>
            <p>
                <a class="btn btn-outline-primary" href="<?php echo $link_siafca_act; ?>" target="_blank">
                    Ver m&aacute;s
                </a>
            </p>
        </section>          


        <h2 class="h3 font-weight-bold mt-3">
            Tramites online
        </h2>    
        <p>A continuación, podrá acceder a realizar los trámites on line:</p>

        <section class="py-3">
            <h3 class="h4">
                Presentación de declaraciones juradas
            </h3>
            <p>
                Permite a los organismos la presentación de declaraciones juradas de aportes y cargas de familia.
            </p>
            <p>
                <a class="btn btn-outline-primary" href="<?php echo $link_present_ddjj; ?>" target="_blank">
                    Ver m&aacute;s
                </a>
            </p>
        </section>


        <section class="py-3">
            <h3 class="h4">
                Generación de boletas de aportes por convenio vigente.
            </h3>
            <p>
                Este servicio permite al Organismo aportante la posibilidad de generar la boleta de depósito de convenio vigente, sin necesidad de concurrir a la Caja de Jubilaciones y Pensiones de la Provincia.
            </p>
            <p>
                <a class="btn btn-outline-primary" href="<?php echo $link_gen_boletas; ?>" target="_blank">
                    Ver m&aacute;s
                </a>
            </p>
        </section> 

        <section class="py-3">
            <h3 class="h4">
                Generación de Boletas de Aportes por Pagos Fuera de Término.
            </h3>
            <p>
                Este servicio permite al Organismo aportante la posibilidad de generar la boleta de depósito sin necesidad de concurrir a la Caja de Jubilaciones y Pensiones de la Provincia.
            </p>
            <p>
                <a class="btn btn-outline-primary" href="<?php echo $link_gen_boletas_fuera_term; ?>" target="_blank">
                    Ver m&aacute;s
                </a>
            </p>
        </section> 

    </div>  
</div>
<?php get_footer(); ?>

<script>
    $('a.nav-link').removeClass('active');
    $('.nav-link-org-aportantes').addClass('active');
</script>