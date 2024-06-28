<?php
$custom_link = get_theme_mod('custom_link', '');
get_header();
get_template_part('/parts/main-banner');
?>

<div class="wrapper">
    <section class="planodesaude">
        <h2>Plano de saúde: <span> por que você precisa de um? </span></h2>
        <p>
            São muitas dúvidas que podem surgir na hora de escolher o seu plano de saúde e, por isso, é importante contar com um site especializado no assunto, que possui uma rede de corretores parceiros em todo o Brasil trabalhando com as principais operadoras.
        </p>
        <div class="planodesaude_grid">
            <div class="planodesaude_grid_item"><span>Cobertura em todo o território nacional</span></div>
            <div class="planodesaude_grid_item"><span>Cotação gratuita e sem compromisso</span></div>
            <div class="planodesaude_grid_item"><span>Orçamento independente e personalizado</span></div>
            <div class="planodesaude_grid_item"><span>Melhores preços e vantagens</span></div>
        </div>
    </section>

    <section class="latest_posts_container">
        <div class="latest_posts_header">
            <h2>Últimos artigos</h2>
            <a href="<?php echo home_url('/blog') ?>">+ Ver todos</a>
        </div>

        <div class="latest_posts_search">
            <div class="header_search_mobile">
                <?php get_search_form(); ?>
            </div>
            <ul class="latest_posts_category_list">
                <li class="category_item_list active" data-category-id="default">Todas as categorias</li>
                <?php
                $categories = array(
                    279 => 'Saúde e bem-estar',
                    282 => 'Plano Odontológico',
                    278 => 'Operadoras de planos de saúde'
                );

                foreach ($categories as $category_id => $category_name) {
                    echo '<li class="category_item_list" data-category-id="' . esc_attr($category_id) . '">' . esc_html($category_name) . '</li>';
                }
                ?>
            </ul>
        </div>
        
        <div class="animar-secao">
            <div class="latest_posts latest_posts_default">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'order' => 'DESC',
                    'ignore_sticky_posts' => 1,
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
            <?php foreach ($categories as $category_id => $category_name) : ?>
                <div class="latest_posts category_section_<?php echo esc_attr($category_id); ?>" style="display: none;">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'category__in' => $category_id,
                        'order' => 'DESC',
                        'ignore_sticky_posts' => 1,
                    );
                    $category_posts = new WP_Query($args);
                    if ($category_posts->have_posts()) :
                        while ($category_posts->have_posts()) : $category_posts->the_post();
                            get_template_part('parts/post-card');
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <?php get_template_part('/parts/horizontal-cta') ?>

</div>

<script>
    let category_list = document.querySelectorAll('.category_item_list');
    category_list.forEach((listItem) => {
        listItem.addEventListener('click', function() {
            category_list.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
            let categoryId = this.getAttribute('data-category-id');
            document.querySelectorAll('.latest_posts').forEach((section) => {
                section.style.display = 'none';
            });
            if (categoryId === 'default') {
                document.querySelector('.latest_posts_default').style.display = 'flex';
            } else {
                document.querySelector('.category_section_' + categoryId).style.display = 'flex';
            }
        });
    });
</script>

<?php get_footer() ?>