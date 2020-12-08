<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

<div class="sidebar nomal">

<!-- <div class="sidebar__more">
<h2 class="md_topTitle border-light text-center"><span>より深く</span><br>いけばなを知りたい方はこちら</h2>
<div class="guide__more__list">
<a href="<?php echo $home; ?>/guide-2/" class="guide__more__list__inner guide-2">
<p class="ttl md_mincho">2.お稽古の基礎知識</p>
</a>
<a href="<?php echo $home; ?>/guide-3/" class="guide__more__list__inner guide-3">
<p class="ttl md_mincho">3.道具の選び方</p>
</a>
<a href="<?php echo $home; ?>/guide-4/" class="guide__more__list__inner guide-4">
<p class="ttl md_mincho">4.お花の楽しみ方</p>
</a>
</div>
</div> -->

<div class="sidebar__blog mt-5">
<div class="md_topTitle">IKENOBOメディア</div>
<div class="archive">
<?php
$args = [
    'posts_per_page' => 5,
    'post_type' => 'ikenobomedia',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'medium');
} else {
    $i = $wp_url.'/dist/images/guide-1_main.png';
}
?>
<a href="<?php $p; ?>" class="archive__inner row">
<div class="col-5 img-wrap">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</div>
<div class="col-7 txt-wrap">
<h3 class="md_mincho"><?php echo $t; ?></h3>
</div>
</a>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>

</div>
