function changerHeaders() {
    let ordiHeader = document.getElementById('header-ordi');
    let mobileHeader = document.getElementById('header-mobile');

    if (window.innerWidth <= 767) {
        ordiHeader.style.display = 'none';
        mobileHeader.style.display = 'flex';
    } else {
        ordiHeader.style.display = 'flex';
        mobileHeader.style.display = 'none';
    }
}

window.addEventListener('load', changerHeaders);
window.addEventListener('resize', changerHeaders);

let menuMobile = document.getElementById('menu-mobile')

let btnCours = document.getElementById('btn-cours');
let btnProfs = document.getElementById('btn-profs');
let btnProjets = document.getElementById('btn-projets');
let btnStages = document.getElementById('btn-stages');

btnBurger.addEventListener('click', gestionMenu);
btnCours.addEventListener('click', fermerMenu);

/*function gestionMenu() {
    let menuOuvert = false;
    let leMenu = document.getElementById('le-menu');
    if (menuOuvert === false) {
        leMenu.style.transform = 'translateX(0vw)';
        menuOuvert = true;
    }
    else if (menuOuvert === true) {
        leMenu.style.transform = 'translateX(100vw)';
        menuOuvert = false;
    }
}*/

function fermerMenu() {
    /*console.log("Click");
    let leMenu = document.getElementById('le-menu');
    leMenu.style.transform = 'translateX(100vw)';

    menuMobile.checked = false;*/
    document.getElementById('le-burger').checked = false;
}