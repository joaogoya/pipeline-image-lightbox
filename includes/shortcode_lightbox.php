<?php add_shortcode('pipeline_lightbox', 'pipeline_do_lightbox'); ?>

<?php function pipeline_do_lightbox()
{ ?>

    <div id="pageone" class="container">

        <?php require_once('gallery.php'); ?>

        <?php require_once('modal.php'); ?>

    </div>
    
<?php
    wp_reset_postdata();
}
