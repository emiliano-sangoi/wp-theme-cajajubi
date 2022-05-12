<?php
/* Template Name: Organismos aportantes */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_ORG_APORTANTES);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}
get_header();

//Aplicativos
$f_cajav50 = get_field('archivo_caja_v50');
$f_act = get_field('actualizacion_siafca');
$f_instructivo = get_field('intructivo_instalacion');
$f_siafcomp = get_field('siafcomp');

$link_siafcomp = isset($f_siafcomp['url']) ? $f_siafcomp['url'] : '#';
$link_siafca_w32 = isset($f_cajav50['url']) ? $f_cajav50['url'] : '#';
$link_siafca_act = isset($f_act['url']) ? $f_act['url'] : '#';
$link_siafca_instructivo = isset($f_instructivo['url']) ? $f_instructivo['url'] : '#';

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

    <div class="container-lg px-3 pt-3 px-lg-5">

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
            Aplicativos informáticos
        </h2>
        <div>
            <?php
            if (!empty($pagina->post_content)):
                echo $pagina->post_content;
            endif;
            ?> 
        </div>
        <section class="py-3">

            <div class="card-header bg-secondary text-white font-weight-bold">                
                <i class="fa fa-download" aria-hidden="true"></i>&nbsp;Descargas
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered mb-0">
                    <tbody>
                        <tr>
                            <td class="align-middle bg-light font-weight-bold" rowspan="4">
                                Siafca
                            </td>                     
                        </tr>
                        <tr>
                            <td class="align-middle text-primary font-weight-bold">
                                Siafca v50
                            </td>
                            <td class="align-middle">
                                Sistema de Afiliados a la Caja (Si.Af.Ca) para Windows 32 bits
                                <div class="mt-1 small text-muted">
                                    Este aplicativo permite generar el archivo JUBI.DAT para presentar en el sistema Predeju.                                
                                </div>
                                <div class="mt-1 small text-success">
                                    Si presenta las DDJJ en formato IMPORTA.DAT no es necesario utilizar este aplicativo ya que el sistema Predeju acepta este tipo de archivos.
                                </div>
                            </td>
                            <td class="align-middle">
                                <a href="<?php echo $link_siafca_w32; ?>" class="btn btn-outline-primary">
                                    <i class="bi-download"></i>Descargar
                                </a> 
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle font-weight-bold">
                                Actualizaci&oacute;n 2020-2021
                            </td>
                            <td class="align-middle">
                                Actualizaci&oacute;n v5.4 2020-2021
                                <div class="mt-1 small text-muted">
                                    Esta actualizaci&oacute;n solo es necesaria para instalaciones anteriores a 2020.
                                </div>
                            </td>
                            <td class="align-middle">                          
                                <a href="<?php echo $link_siafca_act; ?>" class="btn btn-outline-primary">
                                    Descargar
                                </a>

                            </td>
                        </tr>
                        <tr>   
                            <td class="align-middle font-weight-bold">
                                Instructivo instalaci&oacute;n
                            </td>
                            <td class="align-middle">
                                Instructivo para la instalaci&oacute;n del aplicativo en computadoras de 32 bits y de 64 bits (Utilizando DOSBox).
                            </td>
                            <td class="align-middle">                           
                                <a href="<?php echo $link_siafca_instructivo; ?>" class="btn btn-outline-primary">
                                    Descargar
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle bg-light font-weight-bold">
                                Si.Af.Comp
                            </td>
                            <td class="align-middle" colspan="2">
                                Aplicativo para presentaci&oacute;n de liquidaciones complementarias. Vigente desde el año 1996.
                            </td>
                            <td>

                                <a href="<?php echo $link_siafcomp; ?>" class="btn btn-outline-primary">
                                    Descargar
                                </a>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>

        <section class="card mt-3">
            <div class="card-header bg-secondary text-white font-weight-bold">
                <i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;Soporte de sistemas
            </div>
            <div class="card-body">
                <p>
                    Ante alg&uacute;n problema para subir la declaración jurada o con el sistema debe enviar una consulta al correo electr&oacute;nico: <span class="font-weight-bold"><i>sistemas.cajajubi@santafe.gov.ar</i></span> detallando:
                </p>
                <ul>
                    <li>Código del organismo</li>
                    <li>Descripción del problema</li>
                    <li>Captura de pantalla del error (si corresponde).</li>
                    <li>Archivos IMPORTA.DAT o JUBI.DAT (solo si tiene problemas al subir estos archivos).</li>
                </ul>
                <p>
                    Tambi&eacute;n es posible comunicarse por telefono al n&uacute;mero: 4846403 (int. 37842) <span class="font-weight-bold text-primary">SOLO</span> en los siguientes d&iacute;as y horarios:
                </p>
                <ul class="mb-0">
                    <li>Martes y Jueves de <b>8:30</b> a <b>10:00</b> Hs.</li>
                </ul>
            </div>
        </section>


        <h2 class="h3 font-weight-bold mt-5">
            Trámites online
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