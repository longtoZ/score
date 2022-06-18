var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) {
        document.getElementById('main-header').style.top = "0";
        if (document.getElementById('floating-button')) {
            document.getElementById('floating-button').style.right = "30px";
            document.getElementById('floating-button').style.transition = "all ease 0.5s"
        }

    } else {
        document.getElementById('main-header').style.top = "-100px";
        if (document.getElementById('floating-button')) {
            document.getElementById('floating-button').style.right = "-100px";
            document.getElementById('floating-button').style.transition = "all ease 0.5s"
        }
    }
    prevScrollpos = currentScrollPos;
    
}


const hideToggle = window.matchMedia('(max-width: 46.1875em)')
if (hideToggle.matches) {
    $('.nav-mobile').append($('.switcher'))
}
