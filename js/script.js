/**
* 制作実績モーダル
*/
// OPEN
$('.js_modal_open').on('click', function () {
  var target = $(this).data('target');
  var modal = document.getElementById(target);
  scrollPosition = $(window).scrollTop();
  $('body').addClass('is_fixed').css({ 'top': -scrollPosition });
  $(modal).fadeIn();
  return false;
});
// CLOSE
$('.js_modal_close').on('click', function () {
  $('body').removeClass('is_fixed');
  window.scrollTo(0, scrollPosition);
  $('.js_modal').fadeOut();
  return false;
});

/**
* 制作実績モーダル: 画像クリックで変更
*/
$(function () {
  $(".js_modal_subImg img").click(function () {
    var mainImg = $(this).parents(".js_modal").find(".js_modal_mainImg");
    var ImgSrc = $(this).attr("src");
    $(mainImg).find("img").attr({ src: ImgSrc });
    $(mainImg).find("img").hide();
    $(mainImg).find("img").fadeIn("slow");
    return false;
  });
});