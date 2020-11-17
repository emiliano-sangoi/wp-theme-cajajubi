<?php
$src_img1 = DIR_IMGS . '/carousel/slide1.png';
//$src_img1 = DIR_IMGS . '/carousel/img-caja-en-nros2.png';
//$src_img2 = DIR_IMGS . '/carousel/img-prev-covid.png';
$src_img2 = DIR_IMGS . '/carousel/slide2.png';
$src_img3 = DIR_IMGS . '/carousel/slide3.png';
?>
<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo $src_img1; ?>"></div>

<div id="carouselHome" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
        <li data-target="#carouselHome" data-slide-to="1"></li>
        <li data-target="#carouselHome" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo $src_img1; ?>" alt="Primer slide">
            <div class="carousel-caption d-none d-md-block centrate-y">
                <h2 class="font-weight-bold">
                    La Caja en números
                </h2>
                <div class="text-center pt-4 pb-5">
                    <a class="btn btn-primary" href="lacajaennumeros.html">
                        Acceder
                    </a>
                </div>
            </div>            
        </div>        
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $src_img2; ?>" alt="Segundo slide">
            <div class="carousel-caption d-none d-md-block centrate-y">
                <h2 class="font-weight-bold">
                    Medidas prevención Covid-19
                </h2>
                <div class="text-center pt-4 pb-5">
                    <a class="btn btn-primary" href="https://www.santafe.gob.ar/ms/covid19/">
                        Acceder
                    </a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $src_img3; ?>" alt="Tercer slide">
            <div class="carousel-caption d-none d-md-block centrate-y">
                <h2 class="font-weight-bold">
                    ¿Cómo tramito mis beneficios?
                </h2>
                <div class="text-center pt-4 pb-5">
                    <a class="btn btn-primary" href="<?php echo esc_url(get_page_link(PAGINA_PRESTACIONES)); ?>">
                        Acceder
                    </a>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">
            Anterior
        </span>
    </a>
    <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">
            Siguiente
        </span>
    </a>
</div>