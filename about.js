ScrollReveal().reveal('.headline');
document.addEventListener("mousemove", parallax);

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