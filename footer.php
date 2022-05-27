<?php
wp_footer();

$page_contacto = get_page_by_path('contacto');
$id_contacto = is_object($page_contacto) && isset($page_contacto->ID) ? $page_contacto->ID : 18;

//var_dump($page_contacto);
?>

<!-- Footer Section Begin -->
<footer class="footer bg-light py-5">
    <div class="container py-4">
        <div class="row mx-0">
            <div class="col-md-2">
                <a href="https://www.santafe.gob.ar/" target="_blank" class="centrate">
                    <img class="img-fluid w-100" src="<?php echo DIR_IMGS . '/logo-footer.png' ?>" alt="Gobierno de la Provincia de Santa Fe">
                </a>
            </div>
            <div class="col-md-2 text-center mt-5 mt-lg-3">
                <h6 class="mb-2">
                    <i class="fa fa-whatsapp"></i>
                    Whatsapp
                </h6>
                <div class="">
                    342 5 128 800
                </div>
            </div>
            <div class="col-md-3 text-center mt-3">
                <h6 class="mb-2">
                    <i class="fa fa-envelope"></i>
                    Correo Electrónico
                </h6>
                <div class="">
                    <a class="email-conctacto" href="mailto:contactocaja@santafe.gov.ar" target="_blank">
                        contactocaja@santafe.gov.ar
                    </a>
                </div>
            </div>
            <div class="col-md-2 text-center mt-3">
                <h6 class="mb-2" title="Línea telefónica gratuita">
                    <i class="fa fa-phone"></i>
                    Tel&eacute;fono
                </h6>
                <div class="">
                    0800 - 444 - 3734
                </div>
            </div>
            <div class="col-md-3 mt-3">
                <!--<h6 class="mb-2">Seguinos:</h6>-->
                <div class="social-media text-center">
                    <span class="">
                        <?php
                        $enlace_facebook = get_field('enlace_facebook',$id_contacto);
                        if ($enlace_facebook):
                            ?>            
                            <a href="<?php echo $enlace_facebook; ?>" target="_blank" style="text-decoration: none;">
                                <img class="img-fluid" src="<?php echo DIR_IMGS . '/social-media/facebook_sq.png'; ?>" alt="Facebook"/>
                            </a>        
                        <?php endif; ?>
                    </span>
                    <span class="">
                        <?php
                        $enlace_twitter = get_field('enlace_twitter',$id_contacto);
                        if ($enlace_twitter):
                            ?>            
                            <a href="<?php echo $enlace_twitter; ?>" target="_blank" style="text-decoration: none;">
                                <img class="img-fluid" src="<?php echo DIR_IMGS . '/social-media/twitter_sq.png'; ?>" alt="Twitter"/>
                            </a>    
                        <?php endif; ?>                      
                    </span>
                    <span class="">
                        <?php
                        $enlace_instagram = get_field('enlace_instagram',$id_contacto);
                        if ($enlace_instagram):
                            ?>            
                            <a href="<?php echo $enlace_instagram; ?>" target="_blank" style="text-decoration: none;">
                                <img class="img-fluid" src="<?php echo DIR_IMGS . '/social-media/instagram_sq.png'; ?>" alt="Instagram"/>
                            </a>  
                        <?php endif; ?>           
                    </span>
                    <span class="">
                        <?php
                        $enlace_youtube = get_field('enlace_youtube',$id_contacto);
                        if ($enlace_youtube):
                            ?>            
                            <a href="<?php echo $enlace_youtube; ?>" target="_blank" style="text-decoration: none;">
                                <img class="img-fluid" src="<?php echo DIR_IMGS . '/social-media/youtube_sq.png'; ?>" alt="Youtube"/>
                            </a>
                        <?php endif; ?>    

                    </span>
                </div>
            </div>
        </div>

    </div>
</footer>

</div><!-- Cierre de <div class=container> (header.php -->

<div class='to_top_button p-2 rounded'>
    <i class="fa fa-arrow-up"></i>    
</div>

</body>
</html>