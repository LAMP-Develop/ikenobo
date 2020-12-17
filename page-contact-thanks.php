<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); the_post(); ?>

<div class="contact">
<div class="md_container">
<h2 class="md_topTitle mb-3 p-0">お問い合わせ完了</h2>
<p class="contact__text mb-4">お問い合わせいただきありがとうございました。<br>折り返し、担当者よりご連絡いたしますので、 恐れ入りますがしばらくお待ちください。</p>
</div>
</div>

<?php get_footer();
