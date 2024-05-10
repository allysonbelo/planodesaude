<?php
$custom_link = get_theme_mod('custom_link', '');
get_header();
get_template_part('/parts/main-banner');
?>

<div class="wrapper">
    <section class="planodesaude">
        <h2>Plano de saúde: <span> por que você precisa de um? </span></h2>
        <p>
            São muitas dúvidas que podem surgir na hora de escolher o seu plano de saúde e, por isso, é importante contar com um site especializado no assunto, que possui uma rede de corretores parceiros em todo o Brasil trabalhando com as principais operadoras.
        </p>
        <div class="planodesaude_grid">
            <div class="planodesaude_grid_item"><span>Cobertura em todo o território nacional</span></div>
            <div class="planodesaude_grid_item"><span>Cotação gratuita e sem compromisso</span></div>
            <div class="planodesaude_grid_item"><span>Orçamento independente e personalizado</span></div>
            <div class="planodesaude_grid_item"><span>Melhores preços e vantagens</span></div>
        </div>
    </section>

    <section class="latest_posts_conatiner">
        <div class="latest_posts_header">
            <h2>Últimos artigos</h2>
            <a href="#">+ Ver todos</a>
        </div>
        <div class="latest_posts_search">
            <div class="header_search_mobile">
                <?php get_search_form(); ?>
            </div>
            <ul class="latest_posts_category_list">
                <li>
                    <a href="/blog">Todas as categorias</a>
                </li>
                <?php
                // IDs das três categorias específicas que você deseja exibir
                $category_ids = array(279, 282, 278);

                foreach ($category_ids as $category_id) {
                    $category = get_category($category_id);
                    if ($category && !is_wp_error($category)) {
                        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                    }
                }
                ?>
            </ul>

        </div>
        <div class="latest_posts">
            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'order' => 'DESC'
            );

            $latest_posts = new WP_Query($args);

            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) : $latest_posts->the_post();
                    get_template_part('parts/post-card');
                endwhile;
            endif;

            wp_reset_postdata();

            ?>
        </div>
    </section>

    <section class="planodesaude_cta">
        <div class="planodesaude_cta_content">
            <h2>Cuide bem de você e de quem você ama</h2>
            <p>
                Um problema de saúde que acontece conosco ou com nossa família pode representar uma despesa médica ou hospitalar inesperada, se não quisermos enfrentar as longas esperas do SUS.
            </p>
            <a href="<?php echo $custom_link ?>" target="_blank">Cotar plano de saúde agora!</a>
        </div>
    </section>

</div>

<?php get_footer() ?>