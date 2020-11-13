<?php
/* Template Name: Servicios */
?>

<?php
get_header();
?>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<?php //get_template_part("partials/mobile");   ?>
<!-- Offcanvas Menu End -->


<!-- Breadcrumb Begin -->
<section class="breadcrumb-option set-bg" style="margin-top: 0px;" data-setbg="<?php echo DIR_IMGS . '/servicios.jpg'; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h2>Servicios</h2>
                    <div class="breadcrumb__widget">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb End -->

<!-- About Section Begin -->
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="faq__accordion">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-heading"> 
                            <div class="row">
                                <div class="col-lg-12">
                                    <!--<a data-toggle="collapse" data-target="#collapseOne"></a>-->
                                    <br>
                                    <li>
                                        <a href="https://www.santafe.gov.ar/expedientes-web/" target="_blank">Estado de expedientes:
                                        </a>
                                    </li>

                                    <p>
                                        Podés conocer el estado de los expedientes. Incluye los tradicionales en papel, como así también se pueden localizar los expedientes electrónicos. 
                                    </p>

                                    <br>
                                    <li>
                                        <a href="http://www.santa-fe.gov.ar/jubypen/aportes/aportes.php" target="_blank">Historia laboral:
                                        </a>
                                    </li>

                                    <p>
                                        Permite consultar los aportes personales de aquellos agentes que aportaron o aportan a esta Caja de Jubilaciones y Pensiones de la Provincia de Santa Fe. Necesitás acceder con tu número de CUIL.  
                                    </p>						
                                    <br>
                                    <li>
                                        <a href="<?php echo esc_url( get_page_link( PAGINA_CERTIFICACION_NEGATIVA ) ); ?>" class="primary-btn" target="_blank">Certificación negativa</a>
                                        </a>
                                    </li>
                                    <p>
                                        A través de este servicio, podrás obtener la constancia que acredita si posees o no un beneficio acordado en este organismo previsional, como así también si iniciaste un trámite en nuestro Organismo.
                                    </p>
                                    <br>
                                    <li>
                                        <a href="https://www.santafe.gov.ar/index.php/web/content/view/full/235061" target="_blank">Impuesto a las Ganancias:
                                        </a>
                                    </li>
                                    <p>
                                        Aquí se encuentrarás explicación referente al impuesto a las ganancias de nuestros beneficiarios, las preguntas frecuentes y como se completa el Formulario 572 web.
                                    </p>	
                                    <br>
                                    <li>
                                        <a href="https://www.anses.gob.ar/consulta/constancia-de-cuil" target="_blank">Constancia de cuil:
                                        </a>
                                    </li>
                                    <p>
                                        Mediante este enlace podrás generar tu constancia de CUIL desde la pagina de ANSES, completando los datos requeridos.
                                    </p>	
                                    <br>
                                    <li>
                                        <a href=" https://www.anses.gob.ar/informacion/mi-anses" target="_blank">Mi Anses
                                        </a>
                                    </li>
                                    <p>
                                        Mi ANSeS es una plataforma digital que te permite realizar diferentes trámites y consultas personales sin necesidad de ir a una oficina de ANSeS. Se ingresa con Clave de la Seguridad Social, que se puede obtener totalmente en línea.
                                    </p>
                                    <br>
                                    <li>
                                        <a href="<?php echo esc_url( get_page_link( PAGINA_BIBLIOTECA ) ); ?>" class="primary-btn" target="_blank">Biblioteca digital</a>
                                        </a>
                                    </li>
                                    <p>
                                        Mediante esta sección vas a poder acceder a las normas más destacadas que rigen el funcionamiento de la Caja, también los requisitos de las prestaciones que se otorgan, las regulaciones para nuestros afiliados y Organismos aportantes y adheridos. Está dividida en tres secciones: Normas, Formularios e Instructivos.
                                    </p>
                                    <br>
                                    <li>
                                         <a href="<?php echo esc_url( get_page_link( PAGINA_SITIOS_DE_INTERES) ); ?>" class="primary-btn" target="_blank">Sitios de interés</a>
                                        
                                    </li>
                                    <p>
                                        A continuación les proporcionamos sitios afines a nuestra actividad y a los servicios que prestamos.
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Faq End -->
<!-- About Section End -->

<?php get_footer(); ?>