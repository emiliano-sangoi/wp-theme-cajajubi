<div class="card border-0 rounded-0 text-white overflow zoom h-100">
    <div class="position-relative h-100">
        <!--thumbnail img-->
        <?php
            // El enlace a la novedad va a ir al "show" de la novedad en el caso de que no este definido algun valor en el campo
            // "URL Externa" en el formulario del admin.
            $link_nov = get_field('url_externa', $post);
            $externa = true;
            if(!$link_nov){
                $link_nov = get_permalink($post);
                $externa = false;
            }
        ?>
        <div class="ratio_right-cover-2 image-wrapper h-100">
            <a href="<?php echo $link_nov; ?>" class="h-100" target="<?php echo $externa ? '_blank' : '_self' ; ?>" >
<!--                <img class="img-fluid"
                     src="https://bootstrap.news/source/img5.jpg"
                     alt="simple blog template bootstrap">-->
                <?php
                $img_src = get_the_post_thumbnail_url($post);
                ?>
                <img class="img-fluid w-100 h-100 object-fit-cover"
                     src="<?php echo $img_src ?: DIR_IMGS . '/carousel/img-default.png'; ?>"
                     alt="Imágen asociada">
                     <?php
                     // echo get_the_post_thumbnail($post, array(500,500), array('class' => 'img-fluid w-100 h-100'));
                     ?>
            </a>
        </div>
        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
            <!-- category -->
            <a class="p-1 badge badge-primary rounded-0" href="<?php echo $link_nov; ?>">
                <?php
                    echo get_the_date('d/M/Y', $post);
                ?>
            </a>

            <!--title-->
            <a href="<?php echo $link_nov; ?>" target="<?php echo $externa ? '_blank' : '_self' ; ?>" >
                <h2 class="h5 text-white my-2 font-weight-bold">
                    <?php echo $post->post_title; ?>
                </h2>
            </a>
        </div>
    </div>
</div>
