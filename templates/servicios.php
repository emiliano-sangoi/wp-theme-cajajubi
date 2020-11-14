<?php
/* Template Name: Servicios */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_SERVICIOS);
if (!$pagina instanceof WP_Post) {
    wp_redirect( home_url(), 301 );
    exit;
}
?>

<?php
get_header();


//$field = get_field('link_estado_expediente', PAGINA_SERVICIOS);
//var_dump($field);

//$pagina2 = get_page_by_path('prueba');
//print_r($pagina2);exit;

//TODO
//Reemplazar por get_field(...)
$link_expedientes_web = 'https://www.santafe.gov.ar/expedientes-web/';
$link_historia_laboral = 'http://www.santa-fe.gov.ar/jubypen/aportes/aportes.php';
// REEMPLAZAR_LINK:
//$link_cert_negativa = 'http://localhost:8087/wp-caja/certificacion.html';

$link_imp_ganancias = 'https://www.santafe.gov.ar/index.php/web/content/view/full/235061';
$link_const_cuil = 'https://www.anses.gob.ar/consulta/constancia-de-cuil';
$link_mi_anses = 'https://www.anses.gob.ar/informacion/mi-anses';
//$link_biblioteca_dig = 'biblioteca.html';
//$link_sitios_interes = 'interes.html';


//$enlaces = get_fields(PAGINA_SERVICIOS);
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//echo '<br>';
//print_r($enlaces);exit;
//
//echo $pagina->post_content;
?>


<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->

<!-- Offcanvas Menu Begin -->
<?php //get_template_part("partials/mobile");    ?>
<!-- Offcanvas Menu End -->
<div class="container-lg navbar-separator p-5 altura-minima" id="servicios">
    <h1 class="font-weight-bold text-primary">
        <?php echo $pagina->post_title; ?>
    </h1>
    <hr/>


    <div class="enlaces mt-4">        
        <h2 class="h4 font-weight-bold">
            Estado de expedientes
        </h2>
        <div class="my-2 mb-3">
            Podés conocer el estado de los expedientes. Incluye los tradicionales en papel, como así también se pueden localizar los expedientes electrónicos. 
        </div>
        <div>
            <a class="btn btn-outline-primary" href="<?php echo $link_expedientes_web; ?>" target="_blank">
                Acceder
            </a>
        </div>                
    </div>

    <!--=========================================================================================-->

    <div class="enlaces mt-5">        
        <h2 class="h4 font-weight-bold">
            Historia laboral
        </h2>
        <div class="my-2 mb-3">
            Permite consultar los aportes personales de aquellos agentes que aportaron o aportan a esta Caja de Jubilaciones y Pensiones de la Provincia de Santa Fe. Necesitás acceder con tu número de CUIL.  
        </div>
        <div>
            <a class="btn btn-outline-primary" href="<?php echo $link_historia_laboral; ?>" target="_blank">
                Acceder
            </a>
        </div>                
    </div>


    <!--=========================================================================================-->

    <div class="enlaces mt-5">        
        <h2 class="h4 font-weight-bold">
            Certificaci&oacute;n negativa
        </h2>
        <div class="my-2 mb-3">
            A través de este servicio, podrás obtener la constancia que acredita si posees o no un beneficio acordado en este organismo previsional, como así también si iniciaste un trámite en nuestro Organismo.
        </div>
        <div>
            <a class="btn btn-outline-primary" href="<?php echo getLinkPagina ( PAGINA_CERTIFICACION_NEGATIVA ); ?>" target="_blank">
                Acceder
            </a>
        </div>                
    </div>



    <!--=========================================================================================-->

    <div class="enlaces mt-5">        
        <h2 class="h4 font-weight-bold">
            Impuestos a las ganancias
        </h2>
        <div class="my-2 mb-3">
            Aquí se encuentrarás explicación referente al impuesto a las ganancias de nuestros beneficiarios, las preguntas frecuentes y como se completa el Formulario 572 web.
        </div>
        <div>
            <a class="btn btn-outline-primary" href="<?php echo $link_imp_ganancias; ?>" target="_blank">
                Acceder
            </a>
        </div>                
    </div>  

    <!--=========================================================================================-->

    <div class="enlaces mt-5">        
        <h2 class="h4 font-weight-bold">
            Mi Anses
        </h2>
        <div class="my-2 mb-3">
            Mi ANSeS es una plataforma digital que te permite realizar diferentes trámites y consultas personales sin necesidad de ir a una oficina de ANSeS. Se ingresa con Clave de la Seguridad Social, que se puede obtener totalmente en línea.
        </div>
        <div>
            <a class="btn btn-outline-primary" href="<?php echo $link_mi_anses; ?>" target="_blank">
                Acceder
            </a>
        </div>                
    </div>          

    <!--=========================================================================================-->

    <div class="enlaces mt-5">        
        <h2 class="h4 font-weight-bold">
            Biblioteca digital
        </h2>
        <div class="my-2 mb-3">
           Mediante esta sección vas a poder acceder a las normas más destacadas que rigen el funcionamiento de la Caja, también los requisitos de las prestaciones que se otorgan, las regulaciones para nuestros afiliados y Organismos aportantes y adheridos. Está dividida en tres secciones: Normas, Formularios e Instructivos.
        </div>
        <div>
            <a class="btn btn-outline-primary" href="<?php echo getLinkPagina(PAGINA_BIBLIOTECA ); ?>" target="_blank">
                Acceder
            </a>
        </div>                
    </div>  

    <!--=========================================================================================-->

    <div class="enlaces mt-5">        
        <h2 class="h4 font-weight-bold">
            Sitios de interés
        </h2>
        <div class="my-2 mb-3">
            A continuación les proporcionamos sitios afines a nuestra actividad y a los servicios que prestamos.
        </div>
        <div>
            <a class="btn btn-outline-primary" href="<?php echo getLinkPagina( PAGINA_SITIOS_DE_INTERES ); ?>" target="_blank">
                Acceder
            </a>
        </div>                
    </div>  


</div>  








<?php
//    get_template_part(
//            'partials/servicio-item',
//            null,
//            array(
//                'class' => 'lalala',
//                'arbitrary_data' => array(
//                    'foo' => 'baz',
//                    'bar' => true,
//                )
//            )
//    );
?>



<?php get_footer(); ?>
