class Header {
  constructor() {
    if (screen.width > 767) return;

    var menuToggles = document.querySelectorAll(".header__nav-link.--with-dropdown > span");
    menuToggles.forEach((element) => {
      element.addEventListener("click", function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        e.target
          .closest(".header__nav-item")
          .querySelector(".header__nav-sub")
          .classList.toggle("--visible");
      });
    });
  }
}
export default Header;
