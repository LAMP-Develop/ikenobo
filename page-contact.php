<?php
/*
template name: お問い合わせ
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<div class="contact">
<div class="md_container">
<h2 class="md_topTitle mb-3 p-0"><?php echo get_the_title(); ?></h2>

<?php if (is_page('contact-help')): ?>
<!-- 事務局へ直接お問い合わせ -->
<!-- 教室紹介お問い合わせ窓口 -->
<p class="contact__text mb-4">※こちらのお問い合わせは、<span class="text-primary">当サイト運営事務局宛</span>のお問い合せ窓口です。講師の方へのお問い合わせは、各教室詳細ページの「お問い合わせ」ボタンからお問い合わせください。</p>
<?php elseif (is_page(['contact-class', 'contact'])): ?>
<!-- 教室紹介のお問い合わせ -->
<!-- <p class="contact__text mb-4">こちらのお問い合わせは講師への直接のお問い合わせになります。<br>内容を確認後、講師からあなたにご連絡をいたします。あなたのご希望に合うかどうかをお確かめください。</p> -->
<?php else: ?>
<!-- 講師への連絡が取れない方 -->
<p class="contact__text mb-4">こちらのお問い合わせは<span class="text-primary">当サイト運営事務局宛</span>のお問い合わせになります。<br>お問い合わせがあった旨を教室の講師にお伝えします。<br>内容の確認後、講師からあなたにご連絡をいたします。あなたのご希望に合うかどうかをお確かめください。</p>
<?php endif; ?>

<div class="contact__step__list row mb-4">
<div class="contact__step__list-item py-2 check col-4 text-center">
<p class="contact__step__list-item-num text-primary">STEP 1</p>
<p class="md_mincho">情報入力</p>
</div>
<div class="contact__step__list-item py-2 col-4 text-center">
<p class="contact__step__list-item-num text-primary">STEP 2</p>
<p class="md_mincho">送信確認</p>
</div>
<div class="contact__step__list-item py-2 col-4 text-center">
<p class="contact__step__list-item-num text-primary">STEP 3</p>
<p class="md_mincho">送信完了</p>
</div>
</div>
<div class="contact___form">
<?php the_content(); ?>
</div>

</div>
</div>
<?php if (is_page(['contact-class', 'contact-help', 'contact-conecting'])):
$user_id = (int)$_GET['id'];
$users = get_userdata($user_id);
$class_name = get_field('class_name', 'user_'.$user_id); // 教室名
?>
<script>
jQuery(function($) {
  $('input[name="to_mail"]').val('<?php echo $_GET['email']; ?>');
  $('input[name="teacher_name"]').val('<?php echo $_GET['teacher_name']; ?>');
  $('input[name="class_name"]').val('<?php echo $class_name; ?>');
});
</script>
<?php endif; ?>
<?php get_footer();
