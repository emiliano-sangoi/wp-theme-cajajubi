<?php
/* Template Name: Prestaciones */
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
<section class="breadcrumb-option set-bg" style="margin-top: 0px;" data-setbg="<?php echo DIR_IMGS . '/prestaciones.jpg'; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h2>Prestaciones</h2>
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
                                    <div class="section-title normal-title">
                                        <!--<a data-toggle="collapse" data-target="#collapseOne">-->
                                        <br>
                                        <p>
                                            La Caja de Jubilaciones cubre las contingencias de vejez, invalidez y fallecimiento.
                                        </p>
                                        <br>
                                        <p>
                                            Luego de completar esta información los usuarios podrán acceder al sistema y obtener el Recibo de Haberes. El sistema garantiza confidencialidad y privacidad de la información.
                                        </p>
                                        <br>
                                        <li>
                                            <a href="http://www.santafe.gob.ar/index.php/web/content/view/full/235057/(subtema)/102727" target="_blank">Jubilaciones
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.santafe.gob.ar/index.php/web/content/view/full/235059/(subtema)/102727" target="_blank">Retiros policiales y penitenciarios
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.santafe.gov.ar/index.php/web/content/view/full/111782/(subtema)/102727" target="_blank">Reconocimiento de servicios
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.santafe.gov.ar/index.php/web/content/view/full/235062/(subtema)/102727" target="_blank">Pensiones
                                            </a>
                                        </li>
                                    </div>
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