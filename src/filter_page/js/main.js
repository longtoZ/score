districtsList.unshift("Tất cả")

for (let i of yearsList) {
    const item = document.createElement('div')
    
    item.className = "year"
    item.innerHTML = "Năm " + i.toString()

    document.querySelector('.filter-year-advanced-list').appendChild(item.cloneNode(true))
}

for (let i of districtsList) {
    const item = document.createElement('div')
    
    item.className = "district"
    item.innerHTML = i.toString()

    document.querySelector('.filter-district-advanced-list').appendChild(item.cloneNode(true))
}

function createWishList() {
    const advanced_wish_list = document.querySelector('.filter-wish-advanced-list')

    document.querySelectorAll('.filter-wish-advanced-list .wish').forEach(i => {i.remove()})

    for (const i in normalSubjectsObj) {
        const item = document.createElement('div')
        
        item.className = "wish"
        item.innerHTML = i.toString()
    
        advanced_wish_list.appendChild(item.cloneNode(true))
    }

    advanced_wish_list.parentNode.querySelector('.filter-wish-advanced-select .select').innerHTML = "Nguyện vọng 1"
}

createWishList()

const yearAdvancedSelected = document.querySelector(".filter-year-advanced-select");
const filterYearAdvancedList = document.querySelector(".filter-year-advanced-list");
const yearsAdvancedItem = document.querySelectorAll('.filter-year-advanced-list .year');
const districtAdvancedSelected = document.querySelector(".filter-district-advanced-select");
const filterDistrictAdvancedList = document.querySelector(".filter-district-advanced-list");
const districtsAdvancedItem = document.querySelectorAll('.filter-district-advanced-list .district');

districtsAdvancedItem[0].style.borderRadius = '15px'
districtsAdvancedItem[0].classList.toggle('district-all')

function recreateWishList() {
    const wishAdvancedSelected = document.querySelector(".filter-wish-advanced-select");
    const filterWishAdvancedList = document.querySelector(".filter-wish-advanced-list");
    const wishsAdvancedItem = document.querySelectorAll('.filter-wish-advanced-list .wish');

    wishsAdvancedItem.forEach((item) => {
        item.onclick = function() {
            document.querySelector('.filter-wish-advanced-select .select').innerHTML = this.innerHTML
            filterWishAdvancedList.classList.remove("active");
        }
    });
    
    wishAdvancedSelected.onclick = function() {
        filterWishAdvancedList.classList.toggle("active");
    }
}

recreateWishList()


yearsAdvancedItem.forEach((item) => {
    item.onclick = function() {
        document.querySelector('.filter-year-advanced-select .select').innerHTML = this.innerHTML
        filterYearAdvancedList.classList.remove("active");
    }
});

yearAdvancedSelected.onclick = function() {
    filterYearAdvancedList.classList.toggle("active");
}

var districtCount = 0
var districtList = []

function advancedDistrictSelect() {

    districtsAdvancedItem.forEach((item) => {
        item.onclick = function() {

            if (item.className.includes('district-all')) {
                districtsAdvancedItem.forEach(i => {
                    i.classList.remove('adv-select')
                })

                item.classList.toggle('adv-select')
                districtCount = 0
                districtList.length = 0
                districtList.push(item.textContent)

            } else {

                document.querySelector('.district-all').classList.remove('adv-select')
                if (districtList[0] == 'Tất cả') {districtList = districtList.slice(1)}

                if (!item.className.includes('adv-select')) {
                    districtCount++
                    districtList.push("`QUAN/HUYEN` LIKE '%" + item.textContent + "'")
                } else {
                    districtCount--
                    districtList.pop()
                }
    
                item.classList.toggle('adv-select')

            }

            if (districtCount < 2) {
                document.querySelector('.filter-district-advanced-select .select').innerHTML = this.innerHTML;
            } else {
                document.querySelector('.filter-district-advanced-select .select').innerHTML = `${this.innerHTML}, <b style="font-weight:400;">+${districtCount.toString()}</b>`;
            }

        }
    });
    
    districtAdvancedSelected.onclick = function() {
        filterDistrictAdvancedList.classList.toggle("active");
    }
}

advancedDistrictSelect()

const above = document.querySelector('.filter-above-average');
const below = document.querySelector('.filter-below-average');
const aboveAverage = document.querySelector('.above');
const belowAverage = document.querySelector('.below');
const position = document.querySelector('.position');

const filterBetween = document.querySelectorAll('.filter-between *');
const filterMoreLeft = document.querySelectorAll('.filter-more-box .left-box *');
const filterMoreRight = document.querySelectorAll('.filter-more-box .right-box *');

