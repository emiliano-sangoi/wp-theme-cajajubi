<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?php echo DIR_IMGS . '/logo_izq.png'  ?>" alt=""></a>
                    </div>
                </div>  
                <div class="col-lg-8 col-md-8">
                    <nav class="header__menu" style="padding: 47px 0px 20px 0;">
                        <ul> 
                            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>
                                </a></li>
                            <li><a href="#">Institucional</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo esc_url( get_page_link( PAGINA_QUIENES_SOMOS ) ); ?>">Quiénes somos</a></li>
                                    <li><a href="historia.html">Un poco de historia</a></li>
                                    <li><a href="politicas.html">Política de calidad</a></li>
                                    <li><a href="delegaciones.html">Delegaciones</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo esc_url( get_page_link( PAGINA_PRESTACIONES ) ); ?>">Prestaciones</a></li>
                            <li><a href="<?php echo esc_url( get_page_link( PAGINA_ORG_APORTANTES ) ); ?>">Organismos aportantes</a></li>
                            <li><a href="<?php echo esc_url( get_page_link( PAGINA_SERVICIOS ) ); ?>">Servicios</a></li>
                            <li><a href="<?php echo esc_url( get_page_link( PAGINA_CONTACTO ) ); ?>">Contacto</a></li>
                        </ul>
                    </nav>
                </div> 
                <div class="col-lg-2 col-md-2">
                    <div class="header__top__widget">
                        <img src="<?php echo DIR_IMGS . '/logo_derecha.png'  ?>" alt=""/> </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </div> 
</header>