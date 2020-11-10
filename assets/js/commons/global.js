(function($) {
/*--------------------------------------------------------------------------------*/

$(window).on('load', function(){
	$('#js_loading').fadeOut();	
});

/*----------------------------------------
ページ内スクロール
----------------------------------------*/

$(function (){

  var topBtn = $('.md_pageTop');

  topBtn.hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) { topBtn.fadeIn(); }
    else { topBtn.fadeOut(); }
  });
    topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });

});

$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

/*----------------------------------------
下スクロールで消えて、上スクロールで出てくるグローバルナビゲーション
----------------------------------------*/
var startPos = 0,winScrollTop = 0;
$(window).on('scroll',function(){
    winScrollTop = $(this).scrollTop();
    if (winScrollTop >= startPos) {
        if(winScrollTop >= 200){
            $('#header').addClass('hide');
        }
    } else {
        $('#header').removeClass('hide');
    }
    startPos = winScrollTop;
});
	
/*----------------------------------------
アコーディオンメニュー（共通）
----------------------------------------*/
$(function() {

$('.md_js_accordion_slide').find('.md_js_contents').hide();

	$('.md_js_accordion_slide .md_js_boss').click(function(){
		
		$(this).toggleClass('close'); });

	$('.md_js_accordion_slide .md_js_boss').click(function () {
	
		$(this).parents('.md_js_accordion_slide').find('.md_js_contents').slideToggle("fast"); })

});
	

/*----------------------------------------
マウスオーバーでふわっと
----------------------------------------*/
$(function(){
	$('a').hover(
		function(){
			$(this).stop().fadeTo(300, 0.8);
		},
		function(){
			$(this).stop().fadeTo(300, 1.0);
		}
	);
});	
	
/*----------------------------------------
ハンバーガーメニュー
----------------------------------------*/
function toggleNav() {
  var body = document.body;
  var hamburger = document.getElementById('js-hamburger');
  var blackBg = document.getElementById('js-black-bg');

  hamburger.addEventListener('click', function() {
    body.classList.toggle('nav-open');
  });
  blackBg.addEventListener('click', function() {
    body.classList.remove('nav-open');
  });
}
toggleNav();

/*----------------------------------------
ブロックの高さ揃える
----------------------------------------*/
$(function() {
	$('.md_js_matchheight').matchHeight();
	$('.md_js_matchheight01').matchHeight();
	$('.md_js_matchheight02').matchHeight();
	$('.md_js_matchheight03').matchHeight();
	$('.md_js_matchheight04').matchHeight();
	$('.md_js_matchheight05').matchHeight();
});

/*----------------------------------------
チェックボックス（全てをチェック）
----------------------------------------*/	
$(function() {
    // 1. 「全選択」する
    $('.md_js_all').on('click', function() {
      $("input[name='chk[]']").prop('checked', this.checked);
    });
    // 2. 「全選択」以外のチェックボックスがクリックされたら、
    $("input[name='chk[]']").on('click', function() {
      if ($('.md_js_chkContent :checked').length == $('.md_js_chkContent :input').length) {
        // 全てのチェックボックスにチェックが入っていたら、「全選択」 = checked
        $('.md_js_all').prop('checked', true);
      } else {
        // 1つでもチェックが入っていたら、「全選択」 = checked
        $('.md_js_all').prop('checked', false);
      }
    });
  });
	
/*--------------------------------------------------------------------------------*/
})(jQuery);