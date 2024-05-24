<?php get_header() ?>

<section class="pds_author">
    <div class="wrapper">

        <a class="back_to_home" href="<?php echo home_url('/') ?>">
            &lt; Voltar para home </a>
        <div class="author_container">
            <div class="author_img">
                <?php echo get_avatar(get_the_author_meta('ID'), 300, 'retro', 'Imagem do autor da postagem') ?>
            </div>
            <div class="author_info">
                <span class="author_info_span">Autor(a)</span>
                <h1 class="author_info_name"><?php the_author(); ?></h1>
                <div class="post_card_info">
                    <span class="post_card_info_date">Autor(a) desde <?php echo date_i18n('F \d\e Y', strtotime(get_the_author_meta('user_registered'))); ?></span>
                    <div lass="post_card_cards">
                        <h3 class="post_card_card_title">Últimos artigos:</h3>
                        <div class="author_post_cards">
                            <?php

                            $author_id = get_the_author_meta('ID');

                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'author' => $author_id,
                            );

                            $latest_posts = new WP_Query($args);

                            if ($latest_posts->have_posts()) {
                                while ($latest_posts->have_posts()) : $latest_posts->the_post();
                            ?>
                                    <div class="author_post_card">
                                        <?php the_post_thumbnail('medium') ?>
                                        <span class="author_post_card_title"><?php echo get_the_title() ?></span>
                                        <span class="author_post_card_date"><?php echo get_the_date('d/m/Y') ?> | #<?php the_category(' ') ?></span>
                                        <?php
                                        $excerpt = get_the_excerpt();
                                        $excerpt_length = 60;

                                        if (strlen($excerpt) > $excerpt_length) {
                                            $excerpt = substr($excerpt, 0,  $excerpt_length);
                                            $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
                                            $excerpt .= '...';
                                        }
                                        echo '<p class="author_post_card_excerpt">' . $excerpt .  '</p>';
                                        ?>
                                        <a class="author_post_card_link" href="<?php the_permalink(); ?>">Ler artigo</a>
                                    </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="author_all_posts">
            <h2 class="author_all_posts_title">Todos os posts</h2>
            <div class="author_all_cards">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $author_id = get_the_author_meta('ID');

                if (!empty($author_id)) {
                    $all_posts = array(
                        'post_type' => 'post',
                        'posts_per_page' => 9,
                        'author' => $author_id,
                        'paged' => $paged,
                        'ignore_sticky_posts' => 1,
                    );

                    $author_query = new WP_Query($all_posts);

                    if ($author_query->have_posts()) {
                        while ($author_query->have_posts()) : $author_query->the_post();
                            get_template_part('/parts/post-card');
                        endwhile;
                        wp_reset_postdata();
                    } else {
                        echo "Nenhum post encontrado.";
                    }
                } else {
                    echo "Erro: ID do autor não encontrado.";
                }
                ?>
            </div>
            <div class="pdspagination">
                <?php
                $big = 999999999;

                if ($author_query->max_num_pages > 1) {
                    echo paginate_links(array(
                        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format'    => '?paged=%#%',
                        'current'   => max(1, get_query_var('paged')),
                        'total'     => $author_query->max_num_pages,
                        'mid_size'  => 2,
                        'prev_text' => __('<svg xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewBox="0 0 7 11" fill="none"><path d="M6 9.21484L1 5.21484L6 1.21484" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>', 'textdomain'),
                        'next_text' => __('<svg xmlns="http://www.w3.org/2000/svg" width="6" height="11" viewBox="0 0 6 11" fill="none"><path d="M1 9.21484L5 5.21484L1 1.21484" stroke="#1E1E1E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>', 'textdomain'),
                    ));
                }
                ?>
            </div>
        </div>

</section>

<?php get_footer() ?>
