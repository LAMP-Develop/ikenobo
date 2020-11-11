<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();

// GET検索
$form_pref = $_GET['pref'];
$form_address = $_GET['address'];
$form_keywords = $_GET['keywords'];
$form_weeks = $_GET['weeks'];
$form_times = $_GET['times'];
$form_price = $_GET['price'];
$form_tags = $_GET['tags'];
?>

</main>

<?php if (!is_single('contact') || !is_single('contact')): ?>
<div class="footer__search search mt-5 py-5">
<div class="container p-0">
<div class="row">
<div class="col-sm-4">
<h2 class="md_topTitle">教室検索</h2>
<p>あなたに合ったいけばな教室を検索</p>
</div>
<div class="col-sm-8">
<form id="form" class="search__form" method="GET" action="<?php $home; ?>/class/">
<div class="row">
<div class="form-group row col-sm-6">
<label class="col-4">都道府県</label>
<select class="col-8" name="pref">
<option value="" selected>都道府県</option>
<option value="北海道" <?php echo $form_pref == '北海道' ? 'selected' : ''; ?>>北海道</option>
<option value="青森県" <?php echo $form_pref == '青森県' ? 'selected' : ''; ?>>青森県</option>
<option value="岩手県" <?php echo $form_pref == '岩手県' ? 'selected' : ''; ?>>岩手県</option>
<option value="宮城県" <?php echo $form_pref == '宮城県' ? 'selected' : ''; ?>>宮城県</option>
<option value="秋田県" <?php echo $form_pref == '秋田県' ? 'selected' : ''; ?>>秋田県</option>
<option value="山形県" <?php echo $form_pref == '山形県' ? 'selected' : ''; ?>>山形県</option>
<option value="福島県" <?php echo $form_pref == '福島県' ? 'selected' : ''; ?>>福島県</option>
<option value="茨城県" <?php echo $form_pref == '茨城県' ? 'selected' : ''; ?>>茨城県</option>
<option value="栃木県" <?php echo $form_pref == '栃木県' ? 'selected' : ''; ?>>栃木県</option>
<option value="群馬県" <?php echo $form_pref == '群馬県' ? 'selected' : ''; ?>>群馬県</option>
<option value="埼玉県" <?php echo $form_pref == '埼玉県' ? 'selected' : ''; ?>>埼玉県</option>
<option value="千葉県" <?php echo $form_pref == '千葉県' ? 'selected' : ''; ?>>千葉県</option>
<option value="東京都" <?php echo $form_pref == '東京都' ? 'selected' : ''; ?>>東京都</option>
<option value="神奈川県" <?php echo $form_pref == '神奈川県' ? 'selected' : ''; ?>>神奈川県</option>
<option value="新潟県" <?php echo $form_pref == '新潟県' ? 'selected' : ''; ?>>新潟県</option>
<option value="富山県" <?php echo $form_pref == '富山県' ? 'selected' : ''; ?>>富山県</option>
<option value="石川県" <?php echo $form_pref == '石川県' ? 'selected' : ''; ?>>石川県</option>
<option value="福井県" <?php echo $form_pref == '福井県' ? 'selected' : ''; ?>>福井県</option>
<option value="山梨県" <?php echo $form_pref == '山梨県' ? 'selected' : ''; ?>>山梨県</option>
<option value="長野県" <?php echo $form_pref == '長野県' ? 'selected' : ''; ?>>長野県</option>
<option value="岐阜県" <?php echo $form_pref == '岐阜県' ? 'selected' : ''; ?>>岐阜県</option>
<option value="静岡県" <?php echo $form_pref == '静岡県' ? 'selected' : ''; ?>>静岡県</option>
<option value="愛知県" <?php echo $form_pref == '愛知県' ? 'selected' : ''; ?>>愛知県</option>
<option value="三重県" <?php echo $form_pref == '三重県' ? 'selected' : ''; ?>>三重県</option>
<option value="滋賀県" <?php echo $form_pref == '滋賀県' ? 'selected' : ''; ?>>滋賀県</option>
<option value="京都府" <?php echo $form_pref == '京都府' ? 'selected' : ''; ?>>京都府</option>
<option value="大阪府" <?php echo $form_pref == '大阪府' ? 'selected' : ''; ?>>大阪府</option>
<option value="兵庫県" <?php echo $form_pref == '兵庫県' ? 'selected' : ''; ?>>兵庫県</option>
<option value="奈良県" <?php echo $form_pref == '奈良県' ? 'selected' : ''; ?>>奈良県</option>
<option value="和歌山県" <?php echo $form_pref == '和歌山県' ? 'selected' : ''; ?>>和歌山県</option>
<option value="鳥取県" <?php echo $form_pref == '鳥取県' ? 'selected' : ''; ?>>鳥取県</option>
<option value="島根県" <?php echo $form_pref == '島根県' ? 'selected' : ''; ?>>島根県</option>
<option value="岡山県" <?php echo $form_pref == '岡山県' ? 'selected' : ''; ?>>岡山県</option>
<option value="広島県" <?php echo $form_pref == '広島県' ? 'selected' : ''; ?>>広島県</option>
<option value="山口県" <?php echo $form_pref == '山口県' ? 'selected' : ''; ?>>山口県</option>
<option value="徳島県" <?php echo $form_pref == '徳島県' ? 'selected' : ''; ?>>徳島県</option>
<option value="香川県" <?php echo $form_pref == '香川県' ? 'selected' : ''; ?>>香川県</option>
<option value="愛媛県" <?php echo $form_pref == '愛媛県' ? 'selected' : ''; ?>>愛媛県</option>
<option value="高知県" <?php echo $form_pref == '高知県' ? 'selected' : ''; ?>>高知県</option>
<option value="福岡県" <?php echo $form_pref == '福岡県' ? 'selected' : ''; ?>>福岡県</option>
<option value="佐賀県" <?php echo $form_pref == '佐賀県' ? 'selected' : ''; ?>>佐賀県</option>
<option value="長崎県" <?php echo $form_pref == '長崎県' ? 'selected' : ''; ?>>長崎県</option>
<option value="熊本県" <?php echo $form_pref == '熊本県' ? 'selected' : ''; ?>>熊本県</option>
<option value="大分県" <?php echo $form_pref == '大分県' ? 'selected' : ''; ?>>大分県</option>
<option value="宮崎県" <?php echo $form_pref == '宮崎県' ? 'selected' : ''; ?>>宮崎県</option>
<option value="鹿児島県" <?php echo $form_pref == '鹿児島県' ? 'selected' : ''; ?>>鹿児島県</option>
<option value="沖縄県" <?php echo $form_pref == '沖縄県' ? 'selected' : ''; ?>>沖縄県</option>
</select>
</div>
<div class="form-group row col-sm-6">
<label class="col-4">市区町村</label>
<input type="text" class="form-control col-8" name="address" placeholder="" value="<?php echo $form_address; ?>">
</div>
</div>
<div class="form-group row">
<label class="col-3">フリーワード</label>
<input type="text" class="form-control col-9" name="keywords" placeholder="〇〇駅" value="<?php echo $form_keywords; ?>">
</div>
<div class="row">
<div class="search-btn border-light col-6">
<a class="md_mincho text-center d-block" href="#"><img class="mr-2" src="<?php echo $wp_url; ?>/dist/images/icon_map.svg" alt="マップアイコン">現在地から検索</a>
</div>
<div class="search-btn border-light col-6">
<a class="md_mincho text-center d-block" href="#"><img class="mr-2" src="<?php echo $wp_url; ?>/dist/images/icon_search.svg" alt="検索アイコン">こだわり検索</a>
</div>
</div>
<button type="submit" class="btn btn-primary col-12">検索</button>
</form>
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
<li class="mainLink"><a href="" class="md_mincho">池坊について</a></li>
<li class="mainLink"><a href="" class="md_mincho">いけばなを習う</a></li>
<li class="mainLink"><a href="" class="md_mincho">花展・イベントを探す</a></li>
<li class="mainLink"><a href="" class="md_mincho">お知らせ</a></li>
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
