function changerHeaders() {
    var ordiHeader = document.getElementById('header-ordi');
    var mobileHeader = document.getElementById('header-mobile');

    if (window.innerWidth <= 767) {
        ordiHeader.style.display = 'none';
        mobileHeader.style.display = 'content';
    } else {
        ordiHeader.style.display = 'flex';
        mobileHeader.style.display = 'none';
    }
}

window.onload = changerHeaders;
window.onresize = changerHeaders;