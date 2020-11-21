<?php
/* Template Name: Sitios de interes */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_SITIOS_DE_INTERES);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}

get_header();
?>

<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->


<div class="container-lg navbar-separator px-5 pt-4 pb-5 altura-minima" id="sitios-de-interes">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Inicio</a></li>   
            <li class="breadcrumb-item"><a href="<?php echo getLinkPagina ( PAGINA_SERVICIIOS ); ?>">Servicios</a></li> 
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

    <!--    <div>
            <table class="table">
                <table class="table table-striped">
                    <thead>
                        
                    </thead>
                    
                </table>
                
            </table>
        </div>-->

    <div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="tab-varios" data-toggle="tab" href="#varios" role="tab" aria-controls="varios" aria-selected="true">Varios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-cajas-muni" data-toggle="tab" href="#cajas-muni" role="tab" aria-controls="cajas-muni" aria-selected="false">
                    Cajas municipales
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab-cajas-prof" data-toggle="tab" href="#cajas-prof" role="tab" aria-controls="cajas-prof" aria-selected="false">
                    Cajas profesionales
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="varios" role="tabpanel" aria-labelledby="tab-varios">
                <div class="p-lg-5 p-3">
                    <?php
                    $titulo = 'Gobierno de la Provincia de Santa Fe';
                    $link = 'https://www.santafe.gov.ar';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'I.A.P.O.S. (Instituto Autárquico Provincial de Obra Social)';
                    $link = 'http://www.iapossantafe.gob.ar';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Caja de Previsión Social de los Agentes Civiles del Estado (Seguro Mutual)';
                    $link = 'http://www.cajadeprevisionsf.org.ar';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Caja de Pensiones Sociales - Ley 5110';
                    $link = 'https://www.santafe.gob.ar/index.php/web/content/view/full/234992';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'ANSeS';
                    $link = 'https://www.anses.gob.ar';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'AFIP';
                    $link = 'https://www.afip.gob.ar/sitio/externos/default.asp';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Consejo Federal de Previsión Social';
                    $link = 'http://www.cofepres.org.ar';
                    include locate_template('partials/enlace-interes.php');
                    ?>
                </div>

            </div>
            <div class="tab-pane" id="cajas-muni" role="tabpanel" aria-labelledby="tab-cajas-muni">
                <div class="p-lg-5 p-3">
                    <?php
                    $titulo = 'Caja Municipalidad de Jubilaciones y Pensiones de Santa Fe';
                    $link = 'http://www.cajamunicipal.gov.ar';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Instituto Municipal de Previsión Social Rosario)';
                    $link = 'https://impsr.gob.ar';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Instituto Municipal de Previsión Social de Venado Tuerto';
                    $link = 'https://www.impsvt.org.ar';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Caja Municipal de Previsión Social de Esperanza';
                    $link = 'http://cajaesperanza.gob.ar';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Caja de Jubilaciones y Pensiones de la Municipalidad de Cañada de Gómez';
                    $link = 'https://cañadadegomez.gob.ar';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Caja de Jubilados y Pensionados Municipales de Rufino';
                    $link = 'http://rufino.gob.ar';
                    include locate_template('partials/enlace-interes.php');
                    ?>
                </div>
            </div>
            <div class="tab-pane" id="cajas-prof" role="tabpanel" aria-labelledby="tab-cajas-prof">
                <div class="p-lg-5 p-3">
                    <?php
                    $titulo = 'Caja de Seguridad Social para los Profesionales del Arte de Curar de la Provincia de Santa Fe';
                    $link = 'https://www.cpac.org.ar/cpacv3/';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Caja de Previsión Social de los Profesionales de la Ingeniería de la Provincia de Santa Fe - 1° Circunscripción';
                    $link = 'http://www.cajaingenieria.org';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Caja de Previsión Social de los Profesionales de la Ingeniería de la Provincia de Santa Fe - 2° Circunscripción';
                    $link = 'http://www.cajaingros.com.ar';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Caja de Seguridad Social de Abogados y Procuradores de la Provincia de Santa Fe';
                    $link = 'http://www.capsantafe.org.ar';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Caja de Seguridad Social para los Profesionales en Ciencias Económicas - Cámara I';
                    $link = 'https://cpcesfe1.org.ar';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Caja de Seguridad Social para los Profesionales en Ciencias Económicas - Cámara II';
                    $link = 'https://www.cpcesfe2.org.ar/Index.php';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Caja Notarial de Acción Social del Colegio de Escribanos de la Provincia de Santa Fe';
                    $link = 'https://www.coessfe1.org.ar/portal/index.php/es/';
                    include locate_template('partials/enlace-interes.php');

                    $titulo = 'Caja Notarial de Acción Social del Colegio de Escribanos - 2° Circunscripción - Rosario';
                    $link  = 'https://escribanos-stafe2da.org.ar';
                    include locate_template('partials/enlace-interes.php');
                    ?>
                </div>
            </div>            
        </div>

    </div>

</div>

<?php get_footer(); ?>