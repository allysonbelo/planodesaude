<?php

/*
Template Name: Faq
*/

get_header();
get_template_part('/parts/main-banner');
?>

<div class="wrapper">
    <div class="faq">
        <h2 class="faq_title"><?php the_title() ?></h2>
        <span class="faq_subtitle">Pesquise sua dúvida ou navegue entre as categorias</span>
        <div class="faq_search">
            <?php get_search_form(); ?>
        </div>
        <div class="desktop_grid">
            <ul class="faq_list">
                <li id="faq_item_1" class="faq_item_list active">Por que eu preciso de um plano de saúde?</li>
                <li id="faq_item_2" class="faq_item_list">Quanto custa um plano de saúde?</li>
                <li id="faq_item_3" class="faq_item_list">Como contrata um plano de saúde?</li>
            </ul>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let item1 = document.querySelector('#faq_item_1');
        let item2 = document.querySelector('#faq_item_2');
        let item3 = document.querySelector('#faq_item_3');

        let faq_content_1 = document.querySelector('.faq_content_1');
        let faq_content_2 = document.querySelector('.faq_content_2');
        let faq_content_3 = document.querySelector('.faq_content_3');

        // Garantir que o faq_content_1 inicie ativo
        faq_content_1.classList.add('active');
        item1.classList.add('active');

        item1.addEventListener('click', () => {
            faq_content_1.classList.add('active');
            item1.classList.add('active');

            faq_content_2.classList.remove('active');
            item2.classList.remove('active');
            faq_content_3.classList.remove('active');
            item3.classList.remove('active');
        });

        item2.addEventListener('click', () => {
            faq_content_2.classList.add('active');
            item2.classList.add('active');

            faq_content_1.classList.remove('active');
            item1.classList.remove('active');
            faq_content_3.classList.remove('active');
            item3.classList.remove('active');
        });

        item3.addEventListener('click', () => {
            faq_content_3.classList.add('active');
            item3.classList.add('active');

            faq_content_1.classList.remove('active');
            item1.classList.remove('active');
            faq_content_2.classList.remove('active');
            item2.classList.remove('active');
        });
    });

    document.querySelectorAll('.faq_question').forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            if (answer && answer.classList.contains('faq_answer')) {
                answer.style.display = (answer.style.display === 'none' || answer.style.display === '') ? 'block' : 'none';
            }
            question.classList.toggle('active_arrow');
        });
    });
</script>