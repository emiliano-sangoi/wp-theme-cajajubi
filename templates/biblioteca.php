<?php
/* Template Name: Biblioteca digital */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_BIBLIOTECA);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}
get_header();

$biblioteca = getArchivosBiblioteca();
//print_r($biblioteca);exit;
?>

<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->

<div class="navbar-separator pb-5 altura-minima" id="biblioteca">
    <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo DIR_IMGS . '/paginas/prestaciones.jpg'; ?>"></div>


    <div class="container-lg px-5 pt-4">


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
            <?php 
            if (!empty($pagina->post_content)):
                echo $pagina->post_content;
            endif;
        ?> 
        </div>

        <div>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingNormativas">
                        <h4 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Normativas
                            </button>
                        </h4>
                    </div>

                    <div id="collapseOne" class="collapse" aria-labelledby="headingNormativas" data-parent="#accordion">
                        <div class="card-body">
                            <?php
                            $i = 0;
                            foreach ($biblioteca['norm'] as $finfo):
                                ?>
                                <p>
                                    <a href="<?php echo $biblioteca['url'] . $finfo->fname; ?>" target="_blank">
                                        <?php
                                        echo $finfo->titulo;
                                        $i++;
                                        ?>
                                    </a>
                                </p>
                            <?php endforeach; ?>
                            <?php if ($i === 0): ?>
                                <p class="text-muted">No se cargado ninguna normativa o decreto.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFormularios">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Formularios
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingFormularios" data-parent="#accordion">
                        <div class="card-body">
                            <?php
                            $i = 0;
                            foreach ($biblioteca['form'] as $finfo):
                                ?>
                                <p>
                                    <a href="<?php echo $biblioteca['url'] . $finfo->fname; ?>" target="_blank">
                                        <?php
                                        echo $finfo->titulo;
                                        $i++;
                                        ?>
                                    </a>
                                </p>
                            <?php endforeach; ?>
                            <?php if ($i === 0): ?>
                                <p class="text-muted">No se cargado ning&uacute;un formulario.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingInstructivos">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Instructivos
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingInstructivos" data-parent="#accordion">
                        <div class="card-body">                            
                            <?php
                            $i = 0;
                            foreach ($biblioteca['inst'] as $finfo):
                                ?>
                                <p>
                                    <a href="<?php echo $biblioteca['url'] . $finfo->fname; ?>" target="_blank">
                                        <?php
                                        echo $finfo->titulo;
                                        $i++;
                                        ?>
                                    </a>
                                </p>
                            <?php endforeach; ?>
                            <?php if ($i === 0): ?>
                                <p class="text-muted">No se cargado ning&uacute;un intructivo.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<?php 
unset($biblioteca);

get_footer();
?>