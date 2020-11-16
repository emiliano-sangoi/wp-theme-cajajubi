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

<div class="container-lg navbar-separator px-5 pt-4 pb-5 altura-minima" id="quienes-somos">
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


    <section class="mt-4 mb-3">
        <h2 class="h3 font-weight-bold">
            Misi&oacute;n
        </h2>
        <p>
            Prestar un servicio público de excelencia, desarrollando los procesos de inicio de trámites y de atención al público y asesoramiento de manera óptima y ágil, minimizando los tiempos de espera y de gestión de las actuaciones administrativas, con un alto grado de satisfacción de los ciudadanos, mejorando permanentemente nuestros procesos.
        </p>        
    </section>

    <section class="mb-3">
        <h2 class="h3 font-weight-bold">
            Visi&oacute;n
        </h2>
        <p>
            Ser un organismo ejemplar en el marco de las instituciones de seguridad social administradas por el Estado, con un sistema de gestión moderno y eficiente, que cumpla satisfactoriamente todos los requisitos aplicables y se encuentre fuertemente orientado a la satisfacción total de nuestros afiliados, beneficiarios y el resto de las partes interesadas pertinentes.
        </p>        
    </section>


    <section class="">
        <h2 class="h3 font-weight-bold">
            Valores
        </h2>
        <div>
            <p>La organización considera como valores claves:</p>
            <ul class="list-unstyled pl-lg-5 pl-2">
                <li>
                    <i class="fa fa-check text-success"></i>&nbsp;
                    Ética y transparencia de gestión.
                </li>
                <li>
                    <i class="fa fa-check text-success"></i>&nbsp;
                    Eficiencia.
                </li>
                <li>
                    <i class="fa fa-check text-success"></i>&nbsp;
                    Honestidad y Respeto a nivel personal y profesional.
                </li>
                <li>
                    <i class="fa fa-check text-success"></i>&nbsp;
                    Lealtad a la Institución y compromiso con los objetivos de la misma.
                </li>
                <li>
                    <i class="fa fa-check text-success"></i>&nbsp;
                    Innovación permanente.
                </li>
                <li>
                    <i class="fa fa-check text-success"></i>&nbsp;
                    Entusiasmo colectivo.
                </li>
            </ul>                
        </div>       
    </section>


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