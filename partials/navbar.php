<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" id="navbar">    
    <span class="navbar-brand">        
        <a class="pl-2 pr-3 d-none d-sm-inline-block" href="https://www.santafe.gob.ar" target="_blank">        
            <img class="img-fluid w-100" src="https://www.santafe.gob.ar/assets/standard/images/gob-santafe.png" alt="Gobierno de Santa Fe">
        </a>
        <a class="" href="<?php echo home_url(); ?>">        
            <span class="d-inline-block align-middle">CAJA DE JUBILACIONES<br/> Y PENSIONES</span>
        </a>
    </span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url(); ?>">Inicio <span class="sr-only">(current)</span></a>
            </li> 
            
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownInstitucional" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Institucional
                </a>
                <div class="dropdown-menu pull-left" aria-labelledby="dropdownInstitucional">
                    <a class="dropdown-item" href="<?php echo getLinkPagina(PAGINA_QUIENES_SOMOS); ?>">
                        ¿Quiénes somos?
                    </a>
                    <a class="dropdown-item" href="<?php echo getLinkPagina(PAGINA_HISTORIA); ?>">
                        Un poco de historia
                    </a>
                    <a class="dropdown-item" href="<?php echo getLinkPagina(PAGINA_POLITICA_CALIDAD); ?>">
                        Política de calidad
                    </a>
                    <a class="dropdown-item" href="<?php echo getLinkPagina(PAGINA_DELEGACIONES); ?>">
                        Delegaciones
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-prestaciones"" href="<?php echo getLinkPagina(PAGINA_PRESTACIONES); ?>">
                    Prestaciones
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-org-aportantes" 
                   href="<?php echo getLinkPagina(PAGINA_ORG_APORTANTES); ?>">
                    Organismos aportantes
                </a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownServicios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Servicios
                </a>
                <div class="dropdown-menu pull-left" aria-labelledby="dropdownServicios">
                    <a class="dropdown-item" href="https://www.santafe.gov.ar/expedientes-web/" target="_blank">
                        Expediente
                    </a>
                    <a class="dropdown-item" href="http://www.santa-fe.gov.ar/jubypen/aportes/aportes.php" target="_blank">
                        Historia Laboral
                    </a>
                    <a class="dropdown-item" href="<?php echo getLinkPagina(PAGINA_CERTIFICACION_NEGATIVA); ?>" target="_blank">
                        Certificación negativa
                    </a>
                    <a class="dropdown-item" href="https://www.santafe.gov.ar/index.php/web/content/view/full/235061" target="_blank">
                        Imp. a las ganancias
                    </a>
                    <a class="dropdown-item" href="https://www.anses.gob.ar/informacion/mi-anses" target="_blank">
                         Mi Anses
                    </a>
                    <a class="dropdown-item" href="<?php echo getLinkPagina(PAGINA_BIBLIOTECA); ?>" target="_blank">
                        Biblioteca digital
                    </a>
                    <a class="dropdown-item" href="<?php echo getLinkPagina(PAGINA_SITIOS_DE_INTERES); ?>" target="_blank">
                        Sitios de interés
                    </a>
                    
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-contacto"" href="<?php echo getLinkPagina(PAGINA_CONTACTO); ?>">
                    Contacto
                </a>
            </li>        
        </ul>
    </div>
</nav>



