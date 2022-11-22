jQuery(document).ready(function(){
    handleMegaMenu();
    handleMenuMobile();
    sliderFocus();
    sliderBannerHome();
    sliderRightRed();
    sliderRightWhile();
    sliderPartnerContactPage();
});
function handleMegaMenu(){
    let showAllCateMenu = document.querySelector("#showAllCateMenu");
    let megaMenu = document.querySelector(".mc_mega_all_menu");
    let closeMegaMenu = document.querySelector(".icon-close-mega-menu");
    if(showAllCateMenu){
        showAllCateMenu.onclick = ()=>{
            megaMenu.style.display = "block";
            closeMegaMenu.style.display = "block";
            showAllCateMenu.style.display = "none";
        }
    }
    if(closeMegaMenu){
        closeMegaMenu.onclick = ()=>{
            megaMenu.style.display = "none";
            closeMegaMenu.style.display = "none";
            showAllCateMenu.style.display = "block";
        }
    }
}
function handleMenuMobile(){
    let openMenuMobile = document.querySelector("#openMenuMobile");
    let closeMenuMobile = document.querySelector("#closeMenuMobile");
    let menuMobile = document.querySelector("#menuMobile");
    let chirlMenu = document.querySelectorAll(".mc-menu-mobile .menu-item-has-children");
    if (chirlMenu) {
        chirlMenu.forEach((item) => {
          btnShowMoreMenu = document.createElement("button");
          btnShowMoreMenu.classList.add("click-show-chirl-menu-mobile");
          btnShowMoreMenu.innerHTML = '<i class="gg-chevron-down"></i>';
          item.appendChild(btnShowMoreMenu);
          item.children[2].onclick = () => {
            item.children[1].classList.toggle("open-sbmenu");
            item.children[1].classList.add("fade-in-left-mn");
            item.classList.toggle("handle-icon");
          };
        });
    }
    if(openMenuMobile){
        openMenuMobile.onclick = () => {
            menuMobile.style.display = "block";
            openMenuMobile.style.display = "none";
            closeMenuMobile.style.display = "block";
        };
    }
    if(closeMenuMobile){
        closeMenuMobile.onclick = () => {
            menuMobile.style.display = "none";
            closeMenuMobile.style.display = "none";
            openMenuMobile.style.display = "block";
        };
    }
}
function sliderFocus(){
    jQuery('.slider-focus').slick({
        dots: false,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
    });
}
function sliderBannerHome(){
    jQuery('.slider-banner-contain').slick({
        dots: false,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow:"<img class='prev slick-prev' src='./wp-content/themes/tamsuphunu/assets/images/prev.png' alt='button slider'>",
        nextArrow:"<img class='next slick-next' src='./wp-content/themes/tamsuphunu/assets/images/next.png' alt='button slider'>",
    });
}
function sliderRightRed(){
    jQuery('.slider-red').slick({
        dots: false,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow:"<img class='prev slick-prev' src='./wp-content/themes/tamsuphunu/assets/images/prev-sm.png' alt='button slider'>",
        nextArrow:"<img class='next slick-next' src='./wp-content/themes/tamsuphunu/assets/images/next-prev.png' alt='button slider'>",
    });
}
function sliderRightWhile(){
    jQuery('.slider-while').slick({
        dots: false,
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        prevArrow:"<img class='prev slick-prev' src='./wp-content/themes/tamsuphunu/assets/images/prev-red.png' alt='button slider'>",
        nextArrow:"<img class='next slick-next' src='./wp-content/themes/tamsuphunu/assets/images/next-red.png' alt='button slider'>",
    });
}

function sliderPartnerContactPage(){
    jQuery('.slider-partner-contact-page').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
}