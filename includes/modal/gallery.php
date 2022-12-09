<div class="row">
    <?php

    //percorre o array
    foreach ($images_ids as $key => $image_id) :

        //busca os attrs da img
        $img_atts = wp_get_attachment_image_src($image_id, 'full');

        //seta o src
        $img_src = $img_atts[0];

        //seta o data-indes
        $data_index = $key + 1;
      
        // textto alternativo      
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);

        // Title
        $image_title = get_the_title($image_id);
           
    ?>

        <div class="col-sm-3 my-auto">      
            <img alt="<?php echo $image_alt; ?>" title="<?php echo $image_title; ?>" src="<?php echo $img_src; ?>" class="click-modal hover-shadow cursor " data-index="<?php echo $data_index; ?>">
        </div>

        <!-- A cada 4 colunas cria uma nova row -->
        <?php if(($key + 1) % 4 == 0): ?>
        </div>
        <div class="row">

    <?php endif; endforeach; ?>
</div>