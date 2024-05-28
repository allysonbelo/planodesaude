<?php

require get_template_directory() . '/inc/customizer.php';

function pds_load_scripts()
{
    wp_enqueue_style('pds-style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style('all-styles', get_theme_file_uri('/styles/all-styles.css'));

    if (is_front_page()) {
        wp_enqueue_style('front-page', get_theme_file_uri('/styles/front-page.css'));
    }

    if (is_home()) {
        wp_enqueue_style('blog', get_theme_file_uri('/styles/blog.css'));
    }

    if (is_single()) {
        wp_enqueue_style('single', get_theme_file_uri('/styles/single.css'));
    }

    if (is_404()) {
        wp_enqueue_style('404', get_theme_file_uri('/styles/404.css'));
    }

    if (is_page()) {
        wp_enqueue_style('page', get_theme_file_uri('/styles/page.css'));
    }

    if ( is_page_template('template-termos.php') ) {
        wp_enqueue_style('template-termos', get_theme_file_uri('/styles/termos.css'));
    }

    if ( is_page_template('template-faq.php') ) {
        wp_enqueue_style('template-faq', get_theme_file_uri('/styles/faq.css'));
    }

    if(is_category()){
        wp_enqueue_style('category', get_theme_file_uri('/styles/category.css'));
    }

    if(is_tag()){
        wp_enqueue_style('category', get_theme_file_uri('/styles/category.css'));
    }

    if(is_search()){
        wp_enqueue_style('category', get_theme_file_uri('/styles/category.css'));
    }

    if(is_author()){
        wp_enqueue_style('author', get_theme_file_uri('/styles/author.css'));
    }
    

    // loading scripts
    wp_enqueue_script('pre-loading', get_template_directory_uri() . '/js/pre_loading_page.js', array(), '1.0', true);
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

function pds_config()
{
    register_nav_menus(
        array(
            'pds_header_menu' => 'Header Menu',
            'pds_footer_menu' => 'Footer Menu'
        )
    );

    add_theme_support('custom-logo', array(
        // 'height' => 38,
        // 'width' => 210,
        'flex-heigth' => true,
        'flex-width' => true
    ));

    add_theme_support('title-tag');

}
add_action('after_setup_theme', 'pds_config');
