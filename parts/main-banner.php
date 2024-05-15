<?php
$custom_link = get_theme_mod('custom_link', ''); // Obtém o link personalizado do Personalizador do Tema
?>
<div class="main_banner">
    <div class="wrapper">
        <div class="main_banner_content">
            <h1>Cote seu plano de <br> saúde e odontologico <br> em menos de 5 <br> minutos</h1>
            <h2>Para começar qual plano você gostaria de cotar?</h2>
            <div class="main_banner_plans">
                <!-- Use onmouseover="preloadPage(this)" no link para realizar a chamada do script que faz o pre carregamento da pagina ao passar o mouse sobre o link -->
                <a href="<?php echo $custom_link ?>" target="_blank">
                    <div class="plan">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81 94" fill="none">
                            <path d="M77 90V80.4286C77 75.3516 75.0772 70.4825 71.6547 66.8926C68.2322 63.3026 63.5902 61.2858 58.75 61.2858H22.25C17.4098 61.2858 12.7678 63.3026 9.3453 66.8926C5.92276 70.4825 4 75.3516 4 80.4286V90" stroke="#707070" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M40.5 42.1429C50.5792 42.1429 58.75 33.5724 58.75 23.0001C58.75 12.4278 50.5792 3.85723 40.5 3.85723C30.4208 3.85723 22.25 12.4278 22.25 23.0001C22.25 33.5724 30.4208 42.1429 40.5 42.1429Z" stroke="#707070" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Plano <strong>Individual</strong></span>
                    </div>
                    <span class="text_cotacao">Iniciar cotação</span>
                </a>
                <a href="<?php echo $custom_link ?>" target="_blank">
                    <div class="plan">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 113 88" fill="none">
                            <path d="M80.3636 83.6328V74.7847C80.3636 70.0914 78.3523 65.5903 74.772 62.2716C71.1918 58.953 66.336 57.0885 61.2727 57.0885H23.0909C18.0277 57.0885 13.1718 58.953 9.5916 62.2716C6.01136 65.5903 4 70.0914 4 74.7847V83.6328" stroke="#707070" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M42.1817 39.3924C52.7253 39.3924 61.2726 31.4695 61.2726 21.6962C61.2726 11.9228 52.7253 4 42.1817 4C31.6381 4 23.0908 11.9228 23.0908 21.6962C23.0908 31.4695 31.6381 39.3924 42.1817 39.3924Z" stroke="#707070" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M109 83.6328V74.7847C108.997 70.8638 107.589 67.0549 104.997 63.956C102.406 60.8572 98.7773 58.6439 94.6816 57.6637" stroke="#707070" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M75.5908 4.57511C79.6973 5.54973 83.3371 7.76352 85.9364 10.8675C88.5356 13.9714 89.9464 17.789 89.9464 21.7183C89.9464 25.6476 88.5356 29.4651 85.9364 32.5691C83.3371 35.673 79.6973 37.8868 75.5908 38.8615" stroke="#707070" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Plano <strong>Familiar</strong></span>
                    </div>
                    <span class="text_cotacao">Iniciar cotação</span>
                </a>
                <a href="<?php echo $custom_link ?>" target="_blank">
                    <div class="plan">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103 92" fill="none">
                            <path d="M89.2037 22.5863H13.4671C8.23855 22.5863 4 26.747 4 31.8794V78.3451C4 83.4776 8.23855 87.6382 13.4671 87.6382H89.2037C94.4322 87.6382 98.6708 83.4776 98.6708 78.3451V31.8794C98.6708 26.747 94.4322 22.5863 89.2037 22.5863Z" stroke="#707070" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M70.2697 87.6382V13.2931C70.2697 10.8284 69.2723 8.4647 67.4968 6.7219C65.7214 4.9791 63.3134 4 60.8026 4H41.8684C39.3576 4 36.9496 4.9791 35.1742 6.7219C33.3988 8.4647 32.4014 10.8284 32.4014 13.2931V87.6382" stroke="#707070" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Plano <strong>Empresarial</strong></span>
                    </div>
                    <span class="text_cotacao">Iniciar cotação</span>
                </a>
            </div>
        </div>
        <div class="main_banner_image">
            <?php
            if (is_home()) {
            ?>
                <img class="banner_image" src="<?php echo get_theme_file_uri('/img/homen-gritando-em-um-megaphone-mobile.avif') ?>" alt="Homen gritando em um megafone" loading="lazy">
                <img class="banner_image_desktop" src="<?php echo get_theme_file_uri('/img/homen-gritando-em-um-megaphone.avif') ?>" alt="Homen gritando em um megafone" loading="lazy">
            <?php
            } else {
            ?>
                <img class="banner_image" src="<?php echo get_theme_file_uri('/img/doctor-presenting-mobile.avif') ?>" alt="Doutor de jaleco branco sorrindo" loading="lazy">
                <img class="banner_image_desktop" src="<?php echo get_theme_file_uri('/img/doctor-presenting-desktop.avif') ?>" alt="Doutor de jaleco branco sorrindo" loading="lazy">
            <?php
            }
            ?>
        </div>
    </div>
</div>