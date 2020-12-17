<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();

$user_id = (int)$_GET['id'];
$users = get_userdata($user_id);
$class_name = get_field('class_name', 'user_'.$user_id); // 教室名
$thumbnail = get_field('class_pict_1', 'user_'.$user_id);
$class_contact = get_field('class_contact', 'user_'.$user_id);
if ($class_contact['value'] == 1) {
    $class_email = get_field('class_email', 'user_'.$user_id);
    $class_tel = get_field('class_tel', 'user_'.$user_id);
    $contact_url = '/contact-teacher?tel='.$class_tel.'&email='.$class_email;
} else {
    $class_email = null;
    $class_tel = null;
    $contact_url = '/contact-class/';
}
?>

<section class="class__single sidebar-layout">
<div class="md_container">
<div class="row">

<div class="col-sm-8 p-0">

<div class="class__single__about mb-5">
<div class="md_topTitle mb-3 flower-01"><?php echo $class_name; ?></div>
<?php if ($thumbnail): ?>
<div id="class-slides" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#class-slides" data-slide-to="0" class="active"></li>
<?php if (get_field('class_pict_2', 'user_'.$user_id)): ?>
<li data-target="#class-slides" data-slide-to="1"></li>
<?php endif; ?>
<?php if (get_field('class_pict_3', 'user_'.$user_id)): ?>
<li data-target="#class-slides" data-slide-to="2"></li>
<?php endif; ?>
<?php if (get_field('class_pict_4', 'user_'.$user_id)): ?>
<li data-target="#class-slides" data-slide-to="3"></li>
<?php endif; ?>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="<?php echo $thumbnail; ?>" class="d-block w-100" alt="<?php echo $class_name; ?>">
</div>
<?php if (get_field('class_pict_2', 'user_'.$user_id)): ?>
<div class="carousel-item">
<img src="<?php echo get_field('class_pict_2', 'user_'.$user_id); ?>" class="d-block w-100" alt="<?php echo $class_name; ?>">
</div>
<?php endif; ?>
<?php if (get_field('class_pict_3', 'user_'.$user_id)): ?>
<div class="carousel-item">
<img src="<?php echo get_field('class_pict_3', 'user_'.$user_id); ?>" class="d-block w-100" alt="<?php echo $class_name; ?>">
</div>
<?php endif; ?>
<?php if (get_field('class_pict_4', 'user_'.$user_id)): ?>
<div class="carousel-item">
<img src="<?php echo get_field('class_pict_4', 'user_'.$user_id); ?>" class="d-block w-100" alt="<?php echo $class_name; ?>">
</div>
<?php endif; ?>
</div>
<a class="carousel-control-prev" href="#class-slides" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#class-slides" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
<?php else: ?>
<div class="img-wrap">
<img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="<?php echo $class_name; ?>">
</div>
<?php endif; ?>
<p class="about-txt"><?php echo get_field('class_desc', 'user_'.$user_id); ?></p>
<div class="home__keyword-list mt-3">
<?php
$calss_search_tags = get_field('calss_search_tags', 'user_'.$user_id);
foreach ($calss_search_tags as $key => $tag): ?>
<p class="md_icon_normal"><?php echo $tag['label']; ?></p>
<?php endforeach; ?>
</div>
<?php if (!get_field('class_hidden', 'user_'.$user_id)): ?>
<a href="<?php echo $home.$contact_url; ?>" class="btn btn-primary col-12">お問い合わせ</a>
<?php endif; ?>
</div>

