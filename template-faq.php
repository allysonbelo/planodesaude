<?php
/*
Template Name: Faq
*/

get_header();
get_template_part('/parts/main-banner');
?>

<div class="wrapper">
    <div class="faq">
        <h2 class="faq_title"><?php echo esc_html(get_the_title()); ?></h2>
        <span class="faq_subtitle">Pesquise sua dúvida ou navegue entre as categorias</span>
        <div class="faq_search">
            <?php get_search_form(); ?>
        </div>
        <div class="desktop_grid">
            <ul class="faq_list">
                <li id="faq_item_1" class="faq_item_list">Tipos de planos de saúde</li>
                <li id="faq_item_2" class="faq_item_list">Coberturas</li>
                <li id="faq_item_3" class="faq_item_list">Vigência e carência</li>
                <li id="faq_item_4" class="faq_item_list">Assistência</li>
                <li id="faq_item_5" class="faq_item_list">Reembolso</li>
                <li id="faq_item_6" class="faq_item_list">Portabilidade</li>
                <li id="faq_item_7" class="faq_item_list">Cotação de Seguro</li>
                <li id="faq_item_8" class="faq_item_list">Contratação do seguro</li>
                <li id="faq_item_9" class="faq_item_list">Informações gerais</li>
            </ul>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const items = [
        document.querySelector('#faq_item_1'),
        document.querySelector('#faq_item_2'),
        document.querySelector('#faq_item_3'),
        document.querySelector('#faq_item_4'),
        document.querySelector('#faq_item_5'),
        document.querySelector('#faq_item_6'),
        document.querySelector('#faq_item_7'),
        document.querySelector('#faq_item_8'),
        document.querySelector('#faq_item_9')
    ];

    const contents = [
        document.querySelector('.faq_content_1'),
        document.querySelector('.faq_content_2'),
        document.querySelector('.faq_content_3'),
        document.querySelector('.faq_content_4'),
        document.querySelector('.faq_content_5'),
        document.querySelector('.faq_content_6'),
        document.querySelector('.faq_content_7'),
        document.querySelector('.faq_content_8'),
        document.querySelector('.faq_content_9')
    ];

    function resetActiveItems() {
        items.forEach(item => item.classList.remove('active'));
        contents.forEach(content => content && content.classList.remove('active'));
    }

    items.forEach((item, index) => {
        item.addEventListener('click', () => {
            resetActiveItems();
            item.classList.add('active');
            if (contents[index]) {
                contents[index].classList.add('active');
            }
        });
    });

    // Garantir que o primeiro item e conteúdo estejam ativos ao carregar a página
    if (items[0]) {
        items[0].classList.add('active');
    }
    if (contents[0]) {
        contents[0].classList.add('active');
    }


});

document.addEventListener('DOMContentLoaded', function() {
    var headings = document.querySelectorAll('.wp-block-group > h3');
    headings.forEach(function(heading) {
        heading.addEventListener('click', function() {
            // Adiciona a classe active_arrow ao clicar e remove se já estiver presente
            heading.classList.toggle('active_arrow');

            var content = heading.nextElementSibling;
            while (content) {
                if (content.style.display === 'none' || content.style.display === '') {
                    content.style.display = 'block';
                } else {
                    content.style.display = 'none';
                }
                content = content.nextElementSibling;
            }
        });
    });
});






</script>