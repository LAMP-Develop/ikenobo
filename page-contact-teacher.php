<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header();

if (isset($_GET['tel'])) {
    $tel = $_GET['tel'];
} else {
  $tel = null;
}
if (isset($_GET['email'])) {
    $email = $_GET['email'];
} else {
  $email = null;
}
?>

<div class="contact-teacher">
<div class="md_container">
<h2 class="md_topTitle text-center mb-5">講師へ直接お問い合わせ</h2>
<div class="row">
<div class="col-sm-6 mb-4">
<h3 class="contact-teacher-ttl md_mincho mb-4">電話でお問い合わせ</h3>
<p class="mb-4">お電話では「池坊のホームページを見て」とお伝え下さい。<br>レッスン中の場合など、出られない場合もあります。改めておかけ直しください。</p>
<div class="w-100 text-center">
<a class="btn btn-primary text-center pl-5 pr-5" href="tel:<?php echo $tel; ?>"><img class="mr-2" src="<?php echo $wp_url; ?>/dist/images/icon_phone.svg" alt="電話アイコン">教室へ電話する</a>
</div>
<!-- <a class="d-block w-100 text-center mt-3" href="tel:<?php echo $tel; ?>">TEL：<?php echo $tel; ?></a> -->
</div>
<div class="col-sm-6 mb-4">
<h3 class="contact-teacher-ttl md_mincho mb-4">メールでお問い合わせ</h3>
<div class="w-100 text-center">
<a class="btn btn-primary text-center pl-5 pr-5" href="<?php echo $home; ?>/contact-class/">
<img class="d-inline-block align-middle mr-2" src="<?php echo $wp_url; ?>/dist/images/icon_mail.svg" alt="メールアイコン">
<span class="d-inline-block align-middle">メールでお問い合わせ</span>
</a>
</div>
</div>
</div>
<div class="contact-teacher__help bg-info col-sm-6 rounded py-4" style="z-index: 1;">
<h3 class="contact-teacher__help-ttl md_mincho text-center">講師への連絡が取れない方</h3>
<ul class="contact-teacher-list my-4">
<li class="contact-teacher-list-item">何度電話しても繋がらない</li>
<li class="contact-teacher-list-item">メールを送って1周間経っても返信がない</li>
<li class="contact-teacher-list-item">返信エラーでメールを送ることができない</li>
</ul>
<div class="w-100 text-center">
<a class="btn btn-primary text-center pl-5 pr-5" href="<?php echo $home; ?>/contact-conecting/">お困りの場合はこちら</a>
</div>
</div>
</div>
</div>

<?php get_footer();
