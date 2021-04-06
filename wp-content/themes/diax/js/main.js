var b = document.querySelector(".site-branding a img");
b.setAttribute("alt", "Diax Digital Accessibility Experts");

// Cards klikgebied
const cards = document.querySelectorAll('.card');
Array.prototype.forEach.call(cards, card => {
    let down, up, link = card.querySelector('h2 a');
    card.style.cursor = 'pointer';
    card.onmousedown = () => down = +new Date();
    card.onmouseup = () => {
        up = +new Date();
        if ((up - down) < 200) {
            link.click();
        }
    }
});

// document.getElementById("cookie-notice").removeAttribute("role");


