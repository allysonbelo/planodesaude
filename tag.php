<?php

get_header();
get_template_part('/parts/single-banner');

?>

<div class="wrapper">
    <div class="pdscategory">

        <?php if (have_posts()) : ?>

            <header class="pdscategory_info">
                <?php
                if (is_tag()) {
                    echo '<h2>' . single_tag_title('', false) . '</h2>';
                }
                ?>
            </header>

            <div class="pdscategory_content">

                <?php

                if (is_tag()) {
                    $tag_ID = get_queried_object_id();
                    $args = array(
                        'posts_per_page' => 12,
                        'paged'          => $paged,
                        'tag_id'         => $tag_ID,
                    );
                }
                $tag_posts = new WP_Query($args);

                while ($tag_posts->have_posts()) : $tag_posts->the_post();

                ?>

                    <div style="display: block;">
                        <?php get_template_part('/parts/post-card'); ?>
                    </div>

                <?php
                endwhile;
                wp_reset_postdata(); ?>

            <?php else : ?>

                <p><?php esc_html_e('Nenhum post encontrado com esta tag.', 'textdomain'); ?></p>

            <?php endif; ?>

            </div>
            <div class="pdspagination">
                <?php
                $big = 999999999;

                echo paginate_links(array(
                    'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format'    => '?paged=%#%',
                    'current'   => max(1, get_query_var('paged')),
                    'total'     => $tag_posts->max_num_pages,
                    'mid_size'  => 2,
                    'prev_text' => __('<svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none">
                    <path d="M6 9.21484L1 5.21484L6 1.21484" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>', 'textdomain'),
                    'next_text' => __('<svg xmlns="http://www.w3.org/2000/svg" width="6" height="11" viewBox="0 0 6 11" fill="none">
                    <path d="M1 9.21484L5 5.21484L1 1.21484" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>', 'textdomain'),
                ));
                ?>
            </div>
    </div>
</div>

<?php get_footer(); ?>
