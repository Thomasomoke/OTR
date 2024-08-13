// document.getElementById('video-link').addEventListener('click', function(event) {
//     event.preventDefault();
//     window.open(this.href, '_blank');
// });
ScrollReveal().reveal('.headline');
document.addEventListener("mousemove", parallax);

function parallax(e) {
    // document.querySelectorAll('.parallax').forEach(function(move) {
    //     var moving_value = move.getAttribute('data-value');
    //     var x = (e.clientX * moving_value) / 250;
    //     var y = (e.clientY * moving_value) / 250;

    //     move.style.transform = 'translateX(' + x + 'px) translateY(' + y + 'px)';
    // });

    // Background parallax effect
    var background = document.querySelector('.header ',);
    var x = (e.clientX / window.innerWidth - 0.5) * 20; 
    var y = (e.clientY / window.innerHeight - 0.) * 20; 
    background.style.backgroundPosition = `${x}% ${y}%`;

    
}

function toggleText(button) {
    const hiddenText = button.previousElementSibling; 
    if (hiddenText.style.display === "none") {
        hiddenText.style.display = "block"; 
        button.textContent = "Read Less"; 
    } else {
        hiddenText.style.display = "none"; 
        button.textContent = "Read More"; 
    }
}

const title = "WELCOME TO THE OLD TIME RELIGION MUSDA"; 
const heading = document.getElementById('heading');
const colors = ["red", "black"];

let words = title.split(" ");
let count = 0;
let interval = setInterval(() => {
    if (count == words.length) {
        count = 0;
        heading.innerHTML = "";
    } else {
        const word = words[count];
        const color = colors[count % colors.length];
        heading.innerHTML += `<span style="color: ${color};">${word} </span>`;
        count++;
    }
}, 700); // Adjust the interval duration as needed

var toggleMenu = document.getElementById('toggle-menu');

function showMenu() {
    toggleMenu.style.right = '0';
}
function hideMenu() {
    toggleMenu.style.right = '-200px';
}

window.addEventListener('scroll', function() {
    const nav = document.querySelector('nav');
    if (window.scrollY > 50) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});
document.addEventListener("DOMContentLoaded", function() {
    const lazySections = document.querySelectorAll('.lazy');
    const lazyImages = document.querySelectorAll('.lazy-image');
    const lazyTexts = document.querySelectorAll('.lazy-text');

    const options = {
        root: null, 
        rootMargin: '0px',
        threshold:0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
              
                setTimeout(() => {
                    if (entry.target.classList.contains('lazy')) {
                        const bgImage = entry.target.getAttribute('data-bg');
                        entry.target.style.backgroundImage = `url(${bgImage})`; 
                        entry.target.classList.add('loaded'); 
                    }
                    if (entry.target.classList.contains('lazy-image')) {
                        const img = entry.target;
                        img.src = img.getAttribute('data-src'); 
                        img.classList.add('loaded'); 
                    } else if (entry.target.classList.contains('lazy-text')) {
                        entry.target.classList.add('loaded'); 
                    }
                    observer.unobserve(entry.target); 
                }, 700); 
            }
        });
    }, options);

    lazySections.forEach(section => {
        observer.observe(section); 
    });

    lazyImages.forEach(img => {
        observer.observe(img); 
    });

    lazyTexts.forEach(text => {
        observer.observe(text); 
    });
});