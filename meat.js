let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header .navbar a');

window.onscroll  = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

section.forEach(sec =>{
    let top = window.scrollY;
    let height = sec.offsetHeight;
    let offset = sec.offsetTop - 150;
    let id = sec.getAttribute('id');

    if(top => offset && top < offset + height){
        navLinks.forEach(links =>{
            links.classList.remove('active');
            document.querySelector('header .navbar a[href*='+id+']').classlist.add('active');
        });
    };
});

}
document.querySelector('#search-icon').onclick = () =>{
    document.querySelector('#search-form').classList.toggle('active');
}
document.querySelector('#close').onclick = () =>{
    document.querySelector('#search-form').classList.remove('active');
}
{

var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
    delay: 7500,
    disableOnInteraction: false,
    },
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
    },
loop:true,
});
}


var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    centeredSlides: true,
    autoplay: {
    delay: 7500,
    disableOnInteraction: false,
    },
    loop:true,
breakpoints:{
    0:{
        slidesPerView:1,

    },
    640: {
        slidesPerView:2,

    },
    768:{
        slidesPerView:2,
    },
    1024:{
        slidesPerView:3,
    },
},
});

let  modelBox = document.getElementById('modalbox');
   
function showModal(){
    setTimeout(() => {
        modelBox.style.display = "block";
    },10000)
}
function closeModal(){
    modelBox.style.display = "none";
}


document.querySelectorAll('.video-container video').forEach(vid => {
    vid.onclick = () =>{
    document.querySelector('.popup-video').style.display='block';
    document.querySelector('.popup-video video').src = vid.getAttribute('src');
    }
});
document.querySelector('.popup-video i').onclick = () =>{
    document.querySelector('.popup-video').style.display='none';
}



// let cart = [];

// function addToCart(item, price) {
//     cart.push({ item, price });
//     updateCart();
// }

// function updateCart() {
//     const cartItems = document.getElementById('cart-items');
//     const totalElement = document.getElementById('total');
//     cartItems.innerHTML = '';
//     let total = 0;
//     cart.forEach(({ item, price }) => {
//         const li = document.createElement('li');
//         li.textContent = `${item} - $${price.toFixed(2)}`;
//         cartItems.appendChild(li);
//         total += price;
//     });
//     totalElement.textContent = total.toFixed(2);
// }



