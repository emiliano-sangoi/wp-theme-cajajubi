<div class=''>
    <div class="p-3">
        <div class="text-center px-lg-5 px-3">
            <?php
                if(has_post_thumbnail()):
                    echo get_the_post_thumbnail($post, 'medium', array('class' => 'img-fluid w-100 rounded-circle'));                
                else:
                ?>
                <img src="<?php echo DIR_IMGS . '/autoridades/default-person.png' ?>" class="img-fluid w-100 rounded-circle" />
                <?php endif; ?> 
            <?php            
            ?>
        </div>
        <div class="p-lg-3 p-2 text-center">
            <h5 class="">
                <?php echo $post->post_title; ?>
            </h5>
            <h6 class="text-muted">
                <?php echo $post->post_content; ?>
            </h6>    
            <!-- <div>
                <a class="btn btn-sm btn-outline-secondary" href='#'>
                    Curriculum Vitae
                    <img class="img-fluid w-20" src="<?php //echo DIR_IMGS . '/social-media/linkedin.png'                ?>" />
                </a>
            </div>-->
        </div>
    </div>
</div>