filterBetween.forEach((item) => {
    item.onclick = function () {
        filterBetween.forEach((item0) => {
            item0.style.opacity = "1"
            item0.style.cursor = "pointer"
        });
        filterMoreLeft.forEach((item1) => {
            item1.style.opacity = "0.5"
            item1.style.cursor = "not-allowed"
        });
        filterMoreRight.forEach((item2) => {
            item2.style.opacity = "0.5"
            item2.style.cursor = "not-allowed"
        });
    }
});

filterMoreLeft.forEach((item) => {
    item.onclick = function () {
        filterMoreLeft.forEach((item0) => {
            item0.style.opacity = "1"
            item0.style.cursor = "pointer"
        });
        filterBetween.forEach((item1) => {
            item1.style.opacity = "0.5"
            item1.style.cursor = "not-allowed"
        });
        filterMoreRight.forEach((item2) => {
            item2.style.opacity = "0.5"
            item2.style.cursor = "not-allowed"
        });
    }

    positionClicked = false

    position.onclick = function () {
        if (document.querySelector('.top').value != '') {
            if (positionClicked == false) {
                position.style.backgroundColor = 'var(--green)'
                position.style.color = 'white'
                position.value = "Cao nhất"
                positionClicked = true
            } else {
                position.style.backgroundColor = 'var(--orange)'
                position.style.color = 'white'
                position.value = "Thấp nhất"
                positionClicked = false
            }
        }
    
    }
});

filterMoreRight.forEach((item) => {
    item.onclick = function () {
        filterMoreRight.forEach((item0) => {
            item0.style.opacity = "1"
            item0.style.cursor = "pointer"
        });
        filterMoreLeft.forEach((item1) => {
            item1.style.opacity = "0.5"
            item1.style.cursor = "not-allowed"
        });
        filterBetween.forEach((item2) => {
            item2.style.opacity = "0.5"
            item2.style.cursor = "not-allowed"
        });
    }

    aboveClicked = false;
    belowClicked = false;

    above.onclick = function () {
        if (aboveClicked == false) {
            if (belowAverage == false) {
                aboveAverage.classList.toggle('active');
            } else {
                aboveAverage.classList.toggle('active');
                belowAverage.classList.remove("active");
            }
            aboveClicked = true
            belowClicked = false
            
        } else {
            aboveAverage.classList.remove("active");
            aboveClicked = false
            belowClicked = true
        }
    
        document.querySelector('.filter-top .top').value = ''
    }

    below.onclick = function () {
        if (belowClicked == false) {
            if (aboveAverage == false) {
                belowAverage.classList.toggle('active');
            } else {
                belowAverage.classList.toggle('active');
                aboveAverage.classList.remove("active");
            }
            belowClicked = true
            aboveClicked = false
            
        } else {
            belowAverage.classList.remove("active");
            belowClicked = false
            aboveClicked = true
        }
    
        document.querySelector('.filter-top .top').value = ''
    }
});


const hideBtn = document.querySelectorAll('.hide-btn');
const floatingBtn = document.getElementById('floating-button');
const floatingBox = document.getElementById('floating-box');
const floatingCheckbox = document.getElementById('floating-checkbox');
const overlay = document.querySelector('.overlay');

const simplify = document.getElementById('simplify-mode');
const exportxlsx = document.querySelector('.exportxlsx');
const print = document.querySelector('.print');

function hidePrintBox() {
    if (floatingCheckbox.checked==false) {
        floatingBox.classList.toggle('active')
        floatingBtn.classList.toggle('active')
        overlay.classList.toggle('active')
    } else {
        floatingBox.classList.remove('active')
        floatingBtn.classList.remove('active')
        overlay.classList.remove('active')
    }
}

function exportXLSX() {

    var exportTable = document.querySelector('.search-table');

    if (exportTable ) {

        var tableTitle = (document.querySelector('#search-result h1').innerHTML).replace(':', '');

        var wb = XLSX.utils.table_to_book(exportTable, {sheet:tableTitle});
        XLSX.writeFile(wb, tableTitle + ".xlsx");
    
    } else {
        alert("Chưa có kết quả để in");
    }
}

floatingBtn.addEventListener('click', hidePrintBox);
overlay.addEventListener('click', hidePrintBox);

simplify.addEventListener('click', function () {
    document.querySelector('.main').classList.toggle('simplify')
});

print.addEventListener('click', function() {
    window.print()
});

exportxlsx.addEventListener('click', exportXLSX);