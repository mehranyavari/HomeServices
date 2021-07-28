<?php
/**
 *  Content Template
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
    <?php get_template_part('template-parts/components/entry-header') ?>
    <?php get_template_part('template-parts/components/entry-meta') ?>
    <?php get_template_part('template-parts/components/entry-content') ?>
    <?php get_template_part('template-parts/components/entry-footer') ?>
</article>
