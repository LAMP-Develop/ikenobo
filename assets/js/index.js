// CSSインポート
import '../sass/app.scss';

// JSインポート
import 'bootstrap';

import './commons/global';
import './commons/index';

$(document).ready(function() {
  /*-- よくあるご質問 --*/
  $(".ac dt").on("click", function() {
    $(this).next().slideToggle();
  });
  $(".faq__list__inner-table").on("click", function () {
    $(this).next(".faq__list__inner-table").slideToggle();
    $(this).toggleClass("active");
  });
});
