<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri(); ?>

<div class="sidebar">
  <div class="sidebar__search search">
    <div class="md_topTitle">教室検索</div>
      <form id="form" class="search__form" method="post">
        <table>
          <tr>
            <th>エリア指定</th>
          </tr>
          <tr class="content">
            <td class="row">
              <label class="col-4" for="name">都道府県</label>
              <select class="col-8"name=”area-1”>
                <option value=”kyoto” checked>京都府</option>
                <option value=”kyoto”>京都府</option>
                <option value=”kyoto”>京都府</option>
              </select>
            </td>
            <td class="row">
              <label class="col-4" for="name">市区町村</label>
              <input type="text" class="form-control col-8" id="area-2" name="area-2" placeholder="京都市" required value="">
            </td>
            <td class="row">
              <label class="col-4" for="name">フリーワード</label>
              <input type="text" class="form-control col-8" id="free" name="free" placeholder="〇〇駅" required value="">
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
                <span class="check-list-item"><input type="checkbox" name="week" value="すべての曜日" checked> すべての曜日</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="月"> 月</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="火"> 火</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="水"> 水</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="木"> 木</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="金"> 金</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="土"> 土</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="日"> 日</span>
              </div>
            </td>
            <td>
              <p>希望時間</p>
              <div class="check-list time">
                <span class="check-list-item"><input type="checkbox" name="week" value="午前　9:00~12:00" checked> 午前　9:00~12:00</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="午後　12:00~17:00" checked> 午後　12:00~17:00</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="夕方　17:00~21:00" checked> 夕方　17:00~21:00</span>
              </div>
            </td>
          </tr>
          <tr>
            <th>費用</th>
          </tr>
          <tr class="content">
            <td class="row">
              <select class="col-10"name=”price”>
                <option value="" checked>選択してください。</option>
                <option value="〜1,000円">〜1,000円</option>
                <option value="1,000円〜5,000円">1,000円〜5,000円</option>
                <option value="5,000円〜10,000円">5,000円〜10,000円</option>
                <option value="10,000円〜">10,000円〜</option>
              </select>
            </td>
            <td class="row">
              <div class="check-list">
                <span class="check-list-item"><input type="checkbox" name="week" value="花材費を含む"> 花材費を含む</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="入会金なし"> 入会金なし</span>
              </div>
            </td>
          </tr>
          <tr>
            <th>特徴</th>
          </tr>
          <tr class="content">
            <td class="row">
              <p>レッスン</p>
              <div class="check-list feature">
                <span class="check-list-item"><input type="checkbox" name="week" value="幼児連れレッスン可"> 幼児連れレッスン可</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="こどもレッスン可"> こどもレッスン可</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="振替レッスン可"> 振替レッスン可</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="個人レッスン可"> 個人レッスン可</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="出張レッスン可"> 出張レッスン可</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="ビギナーズレッスン対応可"> ビギナーズレッスン対応可</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="立花のレッスン可"> 立花のレッスン可</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="オンラインレッスン有"> オンラインレッスン有</span>
              </div>
            </td>
            <td class="row">
              <p>レッスン</p>
              <div class="check-list feature">
                <span class="check-list-item"><input type="checkbox" name="week" value="体験有"> 体験有</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="見学有"> 見学有</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="女性生徒のみ"> 女性生徒のみ</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="女性講師"> 女性講師</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="男性講師"> 男性講師</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="月謝制"> 月謝制</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="回数制"> 回数制</span>
              </div>
            </td>
            <td class="row">
              <p>アクセシビリティ</p>
              <div class="check-list feature">
                <span class="check-list-item"><input type="checkbox" name="week" value="手話対応"> 手話対応</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="外国語対応"> 外国語対応</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="バリアフリー対応"> バリアフリー対応</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="子育て支援教室"> 子育て支援教室</span>
                <span class="check-list-item"><input type="checkbox" name="week" value="駐車場対応"> 駐車場対応</span>
              </div>
            </td>
          </tr>
          <tr class="content">
            <td>
              <button name="submitted" type="submit" class="btn btn-primary col-12">検索</button>
            </td>
          </tr>
        </table>
      </form>
  </div>
  <div class="sidebar__blog mt-5">
    <div class="md_topTitle">京都エリアの人気ブログ</div>
    <div class="archive">
      <a href="###" class="archive__inner row">
        <div class="col-5 img-wrap">
          <img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。">
        </div>
        <div class="col-7 txt-wrap">
          <h3 class="md_mincho">ブログタイトルが入ります。</h3>
          <p>池坊いけばな教室</p>
        </div>
      </a>
      <a href="###" class="archive__inner row">
        <div class="col-5 img-wrap">
          <img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。">
        </div>
        <div class="col-7 txt-wrap">
          <h3 class="md_mincho">ブログタイトルが入ります。</h3>
          <p>池坊いけばな教室</p>
        </div>
      </a>
      <a href="###" class="archive__inner row">
        <div class="col-5 img-wrap">
          <img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。">
        </div>
        <div class="col-7 txt-wrap">
          <h3 class="md_mincho">ブログタイトルが入ります。</h3>
          <p>池坊いけばな教室</p>
        </div>
      </a>
      <a href="###" class="archive__inner row">
        <div class="col-5 img-wrap">
          <img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。">
        </div>
        <div class="col-7 txt-wrap">
          <h3 class="md_mincho">ブログタイトルが入ります。</h3>
          <p>池坊いけばな教室</p>
        </div>
      </a>
      <a href="###" class="archive__inner row">
        <div class="col-5 img-wrap">
          <img src="<?php echo $wp_url; ?>/dist/images/guide-1_main.png" alt="ブログタイトルが入ります。">
        </div>
        <div class="col-7 txt-wrap">
          <h3 class="md_mincho">ブログタイトルが入ります。</h3>
          <p>池坊いけばな教室</p>
        </div>
      </a>
    </div>

    </select>
  </div>
</div>
