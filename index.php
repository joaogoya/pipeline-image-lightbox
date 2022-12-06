<?php

/* 
 * Plugin Name: Pipeline Lightbox Plugin
 * Plugin URI: http://pipeline-digital.com.br/
 * Description: Plugin criação de galerias de imagens com efeito lightbox.
 * Author: Pipeline Digital
 * Version: 1.0.0 
 * Author URI: http://pipeline-digital.com.br/
 * License: GPL2+ 
*/

define('ARQ_PRINCIPAL', __FILE__);

require_once('includes/shortcode_lightbox.php');

//assets
function pipe_add_scripts_lightbox() //scripts do plugin
{
    wp_enqueue_script('pipe_lightbox_main_js', plugins_url('/assets/js/pipeline_lightbox_min.js', __FILE__));
    wp_enqueue_style('pipe_lightbox_style', plugins_url('/assets/css/pipeline_lightbox_min.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'pipe_add_scripts_lightbox');


//scripts externos - jquery
wp_register_script('script_to_validate', '//code.jquery.com/jquery-1.10.1.min.js', false, false, false);
wp_enqueue_script('script_to_validate');


/*
  A lib mobile do jq gerou conflito com o painel admin do wp
  por enquanto os swipes ficarão desabilitados
  https://br.wordpress.org/support/topic/problems-with-jquery-mobile-api-in-custom-plugin/
*/
// wp_register_style('my-stylesheet', '//code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css');
// wp_enqueue_style('my-stylesheet');

// wp_register_script('script_modernizr', '//code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js', false, false, false);
// wp_enqueue_script('script_modernizr');


