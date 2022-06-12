const selected = document.querySelector(".dropdown-select");
const dropdownList = document.querySelector(".dropdown-list");


function show(text) {
    document.querySelector('.dropdown-select .select').innerHTML = text;
    dropdownList.classList.remove("active");
}

selected.onclick = function() {
    dropdownList.classList.toggle("active");
}

// selected.addEventListener("click", () => {
//     dropdownList.classList.toggle("active");
// });

// yearList.forEach(i => {
//     i.addEventListener("click", () => {
//         selected.innerHTML = i.querySelector("select").innerHTML;
//         dropdownList.classList.remove("active");
//     });
// });