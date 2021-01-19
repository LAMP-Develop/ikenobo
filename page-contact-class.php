<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<div class="contact">
<div class="md_container">
<h2 class="md_topTitle mb-3 p-0"><?php the_title(); ?></h2>

<div class="contact__step__list row mb-4">
<div class="contact__step__list-item input py-2 col-4 text-center">
<p class="contact__step__list-item-num text-primary">STEP 1</p>
<p class="md_mincho">情報入力</p>
</div>
<div class="contact__step__list-item confirm py-2 col-4 text-center">
<p class="contact__step__list-item-num text-primary">STEP 2</p>
<p class="md_mincho">送信確認</p>
</div>
<div class="contact__step__list-item complete py-2 col-4 text-center">
<p class="contact__step__list-item-num text-primary">STEP 3</p>
<p class="md_mincho">送信完了</p>
</div>
</div>
<div class="contact___form">
<?php the_content(); ?>
</div>

</div>
</div>

<?php get_footer();
