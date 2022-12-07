<!-- modal -->
<div id="myModal" class="modal">

    <!-- close button -->
    <span class="close">&times;</span>

    <div class="modal-content">

        <?php
        //busca o array de ids de imgs da galeria
        $images_ids = pipe_get_galery_from_afc(get_the_ID(), 'galeria');

        //seta tamanho do array para caption
        $total_images = count($images_ids);

        //percorre o array
        foreach ($images_ids as $key => $image_id) :

            //busca os attrs da img
            $img_atts = wp_get_attachment_image_src($image_id, 'full');

            //seta o src
            $img_src = $img_atts[0];

            //seta o data-index
            $data_index = $key + 1;
        ?>

            <!-- Images -->
            <div class="mySlides">
                <div class="numbertext"><?php echo $data_index; ?> / <?php echo $total_images; ?></div>
                <img data-index="<?php echo $data_index; ?>" class="slide" src="<?php echo $img_src; ?>" style="width:100%">
            </div>

        <?php endforeach; ?>

        <!-- btns -->
        <a class="prev change-slide">&#10094;</a>
        <a class="next change-slide">&#10095;</a>

        <!-- caption -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

    </div> <!-- modal-content -->
</div><!-- modal -->