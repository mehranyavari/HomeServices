<?php

/**
 * Theme Functions
 *
 * @package Home Services
 */

if (!defined('HOMEI_DIR_PATH')) {
    define('HOMEI_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('HOMEI_DIR_URI')) {
    define('HOMEI_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
require_once HOMEI_DIR_PATH . '/inc/helpers/autoloader.php';
require_once HOMEI_DIR_PATH . '/inc/classes/class-homei.php';
require_once HOMEI_DIR_PATH . '/inc/helpers/template-tags.php';

function homei_get_theme_instance()
{
    \HOMEI_THEME\Inc\HOMEI_THEME::get_instance();
}

homei_get_theme_instance();