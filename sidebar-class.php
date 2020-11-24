<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

$form_pref = isset($_GET['pref']) ? $_GET['pref'] : null;
?>

<div class="sidebar">

<div class="d-none d-md-block">
<div class="md_topTitle">教室検索</div>
<?php include('search.php'); ?>
</div>

<?php if($form_pref != '' && $form_pref != null): ?>
<div class="sidebar__blog mt-5">
<div class="md_topTitle"><?php echo $form_pref; ?>エリアの人気ブログ</div>
<div class="archive">
<a href="#" class="archive__inner row">
<div class="col-5 img-wrap">
<img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。">
</div>
<div class="col-7 txt-wrap">
<h3 class="md_mincho">ブログタイトルが入ります。</h3>
<p>池坊いけばな教室</p>
</div>
</a>
<a href="#" class="archive__inner row">
<div class="col-5 img-wrap">
<img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。">
</div>
<div class="col-7 txt-wrap">
<h3 class="md_mincho">ブログタイトルが入ります。</h3>
<p>池坊いけばな教室</p>
</div>
</a>
<a href="#" class="archive__inner row">
<div class="col-5 img-wrap">
<img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。">
</div>
<div class="col-7 txt-wrap">
<h3 class="md_mincho">ブログタイトルが入ります。</h3>
<p>池坊いけばな教室</p>
</div>
</a>
<a href="#" class="archive__inner row">
<div class="col-5 img-wrap">
<img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。">
</div>
<div class="col-7 txt-wrap">
<h3 class="md_mincho">ブログタイトルが入ります。</h3>
<p>池坊いけばな教室</p>
</div>
</a>
<a href="#" class="archive__inner row">
<div class="col-5 img-wrap">
<img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。">
</div>
<div class="col-7 txt-wrap">
<h3 class="md_mincho">ブログタイトルが入ります。</h3>
<p>池坊いけばな教室</p>
</div>
</a>
</div>
</div>
<?php endif; ?>

</div>
