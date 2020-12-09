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
<h2 class="md_topTitle text-center">いけばなを始める前に</h2>
<p class="guide__step-about">「お花をきれいに生けてみたいけど、やっぱり難しいんじゃない？」や「いけばなにはセンスが必要？」など、いけばなを始める前に感じる不安を解消しましょう。
<br>このページでは、いけばなの知識がまったく無い初心者の方に向けて、いけばなを始めるにあたって知っておきたい知識や、いけばなを通して得られるメリットなどをご紹介しています。
<br>誰でも最初は初心者です。
<br>まずはいけばなに興味を持って、いけばなを知ることから初めてみましょう。</p>
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
<p class="guide__step-about">いけばなを習ってみたいけれど、敷居の高いイメージがあるいけばな教室。このページでは、いけばなのお稽古の内容や、教室の雰囲気など、知りたいけどよくわからないお稽古のことをお伝えします。どれくらい通えばよいの？費用はどのくらい掛かる？など習う前に知っておきたいお稽古の基本情報もお教えします。実際のいけばな教室の様子や習っている人の声などを聞きながら、お稽古をイメージしてみてください。</p>
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
<p class="guide__step-about">いけばなでは「花ばさみ」や「剣山」など、いけばなだけで使う特有の道具があります。いけばなを始めるならきちんとしたものを揃えたいですよね。また、お稽古を続けるなら長く使えるものを手にしておきたいです。
<br>このページでは、初心者の方におすすめの道具や、いけばなに必要な道具の揃え方、またお手入れの方法など、いけばなを始める上で知っておきたい道具のことをお伝えします。</p>
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
<p class="guide__step-about">いけばなは実はお家でも手軽に楽しむことができます。季節のイベントや記念日に合わせてお花を生けたり、玄関にお花を飾って人をお迎えしたりすることも、立派ないけばなの楽しみ方の一つです。
<br>このページでは、お家でもできるいけばなの楽しみ方をご紹介します。
<br>お花屋さんで見かけた旬のお花や、いただきものの花束も、いけばなとして楽しんでみましょう。</p>
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
