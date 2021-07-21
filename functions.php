<?php

/**
 * Theme Functions
 *
 * @package Home Services
 */

if (!defined('HOMEI_DIR_PATH')){
define('HOMEI_DIR_PATH',untrailingslashit(get_template_directory()));
}
require_once HOMEI_DIR_PATH.'/inc/helpers/autoloader.php';
function homei_enqueue_scripts()
{
    //wp_enqueue_style('stylesheet',get_template_directory_uri().'/style.css');
    //wp_enqueue_style('main', get_template_directory().'/main.css', [], filemtime(get_template_directory() . '/style.css'), 'all');
    //wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    //wp_enqueue_script('main',get_template_directory_uri().'assets/main.js',[],filemtime(get_template_directory() . 'assets/main.js'),true);

    # register styles
    ## register style.css
    wp_register_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    ## register bootstrap.min.css
    wp_register_style('bootstrap',get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' , [], false, 'all');

    # register scripts
    wp_register_script('main', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', [], false, true);

    # call styles
    ## call style.css
    wp_enqueue_style('stylesheet');
    ## call bootstrap.min.css
    wp_enqueue_style('bootstrap');

    # call scripts
    ## call main.js
    wp_enqueue_script('main');
    ## call bootstrap.min.js
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'homei_enqueue_scripts');