<?php

/*
Template Name: Pivacidade/Termos
*/

$custom_link = get_theme_mod('custom_link', '');
get_header();
get_template_part('/parts/single-banner');
?>

<div class="wrapper">
    <div class="page_container">
        <?php
        if (have_posts()) :  while (have_posts()) : the_post(); ?>
                <h2 class="page_title"><?php the_title() ?></h2>
                <?php the_content() ?>
            <?php endwhile;
        else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.') ?></p>
        <?php endif; ?>
    </div>
    <?php get_template_part('/parts/horizontal-cta') ?>
</div>


<?php get_footer() ?>