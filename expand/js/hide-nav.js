var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) {
        document.getElementById('main-header').style.top = "0";
        if (document.getElementById('scroll-button')) {
            document.getElementById('scroll-button').style.right = "30px";
            document.getElementById('scroll-button').style.transition = "all ease 0.5s"
        }

        if (document.querySelector('.floating-container')) {
            document.querySelector('.floating-container').style.right = "30px";
            document.querySelector('.floating-container').style.transition = "all ease 0.5s"
        }

    } else {
        document.getElementById('main-header').style.top = "-100px";
        if (document.getElementById('scroll-button')) {
            document.getElementById('scroll-button').style.right = "-100px";
            document.getElementById('scroll-button').style.transition = "all ease 0.5s"
        }

        if (document.querySelector('.floating-container')) {
            document.querySelector('.floating-container').style.right = "-100px";
            document.querySelector('.floating-container').style.transition = "all ease 0.5s"
        }
    }
    prevScrollpos = currentScrollPos;
    
}


const hideToggle = window.matchMedia('(max-width: 46.1875em)')
if (hideToggle.matches) {
    $('.nav-mobile').append($('.switcher'))
}
