<?php
/* enqueue scripts and style from parent theme */
function twentytwenty_styles()
{
    wp_enqueue_style('parent', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'twentytwenty_styles');

if (!is_admin()) {

    $theme = wp_get_theme(); // Used for cache busting

    wp_enqueue_style('Style', get_stylesheet_directory_uri() . '/css/style.css', array(), $theme->get('Version'), 'all');
}


wp_enqueue_script('lazy-script','https://cdn.jsdelivr.net/npm/vanilla-lazyload@16.1.0/dist/lazyload.min.js');