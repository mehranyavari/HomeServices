<?php
/**
 * Register meta boxes.
 *
 * @package Home Services
 */

namespace HOMEI_THEME\Inc;

use HOMEI_THEME\Inc\Traits\Singleton;

class Meta_Boxes
{
    use Singleton;

    protected function __construct()
    {
        //load classes.
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions
         */
        add_action('add_meta_boxes', [$this, 'add_custom_meta_box']);
        add_action('save_post',[$this,'save_post_meta_data']);
    }

    public function add_custom_meta_box()
    {
        $screens = ['post'];
        foreach ($screens as $screen) {
            add_meta_box(
                'hide-page-title',
                __('مخفی کردن عنوان صفحه', 'homei'),
                [$this, 'custom_meta_box_html'],
                $screen,
                'side'
            );
        }
    }

    public function custom_meta_box_html($post)
    {
        $value = get_post_meta($post->ID, '_hide_page_title', true);
        ?>
        <label for="homei-field"><?php esc_html_e('عنوان صفحه را مخفی کنید', 'homei'); ?></label>
        <select name="homei_hide_title_field" id="homei-field" class="postbox" style="margin-bottom: 0 !important;">
            <option value=""><?php esc_html_e('یکی را انتخاب کنید', 'homei'); ?></option>
            <option value="yes" <?php selected($value, 'yes'); ?>><?php esc_html_e('بله', 'homei'); ?></option>
            <option value="no" <?php selected($value, 'no'); ?>><?php esc_html_e('خیر', 'homei'); ?></option>
        </select>
        <?php
    }

    public function save_post_meta_data($post_id){
        if ( array_key_exists( 'homei_hide_title_field', $_POST ) ) {
            update_post_meta(
                $post_id,
                '_hide_page_title',
                $_POST['homei_hide_title_field']
            );
        }
    }
}
