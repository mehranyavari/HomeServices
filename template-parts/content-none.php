<?php
/**
 *  Content None Template
 *
 */
?>

<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title text-center text-info"><?php esc_html_e('مطلبی پیدا نشد', 'homei'); ?></h1>
    </header>
    <div class="page-content">
        <?php if (is_home() && current_user_can('publish_posts')): ?>
            <p class="alert alert-info text-center"><?php printf(wp_kses(
                    __('<p>آیا می خواهید اولین مطلب خود را منتشر کنید؟ <a href="http://localhost/home/wp-admin/post-new.php">شروع کنید</a></p>', 'homei'),
                    [
                        'a' => [
                            'href' => []
                        ]
                    ]
                ),
                    esc_url(admin_url('post-new.php'))
                ) ?></p>
        <?php elseif (is_search()): ?>
            <p class="alert alert-info text-center"> <?php esc_html_e('متاسفانه مطلبی با کلید واژه ای که جستجو کرده اید یافت نشد', 'homei'); ?> </p>
        <?php endif; ?>
    </div>
</section>