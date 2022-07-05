var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) {
        if (document.getElementById('main-header')) {
            document.getElementById('main-header').style.top = "0";
        }

        if (document.getElementById('scroll-button')) {
            document.getElementById('scroll-button').style.right = "30px";
            document.getElementById('scroll-button').style.transition = "all ease 0.5s"
        }

        if (document.querySelector('.floating-container')) {
            document.querySelector('.floating-container').style.right = "30px";
            document.querySelector('.floating-container').style.transition = "all ease 0.5s"
        }

        if (document.querySelector('.main-container .menu-container')) {
            document.querySelector('.main-container .menu-container').style.left = "0em"
        }

    } else {
        if (document.getElementById('main-header')) {
            document.getElementById('main-header').style.top = "-100px";
        }
        if (document.getElementById('scroll-button')) {
            document.getElementById('scroll-button').style.right = "-100px";
            document.getElementById('scroll-button').style.transition = "all ease 0.5s"
        }

        if (document.querySelector('.floating-container')) {
            document.querySelector('.floating-container').style.right = "-100px";
            document.querySelector('.floating-container').style.transition = "all ease 0.5s"
        }

        if (document.querySelector('.main-container .menu-container')) {
            document.querySelector('.main-container .menu-container').style.left = "-6em"
        }
    }
    prevScrollpos = currentScrollPos;
    
}


const hideToggle = window.matchMedia('(max-width: 46.1875em)')
if (hideToggle.matches) {
    $('.nav-mobile').append($('.switcher'))
}

if (document.getElementById('scroll-button')) {
    document.getElementById('scroll-button').addEventListener('click', function() {
        document.documentElement.scrollTop = 0;
    })
}

