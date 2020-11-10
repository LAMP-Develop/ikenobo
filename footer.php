<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

</main>

<?php if ( !is_single('contact') || !is_single('contact')): ?>
<div class="footer__search search mt-5 py-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h2 class="md_topTitle">教室検索</h2>
        <p>あなたに合ったいけばな教室を検索</p>
      </div>
      <div class="col-sm-8">
        <form id="form" class="search__form" method="post">
          <div class="row">
            <div class="form-group row col-sm-6">
              <label class="col-4" for="name">都道府県</label>
              <select class="col-8"name=”area-1”>
                <option value=”kyoto”>京都</option>
                <option value=”kyoto”>京都</option>
                <option value=”kyoto”>京都</option>
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
</div>

<?php else: ?>

<?php endif; ?>

<footer id="footer" class="mt-3">
<div class="md_container">
<!-- /footer start -->

<div class="snsIcon">
<ul class="clearFix">
<li><a href="https://www.instagram.com/ikenobo550" target="_blank">nstagram</a></li>
<li><a href="https://www.facebook.com/ikenobo550" target="_blank">facebook</a></li>
<li><a href="https://twitter.com/ikenobo550" target="_blank">Twitter</a></li>
<li><a href="https://www.youtube.com/channel/UCKito0N8zn2NA6yvKXx_dfQ" target="_blank">Youtube</a></li>
</ul>
</div>

<div class="topArea clearFix">
<div class="logo"><img src="<?php echo $wp_url ?>/dist/images/logo.svg" alt="池坊 IKENOBO" width="100"></div>
<div class="tagline md_mincho"><span class="jap">いけばなの根源</span><span class="line">|</span><span class="eng">Origin of IKEBANA</span></div>
</div>

<div class="menu clearFix">
<div class="menu01">
<ul>
<li class="mainLink"><a href="index.html" class="md_mincho">トップページ</a></li>
</ul>
</div>
<div class="menu02">
<ul>
<li class="mainLink"><a href="ikebanaikenobo/" class="md_mincho">池坊について</a></li>
<li class="mainLink"><a href="kyositsu/" class="md_mincho">いけばなを習う</a></li>
<li class="mainLink"><a href="event/index.html" class="md_mincho">花展・イベントを探す</a></li>
<li class="mainLink"><a href="info/index.html" class="md_mincho">お知らせ</a></li>
</ul>
</div>
<div class="menu03">
<ul>
<li class="mainLink"><a href="" class="md_mincho">会員の方へ</a></li>
<li><a href="">会員のみなさまへ</a></li>
<li><a href="">池坊中央研修学院</a></li>
<li class="mainLink"><a href="index.html" class="md_mincho">企業・学校関係者の方へ</a></li>
<li><a href="">華道でおもてなし活動</a></li>
<li><a href="">学校関係者のみなさまへ</a></li>
</ul>
</div>
<div class="menu04">
<ul>
<li class="mainLink"><a href="index.html" class="md_mincho">アクセス</a></li>
<li><a href="">池坊会館</a></li>
<li><a href="">東京会館</a></li>
<li class="mainLink"><a href="index.html" class="md_mincho">プレスリリース</a></li>
<li class="mainLink"><a href="index.html" class="md_mincho">年間スケジュール</a></li>
</ul>
</div>
<div class="menu05">
<ul>
<li class="mainLink"><a href="index.html" class="md_mincho">関連サイト</a></li>
<li><a href="https://www.kadosha.co.jp/" target="_blank">オンラインストア花楽</a></li>
<li><a href="https://www.ikenobo.jp/rokkakudo/" target="_blank">六角堂</a></li>
<li><a href="https://www.ikenobo.jp/rokkakudo/highlight/ikebana.html" target="_blank">いけばな資料館</a></li>
<li><a href="https://ikenoboys.com/" target="_blank">IKENOBOYS</a></li>
<li><a href="http://www.ikenobo-c.ac.jp/" target="_blank">池坊短期大学</a></li>
</ul>
</div>
</div>

<div class="copyright">Copyright Ikenobo. All Rights Reserved.</div>

<!-- footer end -->
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
