function changerHeaders() {
    var ordiHeader = document.getElementById('header-ordi');
    var mobileHeader = document.getElementById('header-mobile');

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

//window.onload = changerHeaders;
//window.onresize = changerHeaders;