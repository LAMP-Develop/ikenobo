<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

$userId = get_query_var('author');
$class_name = get_field('class_name', 'user_'.$userId);

get_header(); ?>
<div class="media sidebar-layout">
<div class="md_container">
<div class="row">
<div class="col-md-8 p-0">
<div class="md_topTitle text-center mb-5"><?php echo $class_name; ?>のコラム一覧</div>
<div class="row archive media">
<?php
if (have_posts()): while (have_posts()): the_post();
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/dist/images/guide-1_main.png';
}
?>
<div class="archive__inner col-md-6">
<a href="<?php echo $p; ?>">
<div class="img-wrap"><img src="<?php echo $i; ?>" alt="<?php echo $t; ?>"></div>
<h3 class="md_mincho"><?php echo $t; ?></h3>
<p><?php the_time('Y.m.d'); ?></p>
</a>
</div>
<?php endwhile; endif; ?>
</div>

<div class="pagenavi">
<?php wp_pagenavi(); ?>
</div>

</div>
<div class="col-md-4 p-0 hidden-xs">
<?php include('sidebar-blog.php') ?>
</div>
</div>
</div>
<?php get_footer();
