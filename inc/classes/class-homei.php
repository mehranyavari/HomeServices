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
        $this->set_hooks();
    }

    protected function set_hooks()
    {
        //actions and filters
    }

}