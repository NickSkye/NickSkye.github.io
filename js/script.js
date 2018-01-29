TweenMax.from(
  ".button_container",
  1,
  {
    opacity: 1,
    x: 0,
    y: -600,
    scale: 1,
    ease: Power2.easeInOut,
    delay: 1
  },
  0.2
);

// jQuery

$(document).ready(function() {
  $(".right-content").removeClass("noscroll");

  $("#toggle-apply-inside-menu").click(function() {
    $("#overlay-apply").toggleClass("open");
  });

  //Menu button
  $("#toggle").click(function(event) {
    event.preventDefault();
    $("#overlay-left").toggleClass("open");
    $("#overlay-right").toggleClass("open");
    $(".right-content").toggleClass("noscroll");
    $(".overlay-apply").removeClass("open");
  });

  $("#toggle-mail").click(function() {
    $("#overlay-mail").toggleClass("open");
  });

  $("#toggle-mail-menu").click(function() {
    $("#overlay-mail").toggleClass("open");
  });

  $("#toggle-mail-inside-menu").click(function() {
    $("#overlay-mail").toggleClass("open");
  });

  $(".toggle-apply-inside-menu-irrigation-tech").click(function() {
    $("#overlay-apply-irrigation-tech").toggleClass("open");
    $("body").addClass("overlay-noscroll");
  });

  $(".toggle-apply-inside-menu-foreman").click(function() {
    $("#overlay-apply-foreman").toggleClass("open");
    $("body").addClass("overlay-noscroll");
  });

  $("#toggle-mail-footer").click(function() {
    $("#overlay-mail").toggleClass("open");
  });

  $("#mobile-toggle").click(function() {
    $("#overlay-right").toggleClass("open");
  });

  $("#contact-close").click(function() {
    $("#overlay-mail").toggleClass("open");
  });

  $(".applytoggle").click(function() {
    $("body").removeClass("overlay-noscroll");
    $(".overlay-apply").removeClass("open");
  });

  // Gallery Modal
  $(".gallery, .gallery--mobile").magnificPopup({
    delegate: "a",
    type: "image",
    tLoading: "Loading image #%curr%...",
    mainClass: "mfp-img-mobile",
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      arrowMarkup:
        '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir% gallery-arrow"></button>',
      preload: [0, 2]
    },
    image: {
      closeMarkup:
        '<button title="%title%" class="mfp-close gallery-close" style="position: absolute; top: 30px; right: -15px"><img src="/Content/images/close-icon.png" width="25" height="29"/></button>',
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });

  // Sticky mobile menu
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 250) {
      $(".mobile-menu").addClass("stickytop");
    } else {
      $(".mobile-menu").removeClass("stickytop");
    }
  });

  $(window).scroll(function() {
    var topWindow = $(window).scrollTop();

    var topWindow = topWindow * 1.8;

    var windowHeight = $(window).height();

    var position = topWindow / windowHeight;

    position = 1 - position;

    $(".arrow").css("opacity", position);
  });

  $(".mdl-textfield__input").blur(function() {
    if (!this.value) {
      $(this).prop("required", true);
      $(this)
        .parent()
        .addClass("is-invalid");
    }
  });
  // $(".mdl-button[type='submit']").click(function (event){
  //     $(this).siblings(".mdl-textfield").addClass('is-invalid');
  //     $(this).siblings(".mdl-textfield").children(".mdl-textfield__input").prop('required', true);
  // });
});
