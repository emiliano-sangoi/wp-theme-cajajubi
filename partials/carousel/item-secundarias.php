<div class="card border-0 rounded-0 text-white overflow zoom h-100">
    <div class="position-relative h-100">
        <!--thumbnail img-->
        <div class="ratio_right-cover-2 image-wrapper h-100">
            <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/" class="h-100">
<!--                <img class="img-fluid"
                     src="https://bootstrap.news/source/img5.jpg"
                     alt="simple blog template bootstrap">-->
                <?php
                $img_src = get_the_post_thumbnail_url($post_nov);
                ?>
                <img class="img-fluid w-100 h-100"
                     src="<?php echo $img_src ?: DIR_IMGS . '/carousel/img-default.png'; ?>"
                     alt="Imágen asociada" style="object-fit:cover;">
                     <?php
                     // echo get_the_post_thumbnail($post_nov, array(500,500), array('class' => 'img-fluid w-100 h-100'));
                     ?>
            </a>
        </div>
        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
            <!-- category -->
            <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                <?php
                    echo get_the_date('d/M/Y', $post_nov);
                ?>
            </a>

            <!--title-->
            <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                <h2 class="h5 text-white my-2">
                    <?php echo $post_nov->post_title; ?>
                </h2>
            </a>
        </div>
    </div>
</div>
