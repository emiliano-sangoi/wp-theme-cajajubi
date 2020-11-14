<?php
/* Template Name: Contacto */
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
<section class="breadcrumb-option set-bg" style="margin-top: 0px;" data-setbg="<?php echo DIR_IMGS . '/contacto.jpg'; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h2>Contacto</h2>
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
                                    <!--<a data-toggle="collapse" data-target="#collapseOne">-->
                                    <br>
                                    <p>
                                        La Caja de jubilaciones ha implementado diversos canales de comunicación. Podés escribirnos en nuestras redes, por whatsapp o un correo electrónico.
                                    </p>
                                    <br>
                                    <p>
                                        - Whatsapp: 342 5 128 800
                                        <br>
                                        - Línea telefónica gratuita: 0800 - 444 - 3734
                                        <br>
                                        - Correo electrónico: 
                                        <a href="mailto:contactocaja@santafe.gov.ar">
                                            contactocaja@santafe.gov.ar
                                        </a>
                                        <br>
                                    </p>
                                    <p>
                                        <br>
                                        <br>
                                    <p>
                                    <h7>
                                        Oficinas de atención al público
                                    </h7>
                                    <br>
                                    <br>
                                    </p>
                                    <p>
                                        <strong>
                                            Santa Fe
                                        </strong>
                                        <br>
                                        1º Junta 2724 (S3000CDH)
                                        <br> 
                                        Atención al público con turno web previo: turnos.santafe.gov.ar/
                                        <br>
                                        Teléfonos: 0800 - 444 – 3734
                                        <br>
                                        <br>
                                        <br>
                                    </p>
                                    <p>
                                        <strong>
                                            Rosario
                                        </strong>
                                        <br>
                                        Brown 2262 (S2000JCB)
                                        <br>
                                        Atención al público con turno web previo: turnos.santafe.gov.ar/
                                        <br>
                                        Teléfonos: 54 + 341 - 4724561, 4724562, 4724563
                                        <br>
                                        Fax: Interno 109
                                        <br>
                                        <br>
                                    </p>
                                    <p>
                                        <strong>
                                            Venado Tuerto
                                        </strong>
                                        <br>
                                        Mitre 766 (S2600IRP)
                                        <br>
                                        Atención al público con turno web previo: turnos.santafe.gov.ar/
                                        <br>
                                        Teléfono: 54 + 3462 422289
                                        <br>
                                        <br>
                                    </p>
                                    <p>
                                        <strong>
                                            San Justo
                                        </strong>
                                        <br>
                                        Nicolás Figueredo 2637 (S3040CDM)
                                        <br>
                                        Teléfono/Fax: 54 + 3498 425531
                                        <br>
                                        <br>
                                    </p>
                                    <p>
                                        <strong>
                                            Rafaela
                                        </strong>
                                        <br>
                                        Bv. Lehmann 583 (S2300ICB)
                                        <br>
                                        Atención al público con turno web previo: turnos.santafe.gov.ar/
                                        <br>
                                        Teléfonos/Fax: 54 + 3492 –423091
                                        <br>
                                        <br>
                                    </p>
                                    <p>
                                        <strong>
                                            Reconquista
                                        </strong>
                                        <br>
                                        Rivadavia 666 (S3560GUU)
                                        <br>
                                        Atención al público con turno web previo: turnos.santafe.gov.ar/
                                        <br>
                                        <br>
                                    </p>
                                    <p>
                                        <strong>
                                            Buenos Aires
                                        </strong>
                                        <br>
                                        25 de mayo 178, Entrepiso (C1002ABD)
                                        <br>
                                        Teléfonos: 54 + 11 43311808
                                        <br>
                                        Fax: 54 + 11 43311622
                                        <br>
                                        <br>
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
            
<!-- Contact Section End -->
<hr>
<!-- Leave Comment Begin -->
<div class="leave-comment comment-form spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="leave__comment__text">
                    <h2>Escribinos</h2>
                    <form action="form-process.php" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <input type="text" id="name" name="name" placeholder="Nombre y apellido*" required>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <input type="email" id="email" name="email" placeholder="Email*" required>
                            </div>
                            <div class="col-lg-12 text-center">
                                <textarea placeholder="Mensaje" id="message" name="message" required></textarea>
                                <button type="submit" class="btn-primary" id="form-submit">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Leave Comment End -->

<!-- Faq End -->
<!-- About Section End -->

<?php get_footer(); ?>