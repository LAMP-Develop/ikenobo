<?php

// CSSの管理
function twpp_enqueue_styles()
{
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri().'/dist/css/style.css',
        [],
        '1.0.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

// JSの管理
function add_my_scripts()
{
    wp_enqueue_script(
        'base-script',
        get_template_directory_uri().'/dist/js/bundle.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'add_my_scripts');

// mwwpform設定
function autoback_my_mail($mail_raw, $val, $data)
{
    if ($data->get('tomail') !== null && $data->get('tomail') != '') {
        $mail_raw->to = $data->get('tomail');
    }
    return $mail_raw;
}
add_filter('mwform_admin_mail_mw-wp-form-67', 'autoback_my_mail', 10, 3);
