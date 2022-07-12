/*============ Toggle Navbar Start ===============*/

let navbar = document.querySelector('.navbar-collapse');
let nav_item_job = document.querySelector('.dropdown-a');
let nav_item_article = document.querySelector('.dropdown-b');
let nav_item_room = document.querySelector('.dropdown-c');
let nav_item_login = document.querySelector('.dropdown-d');
let nav_item_register = document.querySelector('.dropdown-e');
let nav_toggle = document.querySelector('.navbar-toggler');

nav_toggle.addEventListener('click', function(){
    if(navbar.style.display =='none'){
        navbar.style.display = 'block';
    }
    else if(navbar.style.display == 'block'){
        navbar.style.display = 'none';
    }
});

nav_item_job.addEventListener('click', function(){
    navbar.style.display = 'none';
});
nav_item_article.addEventListener('click', function(){
    navbar.style.display = 'none';
});
nav_item_room.addEventListener('click', function(){
    navbar.style.display = 'none';
});
nav_item_login.addEventListener('click', function(){
    navbar.style.display = 'none';
});
nav_item_register.addEventListener('click', function(){
    navbar.style.display = 'none';
});



/*============ Toggle Navbar End ===============*/




//show/hide nav menu
/*const menu = document.querySelector(".navbar");
const menuBtn = document.querySelector("#open-menu-btn");
const closeBtn = document.querySelector("#close-menu-btn");

menuBtn.addEventListener('click', () => {
    menu.style.display = "flex";
    closeBtn.style.display = "inline-block";
    menuBtn.style.display ="none";
})

const closeNav = () =>{
    menu.style.display = "none";
    closeBtn.style.display = "none";
    menuBtn.style.display ="inline-block";
}
closeBtn.addEventListener('click', closeNav);*/
var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        loop: true,
        spaceBetween: 20,
        autoplay: {
            delay: 1000,
            disableOnInteraction:false,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },

            477: {
                slidesPerView: 2,
            },
            799: {
                slidesPerView: 3,
            },
            1000:{
                slidesPerView: 3,
            },
        },
        pagination: {
            e1: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextE1: ".swiper-button-next",
            prevE1: ".swiper-button-prev",
        }
  });

$(document).ready(function(){
    $('.multi_select').selectpicker();
})


