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
            if (document.querySelector('.menu-container').className.includes('reduce')) {
                document.querySelector('.main-container .menu-container').style.left = "-6em"
            }
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

console.error("%c Stop ruining my website...!", "font-size: 2em")
console.log("%c Dừng lại nào! Score chỉ đơn thuần là một dự nhỏ do một học sinh xây dựng, do đó hiệu suất và bảo mật còn rất kém. Nếu bạn vào đây chỉ muốn khám phá mớ code hỗn độn như này thì... go ahead. Còn nếu bạn muốn Ddos hệ thống thì just donttttt! Hãy để tôi qua năm nay đi rồi làm gì thì làm.", "=color:white; font-size: 1.1em")