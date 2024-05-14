<?php
$custom_link = get_theme_mod('custom_link', '');
get_header();
get_template_part('/parts/single-banner');
?>

<div class="wrapper">
    <div class="singler_content">
        <a class="back_to_home" href="<?php echo home_url('/') ?>">
            &lt; Voltar para home </a>
        <h2 class="single_title"> <?php the_title(); ?></h2>
        <div class="single_container">
            <div class="single_info_author">
                <div class="single_info_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                        <path d="M26.6668 28V25.3333C26.6668 23.9188 26.1049 22.5623 25.1047 21.5621C24.1045 20.5619 22.748 20 21.3335 20H10.6668C9.25234 20 7.89579 20.5619 6.89559 21.5621C5.8954 22.5623 5.3335 23.9188 5.3335 25.3333V28" stroke="#50B848" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.9998 14.6667C18.9454 14.6667 21.3332 12.2789 21.3332 9.33333C21.3332 6.38781 18.9454 4 15.9998 4C13.0543 4 10.6665 6.38781 10.6665 9.33333C10.6665 12.2789 13.0543 14.6667 15.9998 14.6667Z" stroke="#50B848" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Por <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
                </div>
                <div class="single_info_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 31 34" fill="none">
                        <path d="M26.7778 4H4.22222C2.44264 4 1 5.44264 1 7.22222V29.7778C1 31.5574 2.44264 33 4.22222 33H26.7778C28.5574 33 30 31.5574 30 29.7778V7.22222C30 5.44264 28.5574 4 26.7778 4Z" stroke="#50B848" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22 1V7" stroke="#50B848" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9 1V7" stroke="#50B848" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M1 14H30" stroke="#50B848" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Publicado em <?php the_date('d/m/Y'); ?></span>
                </div>
                <div class="single_info_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 34 34" fill="none">
                        <path d="M17 33C25.8366 33 33 25.8366 33 17C33 8.16344 25.8366 1 17 1C8.16344 1 1 8.16344 1 17C1 25.8366 8.16344 33 17 33Z" stroke="#50B848" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17 7.39999V17L23.4 20.2" stroke="#50B848" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>
                        <?php
                        $content = get_post_field('post_content', get_the_ID());
                        $word_count = str_word_count(strip_tags($content));
                        $reading_time = ceil($word_count / 200); // Considerando uma média de 200 palavras por minuto
                        echo $reading_time . ' minutos de leitura';
                        ?>
                    </span>
                </div>

                <?php
                $categories = get_the_category();
                if ($categories) {
                    foreach ($categories as $category) {
                        echo '<a class="single__post_category" href="' . esc_url(get_category_link($category->term_id)) . '" >#'  . $category->name . '</a>';
                    }
                }
                ?>

            </div>
            <?php the_content(); ?>
        </div>

    </div>
</div>

<?php get_footer() ?>