<div class="class__single__info bg-info py-5  mb-3">
<div class="md_topTitle mb-3 text-center arrow">基本情報</div>
<table class="w-100">
<tr class="row">
<td class="col-3 bg-secondary">住所</td>
<td class="col-9 bg-white"><?php echo '〒'.get_field('class_zipcode', 'user_'.$user_id); ?><br>
<?php echo get_field('class_pref', 'user_'.$user_id); ?>
<?php echo get_field('calss_address_1', 'user_'.$user_id); ?>
<?php echo get_field('calss_address_2', 'user_'.$user_id); ?></td>
</tr>
<tr class="row">
<td class="col-3 bg-secondary">アクセス</td>
<td class="col-9 bg-white"><?php echo get_field('calss_station', 'user_'.$user_id); ?></td>
</tr>
<tr class="row">
<td class="col-3 bg-secondary">コース</td>
<td class="col-9 bg-white"><?php echo get_field('class_schedule', 'user_'.$user_id); ?></td>
</tr>
<tr class="row">
<td class="col-3 bg-secondary">レッスン費用</td>
<td class="col-9 bg-white">1回 <?php echo get_field('class_lesson', 'user_'.$user_id); ?></td>
</tr>
<tr class="row">
<td class="col-3 bg-secondary">体験費用</td>
<td class="col-9 bg-white">1時間 <?php echo get_field('calss_price', 'user_'.$user_id); ?></td>
</tr>
<tr class="row">
<td class="col-3 bg-secondary">入会金</td>
<td class="col-9 bg-white">
<?php if (get_field('calss_price_nyukai', 'user_'.$user_id)): ?>
なし
<?php else: ?>
<?php echo get_field('class_join', 'user_'.$user_id); ?>
<?php endif; ?>
</td>
</tr>
<tr class="row">
<td class="col-3 bg-secondary">その他</td>
<td class="col-9 bg-white"><?php echo get_field('class_other', 'user_'.$user_id); ?></td>
</tr>
</table>
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://maps.google.co.jp/maps?output=embed&q=<?php echo get_field('calss_geo', 'user_'.$user_id); ?>"></iframe>
</div>
</div>

<div class="class__single__teacher bg-info py-5  mb-5">
<div class="md_topTitle mb-3 text-center arrow">講師情報</div>
<div class="row">
<div class="img-wrap col-sm-2">
<?php if (get_field('teacher_profile_pict_admin', 'user_'.$user_id)): ?>
<img class="w-100" src="<?php echo get_field('teacher_profile_pict_admin', 'user_'.$user_id); ?>" alt="講師写真">
<?php else: ?>
<img src="<?php echo $wp_url; ?>/dist/images/images_none.png" alt="講師写真">
<?php endif; ?>
</div>
<div class="col-sm-10">
<div class="profile">
<div class="bg-secondary">
<p class="text-center">講師「<?php echo $users->last_name.' '.$users->first_name; ?>」プロフィール</p>
</div>
<ul class="bg-white">
<li><?php echo get_field('teacher_sex', 'user_'.$user_id)['label']; ?>講師</li>
<?php if (get_field('teacher_profile', 'user_'.$user_id)): ?>
<li><?php echo get_field('teacher_profile', 'user_'.$user_id); ?></li>
<?php endif; ?>
</ul>
<small class="d-block mt-1" style="font-size: 10px;">ID：<?php echo get_field('teacher_montei_no', 'user_'.$user_id); ?></small>
</div>
<?php if (get_field('teacher_voice', 'user_'.$user_id)): ?>
<div class="comment bg-white">
<p><?php echo get_field('teacher_voice', 'user_'.$user_id); ?></p>
</div>
<?php endif; ?>
</div>
</div>
</div>
<?php if (get_field('students_voice_1', 'user_'.$user_id)): ?>
<div class="class__single__voice my-5">
<div class="md_topTitle mb-3 text-center">生徒の声</div>
<div class="row">
<div class="class__single__voice__inner col-sm-6">
<p><?php echo get_field('students_voice_1', 'user_'.$user_id); ?></p>
</div>
<?php if (get_field('students_voice_2', 'user_'.$user_id)): ?>
<div class="class__single__voice__inner col-sm-6">
<p><?php echo get_field('students_voice_2', 'user_'.$user_id); ?></p>
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>

