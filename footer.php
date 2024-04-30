</main>

<footer class="footer">
    <div class="wrapper">
        <div class="footer_content">
            <div class="logo_mobile">
                <a href="<?php echo home_url('/') ?>" aria-label="Logo plano de saúde">
                    <img src="<?php echo get_theme_file_uri('/img/logo_planodesaude_footer.avif') ?>" alt="logo planodesaude.net">
                </a>
            </div>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'pds_footer_menu', 'depht' => 0, 'menu_class' => 'footer_menu')) ?>
            </nav>
            <div class="foooer_social">
                <a href="https://twitter.com/planodesaudenet" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFFFFF" class="bi bi-twitter-x" viewBox="0 0 16 16">
                        <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                    </svg>
                </a>
                <a href="https://www.facebook.com/Planodesaudenet" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 12 22" fill="none">
                        <path d="M11.5 1H8.5C7.17392 1 5.90215 1.52678 4.96447 2.46447C4.02678 3.40215 3.5 4.67392 3.5 6V9H0.5V13H3.5V21H7.5V13H10.5L11.5 9H7.5V6C7.5 5.73478 7.60536 5.48043 7.79289 5.29289C7.98043 5.10536 8.23478 5 8.5 5H11.5V1Z" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <a href="https://www.youtube.com/channel/UCpHpafNcDd7lESJCxq8LNYQ" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18" fill="none">
                        <path d="M22.5406 3.42C22.4218 2.94541 22.1799 2.51057 21.8392 2.15941C21.4986 1.80824 21.0713 1.55318 20.6006 1.42C18.8806 1 12.0006 1 12.0006 1C12.0006 1 5.12057 1 3.40057 1.46C2.92982 1.59318 2.50255 1.84824 2.16192 2.19941C1.82129 2.55057 1.57936 2.98541 1.46057 3.46C1.14579 5.20556 0.991808 6.97631 1.00057 8.75C0.989351 10.537 1.14334 12.3213 1.46057 14.08C1.59153 14.5398 1.83888 14.9581 2.17872 15.2945C2.51855 15.6308 2.93939 15.8738 3.40057 16C5.12057 16.46 12.0006 16.46 12.0006 16.46C12.0006 16.46 18.8806 16.46 20.6006 16C21.0713 15.8668 21.4986 15.6118 21.8392 15.2606C22.1799 14.9094 22.4218 14.4746 22.5406 14C22.8529 12.2676 23.0069 10.5103 23.0006 8.75C23.0118 6.96295 22.8578 5.1787 22.5406 3.42Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M9.75 11.6819L15.5003 8.48549L9.75 5.28906V11.6819Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>

            <div class="footer_copy">
                <p>
                    <?php echo get_theme_mod('set_copyright', 'Copyright© 2023 - PlanoDeSaude.net - Todos os direitos reservados.'); ?>
                </p>
                <p>
                    <?php echo get_theme_mod('set_copyright2', 'PlanoDeSaude.net® é de propriedade da Zipia Tecnologia LTDA, registrada sob o CNPJ 17.467.253/0001-72.'); ?>
                </p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>