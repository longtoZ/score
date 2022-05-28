var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById('main-header').style.top = "0";
        document.getElementById('main-header').style.transition = "top 0.5s"
    } else {
        document.getElementById('main-header').style.top = "-100px";
        document.getElementById('main-header').style.transition = "top 0.5s"
    }
    prevScrollpos = currentScrollPos;
}