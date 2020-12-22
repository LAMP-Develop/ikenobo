<?php

// 投稿文字数列の追加
function add_posts_columns_count($columns)
{
    global $post_type;
    if (in_array($post_type, ['post'])) {
        $columns['count'] = '文字数';
    }
    return $columns;
}
add_filter('manage_posts_columns', 'add_posts_columns_count');
function custom_posts_columns_count($column_name, $post_id)
{
    global $post_type;
    if (in_array($post_type, ['post'])) {
        if ('count' == $column_name) {
            $count = mb_strlen(strip_tags(get_post_field('post_content', $post_id)));
            echo $count;
        }
    }
}
add_action('manage_posts_custom_column', 'custom_posts_columns_count', 10, 2);

// サムネイル列の追加
function add_posts_columns_thumbnail($columns)
{
    global $post_type;
    if (in_array($post_type, ['post'])) {
        $columns['thumbnail'] = 'アイキャッチ';
    }
    return $columns;
}
add_filter('manage_posts_columns', 'add_posts_columns_thumbnail');
function custom_posts_columns_thumbnail($column_name, $post_id)
{
    global $post_type;
    if (in_array($post_type, ['post'])) {
        if ('thumbnail' === $column_name) {
            $thumb_id  = get_post_thumbnail_id($post_id);
            if ($thumb_id) {
                $thumb_img = wp_get_attachment_image_src($thumb_id, 'medium');
                echo '<img src="',$thumb_img[0],'" width="100px">';
            } else {
                echo 'なし';
            }
        }
    }
}
add_action('manage_posts_custom_column', 'custom_posts_columns_thumbnail', 10, 2);


function sort_posts_column($columns)
{
    global $post_type;
    if (in_array($post_type, ['post'])) {
        $columns = [
            'cb' => '<input type="checkbox" />',
            'thumbnail' => 'アイキャッチ',
            'title' => '記事タイトル',
            'categories' => 'カテゴリー',
            'tags' => 'タグ',
            'count' => '記事文字数',
            'date' => '日時',
            'author' => '作成者',
        ];
    }
    return $columns;
}
add_filter('manage_posts_columns', 'sort_posts_column');


function extended_user_search($user_query)
{
    if ($user_query->query_vars['search']) {
        $search = trim($user_query->query_vars['search'], '*');
        if ($_REQUEST['s'] == $search) {
            global $wpdb;
            $user_query->query_from .= " JOIN wp_usermeta UM1 ON UM1.user_id = {$wpdb->users}.ID AND UM1.meta_key = 'teacher_no'";
            $user_query->query_from .= " JOIN wp_usermeta UM2 ON UM2.user_id = {$wpdb->users}.ID AND UM2.meta_key = 'teacher_montei_no'";
            $user_query->query_from .= " JOIN wp_usermeta UM3 ON UM3.user_id = {$wpdb->users}.ID AND UM3.meta_key = 'teacher_tel'";
            $user_query->query_from .= " JOIN wp_usermeta UM4 ON UM4.user_id = {$wpdb->users}.ID AND UM4.meta_key = 'class_branch_name'";
            $user_query->query_where = 'WHERE 1' . $user_query->get_search_sql($search, array( 'user_login', 'user_email', 'user_nicename', 'UM1.meta_value', 'UM2.meta_value', 'UM3.meta_value', 'UM4.meta_value'), 'both');
        }
    }
}
add_action('pre_user_query', 'extended_user_search');

