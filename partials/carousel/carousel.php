<!-- Fuente: https://bootsnipp.com/snippets/1d3X9 -->
<!--Container-->
<?php
$novedades_destacadas = getPostsPorCateg(CATEGORIA_NOVEDADES_DESTACADAS);
$novedades_secundarias = getPostsPorCateg(CATEGORIA_NOVEDADES_SECUNDARIAS);
// var_dump($novedades_destacadas);exit;
?>

<!--SECTION START-->
<section class="row" id="slider-novedades">
    <!--Start slider news-->
    <div class="col-12 col-md-8 pt-2">
        <div id="featured" class="carousel slide carousel h-100" data-ride="carousel">
            <!--dots navigate-->
            <ol class="carousel-indicators top-indicator">
                <!--                <li data-target="#featured" data-slide-to="0" class="active"></li>
                                <li data-target="#featured" data-slide-to="1"></li>
                                <li data-target="#featured" data-slide-to="2"></li>
                                <li data-target="#featured" data-slide-to="3"></li>-->
                <?php
                $i = 0;
                foreach ($novedades_destacadas as $post_nov) {
                    if ($post_nov->post_status !== 'publish') {
                        continue;
                    }
                    ?>
                    <li data-target="#featured" data-slide-to="<?php echo $i++; ?>" class="<?php $i === 0 ? 'active' : ''; ?>" ></li>
                    <?php
                    //unset($css);
                }
                ?>
            </ol>

            <!--carousel inner-->
            <div class="carousel-inner h-100">

                <?php
                $i = 0;
                //$novedades_destacadas = array_reverse($novedades_destacadas);
                foreach ($novedades_destacadas as $post_nov) {
                    if ($post_nov->post_status !== 'publish') {
                        continue;
                    }
                    $css = $i === 0 ? 'active' : '';
                    $post = $post_nov;
                    include locate_template('partials/carousel/item-destacadas.php');

                    $i++;
                }
                ?>

            </div>
            <!--end carousel inner-->
        </div>

        <!--navigation-->
        <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
    <!--End slider news-->

    <!--Start box news-->
    <div class="col-12 col-md-4 pt-2">
        <div class="row h-100">
            <!--news box-->

            <?php
            $css = array(
                'col-12 mb-1',
                'col-12 mt-1',
               // 'col-6 pr-1 pt-1',
               // 'col-6 pl-1 pt-1',
            );
            $i = 0;
            foreach ($novedades_secundarias as $post_nov):
                if ($i === 2) {
                    break;
                }

                if ($post_nov->post_status !== 'publish') {
                    continue;
                }
                ?>
                <div class="<?php echo $css[$i]; ?>">
                    <?php
                    $post = $post_nov;
                    include locate_template('partials/carousel/item-secundarias.php');
                    $i++;
                    ?>
                </div>
                <?php
            endforeach;
            ?>


            <!--news box-->
            <!--            <div class="col-6 pb-1 pl-1 pt-0">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    thumbnail img
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <img class="img-fluid"
                                                 src="https://bootstrap.news/source/img6.jpg"
                                                 alt="bootstrap templates for blog">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                         category 
                                        <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Motocross</a>
                                        title
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <h2 class="h5 text-white my-1">Three myths about Florida elections recount</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>-->

            <!--news box-->
            <!--            <div class="col-6 pb-1 pr-1 pt-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    thumbnail img
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <img class="img-fluid"
                                                 src="https://bootstrap.news/source/img7.jpg"
                                                 alt="bootstrap blog wordpress theme">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                         category 
                                        <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Fitness</a>
                                        title
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <h2 class="h5 text-white my-1">Finding Empowerment in Two Wheels and a Helmet</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>-->

            <!--news box-->
            <!--            <div class="col-6 pb-1 pl-1 pt-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    thumbnail img
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <img class="img-fluid"
                                                 src="https://bootstrap.news/source/img8.jpg"
                                                 alt="blog website templates bootstrap">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                         category 
                                        <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Adventure</a>
                                        title
                                        <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                            <h2 class="h5 text-white my-1">Ditch receipts and four other tips to be a shopper</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>-->
            <!--end news box-->
        </div>
    </div>
    <!--End box news-->
</section>
<!--END SECTION-->
