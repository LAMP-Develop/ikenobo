<?php

// テーマディレクトリ
define('DIRECTORY', get_template_directory());

// 基本設定
require DIRECTORY.'/lib/functions/common-setting.php';

// アセットの読み込み
require DIRECTORY.'/lib/functions/resources.php';

// 管理画面のカスタマイズ
require DIRECTORY.'/lib/functions/admin.php';

function get_main_domain()
{
    return "https://ikenobo.jp";
}

function class_title($title)
{
    if (is_page('detail')) {
        $user_id = (int)$_GET['id'];
        $class_name = get_field('class_name', 'user_'.$user_id); // 教室名
        return $class_name.' - 【池坊公式】全国のいけばな教室検索サイト';
    }
    return $title;
}
add_filter('wpseo_title', 'class_title');

function prefix_filter_canonical_example($canonical)
{
    if (is_page('detail')) {
        $canonical = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    }
    return $canonical;
}
add_filter('wpseo_canonical', 'prefix_filter_canonical_example');

// function class_description($description)
// {
//     if (is_page('detail')) {
//         $user_id = (int)$_GET['id'];
//         $class_name = get_field('class_name', 'user_'.$user_id); // 教室名
//         return $class_name."ページです。";
//     }
//     return $description;
// }
// add_filter('wpseo_metadesc', 'class_description');
