<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="p:domain_verify" content="77603d9d93164d81aa568f342f84d340" />

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-30774525-1', 'auto');
        ga('send', 'pageview');
    </script>
    <meta name="google-site-verification" content="tKZM7NjiCkZrKQQ5oDHlk26Wt-Vg6B-oCJMDja9rCpo" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Planodesaude.net - Simulação de Planos de Saúde",
            "url": "https://www.planodesaude.net",
            "sameAs": [
                "https://www.facebook.com/Planodesaudenet",
                "https://www.youtube.com/channel/UCpHpafNcDd7lESJCxq8LNYQ",
                "https://twitter.com/planodesaudenet",
                "https://www.instagram.com/planodesaudenet/"
            ],
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Avenida Brigadeiro Faria Lima, 201, Centro, São Paulo",
                "addressRegion": "SP",
                "postalCode": "05426-100",
                "addressCountry": "BR"
            }
        }
    </script>

    <?php wp_head(); ?>
</head>
<?php
$custom_color_site = get_theme_mod('primary_color', '');
?>
<style>
    :root {
        /* --color-primary: #305992; */
        /* --color-primary: #5B8FCB; */
        --color-primary: <?php echo $custom_color_site ?>;
    }
</style>

<body <?php body_class(); ?>>

    <header class="header_mobile">
        <div class="wrapper">
            <svg class="menu_hamburguer" xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                <path d="M3 12.5H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3 6.5H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3 18.5H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="side_menu_mobile">
                <div class="logo_mobile">
                    <a href="<?php echo home_url('/') ?>" aria-label="Logo plano de saúde">
                        <img src="<?php echo get_theme_file_uri('/img/logo_planodesaude.png') ?>" alt="">
                    </a>
                </div>
                <nav>
                    <?php wp_nav_menu(array('theme_location' => 'pds_header_menu', 'depth' => 2, 'menu_class' => 'pds_header_menu')); ?>
                </nav>
                <div class="header_search_mobile">
                    <?php get_search_form(); ?>
                </div>
                <img class="close_menu" src="<?php echo get_theme_file_uri('/img/close-icon.png') ?>" alt="Fechar menu">
            </div>
            <div class="logo_mobile">
                <a href="<?php echo home_url('/') ?>" aria-label="Logo plano de saúde">
                    <img src="<?php echo get_theme_file_uri('/img/logo_planodesaude_mobile.svg') ?>" alt="">
                </a>
            </div>
        </div>
    </header>

    <div class="wrapper">

        <header class="header_desktop">
            <div>
                <?php if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                ?>
                    <a href="<?php echo home_url('/') ?>" aria-label="Logo plano de saúde"><span><?php bloginfo('name'); ?></span></a>
                <?php
                } ?>
            </div>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'pds_header_menu', 'depth' => 2, 'menu_class' => 'pds_header_menu')); ?>
            </nav>
            <div class="header_search">
                <?php get_search_form(); ?>
            </div>
        </header>
    </div>

    <script>
        let hamburguer = document.querySelector('.menu_hamburguer');
        hamburguer.addEventListener("click", () => {
            let header_mobile = document.querySelector('.header_mobile');
            header_mobile.classList.add('active');

            let close_menu = document.querySelector('.close_menu');
            close_menu.addEventListener('click', () => {
                header_mobile.classList.remove('active');
            })
        })

        document.querySelectorAll('.menu-item-has-children').forEach(item => {
            item.addEventListener('click', function() {

                let subMenu = this.querySelector('.sub-menu');
                subMenu.classList.toggle('show');

                if (subMenu.classList.contains('show')) {
                    this.style.color = 'var(--color-primary)';
                    let link = document.appendChild;
                    console.log(link);
                } else {
                    this.style.color = '';
                }
            });
        });
    </script>

    <main>