<?php
/* Template Name: Instructivos */

//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_BIBLIOTECA_INSTRUCTIVOS);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect( home_url(), 301 );
    exit;
}

get_header();

?>

<!-- Page Preloder -->
<!--<div id="preloder">
    <div class="loader"></div>
</div>-->

<div class="container-lg navbar-separator px-5 pt-4 pb-5 altura-minima" id="instructivos">

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
            echo nl2br($pagina->post_content);
            ?>
        <?php endif; ?>
    </div>
    <p>
        <a href="biblio_instructivos/TTC002 - Cómputo Privilegiado - Diferenciado - Rev.7 - SEP - 2018.pdf" target="_blank">- TTC002 - Cómputo Privilegiado - Diferenciado - Rev.7 - SEP - 2018</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC003 - Jubilación Ordinaria -Régimen Opcional Docente- Edad Avanzada - Rev.13 - AGO - 2020.pdf" target="_blank">- TTC003 - Jubilación Ordinaria -Régimen Opcional Docente- Edad Avanzada - Rev.13 - AGO - 2020</a>
    </p>		
    <p>
        <a href="biblio_instructivos/TTC005 - Jubilación por Invalidez - Rev.12 - AGO - 2020.pdf" target="_blank">- TTC005 - Jubilación por Invalidez - Rev.12 - AGO - 2020</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC007 - Pensión Automática, Pago de Haberes y Subsidio por Sepelio - Rev.10 - Ago 2019.pdf" target="_blank">- TTC007 - Pensión Automática, Pago de Haberes y Subsidio por Sepelio - Rev.10 - Ago 2019</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC008 - Pensión por Fallecimiento de ACTIVO-JUBILADO-RETIRADO - Rev.15 - AGO - 2020.pdf" target="_blank">- TTC008 - Pensión por Fallecimiento de ACTIVO-JUBILADO-RETIRADO - Rev.15 - AGO - 2020</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC010 - Reconocimiento de Servicios - Rev.6 - SEP - 2018.pdf" target="_blank">- TTC010 - Reconocimiento de Servicios - Rev.6 - SEP - 2018</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC011 - Reconocimiento de Servicios Región Centro - Rev.6 - SEP - 2018.pdf" target="_blank">- TTC011 - Reconocimiento de Servicios Región Centro - Rev.6 - SEP - 2018</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC012 - Retiro Obligatorio - Voluntario - por Invalidez- Rev.12 - AGO - 2020.pdf" target="_blank">- TTC012 - Retiro Obligatorio - Voluntario - por Invalidez- Rev.12 - AGO - 2020</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC015 - Asignaciones Familiares - Rev.9 - Ago - 2018.pdf" target="_blank">- TTC015 - Asignaciones Familiares - Rev.9 - Ago - 2018</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC016 - Beneficios Ley 9207- Rev.11 - AGO - 2020.pdf" target="_blank">- TTC016 - Beneficios Ley 9207- Rev.11 - AGO - 2020</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC017 - Pago de Haberes - Rev.8 - Jul 2019.pdf" target="_blank">- TTC017 - Pago de Haberes - Rev.8 - Jul 2019</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC018 - Subsidio por Sepelio - Rev.9 - Ago 2019.pdf" target="_blank">- TTC018 - Subsidio por Sepelio - Rev.9 - Ago 2019</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC019 - Probatoria de Servicios. Resolución 218-08 - Rev.6 - OCT - 2016.pdf" target="_blank">- TTC019 - Probatoria de Servicios. Resolución 218-08 - Rev.6 - OCT - 2016</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC020 - Municipios y Comunas. Como completar el FD03 - Rev.7 - OCT 2016.pdf" target="_blank">- TTC020 - Municipios y Comunas. Como completar el FD03 - Rev.7 - OCT 2016</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC021 - Lugares de Concurrencia - Rev.6 - OCT - 2016.pdf" target="_blank">- TTC021 - Lugares de Concurrencia - Rev.6 - OCT - 2016</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC022 - Poderes para Tramitar - Rev.7 - SEP - 2018.pdf" target="_blank">- TTC022 - Poderes para Tramitar - Rev.7 - SEP - 2018</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC023 - Poderes para Percibir - Rev.5 - SEP - 2018.pdf" target="_blank">- TTC023 - Poderes para Percibir - Rev.5 - SEP - 2018</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC024 - Alta de Organismos Aportantes - Rev.5 - SEP - 2018.pdf" target="_blank">- TTC024 - Alta de Organismos Aportantes - Rev.5 - SEP - 2018</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC025 - Designación de Tutores y Curadores - Rev.2 - SEP - 2018.pdf" target="_blank">- TTC025 - Designación de Tutores y Curadores - Rev.2 - SEP - 2018</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC026 - Autorización para percibir haberes en el exterior - Rev.3 - Sep - 2018.pdf" target="_blank">- TTC026 - Autorización para percibir haberes en el exterior - Rev.3 - Sep - 2018</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC027 - Pensión - Cónyuges con diferencia de domicilio - Rev.0 - Ago 2019.pdf" target="_blank">- TTC027 - Pensión - Cónyuges con diferencia de domicilio - Rev.0 - Ago 2019</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC028 - Pensión - Matrimonio In Extremis - Rev.0 - Ago 2019.pdf" target="_blank">- TTC028 - Pensión - Matrimonio In Extremis - Rev.0 - Ago 2019</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC029 - Pensión - Separados de Hecho - Rev.0 - Ago 2019.pdf" target="_blank">- TTC029 - Pensión - Separados de Hecho - Rev.0 - Ago 2019</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC030 - Pensión - Ex Cónyuges Divorciados con Derecho a Pensión - Rev.0 - Ago 2019.pdf" target="_blank">- TTC030 - Pensión - Ex Cónyuges Divorciados con Derecho a Pensión - Rev.0 - Ago 2019</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC031 - Pensión - Convivientes - Rev.0 - Ago 2019.pdf" target="_blank">- TTC031 - Pensión - Convivientes - Rev.0 - Ago 2019</a>
    </p>
    <p>
        <a href="biblio_instructivos/TTC032 - Pensión - Hijas-os - Rev.0 - Ago 2019.pdf" target="_blank">- TTC032 - Pensión - Hijas-os - Rev.0 - Ago 2019</a>
    </p>				
    <p>
        <a href="biblio_instructivos/TTC033 - Solicitantes con Derecho a percibir Jubilación o Retiro - SUBROGACIÓN - Rev.0 - Ago 2019.pdf" target="_blank">- TTC033 - Solicitantes con Derecho a percibir Jubilación o Retiro - SUBROGACIÓN - Rev.0 - Ago 2019</a>
    </p>				
    <p>
        <a href="biblio_instructivos/TTC034 - Certificación de firmas a domicilio - Rev.0 - NOV- 2019.pdf" target="_blank">- TTC034 - Certificación de firmas a domicilio - Rev.0 - NOV- 2019</a>
    </p>				
</div>
    
<?php get_footer(); ?>