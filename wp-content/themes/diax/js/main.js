// Logo alt tekst
var b = document.querySelector(".site-branding a img");
b.setAttribute("alt", "DiAX Digital Accessibility Experts");

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
var d = document.getElementById("switch");

var logo = document.getElementById("diax-logo").src;
var logodark = "https://di-ax.be/wp-content/themes/diax/img/diax-logo-dark.svg";
var imgElement = document.getElementById('diax-logo');


d.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    localStorage.setItem('theme', document.body.classList.contains('dark') ? 'dark' : 'light');
    imgElement.src = (imgElement.src === logo)? logodark : logo;
});

if (localStorage.getItem('theme') === 'dark') {
    document.body.classList.add('dark');
    imgElement.src = (imgElement.src === logo)? logodark : logo;
}


// cookie talen
var cookieaccept = document.querySelector(".rcc-accept-btn");
var cookieinfo = document.querySelector(".rcc-wrapper p");
if (document.documentElement.lang === "fr") {
  cookieaccept.innerHTML = "J'accepte";
  cookieinfo.innerHTML = "Nous utilisons des cookies uniquement à des fins d'analyse";
} else if (document.documentElement.lang === "en") {
  cookieaccept.innerHTML = "Accept";
  cookieinfo.innerHTML = "We use cookies for analytical purposes only"; 
}