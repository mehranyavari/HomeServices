<?php
/**
 * Bootstraps the theme.
 *
 * @package Home Services
 */

namespace HOMEI_THEME\Inc;

use HOMEI_THEME\Inc\Traits\Singleton;

class HOMEI_THEME
{
    use Singleton;

    protected function __construct()
    {
        //load classes.
        Assets::get_instance();
        Menus::get_instance();
        Meta_Boxes::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions
         */

        add_action('after_setup_theme', [$this, 'setup_theme']);

    }
    /**
     * Setup theme.
     *
     * @return void
     */
    public function setup_theme()
    {
        /**
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /**
         * Custom logo.
         *
         * @see Adding custom logo
         * @link https://developer.wordpress.org/themes/functionality/custom-logo/#adding-custom-logo-support-to-your-theme
         */
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ]);
        /**
         * Adds Custom background panel to customizer.
         *
         * @see Enable Custom Backgrounds
         * @link https://developer.wordpress.org/themes/functionality/custom-backgrounds/#enable-custom-backgrounds
         */
        add_theme_support('custom-background', [
            'default-color' => '#fff',
            'default-image' => '',
            'default-repeat' => 'no-repeat',
        ]);
        /**
         * Enable support for Post Thumbnails on posts and pages.
         *
         * Adding this will allow you to select the featured image on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        /**
         * Register image sizes
         */
        add_image_size('featured-large',350,233,true);
        // Add theme support for selective refresh for widgets.
        /**
         * WordPress 4.5 includes a new Customizer framework called selective refresh
         *
         * Selective refresh is a hybrid preview mechanism that has the performance benefit of not having to refresh the entire preview window.
         *
         * @link https://make.wordpress.org/core/2016/03/22/implementing-selective-refresh-support-for-widgets/
         */
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('automatic-feed-links');
        /**
         * Switch default core markup for search form, comment form, comment-list, gallery, caption, script and style
         * to output valid HTML5.
         */
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'galley',
            'caption',
            'script',
            'style',
        ]);
        add_editor_style();

        add_theme_support('wp-block-styles');

        global $content_width;
        if (!isset($content_width)) {
            $content_width = 1240;
        }

    }
}