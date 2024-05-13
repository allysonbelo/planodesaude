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
                    <a href="<?php echo home_url('/blog')?>">Todas as categorias</a>
                </li>
                <?php
                // IDs das três categorias específicas que você deseja exibir
                $category_ids = array(279, 282, 278);

                foreach ($category_ids as $category_id) {
                    $category = get_category($category_id);
                    if ($category && !is_wp_error($category)) {
                        echo '<li class="category_item_list">' . esc_html($category->name) . '</li>';
                    }
                }
                ?>
            </ul>

        </div>
        <div class="latest_posts latest_posts_default">
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
        <!-- categoy 279 -->
        <div class="latest_posts category_section_279">
            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'category__in' => 279,
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
        <!-- categoy 282 -->
        <div class="latest_posts category_section_282">
            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'category__in' => 282,
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
        <!-- categoy 278 -->
        <div class="latest_posts category_section_278">
            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'category__in' => 278,
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

<script>
    let category_list = document.querySelectorAll('.category_item_list');
    category_list.forEach((listItem) => {
        listItem.addEventListener('click', function() {
            // Remove a classe ativa de todos os itens da lista
            category_list.forEach(item => item.classList.remove('active'));

            // Adiciona a classe ativa ao item da lista clicado
            this.classList.add('active');

            let label = this.textContent;

            // Oculta todas as seções
            document.querySelectorAll('.latest_posts').forEach((section) => {
                section.style.display = 'none';
            });

            switch (label) {
                case 'Saúde e bem-estar':
                    document.querySelector('.latest_posts_default').style.display = 'none';
                    document.querySelector('.category_section_279').style.display = 'flex';
                    break;
                case 'Plano Odontológico':
                    document.querySelector('.latest_posts_default').style.display = 'none';
                    document.querySelector('.category_section_282').style.display = 'flex';
                    break;
                case 'Operadoras de planos de saúde':
                    document.querySelector('.latest_posts_default').style.display = 'none';
                    document.querySelector('.category_section_278').style.display = 'flex';
                    break;
                default:
                    console.log('Label not recognized');
            }
        });
    });
</script>

<?php get_footer() ?>