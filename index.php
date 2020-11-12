<?php
get_header();
?>


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
        <a href="./index.html"><img src="<?php echo DIR_IMGS . '/logo_derecha.png' ?>" alt=""></a>
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

<!--get_permalink( get_page_by_path( 'contact' ) );-->
            <li>
                <a href="<?php echo esc_url( get_page_link( PAGINA_ORG_APORTANTES ) ); ?>">
                    Organismos aportantes
                </a>
            </li>

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
<?php get_template_part("partials/main-nav");  ?>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="">
    <div class="hero__sliders owl-carousel">
        <div class="pruebaMenu set-bg" data-setbg="<?php echo DIR_IMGS . '/hero/hero-3.png'  ?>">
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
        <div class="pruebaMenu set-bg" data-setbg="<?php echo DIR_IMGS . '/hero/hero-4.png'  ?>">
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
        <div class="pruebaMenu set-bg" data-setbg="<?php echo DIR_IMGS . '/hero/hero-2.png'  ?>">
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
                            <img src="<?php echo DIR_IMGS . '/instructor/banners-02.png'  ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__item__pic"> 
                        <a href="http://turnos.santafe.gov.ar/turnos/web/frontend.php" target="_blank">
                            <img src="<?php echo DIR_IMGS . '/instructor/banners-03.png'  ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__item__pic"> <a href="biblio_instructivos.html">
                            <img src="<?php echo DIR_IMGS . '/instructor/banners-04.png'  ?>" alt=""></a></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="instructor__item">
                    <div class="instructor__item__pic"> <a href="novedades.html">
                            <img src="<?php echo DIR_IMGS . '/instructor/banners-05-05.png'  ?>" alt=""></a></div>
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
                    <img src="<?php echo DIR_IMGS . '/boton-07.png'  ?>" alt=""></a>
            </span>
            <a href="biblioteca.html">
                <img src="<?php echo DIR_IMGS . '/boton-08.png'  ?>" alt="">
            </a>                         
        </div>
    </div>
    <div class="col-lg-6">
        <div class="chooseus__pic"></div>
    </div>
</section>
<!-- Chooseus Section End -->

</div>

<?php get_footer(); ?>
