let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
var swiper = new Swiper(".home-slider",{
    loop:true,
    navigation:{
        nextE1:".swiper-button-next",
        prevtE1:".swiper-button-prev",
    }
})
var swiper = new Swiper(".reviews-slider",{
    loop:true,
    spaceBetween:20,
    autoHeight:true,
    grabCursor:true,
    breakpoints:{
       640:{
        slidePerView:1,
        
       },
       768:{
        slidePerView:2,
        
       },
       1024:{
        slidePerView:3,
       
       }
    }
})