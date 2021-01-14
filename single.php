<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="single sidebar-layout">
<div class="md_container">
<div class="row">

<div class="col-md-8 p-0">
<?php
if (have_posts()):
while (have_posts()): the_post(); ?>
<article>
<?php
$t = get_the_title();
$category = get_the_category();
if (is_array($category)) {
    $cat = $category[0];
    $cat_name = $cat->name;
}
$posttags = get_the_tags();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = false;
}
?>
<?php if (count($category) > 0): ?>
<p class="md_icon_normal mb-2 m-0"><?php echo $cat_name; ?></p>
<?php endif; ?>
<div class="md_topTitle flower-04"><?php echo $t; ?></div>
<p class="data text-dark md_mincho"><?php the_time('Y.m.d'); ?></p>
<?php if ($i): ?>
<div class="single__img my-4">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</div>
<?php endif; ?>
<div class="single-main">
<?php the_content(); ?>
</div>

<!--カスタム投稿タイプ-->
<?php if ( is_singular( array('guide','class-faq','ikenobomedia') )): //全国講師コラム
  $user = $post->post_author;
  ?>
  <!-- 何も表示しない -->
<?php else : //その他 ?>
  <div class="wp-block-buttons mb-5">
    <div class="wp-block-button">
      <a class="wp-block-button__link bg-primary md_mincho" href="https://lesson.ikenobo.jp/class/detail/?id=<?php echo $post->post_author  ?>" target="_blank" rel="noreferrer noopener">この教室について詳しく見る</a>
    </div>
  </div>

<?php endif; ?>

</article>
<?php endwhile; endif; ?>
</div>

<div class="col-md-4 p-0">
<?php include('sidebar-blog.php') ?>
</div>

</div>
</div>
</section>

<?php get_footer();
