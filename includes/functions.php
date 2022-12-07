<?php
function pipe_get_galery_from_afc($page_id, $custom_field)
{
    // busca o shortcode da galeria
    $gallery = get_post_meta($page_id, $custom_field, true);  

    // pega array de ids do shortcode
    preg_match('/\[gallery.*ids=.(.*).\]/', $gallery, $ids);

    //limpa as informações dos ids    
    $images_ids = explode(",", $ids[1]);

    //ficam apenas os números em formato string
    $gallery_ids = array();
    foreach ($images_ids as $key => $id) {
        $id_int = intval($id);
        $id_string =  strval($id_int);
        array_push($gallery_ids, $id_string);
    }

    //Retorna um array com os ids
    return $gallery_ids;
}



