districtsList.unshift("Tất cả")

for (let i of yearsList) {
    var item = document.createElement('div')
    
    item.className = "year"
    item.innerHTML = "Năm " + i.toString()

    document.querySelector('.filter-year-list').appendChild(item)
    document.querySelector('.filter-year-advanced-list').appendChild(item)
}

// for (let i of yearsList) {
//     var item = document.createElement('div')
    
//     item.className = "year"
//     item.innerHTML = "Năm " + i.toString()

    
// }

for (let i of districtsList) {
    var item = document.createElement('div')
    
    item.className = "district"
    item.innerHTML = i.toString()

    document.querySelector('.filter-district-list').appendChild(item)
    document.querySelector('.filter-district-advanced-list').appendChild(item)
}

for (let i of wishsList) {
    var item = document.createElement('div')
    
    item.className = "wish"
    item.innerHTML = i.toString()

    document.querySelector('.filter-wish-list').appendChild(item)
    document.querySelector('.filter-wish-advanced-list').appendChild(item)
}

// for (let i of wishsList) {
//     var item = document.createElement('div')
    
//     item.className = "wish"
//     item.innerHTML = i.toString()

    
// }


const yearSelected = document.querySelector(".filter-year-select");
const filterYearList = document.querySelector(".filter-year-list");
const yearsItem = document.querySelectorAll('.filter-year-list .year');
const districtSelected = document.querySelector(".filter-district-select");
const filterDistrictList = document.querySelector(".filter-district-list");
const districtsItem = document.querySelectorAll('.filter-district-list .district');
const wishSelected = document.querySelector(".filter-wish-select");
const filterWishList = document.querySelector(".filter-wish-list");
const wishsItem = document.querySelectorAll('.filter-wish-list .wish');

const yearAdvancedSelected = document.querySelector(".filter-year-advanced-select");
const filterYearAdvancedList = document.querySelector(".filter-year-advanced-list");
const yearsAdvancedItem = document.querySelectorAll('.filter-year-advanced-list .year');
const wishAdvancedSelected = document.querySelector(".filter-wish-advanced-select");
const filterWishAdvancedList = document.querySelector(".filter-wish-advanced-list");
const wishsAdvancedItem = document.querySelectorAll('.filter-wish-advanced-list .wish');
const districtAdvancedSelected = document.querySelector(".filter-district-advanced-select");
const filterDistrictAdvancedList = document.querySelector(".filter-district-advanced-list");
const districtsAdvancedItem = document.querySelectorAll('.filter-district-advanced-list .district');

yearsItem.forEach((item) => {
    item.onclick = function() {
        document.querySelector('.filter-year-select .select').innerHTML = this.innerHTML
        filterYearList.classList.remove("active");
    }
});

yearSelected.onclick = function() {
    filterYearList.classList.toggle("active");
}

districtsItem.forEach((item) => {
    item.onclick = function() {
        document.querySelector('.filter-district-select .select').innerHTML = this.innerHTML
        filterDistrictList.classList.remove("active");
    }
});

districtSelected.onclick = function() {
    filterDistrictList.classList.toggle("active");
}

wishsItem.forEach((item) => {
    item.onclick = function() {
        document.querySelector('.filter-wish-select .select').innerHTML = this.innerHTML
        filterWishList.classList.remove("active");
    }
});

wishSelected.onclick = function() {
    filterWishList.classList.toggle("active");
}

yearsAdvancedItem.forEach((item) => {
    item.onclick = function() {
        document.querySelector('.filter-year-advanced-select .select').innerHTML = this.innerHTML
        filterYearAdvancedList.classList.remove("active");
    }
});

yearAdvancedSelected.onclick = function() {
    filterYearAdvancedList.classList.toggle("active");
}

wishsAdvancedItem.forEach((item) => {
    item.onclick = function() {
        document.querySelector('.filter-wish-advanced-select .select').innerHTML = this.innerHTML
        filterWishAdvancedList.classList.remove("active");
    }
});

wishAdvancedSelected.onclick = function() {
    filterWishAdvancedList.classList.toggle("active");
}

districtsAdvancedItem.forEach((item) => {
    item.onclick = function() {
        document.querySelector('.filter-district-advanced-select .select').innerHTML = this.innerHTML;
        filterDistrictAdvancedList.classList.remove("active");
    }
});

districtAdvancedSelected.onclick = function() {
    filterDistrictAdvancedList.classList.toggle("active");
}



const basicChoose = document.querySelector('.filter-basic-header');
const basicBox = document.querySelector('.filter-basic-container');
const advancedChoose = document.querySelector('.filter-advanced-header');
const advancedBox = document.querySelector('.filter-advanced-container');

const above = document.querySelector('.filter-above-average');
const below = document.querySelector('.filter-below-average');
const aboveAverage = document.querySelector('.above');
const belowAverage = document.querySelector('.below');
const position = document.querySelector('.position');

const submitBtn = document.querySelector('.submit-btn');

var maths = 0;
var literature = 0;
var english = 0;


const filterBetween = document.querySelectorAll('.filter-between *');
const filterMoreLeft = document.querySelectorAll('.filter-more-box .left-box *');
const filterMoreRight = document.querySelectorAll('.filter-more-box .right-box *');

function showScore() {
    if (document.querySelector(".filter-year-select .select").innerHTML == "Chọn năm") {
        alert("Vui lòng chọn năm!");  
    } else {
        // alert("here")
        if (document.querySelector('.score-maths').value != "" && document.querySelector('.score-literature').value !="" && document.querySelector('.score-english').value != "") {
            maths = document.querySelector('.score-maths').value;
            literature = document.querySelector('.score-literature').value;
            english = document.querySelector('.score-english').value;

            var average = 0;
            if (parseFloat((document.querySelector(".filter-year-select .select").innerHTML).replace("Năm ", "")) <= 2020) {
                average = parseFloat(maths)*2 + parseFloat(literature)*2 + parseFloat(english);
            } else {
                average = parseFloat(maths) + parseFloat(literature) + parseFloat(english);
            }
            document.querySelector('.score-average').value = average.toString();
        }
        
    }
    
}  


basicChoose.onclick = function() {
    basicChoose.classList.toggle('active');
    basicBox.classList.toggle("active");
}

advancedChoose.onclick = function() {
    advancedChoose.classList.toggle('active');
    advancedBox.classList.toggle("active");
    submitBtn.classList.toggle("inactive");
}


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

floatingBtn.addEventListener('click', hidePrintBox);
overlay.addEventListener('click', hidePrintBox);

simplify.addEventListener('click', function () {
    document.querySelector('.main').classList.toggle('simplify')
});

print.addEventListener('click', function() {
    window.print()
});

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

exportxlsx.addEventListener('click', exportXLSX);

