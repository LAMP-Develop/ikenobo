// CSSインポート
import "../sass/app.scss";

// JSインポート
import "bootstrap";

import "./commons/global";
// import './commons/index';

$(function () {
  /*-- よくあるご質問 --*/
  $(".faq__list__inner-table").on("click", function () {
    $(this).children('.ac').children('dd').slideToggle();
    $(this).toggleClass("active");
  });
});