/* 【管理画面】ユーザー一覧に項目を追加する */
function custom_users_columns($columns)
{
    $columns['teacher_profile_pict_admin'] = '写真';
    $columns['teacher_birthday'] = '生年月日';
    $columns['class_branch_name'] = '支部名';
    // $columns['class_branch_code'] = '支部コード';
    // $columns['teacher_no'] = '会員番号';
    $columns['teacher_montei_no'] = '門弟番号';
    $columns['teacher_address'] = '住所';
    $columns['teacher_tel'] = '電話番号';
    return $columns;
}
function custom_users_custom_column($dummy, $column, $user_id)
{
    $user_info = get_userdata($user_id);

    if ($column == 'teacher_birthday') {
        return $user_info->teacher_birthday;
    }
    if ($column == 'teacher_profile_pict_admin') {
        if ($user_info->teacher_profile_pict_admin != null && $user_info->teacher_profile_pict_admin != '') {
            return '<img src="'.wp_get_attachment_url($user_info->teacher_profile_pict_admin).'" width="50">';
        } else {
            return '<img src="https://secure.gravatar.com/avatar/491a67b76429f0b2c6695b8b06f288d9?s=64&d=mm&r=g" width="32">';
        }
    }
    if ($column == 'class_branch_name') {
        return $user_info->class_branch_name;
    }
    // if ($column == 'class_branch_code') {
    //     return $user_info->class_branch_code;
    // }
    // if ($column == 'teacher_no') {
    //     return $user_info->teacher_no;
    // }
    if ($column == 'teacher_montei_no') {
        return $user_info->teacher_montei_no;
    }
    if ($column == 'teacher_address') {
        return $user_info->teacher_address;
    }
    if ($column == 'teacher_tel') {
        return $user_info->teacher_tel;
    }
}
function remove_users_columns($columns)
{
    unset($columns['role'], $columns['posts']);
    return $columns;
}
add_filter('manage_users_columns', 'custom_users_columns');
add_filter('manage_users_columns', 'remove_users_columns');
add_filter('manage_users_custom_column', 'custom_users_custom_column', 10, 3);

// プロフィール項目の非表示
function user_profile_hide_script($hook)
{
    $script = <<<SCRIPT
    jQuery(function($) {
        $('.column-username .avatar').hide(); //アバター
        $('#your-profile .user-rich-editing-wrap').hide(); //ビジュアルエディター
        $('#your-profile .user-syntax-highlighting-wrap').hide(); //シンタックスハイライト
        $('#your-profile .user-admin-color-wrap').hide(); //管理画面の配色
        $('#your-profile .user-comment-shortcuts-wrap').hide(); //キーボードショートカット
        $('#your-profile .show-admin-bar').hide(); //ツールバー
        $('#your-profile .user-language-wrap').hide(); //言語
        $('#your-profile .user-user-login-wrap').hide(); //ユーザー名
        $('#your-profile .user-display-name-wrap').hide(); //ブログ上の表示名
        $('#your-profile .user-profile-picture').hide(); //プロフィール
        $('#your-profile .user-url-wrap').hide(); //サイト
        $('#your-profile .user-aim-wrap').hide(); //AIM
        $('#your-profile .user-yim-wrap').hide(); //Yahoo IM
        $('#your-profile .user-jabber-wrap').hide(); //Jabber / Google Talk
        $('#your-profile .user-googleplus-wrap').hide(); //Google+
        $('#your-profile .user-facebook-wrap').hide(); //facebook
        $('#your-profile .user-instagram-wrap').hide(); //instagram
        $('#your-profile .user-linkedin-wrap').hide(); //linkedin
        $('#your-profile .user-myspace-wrap').hide(); //myspace
        $('#your-profile .user-pinterest-wrap').hide(); //pinterest
        $('#your-profile .user-soundcloud-wrap').hide(); //soundcloud
        $('#your-profile .user-twitter-wrap').hide(); //twitter
        $('#your-profile .user-tumblr-wrap').hide(); //tumblr
        $('#your-profile .user-youtube-wrap').hide(); //youtube
        $('#your-profile .user-wikipedia-wrap').hide(); //wikipedia
        $('#your-profile h2').hide(); //wikipedia
    });
    SCRIPT;
    wp_add_inline_script('jquery-core', $script);
}
add_action('admin_enqueue_scripts', 'user_profile_hide_script');
