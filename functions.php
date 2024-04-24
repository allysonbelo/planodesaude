<?php

function pds_load_scripts()
{
    wp_enqueue_style('pds-style', get_stylesheet_uri(), array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'pds_load_scripts');

function add_google_analytics_code()
{
?>
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-HJY2MRERVP"></script> -->
    <!-- <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-HJY2MRERVP');
    </script> -->
    <?php
}

add_action('wp_head', 'add_google_analytics_code');