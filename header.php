<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
?>

<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-25422142-3"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag() {dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-25422142-3', {
  'linker': {
  'domains': ['ikenobo.jp', 'ikenoboys.com', 'lesson.ikenobo.jp']
  }
});
</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- js-loading -->
<!-- <div id="js_loading">
<div class="spinner">
<div class="double-bounce1"></div>
<div class="double-bounce2"></div>
</div>
</div> -->
<!-- js-loading -->

<!-- js-black-bg -->
<div class="black-bg" id="js-black-bg"></div>
<!-- /js-black-bg -->
<!-- /sideMenu end -->
<!-- header start -->
<header id="header">
<!-- /header start -->

<div class="leftLink">
<ul class="clearFix">
<li><a href="<?php echo get_main_domain(); ?>/ikebanaikenobo/" class="md_mincho">池坊について</a></li>
<li><a href="<?php echo $home; ?>" class="md_mincho text-primary">いけばなを習う</a></li>
<li><a href="<?php echo get_main_domain(); ?>/event/" class="md_mincho">花展・イベントを探す</a></li>
</ul>
</div>

<div class="logo"><a href="<?php echo get_main_domain(); ?>"><img src="<?php echo $wp_url ?>/dist/images/logo.svg" alt="池坊 IKENOBO" width="90"></a></div>

<!-- header end -->
</header>
<!-- /header end -->

<!-- sideMenu start -->
<nav id="sideMenu">
<!-- /sideMenu start -->

<nav class="global-nav">
<!-- <div class="lang">
<div class="md_selectBox md_mincho">Language:
<select name="language" id="language" class="md_mincho" onChange="location.href=value;">
<option value="https://www.ikenobo.jp">日本語</option>
<option value="https://www.ikenobo.jp/english">English</option>
<option value="https://chs.ikenobo.jp">简体中文</option>
<option value="https://cht.ikenobo.jp">繁體中文</option>
</select>
</div>
</div> -->
<!-- <div class="member"><a href="member/" class="md_btn_lineWhite md_mincho">会員専用ページ</a></div> -->
<ul class="global-nav__list">
<li class="global-nav__item">
</li>
<li class="global-nav__item"><a href="<?php echo get_main_domain(); ?>" class="linkRight md_mincho">トップページ</a></li>
<li class="global-nav__item"><a href="<?php echo get_main_domain(); ?>/ikebanaikenobo/" class="linkRight md_mincho">池坊について</a></li>
<li class="global-nav__item"><a href="<?php echo $home; ?>" class="linkRight md_mincho">いけばなを習う</a></li>
<li class="global-nav__item"><a href="<?php echo get_main_domain(); ?>/event/" class="linkRight md_mincho">花展・イベントを探す</a></li>
<li class="global-nav__item"><a href="<?php echo get_main_domain(); ?>/information/" class="linkRight md_mincho">お知らせ</a></li>
<!-- <li class="global-nav__item"><a href="" class="linkRight md_mincho">会員の方へ</a></li>
<li class="global-nav__item"><a href="" class="linkRight md_mincho">学校関係者の方へ</a></li>
<li class="global-nav__item"><a href="" class="linkRight md_mincho">アクセス</a></li>
<li class="global-nav__item"><a href="" class="linkRight md_mincho">プレスリリース</a></li> -->
<li class="global-nav__item"><a href="<?php echo $home; ?>/contact/" class="linkContact md_mincho">教室お問い合わせ窓口</a></li>
</ul>
</nav>
<div class="hamburger" id="js-hamburger">
<span class="hamburger__line hamburger__line--1"></span>
<span class="hamburger__line hamburger__line--2"></span>
<span class="hamburger__line hamburger__line--3"></span>
</div>

<!-- sideMenu end -->
</nav>
<!-- /sideMenu end -->

<main>
<?php get_template_part('mv'); ?>
