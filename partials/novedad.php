<div class="card">
    <?php
    echo get_the_post_thumbnail($post, 'medium', array('class' => 'card-img-top'));
    ?>
    <div class="card-body p-4">
        <h5 class="card-title mb-3 font-weight-bold">
            <?php echo $post->post_title; ?>
        </h5>
        <h6 class="card-subtitle mb-3 text-muted">
            <?php
            echo get_the_date('d/M/Y H:i', $post) . ' Hs.';
            ?>
        </h6>
        <p class="card-text">
            <?php
            if (strlen($post->post_content) >= POST_CONTENT_MAX_LENGTH) {
                echo substr($post->post_content, 0, POST_CONTENT_MAX_LENGTH) . '...';
            } else {
                echo nl2br($post->post_content);
            }
            ?>
        </p>
        <div>
            <a href="<?php echo get_permalink($post) ?>"  class="card-link btn btn-outline-primary">
                Ver m&aacute;s
            </a>       
        </div>
    </div>
</div> 