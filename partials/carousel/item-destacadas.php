<div class="carousel-item <?php echo $css; ?> h-100">
    <div class="card border-0 rounded-0 text-light overflow zoom h-100">
        <div class="position-relative h-100">
            <!--thumbnail img-->
            <div class="ratio_left-cover-1 image-wrapper h-100">
                <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                    <?php
                    $img_src = get_the_post_thumbnail_url($post_nov);
                    ?>
                    <img class="img-fluid w-100 h-100"
                         src="<?php echo $img_src ?: DIR_IMGS . '/carousel/img-default.png'; ?>"
                         alt="Imágen asociada" style="object-fit:cover;">
                </a>
            </div>
            <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                <!--title-->
                <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                    <h2 class="h3 post-title text-white my-1 font-weight-bold">
                        <?php echo $post_nov->post_title; ?>
                    </h2>
                </a>

                <?php
                $copete = get_field('copete', $post_nov);
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
                            echo get_the_date('d/M/Y', $post_nov);
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>