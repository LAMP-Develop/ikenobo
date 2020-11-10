<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<?php if (is_home() || is_front_page()): ?>

<!-- トップページメインビジュアル -->
<div class="home__mv pb-5">
  <div class="md_container">
    <div class="search mt-5">
    <h2 class="text-center md_mincho">あなたにあった<br>いけばな教室を検索</h2>
    <form id="form" class="search__form" method="post">
      <div class="row">
        <div class="form-group row col-sm-6">
          <label class="col-4" for="name">都道府県</label>
          <select class="col-8"name=”area-1”>
            <option value=”kyoto” checked>京都府</option>
            <option value=”kyoto”>京都府</option>
            <option value=”kyoto”>京都府</option>
          </select>
        </div>
        <div class="form-group row col-sm-6">
          <label class="col-4" for="name">市区町村</label>
          <input type="text" class="form-control col-8" id="area-2" name="area-2" placeholder="京都市" required value="">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-3" for="name">フリーワード</label>
        <input type="text" class="form-control col-9" id="free" name="free" placeholder="〇〇駅" required value="">
      </div>
    </form>
    <div class="row">
      <div class="search-btn border-light col-6">
        <a class="md_mincho text-center d-block" href="###"><img class="mr-2" src="<?php echo $wp_url; ?>/dist/images/icon_map.svg" alt="マップアイコン">現在地から検索</a>
      </div>
      <div class="search-btn border-light col-6">
        <a class="md_mincho text-center d-block" href="###"><img class="mr-2" src="<?php echo $wp_url; ?>/dist/images/icon_search.svg" alt="検索アイコン">こだわり検索</a>
      </div>
    </div>
   <button name="submitted" type="submit" class="btn btn-primary col-12">検索</button>
   </div>
  </div>
</div>
<!-- トップページメインビジュアル終了 -->

<?php elseif ( is_page('cotact') || is_page('cotact-thanks') || is_single() ) : ?>

<!-- MVなしページ -->
<div class="bread bg-info">
  <p>サイトトップ > <a>華道家元池坊会館　外国人向けいけばな体験レッスン</a></p>
</div>
<!-- MVなしページ終了 -->

<?php elseif ( is_archive('class') ) : ?>

<!-- 記事一覧ページ -->
<div class="sub__mv sub__mv__class bg-info pb-5">
<div class="container">
<div class="md_topTitle mb-3 flower-03 border-line">検索結果</div>
<p>京都府,中京区,平日すべて</p>
<a class="filter" href="#">
  <img src="<?php echo $wp_url; ?>/dist/images/icon_search.svg" alt="虫眼鏡アイコン">絞り込み
</a>
</div>
</div>
<!-- 記事一覧ページ終了 -->

<?php elseif ( is_archive() ) : ?>

<!-- 記事一覧ページ -->
<?php echo esc_html(get_post_type_object(get_post_type())->name); ?>
<?php echo $cp_slug = get_query_var('post_type'); ?>
<div class="sub__mv <?php echo $cp_slug ?> pb-5"></div>
<!-- 記事一覧ページ終了 -->

<?php else: ?>

<!-- 下層ページメインビジュアル -->
<?php
  global $post;
  $slug = $post->post_name;
?>
<div class="sub__mv <?php echo $slug ?> pb-5"></div>

<!-- 下層ページメインビジュアル終了 -->

<?php endif; ?>
