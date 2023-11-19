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

let btnCours = document.getElementById('btn-cours');
let btnProfs = document.getElementById('btn-profs');
let btnProjets = document.getElementById('btn-projets');
let btnStages = document.getElementById('btn-stages');

btnCours.addEventListener('click', fermerMenu);

function fermerMenu() {
    console.log("Click");
    let leMenu = document.getElementById('le-menu');
    leMenu.style.transform = 'translateX(100vw)';
}