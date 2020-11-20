<?php
/* Template Name: La caja en numeros */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_LA_CAJA_EN_NUMEROS);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect( home_url(), 301 );
    exit;
}

get_header();

$laCajaEnNumeros = getArchivosLaCajaEnNumeros();
?>

<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->

<div class="container-lg navbar-separator p-5 altura-minima" id="la-caja-en-numeros">

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

    <div>
        <div class="card-header" id="reportesAnteriores">
            <h4 class="mb-0">
                Reportes anteriores
            </h4>
        </div>

        <div>
            <div class="card-body">
                <?php
                $i = 0;
                foreach ($laCajaEnNumeros['meses'] as $finfo):
                    ?>
                    <p>
                        <a href="<?php echo $laCajaEnNumeros['url'] . $finfo->fname; ?>" target="_blank">
                            <?php
                            echo $finfo->titulo;
                            $i++;
                            ?>
                        </a>
                    </p>
                <?php endforeach; ?>
                <?php if ($i === 0): ?>
                    <p class="text-muted">No hay ning&uacute;n reporte cargado.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>