/*
    Fonction qui permet de montre le menu mobile lorsque la fenêtre est plus petit ou égale à 767 px
    et de montrer le menu ordi lorsque la fenêtre est plus grande que 768 px
*/
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


let btnBurger = document.querySelector('.burger');
//let menu = document.getElementById('le-menu');
let menu = document.querySelector('.le-menu');
let lignes = document.querySelectorAll('.ligne');
let btnCours = document.getElementById('menu-item-271');
let btnProfs = document.getElementById('btn-profs');
let btnProjets = document.getElementById('btn-projets');
let btnStages = document.getElementById('btn-stages');

btnBurger.addEventListener('click', toggleMenu);
btnCours.addEventListener('click', toggleMenu);
btnProfs.addEventListener('click', toggleMenu);
btnProjets.addEventListener('click', toggleMenu);
btnStages.addEventListener('click', toggleMenu);

/*
    Fonction qui permet d'ouvrir et de fermer le menu mobile lorqu'on clique sur le menu burger ou les liens à l'intérieur
*/
function toggleMenu() {
    menu.classList.toggle('le-menu-ouvert');
    btnBurger.classList.toggle('burger-ouvert');
    lignes.forEach(
        ligne => ligne.classList.toggle('ouvert')
    );
}