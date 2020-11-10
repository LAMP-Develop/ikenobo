(function($) {
/*--------------------------------------------------------------------------------*/

/*----------------------------------------
マウスオーバーアコーディオンメニュー（トップ）
----------------------------------------*/	

// ドロップダウンメニュー
$('.md_js_hover_slide').hover(
  function() {
    //カーソルが重なった時
    $(this).children('.md_js_dropdown').slideDown("fast");
  }, function() {
    //カーソルが離れた時
    $(this).children('.md_js_dropdown').hide();
  }
);

/*----------------------------------------
bxslider
----------------------------------------*/
$(function() {
    $(".bxslider01").bxSlider({
      auto: true,
      pause: 5000,
      speed: 3000,
      mode: "fade",
      controls: false,
      pager: false,
      touchEnabled: false
    });
});
	
/*--------------------------------------------------------------------------------*/
})(jQuery);

/*----------------------------------------
swiper
----------------------------------------*/
$(function() {
	var mySwiper = new Swiper ('.swiper-container', {
		loop: true,
		slidesPerView: 5,
		spaceBetween: 60,
		centeredSlides : true,
		pagination: '.swiper-pagination',
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		breakpoints: {
			640: {
				slidesPerView: 1,
				spaceBetween: 10
			}
		}
	});
});
	