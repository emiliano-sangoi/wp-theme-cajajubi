<?php
/* Template Name: Contacto */
//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_CONTACTO);
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

<div class="container-lg navbar-separator px-5 pt-4 pb-5 altura-minima" id="contacto">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo get_home_url(); ?>">
                    Inicio
                </a>
            </li>    
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
        <?php if (empty($pagina->post_content)): ?>
            <p class="text-muted">
                No se ha cargado ningun contenido en esta secci&oacute;n.
            </p>
            <?php
        else:
            echo nl2br($pagina->post_content);
            ?>
        <?php endif; ?>
    </div>

    <div class="row mt-3">
        <div class="col-2">
            <div class="bg-light p-3 text-center border border-secondary medio-contacto">
                <h6 class="mb-2">
                    <i class="fa fa-whatsapp"></i>
                    Whatsapp
                </h6>
                <div class="">
                    342 5 128 800
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="bg-light p-3 text-center border border-secondary medio-contacto">
                <h6 class="mb-2">
                    <i class="fa fa-envelope"></i>
                    Correo Electrónico
                </h6>
                <div class="">
                    <a class="email-conctacto" href="mailto:contactocaja@santafe.gov.ar" target="_blank">
                        contactocaja@santafe.gov.ar
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="bg-light p-3 text-center border border-secondary medio-contacto">
                <h6 class="mb-2" title="Línea telefónica gratuita">
                    <i class="fa fa-phone"></i>
                    Tel&eacute;fono
                </h6>
                <div class="">
                    0800 - 444 - 3734
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="bg-light p-3 text-center border border-secondary medio-contacto">
                <h6 class="mb-2">
                    <i class="fa fa-users"></i>
                    Redes sociales
                </h6>
                <div class="">
                    <div class="social-media">
                        <span class="">
                            <a href="https://www.facebook.com/cajasantafe" target="_blank">
                                <img class="img-fluid" src="<?php echo DIR_IMGS . '/social-media/facebook_sq.png'; ?>" alt="Facebook"/>
                            </a>
                        </span>
                        <span class="">
                            <a href="https://twitter.com/caja_sf" target="_blank">
                                <img class="img-fluid" src="<?php echo DIR_IMGS . '/social-media/twitter_sq.png'; ?>" alt="Twitter"/>
                            </a>
                        </span>
                        <span class="">
                            <a href="https://instagram.com/cajajubisantafe?igshid=1xdlczgob9pq5" target="_blank">
                                <img class="img-fluid" src="<?php echo DIR_IMGS . '/social-media/instagram_sq.png'; ?>" alt="Instagram"/>
                            </a>
                        </span>
                        <span class="">
                            <a href="https://www.youtube.com/user/GobSantaFe" target="_blank">
                                <img class="img-fluid" src="<?php echo DIR_IMGS . '/social-media/youtube_sq.png'; ?>" alt="Youtube"/>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 bg-light px-5 pb-5 pt-4 border border-secondary">
        <form action="form-process.php" method="post">
            <h3 class="text-center font-weight-bold">
                Env&iacute;anos tu consulta
            </h3>
            <hr class="w-50 mx-auto"/>
            <div class="form-row mt-4">
                <div class="col-6">
                    <label for="name" class="font-weight-bold">
                        Nombre y apellido
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre y apellido*" required>                
                </div>
                <div class="col-6">
                    <label for="email" class="font-weight-bold">
                        Correo electr&oacute;nico
                        <span class="text-danger">*</span>
                    </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" required aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu dirección de correo con nadie.</small>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12">
                    <label for="message" class="font-weight-bold">
                        Consulta
                        <span class="text-danger">*</span>
                    </label>
                    <textarea class='form-control' rows='10' placeholder="Ingrese su consulta" id="message" name="message" required></textarea>                    
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-lg btn-outline-primary" id="form-submit">Enviar</button>
            </div>

        </form>
    </div>



    <h2 class="h3 font-weight-bold mt-5">
        Oficinas de atención al público
    </h2>

    <section class="py-3">

        <?php
        $contactos = getInfoContacto();
        foreach ($contactos as $contacto) :
            $titulo = $contacto['titulo'];
            $direccion = $contacto['direccion'];
            $telefono = $contacto['telefono'];
            $fax = $contacto['fax'];
            $mostrar_turno_web = $contacto['mostrar_turno_web'];
            $whatsapp = $contacto['whatsapp'];
            ?>
            <div class="mb-3">
                <?php
                include(locate_template('partials/card-contacto.php'));
                ?>
            </div>
        <?php endforeach; ?>


    </section>

</div>



<?php get_footer(); ?>

<script>
    $('a.nav-link').removeClass('active');
    $('.nav-link-contacto').addClass('active');
</script>