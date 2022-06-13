for (let j of document.querySelectorAll('.filter-year-list')){
    for (let i of yearsList) {
            var item = document.createElement('div')
            
            item.className = "year"
            item.innerHTML = "Năm " + i.toString()

            j.appendChild(item)
        }
}

for (let i of districtsList) {
    var item = document.createElement('div')
    
    item.className = "district"
    item.innerHTML = i.toString()

    document.querySelector('.filter-district-list').appendChild(item)
}

const yearSelected = document.querySelectorAll(".filter-year-select");
const filterYearList = document.querySelectorAll(".filter-year-list");
const yearsItem = document.querySelectorAll('.filter-year-list .year');
const districtSelected = document.querySelector(".filter-district-select");
const filterDistrictList = document.querySelector(".filter-district-list");
const districtsItem = document.querySelectorAll('.filter-district-list .district');

yearsItem.forEach((item) => {
    item.onclick = function() {
        for (let j of document.querySelectorAll('.filter-year-select .select')) {
            j.innerHTML = this.innerHTML
            for (let i of filterYearList) {
                i.classList.remove("active");
                console.log(i)
            }
        }
    }
});

for (let i of yearSelected) {
    i.onclick = function() {
        for (let j of filterYearList) {
            j.classList.toggle("active");
        }

    }
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

$('.filter-year-list .year').on('click', function () {
    var year = (document.querySelector('.filter-year-select .select').innerHTML).replace("Năm ", "");
    var district = document.querySelector('.filter-district-select .select').innerHTML;
    var school_input = document.querySelector('.school-search').value;
    if (school_input == '') {
        school_input = default_school;
    }

    $.ajax({
        url:"ratio_search.php",
        method:"POST",
        data:{title:school_input, year:year},
        beforeSend:function() {
            
        },
        success:function(data) {
            $('.win-ratio-graph-container').html(data);
        }
    });

    $.ajax({
        url:"ratio_firgue.php",
        method:"POST",
        data:{title:school_input, year:year},
        beforeSend:function() {
            
        },
        success:function(data) {
            $('.win-ratio-display').html(data);
        }
    });

    $.ajax({
        url:"school_comparision.php",
        method:"POST",
        data:{year:year, district:district},
        beforeSend:function() {
            
        },
        success:function(data) {
            $('.comparision-graph-container').html(data);
        }
    });
    
    
});

$('.filter-district-list .district').on('click', function () {
    var year = (document.querySelector('.filter-year-select .select').innerHTML).replace("Năm ", "");
    var district = document.querySelector('.filter-district-select .select').innerHTML;
    $.ajax({
        url:"school_comparision.php",
        method:"POST",
        data:{year:year, district:district},
        beforeSend:function() {
            
        },
        success:function(data) {
            $('.comparision-graph-container').html(data);
        }
    });

    $.ajax({
        url:"school_list.php",
        method:"POST",
        data:{year:year, district:district},
        success:function(data) {
            $('.school-list').html(data);
        }
    });

});



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

