<?php
/**
 * Register Menus.
 *
 * @package Home Services
 */

namespace HOMEI_THEME\Inc;

use HOMEI_THEME\Inc\Traits\Singleton;

class Menus
{
    use Singleton;

    protected function __construct()
    {
        //load classes.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus()
    {
        register_nav_menus([
            'header-menu' => esc_html__('منوی اصلی','homei'),
            'footer-menu' => esc_html__('منوی فوتر','homei')
        ]);
    }
}