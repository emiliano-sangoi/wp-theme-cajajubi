<?php
/* Template Name: Sitios de interes */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_SITIOS_DE_INTERES);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect( home_url(), 301 );
    exit;
}

get_header();
?>

<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->

  
<div class="container-lg navbar-separator p-5 altura-minima" id="sitios-de-interes">
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
        <?php if(empty($pagina->post_content)): ?>
        <p class="text-muted">
            <!--No se ha cargado ningun contenido en esta secci&oacute;n.-->
        </p>
        <?php else: 
            echo $pagina->post_content; 
        ?>
        <?php endif; ?>
    </div>
    
    <!--============================================================================================================================= -->
    
        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="https://www.santafe.gov.ar" target="_blank">
                    Acceder
                </a>
                Gobierno de la Provincia de Santa Fe
            </div>

        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="http://www.iapossantafe.gob.ar" target="_blank">
                    Acceder
                </a>
                I.A.P.O.S.
            </div>

        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="http://www.cajadeprevisionsf.org.ar" target="_blank">
                    Acceder
                </a>
                Caja de Previsión Social de los Agentes Civiles del Estado (Seguro Mutual)
            </div>

        </div>
        <!--=========================================================================================-->
        
        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="https://www.santafe.gob.ar/index.php/web/content/view/full/234992" target="_blank">
                    Acceder
                </a>
                Caja de Pensiones Sociales - Ley 5110
            </div>

        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="https://www.anses.gob.ar" target="_blank">
                    Acceder
                </a>
                ANSeS
            </div>

        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="https://www.afip.gob.ar/sitio/externos/default.asp" target="_blank">
                    Acceder
                </a>
                AFIP
            </div>

        </div>               
        <!--=========================================================================================--> 
        
        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="http://www.cofepres.org.ar" target="_blank">
                  Acceder  
                </a>
                Consejo Federal de Previsión Social
            </div>

        </div>               
        <!--=========================================================================================--> 

    <!--</div>-->
    
    <!--============================================================================================================================= -->
    
    <div class="enlaces mt-4">        
        <h4 class="h4 font-weight-bold">
            CAJAS MUNICIPALES
        </h4>

        <!--=========================================================================================-->
        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="http://www.cajamunicipal.gov.ar" target="_blank">
                    Acceder
                </a>
                Caja Municipalidad de Jubilaciones y Pensiones de Santa Fe
            </div>

        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="https://impsr.gob.ar" target="_blank">
                    Acceder
                </a>
                Instituto Municipal de Previsión Social Rosario
            </div>

        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="https://www.impsvt.org.ar" target="_blank">
                    Acceder
                </a>
                Instituto Municipal de Previsión Social de Venado Tuerto
            </div>

        </div>
        <!--=========================================================================================-->
        
        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="http://cajaesperanza.gob.ar" target="_blank">
                    Acceder
                </a>
                Caja Municipal de Previsión Social de Esperanza
            </div>

        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="https://cañadadegomez.gob.ar" target="_blank">
                    Acceder
                </a>
                Caja de Jubilaciones y Pensiones de la Municipalidad de Cañada de Gómez
            </div>

        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="http://rufino.gob.ar" target="_blank">
                    Acceder
                </a>
                Caja de Jubilados y Pensionados Municipales de Rufino
            </div>

        </div>               
        <!--=========================================================================================--> 

    </div>
    
    <!--============================================================================================================================= -->
    <div class="enlaces mt-4">        
        <h4 class="h4 font-weight-bold">
            CAJAS PROFESIONALES
        </h4>

        <!--=========================================================================================-->
        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="https://www.cpac.org.ar/cpacv3/" target="_blank">
                    Acceder
                </a>
                Caja de Seguridad Social para los Profesionales del Arte de Curar de la Provincia de Santa Fe
            </div>

        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="http://www.cajaingenieria.org" target="_blank">
                    Acceder
                </a>
                Caja de Previsión Social de los Profesionales de la Ingeniería de la Provincia de Santa Fe - 1° Circunscripción
            </div>

        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="http://www.cajaingros.com.ar" target="_blank">
                    Acceder
                </a>
                Caja de Previsión Social de los Profesionales de la Ingeniería de la Provincia de Santa Fe - 2° Circunscripción
            </div>

        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="http://www.capsantafe.org.ar" target="_blank">
                    Acceder
                </a>
                Caja de Seguridad Social de Abogados y Procuradores de la Provincia de Santa Fe
            </div>

        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="https://cpcesfe1.org.ar" target="_blank">
                    Acceder
                </a>
                Caja de Seguridad Social para los Profesionales en Ciencias Económicas - Cámara I
            </div>

        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="https://www.cpcesfe2.org.ar/Index.php" target="_blank">
                    Acceder
                </a>
                Caja de Seguridad Social para los Profesionales en Ciencias Económicas - Cámara II
            </div>

        </div>               
        <!--=========================================================================================--> 

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="https://www.coessfe1.org.ar/portal/index.php/es/" target="_blank">
                    Acceder
                </a>
                Caja Notarial de Acción Social del Colegio de Escribanos de la Provincia de Santa Fe
            </div>
            
        </div>
        <!--=========================================================================================-->

        <div class="enlaces mt-4"> 
            <div class="my-2 mb-3">
                <a class="btn btn-outline-primary" href="https://escribanos-stafe2da.org.ar" target="_blank">
                    Acceder
                </a>
                Caja Notarial de Acción Social del Colegio de Escribanos - 2° Circunscripción - Rosario
            </div>

        </div>
        <!--=========================================================================================-->

    </div>
    
</div>

          
<!-- Faq End -->
<!-- About Section End -->
    
<?php get_footer(); ?>