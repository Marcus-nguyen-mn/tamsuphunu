jQuery(document).ready(function () {
  jQuery(".main_slider_contain.owl-carousel").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    animateOut: "fadeOut",
    animateIn: "flipInX",
    smartSpeed: 550,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });
  jQuery(".award-carousel.owl-carousel").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    smartSpeed: 700,
    autoplay: true,
    autoplayTimeout: 3000,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 3,
      },
    },
  });
  jQuery(".testimonial-carousel.loop").owlCarousel({
    center: true,
    items: 2,
    loop: true,
    dots: true,
    margin: 30,
    responsive: {
      0: {
        items: 1,
        center: false,
      },
      600: {
        items: 1,
        center: false,
      },
      1000: {
        items: 2,
      },
    },
  });
  jQuery(".photo-carousel.owl-carousel").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: false,
    smartSpeed: 550,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
      1000: {
        items: 5,
      },
    },
  });
  menuConfig();
  lightbox.option({
    resizeDuration: 200,
    wrapAround: true,
  });
});

function menuConfig() {
  var openMenuMobile = document.querySelector("#icMenu");
  var menuMobile = document.querySelector(".menu_mobile");
  var closeMNMB = document.querySelector("#closeMNMB");
  if (openMenuMobile) {
    openMenuMobile.addEventListener("click", function () {
      if (menuMobile) {
        menuMobile.classList.remove("scale-out-hor-left");
        menuMobile.classList.add("scale-in-hor-left");
        menuMobile.style.display = "block";
      }
    });
  }
  if (closeMNMB) {
    closeMNMB.addEventListener("click", function () {
      if (menuMobile) {
        menuMobile.classList.remove("scale-in-hor-left");
        menuMobile.classList.add("scale-out-hor-left");
        setTimeout(function () {
          menuMobile.style.display = "none";
        }, 1000);
      }
    });
  }
}
