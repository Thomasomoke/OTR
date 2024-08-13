window.addEventListener('scroll', function() {
    const nav = document.querySelector('nav');
    if (window.scrollY > 50) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});
var toggleMenu = document.getElementById('toggle-menu');

function showMenu() {
    toggleMenu.style.right = '0';
}
function hideMenu() {
    toggleMenu.style.right = '-200px';
}

const swiper = new Swiper('.services_wrapper', {
    loop: true,
    grabCursor: true,
    spaceBetween: 20,

  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        0: {
            slidesPerView:1
        },
        620: {
            slidesPerView:2
        },
        1024: {
            slidesPerView:3
        },
     
    }
  

  });

