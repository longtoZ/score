window.onload = function () {
    for (let i of yearsList) {
        var item = document.createElement('div')
        console.log(item)
        
        item.className = "year"
        item.innerHTML = "Năm " + i.toString()

        console.log(item)

        document.querySelector('.dropdown-list').appendChild(item)
    }

    const selected = document.querySelector(".dropdown-select");
    const dropdownList = document.querySelector(".dropdown-list");
    const dropdownItems = document.querySelectorAll(".dropdown-list .year");

    dropdownItems.forEach((item) => {
        console.log(item)
        item.onclick = function() {
            document.querySelector('.dropdown-select .select').innerHTML = this.innerHTML
            dropdownList.classList.remove("active");
        }
    });

    selected.onclick = function() {
        dropdownList.classList.toggle("active");
    }
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