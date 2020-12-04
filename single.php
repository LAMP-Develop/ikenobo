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
$cat = $category[0];
$cat_name = $cat->name;
$posttags = get_the_tags();
$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
?>
<p class="md_icon_normal mb-2 m-0"><?php echo $cat_name; ?></p>
<div class="md_topTitle flower-04"><?php echo $t; ?></div>
<p class="data text-dark md_mincho">2020.01.01</p>
<div class="single__img my-4">
<img src="<?php echo $thumbnail; ?>" alt="<?php echo $t; ?>">
</div>
<div class="single-main">
<?php the_content(); ?>
</div>
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
