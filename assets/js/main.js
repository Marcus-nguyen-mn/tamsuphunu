jQuery(document).ready(function(){
    handleMegaMenu();
    handleMenuMobile();
    sliderFocus();
    sliderBannerHome();
    sliderRightRed();
    sliderRightWhile();
    sliderPartnerContactPage();
    FormContact(".btn-inp-sub-mc","formContactPage",".formContactPage","#hoTen","#sdtMc",".phoneVal",".nameVal");
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

function FormContact(buttonClass , formClass , dataClass, idHoTen, idSdt, phoneVal, nameVal){
    var submit = jQuery(buttonClass);
    submit.click(function(){
      var hoTen = document.forms[formClass]["hoTen"].value;
      var sdt = document.forms[formClass]["sdtMc"].value;
      var remove_space = jQuery.trim(sdt.replace(/ /g,''));
      var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
      if(hoTen == "" || sdt == ""){
     if(hoTen == ""){ jQuery(nameVal).css('display','block');}
        jQuery(idHoTen).click(function(){
         jQuery(nameVal).css('display','none');
       });
        if(sdt !== ""){
         if (vnf_regex.test(remove_space) == false){
           jQuery(phoneVal).empty().append('<span>Số điện thoại không đúng định dạng!</span>');
           jQuery(phoneVal).css('display','block');
         }
         else{
           jQuery(phoneVal).empty().append('<span>Số điện thoại hợp lệ!</span>');
           jQuery(phoneVal).css('display','block');
         }
       }else{
         jQuery(phoneVal).empty().append('Bạn chưa nhập số điện thoại!');
         jQuery(phoneVal).css('display','block');
       }
       jQuery(idSdt).click(function(){
         jQuery(phoneVal).css('display','none');});
       return false;
     }
     if(hoTen !== "" || sdt !== ""){
      if (vnf_regex.test(remove_space) == false){
       jQuery(phoneVal).empty().append('<span>Số điện thoại không đúng định dạng!</span>');
       jQuery(phoneVal).css('display','block');
     }
     else{
   
      var data = jQuery(dataClass).serialize();
      jQuery.ajax({
        type : 'GET',
        url : 'https://script.google.com/macros/s/AKfycbzSjzoTGoLSTLFS3HoxhOQ4GpyD4kDQVGl5JFpw8ds7-pLu9tO0Mj0kFxRIl-zkJ5wd/exec',
        dataType:'json',
        crossDomain : true,
        data : data,
        success : function(response){
          if(response == 'false')
          {
            alert('Thêm không thành công');
          }else{
               alert('Đăng ký thành công. Chúng tôi sẽ liên hệ hỗ trợ trong thời gian sớm nhất. Trân trọng!');
               location.reload();
            }
          }
        });
      return false;
    }
    return false;
   }
   else{
    var data = jQuery(formClass).serialize();
    jQuery.ajax({
      type : 'GET',
      url : 'https://script.google.com/macros/s/AKfycbzSjzoTGoLSTLFS3HoxhOQ4GpyD4kDQVGl5JFpw8ds7-pLu9tO0Mj0kFxRIl-zkJ5wd/exec',
      dataType:'json',
      crossDomain : true,
      data : data,
      success : function(data){
        if(data == 'false')
        {
          alert('Thêm không thành công');
        }else{

        }
      }
    });
    return false;
   }
   });
   }