<div class="carousel-item <?php echo $css; ?> h-100">
    <div class="card border-0 rounded-0 text-light overflow zoom h-100">
        <div class="position-relative h-100">
            <?php
            // El enlace a la novedad va a ir al "show" de la novedad en el caso de que no este definido algun valor en el campo
            // "URL Externa" en el formulario del admin.
            $link_nov = get_field('url_externa', $post);
            if(!$link_nov){
                $link_nov = get_permalink($post);
            }
            
            ?>
            <!--thumbnail img-->
            <div class="ratio_left-cover-1 image-wrapper h-100">
                <a href="<?php echo $link_nov; ?>">
                    <?php
                    $img_src = get_the_post_thumbnail_url($post);
                    if (has_post_thumbnail($post)):
                        echo get_the_post_thumbnail($post, 'large', array('class' => 'img-fluid w-100 h-100 object-fit-cover'));
                    else:
                    ?>
                        <img class="img-fluid w-100 h-100 object-fit-cover"
                             src="<?php echo $img_src ?: DIR_IMGS . '/carousel/img-default.png'; ?>"
                             alt="Imágen asociada">
                         <?php
                    endif;
                    ?>
                </a>
            </div>
            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                <!--title-->
                <a href="<?php echo $link_nov; ?>">
                    <h2 class="h3 post-title text-white my-1 font-weight-bold">
                        <?php echo $post->post_title; ?>
                    </h2>
                </a>

                <?php
                $copete = get_field('copete', $post);
                if ($copete):
                    ?>
                    <p class="py-2">
                        <?php echo $copete; ?>
                    </p>
                    <?php
                endif;
                ?>                
                <!-- meta title -->
                <div class="news-meta">                                        
                    <span class="news-date badge badge-primary">
                        <?php
                        echo get_the_date('d/M/Y', $post);
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>