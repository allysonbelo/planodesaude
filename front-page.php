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