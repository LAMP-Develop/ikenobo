<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<div class="home__media py-5 mt-5">
<div class="md_container">
<div class="md_topTitle mb-5 flower-01 border-line">IKENOBOメディア</div>
<div class="row archive media">
<?php
$args = [
    'posts_per_page' => 3,
    'post_type' => 'ikenobomedia',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/dist/images/guide-1_main.png';
}
?>
<div class="archive__inner col-sm-4">
<a href="<?php echo $p; ?>">
<div class="img-wrap"><img src="<?php echo $i; ?>" alt="<?php echo $t; ?>"></div>
<h3 class="md_mincho"><?php echo $t; ?></h3>
<p><?php the_time('Y.m.d'); ?></p>
</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<div class="button  text-center"><a href="<?php echo $home; ?>/ikenobomedia/" class="md_btn_lineWhite">詳しく見る</a></div>
</div>
</div>

<div class="home__guide py-5 pl-3 pr-3">
<div class="md_container">
<div class="md_topTitle mb-5 flower-02 border-line">「はじめての方」へお役立ちコンテンツ</div>
<div class="content">
<div class="home__guide__list row">
<div class="home__guide__list__inner col-sm-6">
<img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="いけばなを始める前に" srcset="<?php echo $wp_url; ?>/dist/images/guide-1_main.png 1x, <?php echo $wp_url; ?>/dist/images/guide-1_main@2x.png 2x">
<div class="info">
<div class="md_subTitle mb-3">いけばなを始める前に</div>
<div class="subText md_js_matchheight">いけばなって実際どういうものなの？いけばなって何が身につくの？など、いけばなに感じる疑問やいけばなを始める前に知っておきたい基本的な知識などをお教えします。</div>
<div class="button text-right"><a href="<?php echo $home; ?>/beginner/" class="md_textLink_normal">STEP1のコラムをみる</a></div>
</div>
</div>
<div class="home__guide__list__inner col-sm-6">
<img src="<?php echo $wp_url; ?>/dist/images/guide-2_main.png" alt="お稽古の基礎知識" srcset="<?php echo $wp_url; ?>/dist/images/guide-2_main.png 1x, <?php echo $wp_url; ?>/dist/images/guide-2_main@2x.png 2x">
<div class="info">
<div class="md_subTitle mb-3">お稽古の基礎知識</div>
<div class="subText md_js_matchheight">いけばなを学びたいけど、いきなり教室へ習いに行くのは不安という方に、お稽古の内容や教室の様子をお伝えします。お稽古にかかる費用や通う回数などお稽古をはじめる前に知っておきたい情報も合わせてご紹介します。</div>
<div class="button text-right"><a href="<?php echo $home; ?>/beginner#step2" class="md_textLink_normal">STEP2のコラムをみる</a></div>
</div>
</div>
<div class="home__guide__list__inner col-sm-6">
<img src="<?php echo $wp_url; ?>/dist/images/guide-3_main.png" alt="道具の選び方" srcset="<?php echo $wp_url; ?>/dist/images/guide-3_main.png 1x, <?php echo $wp_url; ?>/dist/images/guide-3_main@2x.png 2x">
<div class="info">
<div class="md_subTitle mb-3">道具の選び方</div>
<div class="subText md_js_matchheight">「花ばさみ」「剣山」「花器」など、いけばなで使うさまざまな道具。どういったものを選べば良いのか、選ぶ時に気をつけておきたい注意点など、道具を揃える前に読んでおきたい情報をお届けします。</div>
<div class="button text-right"><a href="<?php echo $home; ?>/beginner#step3" class="md_textLink_normal">STEP3のコラムをみる</a></div>
</div>
</div>
<div class="home__guide__list__inner col-sm-6">
<img src="<?php echo $wp_url; ?>/dist/images/guide-4_main.png" alt="お花の楽しみ方" srcset="<?php echo $wp_url; ?>/dist/images/guide-4_main.png 1x, <?php echo $wp_url; ?>/dist/images/guide-4_main@2x.png 2x">
<div class="info">
<div class="md_subTitle mb-3">お花の楽しみ方</div>
<div class="subText md_js_matchheight">お稽古に通うことだけがいけばなの楽しみ方ではありません。<br>最も身近な場所で言えば、自宅でもお花を楽しむことができますよ。毎日の生活の中でいけばなを楽しむヒントをお届けします。</div>
<div class="button text-right"><a href="<?php echo $home; ?>/beginner#step4" class="md_textLink_normal">STEP4のコラムをみる</a></div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="home__faq mb-5 py-5">
<div class="md_container">
<a class="home__faq__wrap" href="<?php echo $home; ?>/faq/">
<div class="home__faq__content">
<div class="ttl md_mincho">よくあるご質問</div>
<div>いけばなをこれからはじめる方も、習い始めたばかりの人も、<br>最初に気になる様々な疑問にお答えしています。</div>
</div>
</a>
</div>
</div>

