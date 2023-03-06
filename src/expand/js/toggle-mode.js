const switcher = document.querySelector('.switcher');
const toggle = document.querySelector('.toggle-box');
const logo = document.querySelector('header .brand-logo');

switcher.addEventListener('click', function() {
    if (!document.querySelector('body').className.includes('dark-mode')) {
        toggle.style.transform = "translateX(100%)"
        toggle.style.transition = "transform 0.3s ease-in-out"
        document.body.classList.add("dark-mode")
        if (logo) {
            logo.src = "../img/logo-full-dark.png"
        }
        localStorage.setItem("mode", "dark-mode")
    } else {
        toggle.style.transform = "translateX(0%)"
        toggle.style.transition = "transform 0.3s ease-in-out"
        document.body.classList.remove("dark-mode")
        if (logo) {
            logo.src = "../img/logo-full-light.png"
        }
        localStorage.setItem("mode", "light-mode")
    }

});

function checkmode() {
    if (localStorage.getItem("mode") == "dark-mode") {
        document.body.classList.add("dark-mode")

        document.querySelector('.toggle-box').style.transform = "translateX(100%)"
        if (document.querySelector('header .brand-logo')) {
            document.querySelector('header .brand-logo').src = "../img/logo-full-dark.png"
        }
    } else {
        document.body.classList.remove("dark-mode")

        document.querySelector('.toggle-box').style.transform = "translateX(0%)"
        if (document.querySelector('header .brand-logo')) {
            document.querySelector('header .brand-logo').src = "../img/logo-full-light.png"
        }
    }
}


checkmode()



// if (typeof(Storage) !== "undefined") {
//     // Store

//     if (turned==false) {
//         localStorage.setItem("mode", "dark-mode");
//     } else {
//         localStorage.setItem("mode", "light-mode");
//     }
    
// } else {
//     alert("Sorry, your browser does not support Web Storage...");
// }
