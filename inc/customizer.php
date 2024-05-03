<?php
function pds_customizer($wp_customize)
{
    // Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright Settings'
        )
    );

    // Copyright Setting
    $wp_customize->add_setting(
        'set_copyright',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  'Copyright X - All Rights Reserved',
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );

    // Copyright Control
    $wp_customize->add_control(
        'set_copyright',
        array(
            'label' =>  'Copyright Information',
            'description'   => 'Please, type your copyright here',
            'section'   =>  'sec_copyright',
            'type'  =>  'text',
        )
    );

    // Copyright Setting
    $wp_customize->add_setting(
        'set_copyright2',
        array(
            'type'  =>  'theme_mod',
            'default'   =>  'PlanoDeSaude.net® é de propriedade da Zipia Tecnologia LTDA, registrada sob o CNPJ 17.467.253/0001-72.',
            'sanitize_callback' =>  'sanitize_text_field'
        )
    );

    // Copyright Control
    $wp_customize->add_control(
        'set_copyright2',
        array(
            'label' =>  'Copyright Information Line 2',
            'description'   => 'Please, type your copyright here',
            'section'   =>  'sec_copyright',
            'type'  =>  'text',
        )
    );

    // link cotação
    // Seção para as configurações de link
    $wp_customize->add_section('custom_link_settings', array(
        'title' => __('Link Cotação', 'pds2024'),
        'priority' => 30,
    ));

    // Configuração para o link personalizado
    $wp_customize->add_setting('custom_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Controle para o link personalizado
    $wp_customize->add_control('custom_link_control', array(
        'label' => __('Link Personalizado', 'pds2024'),
        'section' => 'custom_link_settings',
        'settings' => 'custom_link',
        'type' => 'text',
    ));
}
add_action('customize_register', 'pds_customizer');
