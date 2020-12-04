<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

// GET検索
$form_pref = isset($_GET['pref']) ? $_GET['pref'] : null;
$form_address = isset($_GET['address']) ? $_GET['address'] : null;
$form_keywords = isset($_GET['keywords']) ? $_GET['keywords'] : null;
$form_weeks = isset($_GET['weeks']) ? $_GET['weeks'] : null;
$form_times = isset($_GET['times']) ? $_GET['times'] : null;
$form_price = isset($_GET['price']) ? $_GET['price'] : null;
$form_tags = isset($_GET['tags']) && $_GET['tags'] != '' ? $_GET['tags'] : null;

$user_per_page = 10;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = [
    'number' => $user_per_page,
    'paged' => $paged,
    'role' => 'author',
    'meta_query' => [
    ],
];

// フィルター：都道府県
if ($form_pref != '' && $form_pref != null) {
    $args['meta_query'][] = [
        'key' => 'class_pref',
        'value' => $form_pref,
        'compare' => '='
    ];
}

// フィルター：キーワード
if ($form_keywords != '' && $form_keywords != null) {
    $args['meta_query'][] = [
        'relation' => 'OR',
        [
            'key' => 'calss_address_1', // 住所
            'value' => $form_keywords,
            'compare' => 'LIKE'
        ],
        [
            'key' => 'calss_station',
            'value' => $form_keywords,
            'compare' => 'LIKE'
        ],
        [
            'key' => 'class_name',
            'value' => $form_keywords,
            'compare' => 'LIKE'
        ],
        [
            'key' => 'first_name',
            'value' => $form_keywords,
            'compare' => 'LIKE'
        ],
        [
            'key' => 'last_name',
            'value' => $form_keywords,
            'compare' => 'LIKE'
        ],
    ];
}

// フィルター：市区町村
if ($form_address != '' && $form_address != null) {
    $args['meta_query'][] = [
        'key' => 'calss_address_1',
        'value' => $form_address,
        'compare' => 'LIKE'
    ];
}

// フィルター：曜日
if ($form_weeks != '' && $form_weeks != null) {
    foreach ($form_weeks as $val) {
        $args['meta_query'][] = [
            'key' => 'class_week',
            'value' => $val,
            'compare' => 'LIKE'
        ];
    }
}

// フィルター：時間
if ($form_times != '' && $form_times != null) {
    foreach ($form_times as $val) {
        $args['meta_query'][] = [
            'key' => 'calss_times',
            'value' => $val,
            'compare' => 'LIKE'
        ];
    }
}

// フィルター：費用
if ($form_price != '' && $form_price != null) {
    $args['meta_query'][] = [
        'key' => 'calss_price',
        'value' => $form_price,
        'compare' => '='
    ];
}

// フィルター：タグ
if (is_array($form_tags)) {
    foreach ($form_tags as $val) {
        $args['meta_query'][] = [
            'key' => 'calss_search_tags',
            'value' =>$val,
            'compare' => 'LIKE'
        ];
    }
}

$user_query = new WP_User_Query($args);
get_header(); ?>

<div class="sub__mv sub__mv__class bg-info pb-5">
<div class="container">
<div class="md_topTitle mb-3 flower-03 border-line">検索結果</div>
<p>
<?php echo $form_pref != '' ? $form_pref.',' : ''; ?>
<?php echo $form_address != '' ? $form_address.',' : ''; ?>
<?php echo $form_keywords != '' ? '”'.$form_keywords.'”' : ''; ?>
</p>
<a class="filter" data-toggle="modal" data-target="#exampleModal"><img src="<?php echo $wp_url; ?>/dist/images/icon_search.svg" alt="虫眼鏡アイコン">詳細検索</a>
</div>
</div>

