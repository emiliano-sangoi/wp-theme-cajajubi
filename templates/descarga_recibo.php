<?php
/* Template Name: Descarga tu recibo */
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
<section class="breadcrumb-option set-bg" style="margin-top: 0px;" data-setbg="<?php echo DIR_IMGS . '/nosotros.jpg'; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h2>Descarga tu recibo</h2>
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
                                    <div>
                                        <br>
                                        <p>
                                            La Caja pone a disposición de los beneficiarios sus recibo de haberes en versión digital. Para ello es necesario poseer Identificación Ciudadana en el portal de la provincia e ingresar en el sitio apuntado a continuación. Luego en el box “Recibos de Sueldos” seleccionar el botón “Pasivos”.
                                        </p>
                                        <br>
                                        <br>
                                        <a href="https://sso.santafe.gov.ar/service-auth/login?service=https://www.santafe.gov.ar/intranetv2/login" target="_blank" class="primary-btn">DESCARGÁ TU RECIBO
                                        </a>
                                        <br>
                                        <br>
                                        <p>
                                            El sistema garantiza confidencialidad y privacidad de la información.
                                        </p>
                                        <br>
                                    </div>
                                    <div>
                                        <br>
                                        <p>
                                            Si usted no posee Identificación Ciudadana deberá registrarse ingresando en el siguiente link y luego seguir las instrucciones que dicho sitio le brinda.
                                        </p>
                                        <br>
                                        <a href="https://www.santafe.gob.ar/idciudadana/registro/" target="_blank" class="primary-btn">OBTENÉ TU ID. CIUDADANA
                                        </a>
                                        <br>
                                        <br>
                                    </div>
                                    <p>&nbsp;</p>
                                        <br>
                                        <br>
                                        <br>
                                    <p>
                                        <strong>Dudas y consultas.</strong>
                                        <br>
                                        Escribir a 
                                        <em> mesadeayuda_recibosdigitales@santafe.gob.ar </em> 
                                        <strong>
                                            (las respuestas serán recibidas dentro de las 48 horas posteriores al envío del correo electrónico). 
                                        </strong>
                                    </p>
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