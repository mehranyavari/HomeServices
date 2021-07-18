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
    //wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    //wp_enqueue_script('main',get_template_directory_uri().'assets/main.js',[],filemtime(get_template_directory() . 'assets/main.js'),true);

    #1 register styles and scripts
    wp_register_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_script('main', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);

    #2 call styles and scripts
    wp_enqueue_style('stylesheet');
    wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'homei_enqueue_scripts');