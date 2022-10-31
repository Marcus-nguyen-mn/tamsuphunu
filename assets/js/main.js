jQuery(document).ready(function(){
    handleMegaMenu();
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