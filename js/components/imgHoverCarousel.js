class ImgHoverCarousel {
  constructor() {
    var hoveredID;
    $(".js-img-hover-carousel-wrapper")
      .on("mouseenter", function() {
        var that = this;
        hoveredID = setInterval(function() {
          var currentEl = $(that).find(".js-img-hover-carousel--current");
          console.log(currentEl);
          if (currentEl.next(".js-img-hover-carousel").length) {
            currentEl
              .removeClass("js-img-hover-carousel--current")
              .next(".js-img-hover-carousel")
              .addClass("js-img-hover-carousel--current");
          } else {
            currentEl.removeClass("js-img-hover-carousel--current");
            $(that)
              .find(".js-img-hover-carousel:first-child")
              .addClass("js-img-hover-carousel--current");
          }
        }, 1200);
      })
      .on("mouseleave", function() {
        clearInterval(hoveredID);
      });
  }
}
export default ImgHoverCarousel;