<div class="home__column py-5">
<div class="md_container">
<div class="md_topTitle mb-5 flower-01 border-line">全国講師コラム</div>
<div class="row archive column">
<?php
$args = [
  'posts_per_page' => 8,
  'orderby' => 'date',
  'order' => 'DESC',
];
$posts = get_posts($args);
foreach ($posts as $post):
setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/dist/images/guide-1_main.png';
}

$author_id = get_the_author_meta('ID');
$class_name = get_field('class_name', 'user_'. $author_id);
?>
<div class="archive__inner col-sm-3">
<a href="<?php echo $p; ?>">
<div class="img-wrap"><img src="<?php echo $i; ?>" alt="<?php echo $t; ?>"></div>
<h3 class="md_mincho"><?php echo $t; ?></h3>
<p><span class="md_icon_purple mr-2">教室名</span><?php echo $class_name; ?></p>
</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<div class="button  text-center"><a href="<?php echo $home; ?>/blog/" class="md_btn_lineWhite">一覧を見る</a></div>
</div>
</div>

<div class="home__keyword">
<div class="md_container bg-info" style="z-index: 1;">
<div class="row">
<div class="md_topTitle mb-5 text-center">人気のキーワード</div>
<div class="home__keyword-list text-center">
<p class="md_icon_normal"><a href="<?php echo $home; ?>/tag/いけばなの基本/">いけばなの基本</a></p>
<p class="md_icon_normal"><a href="<?php echo $home; ?>/tag/初めてのいけばな/">初めてのいけばな</a></p>
<p class="md_icon_normal"><a href="<?php echo $home; ?>/tag/基礎のおけいこ/">基礎のおけいこ</a></p>
<p class="md_icon_normal"><a href="<?php echo $home; ?>/tag/花のある暮らし/">花のある暮らし</a></p>
<p class="md_icon_normal"><a href="<?php echo $home; ?>/tag/おうちでいけばな/">おうちでいけばな</a></p>
<p class="md_icon_normal"><a href="<?php echo $home; ?>/tag/体験レッスン/">体験レッスン</a></p>
<p class="md_icon_normal"><a href="<?php echo $home; ?>/tag/日本文化/">日本文化</a></p>
<p class="md_icon_normal"><a href="<?php echo $home; ?>/tag/伝統文化/">伝統文化</a></p>
<p class="md_icon_normal"><a href="<?php echo $home; ?>/tag/自分磨き/">自分磨き</a></p>
<p class="md_icon_normal"><a href="<?php echo $home; ?>/tag/感性を磨く/">感性を磨く</a></p>
</div>
</div>
</div>
</div>

<div class="home__link py-5 pl-3 pr-3">
<div class="md_container">
<div class="home__link__list row">
<div class="home__link__list__inner col-sm-3">
<a class="md_textLink_normal md_mincho" href="https://www.ikenobo.jp/lp/bl.html">ビギナーズレッスン</a>
</div>
<div class="home__link__list__inner col-sm-3">
<a class="md_textLink_normal md_mincho" href="https://www.ikenobo.jp/lp/tagcampaign/index.html
">花をいけよう</a>
</div>
<div class="home__link__list__inner col-sm-3">
<a class="md_textLink_normal md_mincho" href="#">いけばな写真集</a>
</div>
<div class="home__link__list__inner col-sm-3">
<a class="md_textLink_normal md_mincho" href="https://www.kadosha.co.jp/" target="_blank">オンラインストア花楽</a>
</div>
</div>
</div>
</div>

<?php get_footer();
