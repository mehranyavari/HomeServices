<?php

/**
 * Theme Functions
 *
 * @package Home Services
 */

function homei_enqueue_scripts()
{
    //wp_enqueue_style('stylesheet',get_template_directory_uri().'/style.css');
    //wp_enqueue_style('main', get_template_directory().'/main.css', [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
}

add_action('wp_enqueue_scripts', 'homei_enqueue_scripts');