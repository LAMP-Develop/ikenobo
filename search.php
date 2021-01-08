<?php
// GET検索
$form_pref = isset($_GET['pref']) ? $_GET['pref'] : null;
$form_address = isset($_GET['address']) ? $_GET['address'] : null;
$form_keywords = isset($_GET['keywords']) ? $_GET['keywords'] : null;
$form_weeks = isset($_GET['weeks']) ? $_GET['weeks'] : null;
$form_times = isset($_GET['times']) ? $_GET['times'] : null;
$form_price = isset($_GET['price']) ? $_GET['price'] : null;
$form_tags = isset($_GET['tags']) && $_GET['tags'] != '' ? $_GET['tags'] : null;
?>

<div class="sidebar__search search">
<form class="search__form" method="GET" action="<?php $home; ?>/class/">
<table class="w-100">
<tr>
<th>エリア指定</th>
</tr>
<tr class="content">
<td class="row select-wrap">
<label class="col-4" for="">都道府県</label>
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
</td>
<td class="row select-wrap">
<label class="col-4" for="name">市区町村</label>
<input type="text" class="form-control col-8" name="address" placeholder="" value="<?php echo $form_address; ?>">
</td>
<td class="row">
<label class="col-4" for="name">フリーワード</label>
<input type="text" class="form-control col-8" name="keywords" placeholder="○○駅、教室名、講師名" value="<?php echo $form_keywords; ?>">
</select>
</td>
</tr>
<tr>
<th>日時指定</th>
</tr>
<tr class="content">
<td>
<p>希望曜日</p>
<div class="check-list week">
<span class="check-list-item"><input class="mr-1" type="checkbox" name="weeks[]" value="月" <?php echo is_array($form_weeks) && in_array('月', $form_weeks) ? 'checked' : ''; ?>>月</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="weeks[]" value="火" <?php echo is_array($form_weeks) && in_array('火', $form_weeks) ? 'checked' : ''; ?>>火</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="weeks[]" value="水" <?php echo is_array($form_weeks) && in_array('水', $form_weeks) ? 'checked' : ''; ?>>水</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="weeks[]" value="木" <?php echo is_array($form_weeks) && in_array('木', $form_weeks) ? 'checked' : ''; ?>>木</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="weeks[]" value="金" <?php echo is_array($form_weeks) && in_array('金', $form_weeks) ? 'checked' : ''; ?>>金</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="weeks[]" value="土" <?php echo is_array($form_weeks) && in_array('土', $form_weeks) ? 'checked' : ''; ?>>土</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="weeks[]" value="日" <?php echo is_array($form_weeks) && in_array('日', $form_weeks) ? 'checked' : ''; ?>>日</span>
</div>
</td>
<td>
<p>希望時間</p>
<div class="check-list time">
<span class="check-list-item"><input class="mr-1" type="checkbox" name="times[]" value="午前 9時〜12時" <?php echo is_array($form_times) && in_array('午前 9時〜12時', $form_times) ? 'checked' : ''; ?>>午前 9時〜12時</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="times[]" value="午後 12時〜17時" <?php echo is_array($form_times) && in_array('午後 12時〜17時', $form_times) ? 'checked' : ''; ?>>午後 12時〜17時</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="times[]" value="夕方 17時〜21時" <?php echo is_array($form_times) && in_array('夕方 17時〜21時', $form_times) ? 'checked' : ''; ?>>夕方 17時〜21時</span>
</div>
</td>
</tr>
<tr>
<th>費用</th>
</tr>
<tr class="content">
<td class="row">
<select class="col-10" name="price">
<option value="" selected>選択してください。</option>
<option value="5,000円未満" <?php echo $form_price == '5,000円未満' ? 'selected' : '' ?>>5,000円未満</option>
<option value="5,000円〜6,999円" <?php echo $form_price == '5,000円〜6,999円' ? 'selected' : '' ?>>5,000円〜6,999円</option>
<option value="7,000円~9,999円" <?php echo $form_price == '7,000円~9,999円' ? 'selected' : '' ?>>7,000円~9,999円</option>
<option value="10,000円以上" <?php echo $form_price == '10,000円以上' ? 'selected' : '' ?>>10,000円以上</option>
</select>
</td>
<!-- <td class="row">
<div class="check-list">
<span class="check-list-item"><input type="checkbox" name="week" value="花材費を含む"> 花材費を含む</span>
<span class="check-list-item"><input type="checkbox" name="week" value="入会金なし"> 入会金なし</span>
</div>
</td> -->
</tr>
<tr>
<th>特徴</th>
</tr>
<tr class="content">
<td class="row">
<div class="check-list feature">
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="幼児連れレッスン可" <?php echo is_array($form_tags) && in_array('幼児連れレッスン可', $form_tags) ? 'checked' : ''; ?>>幼児連れレッスン可</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="こどもレッスン可" <?php echo is_array($form_tags) && in_array('こどもレッスン可', $form_tags) ? 'checked' : ''; ?>>こどもレッスン可</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="振替レッスン可" <?php echo is_array($form_tags) && in_array('振替レッスン可', $form_tags) ? 'checked' : ''; ?>>振替レッスン可</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="個人レッスン可能" <?php echo is_array($form_tags) && in_array('個人レッスン可能', $form_tags) ? 'checked' : ''; ?>>個人レッスン可能</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="出張レッスン可" <?php echo is_array($form_tags) && in_array('出張レッスン可', $form_tags) ? 'checked' : ''; ?>>出張レッスン可</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="手話対応" <?php echo is_array($form_tags) && in_array('手話対応', $form_tags) ? 'checked' : ''; ?>>手話対応</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="外国語対応" <?php echo is_array($form_tags) && in_array('外国語対応', $form_tags) ? 'checked' : ''; ?>>外国語対応</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="体験あり" <?php echo is_array($form_tags) && in_array('体験あり', $form_tags) ? 'checked' : ''; ?>>体験あり</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="見学あり" <?php echo is_array($form_tags) && in_array('見学あり', $form_tags) ? 'checked' : ''; ?>>見学あり</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="女性生徒のみ" <?php echo is_array($form_tags) && in_array('女性生徒のみ', $form_tags) ? 'checked' : ''; ?>>女性生徒のみ</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="男性生徒のみ" <?php echo is_array($form_tags) && in_array('男性生徒のみ', $form_tags) ? 'checked' : ''; ?>>男性生徒のみ</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="女性講師" <?php echo is_array($form_tags) && in_array('女性講師', $form_tags) ? 'checked' : ''; ?>>女性講師</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="男性講師" <?php echo is_array($form_tags) && in_array('男性講師', $form_tags) ? 'checked' : ''; ?>>男性講師</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="ビギナーズレッスン対応可" <?php echo is_array($form_tags) && in_array('ビギナーズレッスン対応可', $form_tags) ? 'checked' : ''; ?>>ビギナーズレッスン対応可</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="立花のレッスン可" <?php echo is_array($form_tags) && in_array('立花のレッスン可', $form_tags) ? 'checked' : ''; ?>>立花のレッスン可</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="月謝制" <?php echo is_array($form_tags) && in_array('月謝制', $form_tags) ? 'checked' : ''; ?>>月謝制</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="回数制" <?php echo is_array($form_tags) && in_array('回数制', $form_tags) ? 'checked' : ''; ?>>回数制</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="オンラインレッスン対応可" <?php echo is_array($form_tags) && in_array('オンラインレッスン対応可', $form_tags) ? 'checked' : ''; ?>>オンラインレッスン対応可</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="バリアフリー対応" <?php echo is_array($form_tags) && in_array('バリアフリー対応', $form_tags) ? 'checked' : ''; ?>>バリアフリー対応</span>
<span class="check-list-item"><input class="mr-1" type="checkbox" name="tags[]" value="駐車場対応" <?php echo is_array($form_tags) && in_array('駐車場対応', $form_tags) ? 'checked' : ''; ?>>駐車場対応</span>
</div>
</td>
</tr>
<tr class="content">
<td>
<button type="submit" class="btn btn-primary col-12">検索</button>
</td>
</tr>
</table>
</form>
</div>
