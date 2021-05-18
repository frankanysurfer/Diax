// Logo alt tekst
var b = document.querySelector(".site-branding a img");
b.setAttribute("alt", "Diax Digital Accessibility Experts");

// Cards klikgebied
const cards = document.querySelectorAll('.card-item');
Array.prototype.forEach.call(cards, card => {
    let down, up, link = card.querySelector('a');
    card.style.cursor = 'pointer';
    card.onmousedown = () => down = +new Date();
    card.onmouseup = () => {
        up = +new Date();
        if ((up - down) < 200) {
            link.click();
        }
    }
});

// Dark mode
// var b = document.body;
var d = document.getElementById("switch");

var logo = document.getElementById("diax-logo").src;
var logodark = "../img/diax-logo-dark.svg";
var imgElement = document.getElementById('diax-logo');

// function modeSwitch() {
//    b.classList.toggle("dark");
//    d.classList.toggle("zon");
   
//    imgElement.src = (imgElement.src === logo)? logodark : logo;
// }

d.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    localStorage.setItem('theme', document.body.classList.contains('dark') ? 'dark' : 'light');
    imgElement.src = (imgElement.src === logo)? logodark : logo;
});

if (localStorage.getItem('theme') === 'dark') {
    document.body.classList.add('dark');
    imgElement.src = (imgElement.src === logo)? logodark : logo;
}

// Remove cookie role="banner"
// document.addEventListener('DOMContentLoaded', function(event) {
//   var c = document.getElementById("cookie-notice");
//   c.removeAttribute("role");
// })