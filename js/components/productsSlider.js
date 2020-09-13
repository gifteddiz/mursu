import "../import-jquery";
import 'slick-carousel';

class ProductsSlider {
  constructor() {
    $('.products-slider__slider').slick({
      variableWidth: true
    });
  }
}
export default ProductsSlider;