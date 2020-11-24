<?php
/* Template Name: Delegaciones */
//En caso de no encontrar la pagina -> redireccionar a la home
// La ubicacion de este codigo debe ser al principio del archivo.
$pagina = get_page_by_path(PAGINA_DELEGACIONES);
if (!$pagina instanceof WP_Post || $pagina->post_status != 'publish') {
    wp_redirect(home_url(), 301);
    exit;
}
get_header();
?>

<div class="container navbar-separator px-3 px-lg-5 pt-4 pb-5 altura-minima" id="delegaciones">
    
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
    <h2 class="h3 font-weight-bold mt-5">Delegación Rosario</h2>
    <div>
        <p>Esta delegación tuvo su primer domicilio en calle Pellegrini 1595. En el año 2008 se mudaron a la sede actual de calle Brown 2262.</p>
        <p>Atiende diversos trámites: asesoramiento e inicio de trámites de jubilaciones, pensiones y reconocimientos de servicios de todos los sectores de la Administración Central, docentes y policías. Asimismo, se recepcionan todos los trámites derivados de dichos beneficios, adecuando además los procedimientos a las normas de calidad con las que cuenta la Mesa de Inicio de la sede Santa Fe.</p>
        <p>En esta Delegación se elaboran dictámenes, realiza computo de servicios de los tramites de reconocimientos de servicios y algunas jubilaciones ordinarias, notificaciones, protocoliza Actos Administrativos, contando además con su propio Archivo para todos aquellos expedientes o actuaciones que fueron iniciados en Rosario. </p>
    </div>
    
    <h2 class="h3 font-weight-bold mt-5">
        Delegación Venado Tuerto
    </h2>
    <div>
        <p>Abrió sus puertas en Marzo de 1987. En Mayo de 2008, se traslada al actual domicilio de Mitre 766, cerca de donde operan las oficinas de Anses y la Caja Municipal, para que los trámites sean ágiles y fáciles para los que viven en el sur de la provincia.</p>
        <p>Desde sus comienzos, se han realizado todos los trámites de inicio de beneficios, tanto de jubilación como de pensión: reajuste de haberes, reclamos, asignaciones familiares, entre otros. Con el transcurso del tiempo se fueron incorporando los trámites de Cobros Indebidos, se toman Declaraciones Juradas a los solicitantes o testigos de pensiones y toma de vista y traslado de expedientes.</p>
    </div>
    
    <h2 class="h3 font-weight-bold mt-5">
        Delegación Capital Federal
    </h2>
    <div>
        <p>
            Si bien se inició en Marzo de 1993, se creó formalmente el 1° de Noviembre de 1995. En un principio, desde su creación hasta el año 2004, funcionaba como oficina de recepción de documentación, la cual se remitía a Santa Fe para su caratulación y tramitación, brindándose además asesoramiento en general sobre trámites provisionales relativos a la Caja.
        </p>
        <p>
            A partir del año 2004, se da de alta en el Sistema de Información de Expedientes a la Mesa de Entrada de la Delegación, comenzando de esta forma con el registro de los trámites, coincidiendo además con el traslado e incorporación de personal. Posteriormente se asignan mayor cantidad de tareas hasta la actualidad que en la misma se desarrollan: atención y asesoramiento general de todo tipo de trámites previsionales de competencia de la Caja, elaboración de dictámenes de trámites como pago de haberes, cobros indebidos, reinclusión de beneficios, etc., confección y certificación de Poderes para Tramitar y Percibir, confección de oficios para otros organismos y diligenciamiento de actuaciones a la UDAI ANSES – Convenios Internacionales, análisis y calculo de reajustes de haberes previsionales, elaboración de proyectos de resoluciones de Reajustes, Pago de Haberes, Recursos de Revocatoria, entre otros.</p>
        <p>
            Actualmente tienen su domicilio en la Casa de Santa Fe ubicada en calle 25 de Mayo Nº 178 de Capital Federal.
        </p>
        <p>
            Desde sus comienzos, se han realizado todos los trámites de inicio de beneficios, tanto de jubilación como de pensión: reajuste de haberes, reclamos, asignaciones familiares, entre otros. Con el transcurso del tiempo se fueron incorporando los trámites de Cobros Indebidos, se toman Declaraciones Juradas a los solicitantes o testigos de pensiones y toma de vista y traslado de expedientes.
        </p>
    </div>
    
    
    <h2 class="h3 font-weight-bold mt-5">
        Delegación San Justo
    </h2>
    <div>    
        <p>Fue creada a principios del año 1998 como Casa de la Seguridad Social, donde además funcionaban IAPOS y Ley 5110. Desde ese momento contaba con un completo servicio de información y guía de las consultas por trámites jubilatorios y pensiones provinciales.</p>
        <p>En dicha Delegación se inician todos los trámites para la atención integral del ciudadano, evitando así su viaje a Santa Fe.</p>
        <p>En la actualidad, dicha delegación se encuentra en la calle Nicolás Figueredo 2637, donde funciona conjuntamente con la Ley 5110 y la Defensoría del Pueblo.</p>
        <p>Se realizan todos los trámites de inicio de beneficios, tanto de jubilación como de pensión: reajuste de haberes, reclamos, asignaciones familiares, entre otros. Con el transcurso del tiempo se fueron incorporando los trámites de Cobros Indebidos, se toman Declaraciones Juradas a los solicitantes o testigos de pensiones y toma de vista y traslado de expedientes.</p>
    </div>
    
     <h2 class="h3 font-weight-bold mt-5">
        Delegación Reconquista
    </h2>
    <div>
        <p>
            Se inauguró el 9 de Abril de 2013, en la calle Hipólito Irigoyen 1415. En el año 2020, mudó sus oficinas y actualmente se encuentra en calle Rivadavia 666.
        </p>
        <p>
            Se realizan todos los trámites de inicio de beneficios, tanto de jubilación como de pensión: reajuste de haberes, reclamos, asignaciones familiares, entre otros. Con el transcurso del tiempo se fueron incorporando los trámites de Cobros Indebidos, se toman Declaraciones Juradas a los solicitantes o testigos de pensiones y toma de vista y traslado de expedientes.
        </p>        
    </div>
    
    
     <h2 class="h3 font-weight-bold mt-5">
        Delegación Rafaela
    </h2>
    <div>
        <p>
            Ubicada en Av. Santa Fe 2771, abre sus puertas el 30 de Julio de 2014. En un principio, esta delegación realizaba pocos trámites, pero con el paso del tiempo, la comunidad fue conociendo de su existencia, y así comenzó a crecer la demanda de servicios de todas aquellas personas, que sin necesidad de trasladarse a la ciudad de Santa Fe, puedan iniciar todo tipo de trámites, a saber: jubilaciones ordinarias, régimen opcional docente, jubilación por invalidez , retiros, reconocimiento de servicios, pensiones, pagos de haberes, subsidio por sepelio, reajustes de haberes, pronto despacho, como así también vistas y traslados, oficios de embargo, solicitud de asignaciones familiares e inicios de notas ante cualquier pedido de información o reclamo.
        </p>
        <p>
            En el año 2020, muda sus oficinas a calle Bv. Lehmann 583, donde funciona en la actualidad.
        </p>        
    </div>
    
    
</div>

<?php get_footer(); ?>