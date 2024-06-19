<?php 
get_header();
?>
<div class="page_404">
    <div class="page_404_img">
        <img src="<?php echo get_theme_file_uri('/img/homen-demonstrando-ter-feito-algo-errado.webp') ?>" alt="homen gesticulando ter feito algo errado levando a mão na cabeça">
    </div>

    <div class="page_404_content">
        <h1 class="page_404_h1">ERRO 404</h1>
        <h2 class="page_404_h2">Página não encontrada</h2>
        <p class="page_404_paragraph">Ops! Parece que você encontrou uma página perdida no universo digital. Nossos especialistas estão em busca dela agora mesmo.</p>
        <a class="page_404_back_to_home" href="<?php echo home_url('/') ?>">Voltar para home</a>
    </div>
</div>
<?php get_footer() ?>