<?php if (get_field('class_hp_url', 'user_'.$user_id) || get_field('class_twitter_url', 'user_'.$user_id) || get_field('class_insta_url', 'user_'.$user_id) || get_field('class_fb_url', 'user_'.$user_id) || get_field('class_blog_url', 'user_'.$user_id)): ?>
<div class="class__single__sns py-5">
<div class="row flex-wrap">
<?php if (get_field('class_hp_url', 'user_'.$user_id)): ?>
<a href="<?php echo get_field('class_hp_url', 'user_'.$user_id); ?>" class="class__single__sns__inner col-sm-3 text-center py-3 md_mincho mb-2" target="_blank">
<img class="d-inline-block align-middle" src="<?php echo $wp_url; ?>/dist/images/icon_jp.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/icon_jp.png 1x, <?php echo $wp_url; ?>/dist/images/icon_jp@2x.png 2x">
<span class="d-inline-block align-middle ml-1">ホームページ</span>
</a>
<?php endif; ?>
<?php if (get_field('class_blog_url', 'user_'.$user_id)): ?>
<a href="<?php echo get_field('class_blog_url', 'user_'.$user_id); ?>" class="class__single__sns__inner col-sm-3 text-center py-3 md_mincho mb-2" target="_blank">
<img class="d-inline-block align-middle" src="<?php echo $wp_url; ?>/dist/images/icon_blog.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/icon_blog.png 1x, <?php echo $wp_url; ?>/dist/images/icon_blog@2x.png 2x">
<span class="d-inline-block align-middle ml-1">ブログ</span>
</a>
<?php endif; ?>
<?php if (get_field('class_twitter_url', 'user_'.$user_id)): ?>
<a href="<?php echo get_field('class_twitter_url', 'user_'.$user_id); ?>" class="class__single__sns__inner col-sm-3 text-center py-3 md_mincho mb-2" target="_blank">
<img class="d-inline-block align-middle" src="<?php echo $wp_url; ?>/dist/images/icon_tw.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/icon_tw.png 1x, <?php echo $wp_url; ?>/dist/images/icon_tw@2x.png 2x">
<span class="d-inline-block align-middle ml-1">Twitter</span>
</a>
<?php endif; ?>
<?php if (get_field('class_insta_url', 'user_'.$user_id)): ?>
<a href="<?php echo get_field('class_insta_url', 'user_'.$user_id); ?>" class="class__single__sns__inner col-sm-3 text-center py-3 md_mincho mb-2" target="_blank">
<img class="d-inline-block align-middle" src="<?php echo $wp_url; ?>/dist/images/icon_ins.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/icon_ins.png 1x, <?php echo $wp_url; ?>/dist/images/icon_ins@2x.png 2x">
<span class="d-inline-block align-middle ml-1">Instagram</span>
</a>
<?php endif; ?>
<?php if (get_field('class_fb_url', 'user_'.$user_id)): ?>
<a href="<?php echo get_field('class_fb_url', 'user_'.$user_id); ?>" class="class__single__sns__inner col-sm-3 text-center py-3 md_mincho mb-2" target="_blank">
<img class="d-inline-block align-middle" src="<?php echo $wp_url; ?>/dist/images/icon_fb.png" alt="" srcset="<?php echo $wp_url; ?>/dist/images/icon_fb.png 1x, <?php echo $wp_url; ?>/dist/images/icon_fb@2x.png 2x">
<span class="d-inline-block align-middle ml-1">Facebook</span>
</a>
<?php endif; ?>
</div>
</div>
<?php endif; ?>

<div class="home__column py-5">
<div class="md_topTitle mb-5 border-line">講師コラム</div>
<div class="row archive column">
<?php
$args = [
  'posts_per_page' => 6,
  'orderby' => 'date',
  'order' => 'DESC',
  'author' => $user_id,
];
$posts = get_posts($args);
foreach ($posts as $post):
setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/dist/images/guide-1_main.png';
}
?>
<div class="archive__inner col-sm-4">
<a href="<?php echo $p; ?>">
<div class="img-wrap"><img src="<?php echo $i; ?>" alt="<?php echo $t; ?>"></div>
<h3 class="md_mincho"><?php echo $t; ?></h3>
<p><?php the_time('Y.m.d'); ?></p>
</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<div class="button text-center"><a href="<?php echo $home; ?>/blog/" class="md_btn_lineWhite">一覧を見る</a></div>
</div>
<?php if (!get_field('class_hidden', 'user_'.$user_id)): ?>
<a href="<?php echo $home.$contact_url; ?>" class="btn btn-primary col-12 mb-5">お問い合わせ</a>
<?php endif; ?>
</div>

<div class="col-md-4 p-0 hidden-xs">
<?php get_template_part('sidebar-class'); ?>
</div>

</div>
</div>
</section>

<?php get_footer();
