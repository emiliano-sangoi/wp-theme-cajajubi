<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light" id="navbar">    
    <a class="navbar-brand" href="<?php echo home_url(); ?>">        
        <img class="img-fluid pl-2 pr-3 d-none d-sm-inline-block"
             src="https://www.santafe.gob.ar/assets/standard/images/gob-santafe.png" alt="Gobierno de Santa Fe">
        <span class="d-inline-block align-middle">CAJA DE JUBILACIONES<br/> Y PENSIONES</span>
    </a>
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
                    <a class="nav-link" href="<?php echo getLinkPagina(PAGINA_QUIENES_SOMOS); ?>">
                        ¿Quiénes somos?
                    </a>
                    <a class="nav-link" href="<?php echo getLinkPagina(PAGINA_HISTORIA); ?>">
                        Un poco de historia
                    </a>
                    <a class="nav-link" href="<?php echo getLinkPagina(PAGINA_POLITICA_CALIDAD); ?>">
                        Política de calidad
                    </a>
                    <a class="nav-link" href="<?php echo getLinkPagina(PAGINA_DELEGACIONES); ?>">
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
            <li class="nav-item">
                <a class="nav-link nav-link-servicios" href="<?php echo getLinkPagina(PAGINA_SERVICIOS); ?>">
                    Servicios
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-link-contacto"" href="<?php echo getLinkPagina(PAGINA_CONTACTO); ?>">
                    Contacto
                </a>
            </li>        
        </ul>
    </div>
</nav>



