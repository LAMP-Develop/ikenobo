<?php
/*
template name: お問い合わせ
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<div class="contact">
  <div class="md_container">
    <h2 class="md_topTitle mb-3 p-0">講師へ直接お問い合わせ</h2>
    <p class="contact__text mb-4">こちらのお問い合わせは講師への直接のお問い合わせになります。<br>内容を確認後、講師からあなたにご連絡をいたします。あなたのご希望に合うかどうかをお確かめください。</p>
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

<?php get_footer();
