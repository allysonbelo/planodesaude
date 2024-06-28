<?php

get_header();
get_template_part('/parts/single-banner');

?>

<div class="wrapper">
    <div class="pdscategory search">

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'posts_per_page' => 13,
            'paged'          => $paged,
            's'              => get_search_query(),
        );

        $query = new WP_Query($args);
        ?>

        <!-- O header é exibido independentemente dos resultados -->
        <header class="search_header">
            <h2 class="search_header_title">Resultados da busca por: "<span class="search_term"><?php the_search_query(); ?></span>"</h2>
            <p class="search_results_count">
                <?php
                if ($query->have_posts()) {
                    // Check the post type of the first post in the query.
                    $query->the_post(); // Set up post data.
                    if ('post' == get_post_type()) {
                        // Exibe o total de posts encontrados
                        $found_posts = esc_html($query->found_posts);
                        $result_text = _n('resultado encontrado', 'resultados encontrados', $query->found_posts, 'textdomain');
                        echo $found_posts . ' ' . $result_text;
                    }
                    wp_reset_postdata(); // Reset post data after checking post type.
                } else {
                    // Mensagem para quando nenhum resultado é encontrado
                    echo esc_html__('Nenhum resultado encontrado.', 'textdomain');
                }
                ?>

            </p>
        </header>
        <div class="pdscategory_content_founded">
            <div class="pdscategory_content">
                <?php
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        get_template_part('/parts/post-card');
                    endwhile;

                    wp_reset_postdata();

                else :
                    $recent_args = array(
                        'posts_per_page' => 3,
                        'posts_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $recent_query = new WP_Query($recent_args); ?>

                <?php

                    if ($recent_query->have_posts()) :
                        echo '<h3>' . __('Últimos Posts Publicados', 'textdomain') . '</h3>';
                        echo '<div class="pdscategory_content_not_found">';
                        while ($recent_query->have_posts()) : $recent_query->the_post();
                            get_template_part('/parts/post-card');
                        endwhile;
                        echo '</div>';
                        wp_reset_postdata();
                    endif;
                endif;
                ?>
            </div>

        </div>
        <div class="pdspagination">
            <?php
            $big = 999999999;

            echo paginate_links(array(
                'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'    => '?paged=%#%',
                'current'   => max(1, get_query_var('paged')),
                'total'     => $query->max_num_pages,
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

<style>
    .search_header {
        border-radius: clamp(12px, 3vw, 28px);
        border: 2px solid #707070;
        padding: clamp(6px, 4vw, 47px) clamp(18px, 4vw, 78px);
        margin-bottom: 50px;
    }

    .search .search_header_title {
        color: #000;
        font-size: clamp(24px, 4vw, 32px);
        font-style: normal;
        font-weight: 800;
        line-height: normal;
    }

    .search .search_term {
        color: #000;
        font-size: clamp(24px, 4vw, 32px);
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .search_results_count {
        color: #9A9A9A;
        font-size: 18px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
        margin-top: 17px;
    }
</style>