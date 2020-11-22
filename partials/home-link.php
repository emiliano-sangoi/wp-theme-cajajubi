<a href="<?php echo $link ?: '#' ?>" class="d-block p-5 bg-primary acceso h-100">
    <div class="text-center">
        <?php if( isset($img) ): ?>
            <img class='w-35 img-fluid' src='<?php echo $img; ?>' alt=''/>
        <?php else: ?>
            <i class="fa  <?php echo $icon; ?> d-inline-block w-100">
            </i>
        <?php endif; ?>
    </div>
    <div class="text-center mt-3 mt-lg-5">
        <h4 class="mb-0">
            <?php echo $titulo; ?>
        </h4>
    </div>
</a>