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

<div class="container-lg navbar-separator px-3 px-lg-5 pt-3 pb-5 altura-minima" id="contacto">
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

    <div class="row mt-3">
        <div class="col-lg-2 col-12">
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
        <div class="col-lg-4 col-12">
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
        <div class="col-lg-3 col-12">
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
        <div class="col-lg-3 col-12">
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

    <div>
        <?php if (empty($pagina->post_content)): ?>
            <p class="text-muted">
                No se ha cargado ning&uacute;n contenido en esta secci&oacute;n.
            </p>
            <?php
        else:
            ?>
            <div class="mt-4 bg-light px-3 px-lg-5 pb-5 pt-4 border border-secondary">
                <h3 class="text-center font-weight-bold">
                    Env&iacute;anos tu consulta
                </h3>
                <hr class="w-50 mx-auto"/>
                <?php
                echo do_shortcode($pagina->post_content);
                ?>
            </div>
        <?php endif; ?>
    </div>


    <h2 class="h3 font-weight-bold mt-5">
        Oficinas de atención al público
    </h2>

    <section class="py-3">        
        <div class='card-columns'>
            <?php foreach (getInfoContacto() as $contacto){
                                $titulo = $contacto['titulo'];
                                $direccion = $contacto['direccion'];
                                $telefono = $contacto['telefono'];
                                $fax = $contacto['fax'];
                                $mostrar_turno_web = $contacto['mostrar_turno_web'];
                                $whatsapp = $contacto['whatsapp'];
                                include(locate_template('partials/card-contacto.php'));                                       
                        } 
            ?>           
        </div>
    </section>

</div>



<?php get_footer(); ?>

<script>
    $('a.nav-link').removeClass('active');
    $('.nav-link-contacto').addClass('active');
</script>