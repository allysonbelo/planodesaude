<?php
$custom_link = get_theme_mod('custom_link', ''); // Obtém o link personalizado do Personalizador do Tema
?>
<div class="main_banner single_banner">
    <div class="wrapper">
        <div class="main_banner_content">
            <h1>Cote seu plano de saúde agora!</h1>
            <h2>Tudo que precisamos é de 5 minutos e algumas respostas.</h2>
            <a class="link_cotacao" href="<?php echo $custom_link ?>" target="_blank">Iniciar cotação</a>
        </div>
        <div class="main_banner_image">
            <img class="banner_image_desktop" src="<?php echo get_theme_file_uri('/img/medico-usando-jaleco-branco-sorrindo-desktop.avif') ?>" alt="Homen gritando em um megafone" loading="lazy">
        </div>
    </div>
</div>
