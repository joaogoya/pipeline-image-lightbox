<div class="row">
    <?php

    //busca o array de ids de imgs da galeria
    $images_ids = pipe_get_galery_from_afc(get_the_ID(), 'galeria');

    //percorre o array
    foreach ($images_ids as $key => $image_id) :

        //busca os attrs da img
        $img_atts = wp_get_attachment_image_src($image_id, 'full');

        //seta o src
        $img_src = $img_atts[0];

        //seta o data-indes
        $data_index = $key + 1;
    ?>

        <div class="col-sm-3">
            <img src="<?php echo $img_src; ?>" class="click-modal hover-shadow cursor" data-index="<?php echo $data_index; ?>">
        </div>

    <?php endforeach; ?>
</div>