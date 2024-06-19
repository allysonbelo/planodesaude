<?php
$custom_link = get_theme_mod('custom_link', '');
?>

<section class="planodesaude_cta">
    <div class="planodesaude_cta_content">
        <a href="<?php echo $custom_link; ?> " target="_blank" style="all: unset; cursor:pointer">
            <?php if (is_single()) {
            ?>
                <h2>Cote seu plano de saúde agora!</h2>
            <?php
            } else {
            ?>
                <h2>Cuide bem de você e de quem você ama</h2>
            <?php
            }
            ?>

            <?php if (is_single()) {
            ?>
                <p class="cta_paragraph_single">
                    Um problema de saúde que acontece conosco ou com nossa família pode representar uma despesa médica ou hospitalar inesperada, se não quisermos enfrentar as longas esperas do SUS.
                </p>
            <?php
            } else {
            ?>
                <p>
                    Um problema de saúde que acontece conosco ou com nossa família pode representar uma despesa médica ou hospitalar inesperada, se não quisermos enfrentar as longas esperas do SUS.
                </p>
            <?php
            }
            ?>
            <a class="<?php echo is_single() ? 'cta_button_single_style_1' : 'cta_button_single_style_2'; ?>" href="<?php echo $custom_link; ?>" target="_blank">
                Cotar plano de saúde agora!</a>
        </a>
    </div>
</section>