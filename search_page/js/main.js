window.onload = function () {
    for (let i of yearsList) {
        var item = document.createElement('div')
        
        item.className = "year"
        item.innerHTML = "Năm " + i.toString()

        document.querySelector('.dropdown-list').appendChild(item)
    }

    for (let [key, value] of Object.entries(schoolTypesObj)) {
        var item = document.createElement('div')
        
        item.className = "type"
        item.innerHTML =  key.toString()

        document.querySelector('.school-type-list').appendChild(item)
    }

    const yearSelected = document.querySelector(".dropdown-select");
    const dropdownList = document.querySelector(".dropdown-list");
    const dropdownItems = document.querySelectorAll(".dropdown-list .year");
    const schoolTypeSelected = document.querySelector(".school-type-select");
    const schoolTypeList = document.querySelector(".school-type-list");
    const schoolTypeItems = document.querySelectorAll(".school-type-list .type");

    yearSelected.onclick = function() {
        dropdownList.classList.toggle("active");
    }

    schoolTypeSelected.onclick = function() {
        schoolTypeList.classList.toggle("active");
    }

    dropdownItems.forEach((item) => {
        item.onclick = function() {
            document.querySelector('.dropdown-select .select').innerHTML = this.innerHTML
            dropdownList.classList.remove("active");
            const input = document.getElementById('live-search')
            input.value += ' '
            input.dispatchEvent(new Event('change'))
            setTimeout(() => {input.value = input.value.trim()}, 100)
        }
    });


    schoolTypeItems.forEach((item) => {
        item.onclick = function() {
            document.querySelector('.school-type-select .select').innerHTML = this.innerHTML
            // $('#live-search').val(' ').change()
            schoolTypeList.classList.remove("active");
            const input = document.getElementById('live-search')
            input.value += ' '
            input.dispatchEvent(new Event('change'))
            setTimeout(() => {input.value = input.value.trim()}, 100)
        }
    });
    
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