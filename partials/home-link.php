<a href="<?php echo $link ?: '#' ?>" 
   class="d-block overflow text-white zoom box-shadow p-5 <?php echo $bg ?: 'bg-primary' ?> acceso h-100 <?php echo isset($css) ? $css : '' ?>" 
       <?php echo $blank ? "target='_blank'" : ''; ?> style="text-decoration: none;" >
    <div class="text-center">
        <?php if( isset($img) ): ?>
            <img class='img-fluid' src='<?php echo $img; ?>' alt=''/>
        <?php else: ?>
            <i class="fa  <?php echo $icon; ?> d-inline-block w-100">
            </i>
        <?php endif; ?>
    </div>
    <div class="text-center mt-3 mt-lg-5">
        <h4 class="mb-0 <?php echo $class_title ?: '' ?>">
            <?php echo $titulo; ?>
        </h4>
    </div>
</a>