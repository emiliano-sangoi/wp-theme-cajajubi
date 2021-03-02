<div class="card box-shadow border-0 rounded-0">
    <div class="row no-gutters">
        <div class="col-md-3 overflow zoom">
            <?php
            if (has_post_thumbnail($post)):
                echo get_the_post_thumbnail($post, 'medium', array('class' => 'card-img img-fluid object-fit-cover rounded-0 h-100'));
            else:
                ?>
                <img class="img-fluid w-100 h-100 object-fit-cover"
                     src="<?php echo DIR_IMGS . '/carousel/img-default.png'; ?>"
                     alt="Imágen por defecto" style="object-fit:cover;">            
                 <?php
                 endif;
                 ?>
        </div>
        <div class="col-md-9 border border-light">
            <div class="card-body h-100">
                <p class="card-text mb-1">
                    <small class="text-muted">
                        <?php
                        echo get_the_date('d/M/Y H:i', $post) . ' Hs.';
                        ?>
                    </small>
                </p>
                <h4 class="card-title font-weight-bold">
                    <?php echo $post->post_title; ?>
                </h4>
                <p class="card-text">
                    <?php
                    $copete = get_field('copete', $post);

                    if ($copete) {
                        echo nl2br($copete);
                    } else {
                        //si no se definio un copete por el momento poner parte del contenido.
                        if (strlen($post->_post_content) >= POST_CONTENT_MAX_LENGTH) {
                            echo substr($post->_post_content, 0, POST_CONTENT_MAX_LENGTH) . '...';
                        } else {
                            echo nl2br($post->_post_content);
                        }
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
    </div>

</div> 