<?php
$pagina_quienes_somos = getLinkPagina(PAGINA_QUIENES_SOMOS); 
$pagina_historia = getLinkPagina(PAGINA_HISTORIA);
$pagina_politica_calidad = getLinkPagina(PAGINA_POLITICA_CALIDAD);
$pagina_delegaciones = getLinkPagina(PAGINA_DELEGACIONES);
$pagina_prestaciones = getLinkPagina(PAGINA_PRESTACIONES);
$pagina_org_aportantes = getLinkPagina(PAGINA_ORG_APORTANTES);
$pagina_certificacion_negativa = getLinkPagina(PAGINA_CERTIFICACION_NEGATIVA);
$pagina_ganancias = getLinkPagina(PAGINA_GANANCIAS);
$pagina_biblioteca = getLinkPagina(PAGINA_BIBLIOTECA);
$pagina_sitios_de_interes  = getLinkPagina(PAGINA_SITIOS_DE_INTERES);

?>

<nav class="navbar navbar-expand-xl fixed-top navbar-light bg-light" id="navbar">    
    <span class="navbar-brand">        
        <a class="pl-2 pr-3 d-none d-sm-inline-block" href="https://www.santafe.gob.ar" target="_blank">        
            <img class="img-fluid w-100" src="https://www.santafe.gob.ar/assets/standard/images/gob-santafe.png" alt="Gobierno de Santa Fe">
        </a>
        <a class="" href="<?php //echo home_url();  ?>">        
            <span class="d-inline-block align-middle h4 font-weight-bold">CAJA DE JUBILACIONES <br/>Y PENSIONES</span>
        </a>
    </span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item border-right border-gray">
                <a class="nav-link btn btn-light rounded-0 px-2 px-lg-3" href="<?php echo home_url(); ?>">Inicio <span class="sr-only">(current)</span></a>
            </li> 


            <li class="nav-item dropdown border-right border-gray">
                <a class="nav-link btn btn-light rounded-0 dropdown-toggle px-2 px-lg-3" href="#" id="dropdownInstitucional" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Institucional
                </a>
                <div class="dropdown-menu pull-left" aria-labelledby="dropdownInstitucional">
                    <?php if ($pagina_quienes_somos): ?> 
                        <a class="dropdown-item" href="<?php echo $pagina_quienes_somos; ?>">
                            ¿Quiénes somos?
                        </a>
                    <?php endif; ?>
                    <?php if ($pagina_historia): ?>        
                        <a class="dropdown-item" href="<?php echo $pagina_historia; ?>">
                            Un poco de historia
                        </a>
                    <?php endif; ?>
                    <?php if ($pagina_politica_calidad): ?>         
                        <a class="dropdown-item" href="<?php echo $pagina_politica_calidad; ?>">
                            Política de calidad
                        </a>
                    <?php endif; ?>
                    <?php if ($pagina_delegaciones): ?>         
                        <a class="dropdown-item" href="<?php echo $pagina_delegaciones; ?>">
                            Delegaciones
                        </a>
                    <?php endif; ?>
                </div>
            </li>
            <?php if ($pagina_prestaciones): ?>         
            <li class="nav-item border-right border-gray">
                <a class="nav-link btn btn-light rounded-0 nav-link-prestaciones" href="<?php echo $pagina_prestaciones; ?>">
                    Prestaciones
                </a>
            </li>
            <?php endif; ?>
            <?php if ($pagina_org_aportantes): ?>     
            <li class="nav-item border-right border-gray">
                    <a class="nav-link nav-link-org-aportantes btn btn-light rounded-0 px-2 px-lg-3" 
                       href="<?php echo $pagina_org_aportantes; ?>">
                        Organismos aportantes
                    </a>
            </li>
            <?php endif; ?>
            <li class="nav-item dropdown border-right border-gray">
                <a class="nav-link dropdown-toggle btn btn-light rounded-0 px-2 px-lg-3" href="#" id="dropdownServicios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Servicios
                </a>
                <div class="dropdown-menu pull-left" aria-labelledby="dropdownServicios">
                    <a class="dropdown-item" href="https://www.santafe.gov.ar/expedientes-web/" target="_blank">
                        Expediente
                    </a>
                    <a class="dropdown-item" href="https://www.santafe.gov.ar/consultaaportescj/" target="_blank">
                        Historia Laboral
                    </a>
                    <?php if ($pagina_certificacion_negativa): ?>
                        <a class="dropdown-item" href="<?php echo $pagina_certificacion_negativa; ?>" target="_blank">
                            Certificación negativa
                        </a>
                    <?php endif; ?>
                    <?php if ($pagina_ganancias): ?>
                        <a class="dropdown-item" href="<?php echo $pagina_ganancias; ?>">
                            Imp. a las ganancias
                        </a>
                    <?php endif; ?>
                    <a class="dropdown-item" href="https://www.anses.gob.ar/informacion/mi-anses" target="_blank">
                        Mi Anses
                    </a>
                    <?php if ($pagina_biblioteca): ?>
                        <a class="dropdown-item" href="<?php echo $pagina_biblioteca; ?>">
                            Instructivos y Formularios
                        </a>
                    <?php endif; ?>
                    <?php if ($pagina_sitios_de_interes): ?>
                        <a class="dropdown-item" href="<?php echo $pagina_sitios_de_interes; ?>">
                            Sitios de interés
                        </a>
                    <?php endif; ?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-contacto btn btn-light rounded-0 px-2 px-lg-3" href="<?php echo getLinkPagina(PAGINA_CONTACTO); ?>">
                    Contacto
                </a>
            </li>        
        </ul>
    </div>

    <?php
    $pagina = get_page_by_path(PAGINA_POLITICA_CALIDAD);
    $logo = get_field('logo', $pagina);
    $certificado = get_field('certificado', $pagina);
    ?>

    <span class="navbar-brand w-5 mr-0">        
        <a class="pl-2 d-none d-sm-inline-block text-right" href="<?php echo isset($certificado['url']) ? $certificado['url'] : '#'; ?>" target="_blank"> 
            <img class="img-fluid" src="<?php echo $logo['url']; ?>" alt="ISO 9001'; ?>" alt="Gestion"/>
        </a>

    </span>
</nav>



