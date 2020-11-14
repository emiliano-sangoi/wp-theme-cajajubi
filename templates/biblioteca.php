<?php
/* Template Name: Biblioteca digital */
?>

<?php
get_header();
?>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<?php //get_template_part("partials/mobile");   ?>
<!-- Offcanvas Menu End -->

<!-- Breadcrumb Begin -->
<section class="breadcrumb-option set-bg" style="margin-top: 0px;" data-setbg="<?php echo DIR_IMGS . '/biblioteca.jpg'; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h2>Biblioteca</h2>
                    <div class="breadcrumb__widget">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb End -->

<!-- About Section Begin -->
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="faq__accordion">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-heading"> 
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title normal-title">
                                        <br>
                                        <br>
                                        <a href="<?php echo esc_url( get_page_link( PAGINA_BIBLIOTECA_NORMATIVAS ) ); ?>" class="primary-btn" target="_blank">NORMATIVAS</a><br>
                                        <a href="<?php echo esc_url( get_page_link( PAGINA_BIBLIOTECA_FORMULARIOS ) ); ?>" class="primary-btn" target="_blank">FORMULARIOS</a><br>
                                        <a href="<?php echo esc_url( get_page_link( PAGINA_BIBLIOTECA_INSTRUCTIVOS ) ); ?>" class="primary-btn" target="_blank">INSTRUCTIVOS</a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                          

<!-- Faq End -->
<!-- About Section End -->


<?php get_footer(); ?>