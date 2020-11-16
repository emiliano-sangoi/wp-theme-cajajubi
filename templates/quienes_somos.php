<?php
/* Template Name: Quienes somos */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_QUIENES_SOMOS);
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

<div class="container-lg navbar-separator py-4 px-5 altura-minima" id="quienes-somos">
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
        <?php if (empty($pagina->post_content)): ?>
            <p class="text-muted">
                No se ha cargado ningun contenido en esta secci&oacute;n.
            </p>
            <?php
        else:
            echo $pagina->post_content;
            ?>
        <?php endif; ?>
    </div>

    <h2 class="h3 font-weight-bold mt-5">Autoridades</h2>
    <section class="py-3">

        <div class="row mb-4">

            <!--Director:-->
            <div class='col-6'>
                <div class='card'>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img class='img-fluid' src="https://via.placeholder.com/100"/>
                            </div>
                            <div class="col-9 px-3">
                                <h3 class="h4">
                                    Dr. Humberto Giobergia
                                </h3>
                                <p>
                                    Director Provincial Caja de Jubilaciones y Pensiones
                                </p>    
                                <div>
                                    <a class="btn btn-sm btn-outline-secondary" href='#'>
                                        Curriculum Vitae
                                        <!--<img class="img-fluid w-20" src="<?php //echo DIR_IMGS . '/social-media/linkedin.png'        ?>" />-->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class='col-6'>
                <!--Director:-->
                <div class='card'>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img class='img-fluid' src="https://via.placeholder.com/100"/>
                            </div>
                            <div class="col-9 px-3">
                                <h3 class="h4">
                                    Alberto W. Sanchez
                                </h3>
                                <p>
                                    Sub-Director Provincial Caja de Jubilaciones y Pensiones
                                </p>    
                                <div>
                                    <a class="btn btn-sm btn-outline-secondary" href='#'>
                                        Curriculum Vitae
                                        <!--<img class="img-fluid w-20" src="<?php //echo DIR_IMGS . '/social-media/linkedin.png'       ?>" />-->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mb-4">

            <!--Director:-->
            <div class='col-6'>
                <div class='card'>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img class='img-fluid' src="https://via.placeholder.com/100"/>
                            </div>
                            <div class="col-9 px-3">
                                <h3 class="h4">
                                    Dra. Florencia Lacava
                                </h3>
                                <p>
                                    Secretaria General
                                </p>    
                                <div>
                                    <a class="btn btn-sm btn-outline-secondary" href='#'>
                                        Curriculum Vitae
                                        <!--<img class="img-fluid w-20" src="<?php //echo DIR_IMGS . '/social-media/linkedin.png'        ?>" />-->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class='col-6'>
                <!--Director:-->
                <div class='card'>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img class='img-fluid' src="https://via.placeholder.com/100"/>
                            </div>
                            <div class="col-9 px-3">
                                <h3 class="h4">
                                    CPN Silvia Galán
                                </h3>
                                <p>
                                    Directora Previsional
                                </p>    
                                <div>
                                    <a class="btn btn-sm btn-outline-secondary" href='#'>
                                        Curriculum Vitae
                                        <!--<img class="img-fluid w-20" src="<?php //echo DIR_IMGS . '/social-media/linkedin.png'       ?>" />-->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mb-4">

            <!--Director:-->
            <div class='col-6'>
                <div class='card'>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img class='img-fluid' src="https://via.placeholder.com/100"/>
                            </div>
                            <div class="col-9 px-3">
                                <h3 class="h4">
                                    CPN Julio Rugna
                                </h3>
                                <p>
                                    Contador General
                                </p>    
                                <div>
                                    <a class="btn btn-sm btn-outline-secondary" href='#'>
                                        Curriculum Vitae
                                        <!--<img class="img-fluid w-20" src="<?php //echo DIR_IMGS . '/social-media/linkedin.png'        ?>" />-->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class='col-6'>
                <!--Director:-->
                <div class='card'>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img class='img-fluid' src="https://via.placeholder.com/100"/>
                            </div>
                            <div class="col-9 px-3">
                                <h3 class="h4">
                                    Dr. Esteban Mántaras
                                </h3>
                                <p>
                                    Director General de Asuntos Jurídicos
                                </p>    
                                <div>
                                    <a class="btn btn-sm btn-outline-secondary" href='#'>
                                        Curriculum Vitae
                                        <!--<img class="img-fluid w-20" src="<?php //echo DIR_IMGS . '/social-media/linkedin.png'       ?>" />-->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">

            <!--Director:-->
            <div class='col-6'>
                <div class='card'>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <img class='img-fluid' src="https://via.placeholder.com/100"/>
                            </div>
                            <div class="col-9 px-3">
                                <h3 class="h4">
                                    Dra. Luciana Sbresso
                                </h3>
                                <p>
                                    Sub Dirección de Auditoría Interna
                                </p>    
                                <div>
                                    <a class="btn btn-sm btn-outline-secondary" href='#'>
                                        Curriculum Vitae
                                        <!--<img class="img-fluid w-20" src="<?php //echo DIR_IMGS . '/social-media/linkedin.png'        ?>" />-->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--            <div class='col-6'>
                            Director:
                            <div class='card'>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <img class='img-fluid' src="https://via.placeholder.com/100"/>
                                        </div>
                                        <div class="col-9 px-3">
                                            <h3 class="h4">
                                                Dr. Esteban Mántaras
                                            </h3>
                                            <p>
                                                Director General de Asuntos Jurídicos
                                            </p>    
                                            <div>
                                                <a class="btn btn-sm btn-outline-secondary" href='#'>
                                                    Curriculum Vitae                                        
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
        </div>


    </section>
</div>


<?php get_footer(); ?>