<div class="post_card">
    <a class="post_card_img" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('large'); ?>
    </a>
    <a class="post_card_title" href="<?php the_permalink(); ?>">
        <?php
        $title = get_the_title(); // Obtenha o título
        $title_length = 50; // Defina o comprimento máximo do título

        // Verifique se o comprimento do título é maior que o limite
        if (strlen($title) > $title_length) {
            $title = substr($title, 0, $title_length); // Corta o título para o comprimento desejado
            $title = substr($title, 0, strrpos($title, ' ')); // Certifique-se de cortar apenas palavras inteiras
            $title .= '...'; // Adicione "..." ao final do texto cortado
        }

        echo $title; // Exibe o título limitado
        ?>
    </a>
    <div class="post_card_info">
        <span class="post_card_info_date"><?php echo get_the_date('d/m/y') ?> </span>
        <span class="post_card_info_category"> <?php the_category(); ?></span>
    </div>
    <p class="post_card_excerpt">
        <?php
        $excerpt = get_the_excerpt();
        $excerpt_length = 120;

        if (strlen($excerpt) > $excerpt_length) {
            $excerpt = substr($excerpt, 0,  $excerpt_length);
            $excerpt = substr($excerpt, 0, strrpos($excerpt, ''));
            $excerpt .= '...';
        }
        echo $excerpt;
        ?>
    </p>
    <a class="post_card_link" href="<?php the_permalink(); ?>">Ler artigo</a>
    <a href="<?php the_author_link(); ?>">
        <div class="post_card_author">
            <?php
            $author_id = get_the_author_meta('ID');
            echo get_avatar($author_id, 37);
            the_author();
            ?>
        </div>
    </a>
</div>