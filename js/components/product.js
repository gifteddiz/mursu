import "../import-jquery";
import "slick-carousel";
import ImageZoom from "js-image-zoom";

class Product {
  constructor() {
    $(".product__imgs-big").slick({
      arrows: false,
      infinite: false,
    });

    $(".product__imgs-big").on("beforeChange", function(event, slick, currentSlide, nextSlide) {
      $(".product__imgs-previews-item")
        .eq(nextSlide)
        .addClass("--active")
        .siblings()
        .removeClass("--active");
    });

    $(".product__imgs-previews-item").on("click", function(e) {
      var ind = $(".product__imgs-previews-item").index(this);
      $(".product__imgs-big").slick("slickGoTo", ind);
    });

    $(".product__imgs-big").on("afterChange", () => {
      new ImageZoom(document.querySelector(".product__imgs-big .slick-active a"), options);
    });

    var options = {
      zoomPosition: "original",
    };
    new ImageZoom(document.querySelector(".product__imgs-big .slick-active a"), options);
  }
}
export default Product;
