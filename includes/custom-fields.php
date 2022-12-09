<?php

add_action('add_meta_boxes', 'add_metabox_pipeline_show_shortcode');

function add_metabox_pipeline_show_shortcode()
{
    add_meta_box(
        'pipeloine_show_sorrtcode',
        'Shortcode da galeria.',
        'pipeline_show_shortcode',
        'pipe_image_galery',
        'advanced',
        'high'
    );
}

function pipeline_show_shortcode()
{
    global $post;

    //busca o shortcode
    $pipeline_shortcode = get_post_meta($post->ID, 'pipeloine_show_sorrtcode', true);
    
    // seta id p concatenar no shortcode
    $post_id = get_the_ID() ? get_the_ID() : '';
 
    //inicializa variavel
    $hostcode = '';

    //se ja existe shortcode, escreve, se não, cria um
    if ($pipeline_shortcode) {
        $shortcode = $pipeline_shortcode;
    } else {
        $shortcode = '[pipeline_lightbox id=' . $post_id . '] [\pipeline_lightbox]';
    }
?>
    <p>
        <label for="pipeloine_show_sorrtcode"> <?= esc_attr($shortcode); ?> </label>
    </p>
    <input hidden readonly name="pipeloine_show_sorrtcode" id="pipeloine_show_sorrtcode" type="input" value="<?= esc_attr($shortcode); ?>">
    <p>Copie este shortcode e cole onde você desja exibir esta galeria de iamgens.</p>

<?php }

add_action('save_post', 'salvar_metas_pipeline_galery_shortcodeo');

function salvar_metas_pipeline_galery_shortcodeo()
{
    global $post;

    $pipeline_shortcode = isset($_POST['pipeloine_show_sorrtcode']) ? $_POST['pipeloine_show_sorrtcode'] : '';

    update_post_meta($post->ID, 'pipeloine_show_sorrtcode', sanitize_text_field($pipeline_shortcode));
}