<section class="class__list sidebar-layout">
<div class="container">
<p class="mb-3"><?php echo $paged * $user_per_page - ($user_per_page-1); ?>〜<?php if ($user_query->total_users >= $user_per_page) {
    if ($paged == ceil($user_query->total_users / $user_per_page)) {
        echo $user_query->total_users;
    } else {
        echo $paged * $user_per_page;
    }
} else {
    echo $user_query->total_users;
} ?>件を表示中／全<?php echo number_format($user_query->total_users); ?>件</p>
<div class="row">

<div class="col-md-8 p-0">
<div class="row archive">
<?php
if (!empty($user_query->results)):
foreach ($user_query->results as $user):
$user_id = $user->ID;
$class_name = get_field('class_name', 'user_'.$user_id);
$thumbnail = get_field('class_pict_1', 'user_'.$user_id) != null ? get_field('class_pict_1', 'user_'.$user_id) : $wp_url.'/dist/images/guide-1_main.png';
?>
<div class="archive__inner col-sm-6">
<a href="<?php echo $home; ?>/class/detail?id=<?php echo $user_id; ?>">
<div class="img-wrap"><img src="<?php echo $thumbnail; ?>" alt="<?php echo $class_name; ?>"></div>
<h3 class="md_mincho"><?php echo $class_name; ?></h3>
<table class="w-100">
<tr class="row">
<td class="col-3 bg-info">住所</td>
<td class="col-9">
<?php echo '〒'.get_field('class_zipcode', 'user_'.$user_id); ?><br>
<?php echo get_field('class_pref', 'user_'.$user_id); ?>
<?php echo get_field('calss_address_1', 'user_'.$user_id); ?>
<?php echo get_field('calss_address_2', 'user_'.$user_id); ?>
</td>
</tr>
<tr class="row">
<td class="col-3 bg-info">アクセス</td>
<td class="col-9"><?php echo get_field('calss_station', 'user_'.$user_id); ?></td>
</tr>
<tr class="row">
<td class="col-3 bg-info">コース</td>
<td class="col-9"><?php echo get_field('class_schedule', 'user_'.$user_id); ?></td>
</tr>
<!-- <tr class="row">
<td class="col-3 bg-info">曜日</td>
<td class="col-9">毎週<?php
// $weeks = get_field('class_week', 'user_'.$user_id);
// foreach ($weeks as $i => $week) {
//     if ($i > 0) {
//         echo '、';
//     }
//     echo $week.'曜日';
// }
?></td>
</tr> -->
<!-- <tr class="row">
<td class="col-3 bg-info">時間帯</td>
<td class="col-9"><?php
// $times = get_field('calss_times', 'user_'.$user_id);
// foreach ($times as $i => $time) {
//     if ($i > 0) {
//         echo "<br>";
//     }
//     echo $time;
// }
?></td>
</tr> -->
</table>
<div class="home__keyword-list mt-3">
<?php
$calss_search_tags = get_field('calss_search_tags', 'user_'.$user_id);
foreach ($calss_search_tags as $key => $tag): ?>
<p class="md_icon_normal"><?php echo $tag['label']; ?></p>
<?php endforeach; ?>
</div>
<small class="d-block mt-1 text-right" style="font-size: 10px;">ID：<?php echo get_field('teacher_montei_no', 'user_'.$user_id); ?></small>
</a>
</div>
<?php endforeach; ?>
<?php else: ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>

<div class="pagenavi">
<?php
$total_user = $user_query->total_users;
$total_pages = ceil($total_user / $user_per_page);
echo paginate_links(array(
    'current' => $paged,
    'total' => $total_pages,
    'prev_text' => '<i class="fas fa-chevron-left"></i>',
    'next_text' => '<i class="fas fa-chevron-right"></i>',
    'type' => 'list',
    'end_size' => 1,
    'mid_size' => 1,
));
?>
</div>

</div>

<div class="col-md-4 p-0 hidden-xs">
<?php get_template_part('sidebar-class'); ?>
</div>

</div>
</div>
</section>

<?php get_footer();
