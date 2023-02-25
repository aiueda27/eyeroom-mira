<?php

/**************************************************
CSSファイルの読み込み
**************************************************/
function my_enqueue_styles() {
  wp_enqueue_style('style', get_template_directory_uri() . '/dist/style.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

/**************************************************
JSファイルの読み込み
**************************************************/
function my_scripts_method() {
    wp_enqueue_script(
                  'custom_script', get_template_directory_uri() . '/dist/main.js', array('jquery'), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts', 'my_scripts_method');
?>