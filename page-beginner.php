<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="guide">
<!-- <div class="guide__about my-5 pb-5">
<div class="md_container">
<h2 class="md_topTitle mb-5 flower-01 border-line">いけばなを始める前に</h2>
<div class="row">
<div class="text-wrap col-sm-7">
<h3 class="md_mincho">花を楽しみたい。<br>その気持があれば誰でも。</h3>
<p>このページではいけばなの知識が全くない初心者の方でも、いけばなを始めるにあたっての事前知識やいけばなを通して得られるメリットなどを順序を立ててご説明します。誰でも最初は、初心者です。<br>まったくの初心者の方にも、わかりやすく丁寧に、いけばな体験をお楽しみいただけるようお教えします。<br>このページではいけばなの知識が全くない初心者の方でも、いけばなを始めるにあたっての事前知識やいけばなを通して得られるメリットなどを順序を立ててご説明します。誰でも最初は、初心者です。<br>まったくの初心者の方にも、わかりやすく丁寧に、いけばな体験をお楽しみいただけるようお教えします。</p>
</div>
<div class="img-wrap col-sm-5">
<img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="花を楽しみたい。その気持があれば誰でも。" srcset="<?php echo $wp_url; ?>/dist/images/guide-1_main.png 1x, <?php echo $wp_url; ?>/dist/images/guide-1_main@2x.png 2x">
</div>
</div>
</div>
</div> -->
<div id="step1" class="guide__step pb-5">
<div class="md_container">
<p class="guide__step--ttl">STEP1</p>
<h2 class="md_topTitle text-center">いけばなとはなにか知ろう！</h2>
<p class="guide__step-about">いけばなに興味があるけれど、私にもできるの？どんなふうにお花をいけるの？など、はじめてで気になることがある方は多いと思います。<br>まずいけばなとはどういっことなのか、いままで知らなかった発見ができます。</p>
<div class="row archive media py-5">
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'guide',
    'taxonomy' => 'guide_cats',
    'term' => 'step1',
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
<p><?php echo wp_strip_all_tags(mb_substr(get_the_content(), 0, 120, 'UTF-8'), true); ?></p>
</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
</div>
<!-- #step1 -->
<div id="step2" class="guide__step">
<div class="md_container">
<p class="guide__step--ttl">STEP2</p>
<h2 class="md_topTitle text-center">お稽古の基礎知識</h2>
<p class="guide__step-about">いけばなを学びたいけど、いきなり教室へ習いに行くのは不安という方に、お稽古の内容や教室の様子をお伝えします。<br>お稽古にかかる費用や通う回数などお稽古をはじめる前に知っておきたい情報も合わせてご紹介します。</p>
<div class="row archive py-5">
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'guide',
    'taxonomy' => 'guide_cats',
    'term' => 'step2',
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
<p><?php echo wp_strip_all_tags(mb_substr(get_the_content(), 0, 120, 'UTF-8'), true); ?></p>
</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
</div>
<!-- #step2 -->
<div id="step3" class="guide__step">
<div class="md_container">
<p class="guide__step--ttl">STEP3</p>
<h2 class="md_topTitle text-center">道具の選び方</h2>
<p class="guide__step-about">「花ばさみ」「剣山」「花器」など、いけばなで使うさまざまな道具。どういったものを選べば良いのか、<br>選ぶ時に気をつけておきたい注意点など、道具を揃える前に読んでおきたい情報をお届けします。</p>
<div class="row archive py-5">
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'guide',
    'taxonomy' => 'guide_cats',
    'term' => 'step3',
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
<p><?php echo wp_strip_all_tags(mb_substr(get_the_content(), 0, 120, 'UTF-8'), true); ?></p>
</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
</div>
<!-- #step3 -->
<div id="step4" class="guide__step">
<div class="md_container">
<p class="guide__step--ttl">STEP4</p>
<h2 class="md_topTitle text-center">お花の楽しみ方</h2>
<p class="guide__step-about">お稽古に通うことだけがいけばなの楽しみ方ではありません。<br>最も身近な場所で言えば、自宅でもお花を楽しむことができますよ。毎日の生活の中でいけばなを楽しむヒントをお届けします。</p>
<div class="row archive py-5">
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'guide',
    'taxonomy' => 'guide_cats',
    'term' => 'step4',
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
<p><?php echo wp_strip_all_tags(mb_substr(get_the_content(), 0, 120, 'UTF-8'), true); ?></p>
</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
</div>
<!-- #step4 -->

<!-- <div class="guide__more my-5">
<div class="md_container">
<h2 class="md_topTitle border-light text-center"><span>より深く</span><br>いけばなを知りたい方はこちら</h2>
<div class="guide__more__list row">
<a href="<?php echo $home; ?>/guide-2/" class="guide__more__list__inner guide-2 col-sm-4">
<p class="ttl md_mincho">2.お稽古の基礎知識</p>
<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
</a>
<a href="<?php echo $home; ?>/guide-3/" class="guide__more__list__inner guide-3 col-sm-4">
<p class="ttl md_mincho">3.道具の選び方</p>
<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
</a>
<a href="<?php echo $home; ?>/guide-4/" class="guide__more__list__inner guide-4 col-sm-4">
<p class="ttl md_mincho">4.お花の楽しみ方</p>
<p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
</a>
</div>
</div>
</div> -->
</div>
<?php get_footer();
