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
    $columns['teacher_birthday'] = '生年月日';
    $columns['teacher_profile_pict'] = '写真';
    $columns['class_branch_name'] = '支部名';
    $columns['class_branch_code'] = '支部コード';
    $columns['teacher_no'] = '会員番号';
    $columns['teacher_montei_no'] = '門弟番号';
    $columns['teacher_address'] = '住所';
    $columns['teacher_tel'] = '電話番号';
    return $columns;
}
function custom_users_custom_column($dummy, $column, $user_id)
{
    if ($column == 'teacher_birthday') {
        $user_info = get_userdata($user_id);
        return $user_info->teacher_birthday;
    }
    if ($column == 'teacher_profile_pict') {
        $user_info = get_userdata($user_id);
        return $user_info->teacher_profile_pict;
    }
    if ($column == 'class_branch_name') {
        $user_info = get_userdata($user_id);
        return $user_info->class_branch_name;
    }
    if ($column == 'class_branch_code') {
        $user_info = get_userdata($user_id);
        return $user_info->class_branch_code;
    }
    if ($column == 'teacher_no') {
        $user_info = get_userdata($user_id);
        return $user_info->teacher_no;
    }
    if ($column == 'teacher_montei_no') {
        $user_info = get_userdata($user_id);
        return $user_info->teacher_montei_no;
    }
    if ($column == 'teacher_address') {
        $user_info = get_userdata($user_id);
        return $user_info->teacher_address;
    }
    if ($column == 'teacher_tel') {
        $user_info = get_userdata($user_id);
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
