<?php
$custom_link = get_theme_mod('custom_link', '');
?>

<aside class="planodesaude_aside_cta">
    <h2>Cuide bem de você e de quem você ama</h2>
    <p>
        Um problema de saúde que acontece conosco ou com nossa família pode representar uma despesa médica ou hospitalar inesperada, se não quisermos enfrentar as longas esperas do SUS.
    </p>
    <a class="<?php echo is_single() ? 'cta_button_single_style_1' : 'cta_button_single_style_2'; ?>" href="<?php echo $custom_link; ?>" target="_blank">
        Cotar plano de saúde agora!</a>
    <img src="<?php echo get_theme_file_uri('/img/mulher-e-homem-se-abracando-e-sorrindo.webp') ?>" alt="Mulhe sobre os hombro de homem, estão sorrindo">
</aside>