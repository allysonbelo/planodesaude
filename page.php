<?php

$custom_link = get_theme_mod('custom_link', '');
get_header();
get_template_part('/parts/main-banner');
?>

<div class="wrapper">
    <div class="page_container">
        <?php
        if (have_posts()) :  while (have_posts()) : the_post(); ?>
                <h2 class="page_title"><?php the_title() ?></h2>
                <div class="page_content">
                    <?php the_content() ?>
                </div>
            <?php endwhile;
        else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.') ?></p>
        <?php endif; ?>
    </div>
</div>


<?php get_footer() ?>