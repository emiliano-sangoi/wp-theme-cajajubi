<?php
/* Template Name: Politica de calidad */
//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_POLITICA_CALIDAD);
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

    <div class="container navbar-separator px-3 px-lg-5 pt-3 pb-5 altura-minima" id="quienes-somos">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Inicio</a></li>
                <li class="breadcrumb-item">Institucional</li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo $pagina->post_title; ?>
                </li>
            </ol>
        </nav>


        <h1 class="font-weight-bold text-primary">
            <?php echo $pagina->post_title; ?>
        </h1>
        <hr/>

        <div class="row">
            <div class="col-12 col-md-9">
                <?php
                if (!empty($pagina->post_content)):
                    echo nl2br($pagina->post_content);
                    ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-3 text-center">
                <?php
                $logo = get_field('logo', $pagina);
                $certificado = get_field('certificado', $pagina);
                ?>

                <a href="<?php echo isset($certificado['url']) ? $certificado['url'] : '#'; ?>" target="_blank" class="<?php echo isset($certificado['url']) ? '' : 'disabled' ?>"> 
                    <img class="img-fluid mt-3 mt-md-0 w-75 " src="<?php echo $logo['url']; ?>" alt="ISO 9001"/>  
                </a>
            </div>
        </div>

        <section class="mt-4 mb-3">
            <div class='card-deck'>
                <div class='card bg-primary text-light shadow-sm' style="border-width: 2px;">
                    <div class='card-body py-3 py-lg-4'>
                        <h4 class="card-title font-weight-bold text-center mb-0">
                            Visi&oacute;n
                        </h4>
                        <hr class="border-light w-75 my-3" style="border-width: 2px;" />
                        <div class="card-text px-2 px-lg-3 text-lead mb-2">
                            <?php
                            $vision = get_field('vision', $pagina);
                            echo nl2br($vision);
                            ?>
                        </div>
                    </div>
                </div>

                <div class='card bg-primary text-light shadow-sm' style="border-width: 2px;">
                    <div class='card-body py-3 py-lg-4'>
                        <h4 class="card-title font-weight-bold text-center mb-0">
                            Misi&oacute;n
                        </h4>
                        <hr class="border-light w-75 my-3" style="border-width: 2px;" />
                        <div class="card-text px-2 px-lg-3 text-lead mb-2">
                            <?php
                            $mision = get_field('mision', $pagina);
                            echo nl2br($mision);
                            ?>
                        </div>
                    </div>
                </div>

                <div class='card bg-primary text-light shadow-sm' style="border-width: 2px;">
                    <div class='card-body py-3 py-lg-4'>
                        <h4 class="card-title font-weight-bold text-center mb-0">
                            Valores
                        </h4>
                        <hr class="border-light w-75 my-3" style="border-width: 2px;" />
                        <div class="card-text px-2 px-lg-3 text-lead mb-2">
                            <?php
                            $valores = get_field('valores', $pagina);
                            echo nl2br($valores);
                            ?>
                        </div>
                    </div>
                </div>

            </div>


        </section>


        <?php
            $descripcion_politica = get_field('descripcion_politica', $pagina);
            if($descripcion_politica):
                ?>
            <div class="mt-3 card bg-light p-2">
                <?php echo nl2br($descripcion_politica); ?>
            </div>
            <?php
            endif;
        ?>



        <!--
            <div class="row mt-4">
                <div class="col-4">
                    <div class="card border-primary mb-3 w-100">
                        <div class="card-header">
                            <h4 class="mb-0 font-weight-bold">Misi&oacute;n</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Prestar un servicio público de excelencia, desarrollando los procesos de inicio de trámites y de atención al público y asesoramiento de manera óptima y ágil, minimizando los tiempos de espera y de gestión de las actuaciones administrativas, con un alto grado de satisfacción de los ciudadanos, mejorando permanentemente nuestros procesos.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card border-primary mb-3 w-100">
                        <div class="card-header">
                            <h4 class="mb-0 font-weight-bold">
                                Visi&oacute;n
                            </h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                Ser un organismo ejemplar en el marco de las instituciones de seguridad social administradas por el Estado, con un sistema de gestión moderno y eficiente, que cumpla satisfactoriamente todos los requisitos aplicables y se encuentre fuertemente orientado a la satisfacción total de nuestros afiliados, beneficiarios y el resto de las partes interesadas pertinentes.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card border-primary mb-3 w-100">
                        <div class="card-header">
                            <h4 class="mb-0 font-weight-bold">
                                Valores
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <p>La organización considera como valores claves:</p>
                                <ul>
                                    <li>Ética y transparencia de gestión.</li>
                                    <li>Eficiencia.</li>
                                    <li>Honestidad y Respeto a nivel personal y profesional.</li>
                                    <li>Lealtad a la Institución y compromiso con los objetivos de la misma.</li>
                                    <li>Innovación permanente.</li>
                                    <li>Entusiasmo colectivo.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
    </div>

<?php get_footer(); ?>