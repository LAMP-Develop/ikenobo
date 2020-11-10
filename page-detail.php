<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php
$user_id = (int)$_GET['id'];
$users = get_userdata($user_id);

$class_name = get_field('class_name', 'user_'.$user_id); // 教室名
$thumbnail = get_field('class_pict_1', 'user_'.$user_id);
?>

<section class="class__single sidebar-layout">
<div class="md_container">
<div class="row">

<div class="col-sm-8 p-0">

<div class="class__single__about mb-5">
<div class="md_topTitle mb-3 flower-01"><?php echo $class_name; ?></div>
<?php if ($thumbnail): ?>
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
<a href="###" class="btn btn-primary col-12">お問い合わせ</a>
</div>

<div class="class__single__info bg-info py-5  mb-3">
<div class="md_topTitle mb-3 text-center arrow">基本情報</div>
<table>
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
<td class="col-3 bg-secondary">曜日</td>
<td class="col-9 bg-white">毎週<?php
$weeks = get_field('class_week', 'user_'.$user_id);
foreach ($weeks as $week) {
    echo $week;
}
?>曜日</td>
</tr>
<tr class="row">
<td class="col-3 bg-secondary">時間帯</td>
<td class="col-9 bg-white"><?php
$times = get_field('calss_times', 'user_'.$user_id);
foreach ($times as $i => $time) {
    if ($i > 0) {
        echo "<br>";
    }
    echo $time;
}
?></td>
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
<td class="col-9 bg-white"><?php echo get_field('class_join', 'user_'.$user_id); ?></td>
</tr>
<tr class="row">
<td class="col-3 bg-secondary">その他</td>
<td class="col-9 bg-white"><?php echo get_field('class_other', 'user_'.$user_id); ?></td>
</tr>
</table>
<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item" src="https://maps.google.co.jp/maps?output=embed&q=<?php echo get_field('calss_geo', 'user_'.$user_id); ?>"></iframe>
<!-- <a class="bg-white text-center" href="#">Google mapで見る</a> -->
</div>
</div>

<div class="class__single__teacher bg-info py-5  mb-5">
<div class="md_topTitle mb-3 text-center arrow">講師情報</div>
<div class="row">
<div class="img-wrap col-sm-2">
<img src="<?php echo $wp_url; ?>/dist/images/images_none.png" alt="講師写真">
</div>
<div class="col-sm-10">
<div class="profile">
<div class="bg-secondary">
<p class="text-center">講師「<?php echo $users->last_name.' '.$users->first_name; ?>」プロフィール</p>
</div>
<ul class="bg-white">
<li><?php echo get_field('teacher_sex', 'user_'.$user_id)['label']; ?></li>
<?php if(get_field('teacher_profile', 'user_'.$user_id)): ?>
<li><?php echo get_field('teacher_profile', 'user_'.$user_id); ?></li>
<?php endif; ?>
</ul>
</div>
<?php if(get_field('teacher_voice', 'user_'.$user_id)): ?>
<div class="comment bg-white">
<p><?php echo get_field('teacher_voice', 'user_'.$user_id); ?></p>
</div>
<?php endif; ?>
</div>
</div>
</div>
<?php if(get_field('students_voice_1', 'user_'.$user_id)): ?>
<div class="class__single__voice my-5">
<div class="md_topTitle mb-3 text-center">生徒の声</div>
<div class="row">
<div class="class__single__voice__inner col-sm-6">
<p><?php echo get_field('students_voice_1', 'user_'.$user_id); ?></p>
</div>
<?php if(get_field('students_voice_2', 'user_'.$user_id)): ?>
<div class="class__single__voice__inner col-sm-6">
<p><?php echo get_field('students_voice_2', 'user_'.$user_id); ?></p>
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>

<?php if (get_field('class_hp_url', 'user_'.$user_id) != false || get_field('class_twitter_url', 'user_'.$user_id) != false || get_field('class_insta_url', 'user_'.$user_id) != false || get_field('class_fb_url', 'user_'.$user_id) != false): ?>
<div class="class__single__sns  py-5">
<div class="row">
<?php if(get_field('class_hp_url', 'user_'.$user_id)): ?>
<a href="<?php echo get_field('class_hp_url', 'user_'.$user_id); ?>" class="class__single__sns__inner col-sm-3 text-center py-3 md_mincho" target="_blank">ホームページ</a>
<?php endif; ?>
<?php if(get_field('class_twitter_url', 'user_'.$user_id)): ?>
<a href="<?php echo get_field('class_twitter_url', 'user_'.$user_id); ?>" class="class__single__sns__inner col-sm-3 text-center py-3 md_mincho">Twitter</a>
<?php endif; ?>
<?php if(get_field('class_insta_url', 'user_'.$user_id)): ?>
<a href="<?php echo get_field('class_insta_url', 'user_'.$user_id); ?>" class="class__single__sns__inner col-sm-3 text-center py-3 md_mincho">Instagram</a>
<?php endif; ?>
<?php if(get_field('class_fb_url', 'user_'.$user_id)): ?>
<a href="<?php echo get_field('class_fb_url', 'user_'.$user_id); ?>" class="class__single__sns__inner col-sm-3 text-center py-3 md_mincho">Facebook</a>
<?php endif; ?>
</div>
</div>
<?php endif; ?>

<div class="home__column py-5">
<div class="md_topTitle mb-5 border-line">講師コラム</div>
<div class="row archive column">
<div class="archive__inner col-sm-4">
<a href="###">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。"></div>
<h3 class="md_mincho">ブログタイトルが入ります。</h3>
<p>2020.01.01</p>
</a>
</div>
<div class="archive__inner col-sm-4">
<a href="###">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。"></div>
<h3 class="md_mincho">ブログタイトルが入ります。</h3>
<p>2020.01.01</p>
</a>
</div>
<div class="archive__inner col-sm-4">
<a href="###">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。"></div>
<h3 class="md_mincho">ブログタイトルが入ります。</h3>
<p>2020.01.01</p>
</a>
</div>
<div class="archive__inner col-sm-4">
<a href="###">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。"></div>
<h3 class="md_mincho">ブログタイトルが入ります。</h3>
<p>2020.01.01</p>
</a>
</div>
<div class="archive__inner col-sm-4">
<a href="###">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。"></div>
<h3 class="md_mincho">ブログタイトルが入ります。</h3>
<p>2020.01.01</p>
</a>
</div>
<div class="archive__inner col-sm-4">
<a href="###">
<div class="img-wrap"><img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。"></div>
<h3 class="md_mincho">ブログタイトルが入ります。</h3>
<p>2020.01.01</p>
</a>
</div>
</div>
<div class="button  text-center"><a href="###" class="md_btn_lineWhite">一覧を見る</a></div>
</div>

<a href="###" class="btn btn-primary col-12 mb-5">お問い合わせ</a>

</div>

<div class="col-md-4 p-0 hidden-xs">
<?php get_template_part('sidebar-class'); ?>
</div>

</div>
</div>
</section>

<?php get_footer();
