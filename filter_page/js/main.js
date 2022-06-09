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


const yearSelected = document.querySelector(".filter-year-select");
const filterYearList = document.querySelector(".filter-year-list");
const districtSelected = document.querySelector(".filter-district-select");
const filterDistrictList = document.querySelector(".filter-district-list");
const wishSelected = document.querySelector(".filter-wish-select");
const filterWishList = document.querySelector(".filter-wish-list");

const yearAdvancedSelected = document.querySelector(".filter-year-advanced-select");
const filterYearAdvancedList = document.querySelector(".filter-year-advanced-list");
const wishAdvancedSelected = document.querySelector(".filter-wish-advanced-select");
const filterWishAdvancedList = document.querySelector(".filter-wish-advanced-list");

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



function showYear(text) {
    document.querySelector('.filter-year-select .select').innerHTML = text;
    filterYearList.classList.remove("active");
}

yearSelected.onclick = function() {
    filterYearList.classList.toggle("active");
}

function showDistrict(text) {
    document.querySelector('.filter-district-select .select').innerHTML = text;
    filterDistrictList.classList.remove("active");
}

districtSelected.onclick = function() {
    filterDistrictList.classList.toggle("active");
}

function showWish(text) {
    document.querySelector('.filter-wish-select .select').innerHTML = text;
    filterWishList.classList.remove("active");
}

wishSelected.onclick = function() {
    filterWishList.classList.toggle("active");
}


basicChoose.onclick = function() {
    basicBox.classList.toggle("active");
}

advancedChoose.onclick = function() {
    advancedBox.classList.toggle("active");
    submitBtn.classList.toggle("inactive");
}

function showYearAdvanced(text) {
    document.querySelector('.filter-year-advanced-select .select').innerHTML = text;
    filterYearAdvancedList.classList.remove("active");
}

yearAdvancedSelected.onclick = function() {
    filterYearAdvancedList.classList.toggle("active");
}

function showWishAdvanced(text) {
    document.querySelector('.filter-wish-advanced-select .select').innerHTML = text;
    filterWishAdvancedList.classList.remove("active");
}

wishAdvancedSelected.onclick = function() {
    filterWishAdvancedList.classList.toggle("active");
}


aboveClicked = false;
belowClicked = false;
positionClicked = false

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

position.onclick = function () {
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

