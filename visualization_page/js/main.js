const yearSelected = document.querySelectorAll(".filter-year-select");
const filterYearList = document.querySelectorAll(".filter-year-list");
const districtSelected = document.querySelectorAll(".filter-district-select");
const filterDistrictList = document.querySelectorAll(".filter-district-list");



function showYear(text) {
    for (let i of document.querySelectorAll('.filter-year-select .select')) {
        i.innerHTML = text;
    }
    for (let i of filterYearList) {
        i.classList.remove("active");
    }
    
}
for (let i of yearSelected) {
    i.onclick = function() {
        for (let j of filterYearList) {
            j.classList.toggle("active");
        }
    }
}

function showDistrict(text) {
    for (let i of document.querySelectorAll('.filter-district-select .select')) {
        i.innerHTML = text;
    }
    for (let i of filterDistrictList) {
        i.classList.remove("active");
    }
    
}
for (let i of districtSelected) {
    i.onclick = function() {
        for (let j of filterDistrictList) {
            j.classList.toggle("active");
        }
    }
}


function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("clockDisplay").innerText = time;
    document.getElementById("clockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();

