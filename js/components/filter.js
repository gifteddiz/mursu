class Filter {
  constructor() {
    $('.filter__h2').on('click', function () {
      $('.filter').toggleClass('--mob-visible');
      $(this).toggleClass('--mob-visible');
    })
  }
}
export default Filter;