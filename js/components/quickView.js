import "../import-jquery";
import 'slick-carousel';

class QuickView {
  constructor() {
    $(".card__quick-view").magnificPopup({
      type: "inline",
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: "auto",
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: "my-mfp-slide-bottom",
      callbacks: {
        open: function () {
          $('.quick-view__imgs-big').slick({
            arrows: false
          });
        },
        close: function () {
          $('.quick-view__imgs-big').slick('unslick');
        },
      },
    });

    $('.quick-view__imgs-big').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
      $('.quick-view__imgs-previews-item').eq(nextSlide).addClass('--active').siblings().removeClass('--active');
    });

    $('body').on('click', '.quick-view__imgs-previews-item', function (e) {
      var ind = $('.quick-view__imgs-previews-item').index(this);
      $('.quick-view__imgs-big').slick('slickGoTo', ind);
    })
  }
}
export default QuickView;