// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";

import "./commons/global";

$(function () {
  /*-- 位置情報 --*/
  $(".js-get-geo").on("click", function () {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(success, fail);
      function success(pos) {
        const lat = pos.coords.latitude; // 緯度
        const lng = pos.coords.longitude; // 経度
        const accuracy = pos.coords.accuracy; // 精度(m)
      }
      function fail(error) {
        window.alert("位置情報の取得に失敗しました。");
      }
    } else {
      alert("お使いの端末で位置情報を取得できませんでした。");
    }
  });

  /*-- よくあるご質問 --*/
  $(".faq__list__inner-table").on("click", function () {
    $(this).children(".ac").children("dd").slideToggle();
    $(this).toggleClass("active");
  });
});
