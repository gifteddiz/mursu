import "magnific-popup";

class Popups {
  constructor() {
    this.init();
  }

  init() {
    function clearForms() {
      $(".wpcf7-mail-sent-ok")
        .removeClass("wpcf7-mail-sent-ok")
        .html();
    }

    $("body").on("click", ".wpcf7-mail-sent-ok", function () {
      $(".wpcf7-mail-sent-ok")
        .removeClass("wpcf7-mail-sent-ok")
        .html();
    });

    $(".jsPopup").magnificPopup({
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
        close: function () {
          clearForms();
        },
      },
    });

    $(".jsImagePopup").magnificPopup({
      type: "image",
      mainClass: "mfp-no-margins mfp-with-zoom",
    });

    $(".jsIframePopup").magnificPopup({
      disableOn: 700,
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: false,

      fixedContentPos: false,
    });

    $(".jsGallery").each(function () {
      $(this).magnificPopup({
        delegate: "a",
        type: "image",
        gallery: {
          enabled: true,
        },
      });
    });

    $(".jsClosePopup").click(function (e) {
      e.preventDefault();
      $.magnificPopup.close();
    });

    $("body").on("click", ".gallery a", function (e) {
      e.preventDefault();
      var src = $(this)
        .find("img")
        .attr("src");
      $.magnificPopup.open(
        {
          items: {
            src: src,
          },
          type: "image",
        },
        0
      );
    });
  }
}

export default Popups;
