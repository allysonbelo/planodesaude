<?php
$custom_link = get_theme_mod('custom_link', '');
get_header();
get_template_part('/parts/main-banner');
?>

<section class="wrapper">
    <div class="blog_page">

        <div class="latest_posts_search">
            <div class="header_search_mobile">
                <?php get_search_form(); ?>
            </div>
            <ul class="latest_posts_category_list">
                <?php
                // IDs das três categorias específicas que você deseja exibir
                $category_ids = array(279, 282, 278);
            
                foreach ($category_ids as $category_id) {
                    $category = get_category($category_id);
                    if ($category && !is_wp_error($category)) {
                        $category_url = get_category_link($category->term_id);
                        echo '<li class="category_item_list"><a href="' . esc_url($category_url) . '">' . esc_html($category->name) . '</a></li>';
                    }
                }
                ?>
            </ul>
            

        </div>

    </div>

</section>

<section class="wrapper">
    <div class="blog_page">
        <h2 id="blog_latest_posts" class="blog_title_h2">Últimos artigos</h2>

        <div class="blog_latest_grid">
            <div class="blog_latest_posts">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $mobile_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'paged'          => $paged,
                    'ignore_sticky_posts' => 1,
                );

                $mobile_query = new WP_Query($mobile_args);

                if ($mobile_query->have_posts()) {
                    while ($mobile_query->have_posts()) {
                        $mobile_query->the_post();

                        get_template_part('/parts/post-card');
                    }
                    wp_reset_postdata();
                } else {
                    echo 'Nada para ser exibido!';
                }
                ?>

                <div class="blog_latest_stickys">
                    <h2 class="blog_title_h2">Artigos em destaque</h2>
                    <div class="blog_sticky_cards">
                        <?php

                        // adicione apenas posts marcados como sticky
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'post__in' => get_option('sticky_posts'),
                            'orderby' => 'post__in'
                        );

                        $sticky_posts = new WP_Query($args);

                        if ($sticky_posts->have_posts()) {
                            $count_post = 1;
                            while ($sticky_posts->have_posts()) {
                                $sticky_posts->the_post();
                        ?>
                                <div class="blog_sticky_card">
                                    <div class="blog_sticky_card_img">
                                        <?php the_post_thumbnail(); ?>
                                        <?php
                                        $author_id = get_the_author_meta('ID');
                                        $author_url = get_author_posts_url($author_id);
                                        ?>

                                        <a href="<?php echo esc_url($author_url); ?>" aria-label="<?php echo esc_attr(sprintf(__('Posts by %s', 'your-theme-textdomain'), get_the_author())); ?>">
                                            <div class="blog_sticky_card_author">
                                                <?php echo get_avatar($author_id, 37); ?>
                                                <span>Por <?php echo get_the_author(); ?></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="blog_sticky_card_content">
                                        <span class="blog_sticky_card_position"><?php echo $count_post ?>º Lugar esta semana</span>
                                        <?php
                                        $title = get_the_title();
                                        $title_length = 45;

                                        if (strlen($title) > $title_length) {
                                            $title = substr($title, 0,  $title_length);
                                            $title = substr($title, 0, strrpos($title, ' '));
                                            $title .= '...';
                                        }
                                        ?>
                                        <span class="blog_sticky_card_content_title"><?php echo $title ?></span>

                                        <div class="blog_sticky_card_content_info">
                                            <span class="blog_sticky_card_info__date"><?php echo get_the_date('d/m/y') ?> |</span>
                                            <?php
                                            $categorias = get_the_category();
                                            if (!empty($categorias)) {
                                                $categoria_id = $categorias[0]->term_id;
                                                $categoria_link = get_category_link($categoria_id);
                                                echo '<a href="' . esc_url($categoria_link) . '" class="blog_sticky_card_info__cat">#' . esc_html($categorias[0]->name) . '</a>';
                                            }
                                            ?>
                                        </div>

                                        <p class="blog_sticky_card_content_p">
                                            <?php
                                            $excerpt = get_the_excerpt();
                                            $excerpt_length = 68;

                                            if (strlen($excerpt) > $excerpt_length) {
                                                $excerpt = substr($excerpt, 0,  $excerpt_length);
                                                $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
                                                $excerpt .= '...';
                                            }
                                            echo $excerpt;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                                <a class="post_card_link" href="<?php the_permalink(); ?>">Ler artigo</a>
                        <?php
                                $count_post++;
                            }
                            wp_reset_postdata();
                        }

                        ?>

                    </div>
                </div>
            </div>

        </div>

        <div class="pdspagination">
            <?php
            $big = 999999999;

            echo paginate_links(array(
                'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))) . '#blog_latest_posts',
                'format'    => '?paged=%#%',
                'current'   => max(1, get_query_var('paged')),
                'total'     => $mobile_query->max_num_pages,
                'mid_size'  => 1,
                'prev_text' => __('<svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none" aria-label="Botão postes anteriores">
                <path d="M6 9.21484L1 5.21484L6 1.21484" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>', 'textdomain'), // Replace with appropriate SVG or text
                'next_text' => __('<svg xmlns="http://www.w3.org/2000/svg" width="6" height="11" viewBox="0 0 6 11" fill="none" aria-label="Botão proximos postes">
                <path d="M1 9.21484L5 5.21484L1 1.21484" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>', 'textdomain'),     // Replace with appropriate SVG or text
            ));
            ?>
        </div>
    </div>
</section>

<section>
    <div class="wrapper">
        <div class="pds_theme">
            <div class="pds_theme_title">
                <h2 id="blog_latest_posts" class="blog_title_h2">Procurar por tema</h2>
            </div>
            <div class="pds_theme_search">
                <span class="pds_theme_search_title">Procurando algum tema específico?</span>
                <p class="pds_theme_search_text">Nós podemos te ajudar a achar! Digite a sua dúvida e vamos procurar para você!</p>
                <?php get_search_form(); ?>
            </div>
            <div class="pds_theme_cat">
                <!-- Pegue o link da categoria com ID  279-->
                <a href="<?php echo get_category_link(279) ?>">
                    <div class="pds_theme_cat_card">
                        <span class="pds_ca_card_item">Saúde e bem estar</span>
                    </div>
                </a>
                <a href="<?php echo get_category_link(278) ?>">
                    <div class="pds_theme_cat_card">
                        <span class="pds_ca_card_item">Operadoras de plano de saúde</span>
                    </div>
                </a>
                <a href="<?php echo home_url('/?s=preciso+de+plano+de+saúde') ?>">
                    <div class="pds_theme_cat_card">
                        <span class="pds_ca_card_item">Porque eu preciso de pds?</span>
                    </div>
                </a>
                <a href="<?php echo get_category_link(282) ?>">
                    <div class="pds_theme_cat_card">
                        <span class="pds_ca_card_item">Planos odontologicos</span>
                    </div>
                </a>
                <a href="<?php echo home_url('/?s=tabela+de+preço') ?>">
                    <div class="pds_theme_cat_card">
                        <span class="pds_ca_card_item">Tabelas de preços</span>
                    </div>
                </a>
            </div>
            <div class="pds_theme_cards">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'ignore_sticky_posts' => 1,
                    'offset' => 4
                );

                $card_cat = new WP_Query($args);

                if ($card_cat->have_posts()) {
                    while ($card_cat->have_posts()) {
                        $card_cat->the_post();

                        echo get_template_part('/parts/post-card');
                    }

                    wp_reset_postdata();
                }
                ?>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="wrapper">
        <div id="autores" class="blog_authors">
            <h2 id="blog_latest_posts" class="blog_title_h2">Top autores</h2>
            <div class="blog_authors_cards">
                <?php
                $admin_ids = array(3796, 3725);

                $admin_users = array_map(function ($id) {
                    return get_userdata($id);
                }, $admin_ids);

                if (!empty($admin_users)) {


                    foreach ($admin_users as $admin) {
                        if ($admin && in_array('administrator', $admin->roles)) {
                            $admin_name = $admin->display_name;
                            $admin_avatar = get_avatar($admin->ID, 142);
                            $admin_url = get_author_posts_url($admin->ID);

                            echo '<div class="blog_authors_card">';
                            echo '<a class="blog_authors_card_link" href="' . esc_url($admin_url) . '">';
                            echo $admin_avatar;
                            echo '<span class="blog_authors_card_name">' . esc_html($admin_name) . '</span>';
                            echo '<span  class="blog_authors_card_date">' . date_i18n('F \d\e Y', strtotime(get_the_author_meta('user_registered'))) . '</span>';
                            echo '</a>';
                            echo '<a href="' . esc_url($admin_url) . '" class="link_blog_author" href="">Ver artigos</a>';
                            echo '</div>';
                        }
                    }
                } else {
                    echo '<p>No administrators found.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section class="blog_cta">
    <div class="wrapper">
        <?php get_template_part('/parts/horizontal-cta') ?>
    </div>
</section>

<?php get_footer() ?>