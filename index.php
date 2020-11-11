<?php
get_header();

$imgs_folder_url = get_template_directory_uri() . '/images';
?>

<?php //get_template_part("parts/main-nav");  ?>
<?php //get_template_part("parts/masthead");  ?>
<?php //get_template_part("parts/presentacion"); ?>
<?php //get_template_part("parts/inscripcion-y-envio"); ?>
<?php // get_template_part("parts/sobre-el-congreso"); ?>
<?php //get_template_part("parts/sedes"); ?>




<?php
//  $posts = getPostsPorSlugCat(SLUG_CAT_CONTACTO, 1);
//  $post = isset($posts[0]) ? $posts[0] : null;
$post = null;
?>

<?php if ($post instanceof WP_Post && $post->post_status == 'publish'): ?>
    <section class="py-5" id="contacto">
        <h1 class="text-center mb-4">
    <?php echo $post->post_title; ?>
        </h1>
        <hr class="divider" />

        <div class="container py-5 text-center">
    <?php echo $post->post_content; ?>
        </div>
    </section>
<?php endif; ?>

<?php
// liberar memoria
//unset($posts, $post);
?>

<div id="inicio">

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu ">
    <div class="offcanvas__logo">
        <a href="./index.html"><img src="<?php echo $imgs_folder_url . '/logo_derecha.png' ?>" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__widget">


    </div>
    <nav class="header__menu"> 
        <ul class="mobile-menu">  
            <li class="CloseMobileMenu"><a onclick="CloseMobileMenu()">X</a></li>
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>
                </a></li>
            <li><a href="#">Institucional</a>
                <ul class="dropdown">
                    <li><a href="quienes.html">Quienes somos</a></li>
                    <li><a href="historia.html">Un poco de historia</a></li>

                    <li><a href="politicas.html">Política de calidad</a></li>
                    <li><a href="delegaciones.html">Delegaciones</a></li>

                </ul>
            </li>
            <li><a href="prestaciones.html">Prestaciones</a></li>


            <li><a href="organismos_apor.html">Organismos aportantes</a></li>

            <li><a href="servicios.html">Servicios</a></li>
            <li><a href="contacto.html" >Contacto</a></li>
        </ul>
    </nav>
    <div class="offcanvas__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?php echo $imgs_folder_url . '/logo_izq.png'  ?>" alt=""></a>
                    </div>
                </div>  
                <div class="col-lg-8 col-md-8">
                    <nav class="header__menu" style="padding: 47px 0px 20px 0;">
                        <ul> 
                            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>
                                </a></li>
                            <li><a href="#">Institucional</a>
                                <ul class="dropdown">

                                    <li><a href="quienes.html">Quienes somos</a></li>
                                    <li><a href="historia.html">Un poco de historia</a></li>
                                    <li><a href="politicas.html">Política de calidad</a></li>
                                    <li><a href="delegaciones.html">Delegaciones</a></li>
                                </ul>
                            </li>
                            <li><a href="prestaciones.html">Prestaciones</a></li>
                            <li><a href="organismos_apor.html">Organismos aportantes</a></li>
                            <li><a href="servicios.html">Servicios</a></li>

                            <li><a href="contacto.html" >Contacto</a></li>
                        </ul>
                    </nav>
                </div> 
                <div class="col-lg-2 col-md-2">
                    <div class="header__top__widget">
                        <img src="<?php echo $imgs_folder_url . '/logo_derecha.png'  ?>" alt=""/> </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </div> 
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="">
    <div class="hero__sliders owl-carousel">
        <div class="pruebaMenu set-bg" data-setbg="<?php echo $imgs_folder_url . '/hero/hero-3.png'  ?>">
            <div class="container">  
                <div class="row">
                    <div class="col-lg-9 centered">
                        <div class="texto-img">

                            <h2>La caja en números</h2><a href="lacajaennumeros.html">
                                <strong><h3>- VER -</h3></strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pruebaMenu set-bg" data-setbg="<?php echo $imgs_folder_url . '/hero/hero-4.png'  ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 centered">
                        <div class="texto-img">

                            <h2>Medidas prevención Covid-19</h2><a href="https://www.santafe.gob.ar/ms/covid19/"><strong><h3>- VER -</h3></strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pruebaMenu set-bg" data-setbg="<?php echo $imgs_folder_url . '/hero/hero-2.png'  ?>">
            <div class="container">  
                <div class="row">
                    <div class="col-lg-9 centered">
                        <div class="texto-img">		
                            <h2> ¿Cómo tramito mis beneficios?</h2>
                            <a href="prestaciones.html"><strong><h3>- VER -</h3></strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section Begin -->
<section class="instructor spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__item__pic"> 
                        <a href="http://www.santafe.gov.ar/index.php/web/content/view/full/128047" target="_blank">
                            <img src="<?php echo $imgs_folder_url . '/instructor/banners-02.png'  ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__item__pic"> 
                        <a href="http://turnos.santafe.gov.ar/turnos/web/frontend.php" target="_blank">
                            <img src="<?php echo $imgs_folder_url . '/instructor/banners-03.png'  ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__item__pic"> <a href="biblio_instructivos.html">
                            <img src="<?php echo $imgs_folder_url . '/instructor/banners-04.png'  ?>" alt=""></a></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__item__pic"> <a href="novedades.html">
                            <img src="<?php echo $imgs_folder_url . '/instructor/banners-05-05.png'  ?>" alt=""></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Chooseus Section Begin -->
<section class="chooseus spad">
    <div class="container">
        <div class="row">
            <span class="chooseus__pic"><a href="descarga_recibo.html">
                    <img src="<?php echo $imgs_folder_url . '/boton-07.png'  ?>" alt=""></a>
            </span>
            <a href="biblioteca.html">
                <img src="<?php echo $imgs_folder_url . '/boton-08.png'  ?>" alt="">
            </a>                         
        </div>
    </div>
    <div class="col-lg-6">
        <div class="chooseus__pic"></div>
    </div>
</section>
<!-- Chooseus Section End -->

<!-- Footer Section Begin -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer__about"> <a href="https://www.santafe.gob.ar/" target="_blank">
                        <img src="<?php echo $imgs_folder_url . '/footer-logo-09.png'  ?>" alt=""></a>
                    <ul>
                        <li>Whatsapp: 342 5 128 800</li>
                        <li>Línea telefónica gratuita: 0800 - 444 - 3734</li>
                        <li>Correo Electrónico: <a href="mailto:contactocaja@santafe.gov.ar" target="_blank">contactocaja@santafe.gov.ar</a></li>
                    </ul> 
                </div>
            </div>
            <div class="col-md-6" style="text-align: right;">
                <img src="<?php echo $imgs_folder_url . '/footer-logo-10.png'  ?>" width="207" height="81" usemap="#Map">
                <map name="Map">
                    <area shape="rect" coords="4,47,34,74" href="https://www.facebook.com/cajasantafe" target="_blank">
                    <area shape="rect" coords="54,48,93,73" href="https://twitter.com/caja_sf " target="_blank">
                    <area shape="rect" coords="112,42,149,73" href="https://instagram.com/cajajubisantafe?igshid=1xdlczgob9pq5" target="_blank">
                    <area shape="rect" coords="164,44,201,77" href="https://www.youtube.com/user/GobSantaFe" target="_blank">
                </map>
            </div>
        </div>
    </div>
</section>

</div>

<?php get_footer(); ?>
