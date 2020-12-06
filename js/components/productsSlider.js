import "../import-jquery";
import "slick-carousel";

class ProductsSlider {
  constructor() {
    $(".products-slider__slider").slick({
      slidesToShow: 5,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          },
        },
      ],
    });
  }
}
export default ProductsSlider;
