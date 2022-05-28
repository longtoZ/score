const switcher = document.querySelector('.switcher');
const toggle = document.querySelector('.toggle-box');
const logo = document.querySelector('header .brand-logo');

var turned = false
switcher.addEventListener('click', function() {
    if (turned==false) {
        toggle.style.transform = "translateX(100%)"
        toggle.style.transition = "transform 0.3s ease-in-out"
        document.body.classList.add("dark-mode")
        logo.src = "../img/logo-full-dark (2).png"
        localStorage.setItem("mode", "dark-mode")
        turned = true
    } else {
        toggle.style.transform = "translateX(0%)"
        toggle.style.transition = "transform 0.3s ease-in-out"
        document.body.classList.remove("dark-mode")
        logo.src = "../img/logo-full-light (2).png"
        localStorage.setItem("mode", "light-mode")
        turned = false
    }

});


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






