<a href="<?php echo $link ?: '#' ?>" 
   class="d-block overflow text-white zoom box-shadow px-5 py-4 <?php echo $bg ?: 'bg-primary' ?> acceso h-100 <?php echo isset($css) ? $css : '' ?>" 
   <?php echo $blank ? "target='_blank'" : ''; ?> style="text-decoration: none;" >
    <div class="row">
        <div class="col-12 col-md-4 text-center">
            <?php if (isset($img)): ?>
                <img class='img-fluid p-2' src='<?php echo $img; ?>' alt=''/>
            <?php else: ?>
                <i class="fa  <?php echo $icon; ?> d-inline-block w-100">
                </i>
            <?php endif; ?>
        </div>
        <div class="col-12 offset-md-1 col-md-7">
            <h4 class="mb-0 mt-1 <?php echo $class_title ?: '' ?> text-center centrate-y">                
                <?php echo $titulo; ?>                
            </h4>
        </div>
    </div>
</a>