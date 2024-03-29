function isNormalSchool() {
    if (schoolTypesObj[document.querySelector('.schooltype p').textContent] == 'L03') {
        document.querySelector('.prosub-data-container').style.display = 'none'
        return true
    } else {
        document.querySelector('.prosub-data-container').style.display = 'flex'
        return false
    }
}


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

function changeYear() {
    var year = (document.querySelector('.filter-year-select .select').innerHTML).replace("Năm ", "");
    var district = document.querySelector('.filter-district-select .select').innerHTML;
    var school_input = document.querySelector('.school-search').value;
    if (school_input == '') {
        school_input = default_school;
    }

    document.querySelector('.year-input-nv').value = year
    var year_input = document.querySelector('.year-input-nv').value


    $.ajax({
        url:"ratio_figure.php",
        method:"POST",
        data:{title:school_input, year:year},
        beforeSend:function() {
            
        },
        success:function(data) {
            $('.win-ratio-graph-container').html($(data).filter('#ratioGraph'));
            $('.win-ratio-display').html($(data).filter('#ratioFigure'));
        }
    });

    $.ajax({
        url:"school_comparison.php",
        method:"POST",
        data:{year:year, district:district},
        beforeSend:function() {
            
        },
        success:function(data) {
            $('.comparison-graph-container').html($(data).filter('#comparisonGraph'));
            $('.school-list').html($(data).filter('#comparisonList'));
        }
    });


    $.ajax({
        url:"year_range_comparison.php",
        method:"POST",
        data:{title:document.querySelector('.schoolname p').innerHTML, year:year_input, wish:default_wish},
        success:function(data) {
            $('.comparison .info').html($(data).filter('#info1'))
            $('.calculation').html($(data).filter('#info2'))

            document.querySelector('.score-nv1 p').innerHTML = display_full[2]
            document.querySelector('.score-nv2 p').innerHTML = display_full[3]
            document.querySelector('.score-nv3 p').innerHTML = display_full[4]

            $.ajax({
                url:"group_comparison.php",
                method:"POST",
                data:{title:document.querySelector('.schoolname p').innerHTML, year:year, score:display_full[2]},
                success:function(data) {
                    $('.group-graph-container').html($(data).filter('#groupGraph'));
                    $('.school-group-list').html($(data).filter('#groupList'));
                }
            });

            if (!isNormalSchool()) {
                const prosub_select = document.querySelectorAll('.prosub-select')
                var subject = ''
                prosub_select.forEach(i => {
                    if (!i.className.includes('select-disable')) {
                        subject = i.querySelector('span').textContent
                    }
                })
    
                $.ajax({
                    url:"prosub_comparison.php",
                    method:"POST",
                    data:{year:year, orgSubject:subject, subject:proSubjectsObj[subject]},
                    success:function(data) {
                        $('.prosub-graph-container').html($(data).filter('#prosubComparisonGraph'));
                    }
                });
            }

        }
    }); 
    
}

$('.filter-year-list .year').on('click', changeYear);

$('.filter-district-list .district').on('click', function () {
    var year = (document.querySelector('.filter-year-select .select').innerHTML).replace("Năm ", "");
    var district = document.querySelector('.filter-district-select .select').innerHTML;
    $.ajax({
        url:"school_comparison.php",
        method:"POST",
        data:{year:year, district:district},
        beforeSend:function() {
            
        },
        success:function(data) {
            $('.comparison-graph-container').html($(data).filter('#comparisonGraph'));
            $('.school-list').html($(data).filter('#comparisonList'));
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

const navWrapNV1 = document.querySelector('.nav-wrap .select-nv1');
const navWrapNV2 = document.querySelector('.nav-wrap .select-nv2');
const navWrapNV3 = document.querySelector('.nav-wrap .select-nv3');

function displayScore(wish) {
    var school_input = document.querySelector('.schoolname p').innerHTML
    var year_input = document.querySelector('.year-input-nv').value

    $.ajax({
        url:"year_range_comparison.php",
        method:"POST",
        data:{title:school_input, year:year_input, wish:wish},
        success:function(data) {
            $('.comparison .info').html($(data).filter('#info1'))
            $('.calculation').html($(data).filter('#info2'))
        }
    });
}

navWrapNV1.style.backgroundColor = "#00C6A6";
navWrapNV1.style.color = "white"

navWrapNV1.addEventListener('click', function () {

    navWrapNV1.style.backgroundColor = "#00C6A6";
    navWrapNV1.style.color = "white"

    navWrapNV2.style.backgroundColor = "transparent"
    navWrapNV2.style.color = "var(--text-color)"
    navWrapNV3.style.backgroundColor = "transparent"
    navWrapNV3.style.color = "var(--text-color)"

    displayScore('NV1')

});

navWrapNV2.addEventListener('click', function () {

    navWrapNV2.style.backgroundColor = "#00A6A5";
    navWrapNV2.style.color = "white"

    navWrapNV1.style.backgroundColor = "transparent"
    navWrapNV1.style.color = "var(--text-color)"
    navWrapNV3.style.backgroundColor = "transparent"
    navWrapNV3.style.color = "var(--text-color)"

    displayScore('NV2')
});

navWrapNV3.addEventListener('click', function () {

    navWrapNV3.style.backgroundColor = "#008597";
    navWrapNV3.style.color = "white"

    navWrapNV1.style.backgroundColor = "transparent"
    navWrapNV1.style.color = "var(--text-color)"
    navWrapNV2.style.backgroundColor = "transparent"
    navWrapNV2.style.color = "var(--text-color)"

    displayScore('NV3')
});


const prosub_list = document.querySelector('.prosub-list')

function createProSubSelect() {
    for (const i in proSubjectsObj) {
        const prosub_select = document.createElement('div')
        const icon = document.createElement('i')
        const title = document.createElement('span')

        prosub_select.setAttribute('class', 'prosub-select select-disable')

        icon.setAttribute('class', 'fi fi-br-circle-small')
        title.innerHTML = i

        prosub_select.appendChild(icon)
        prosub_select.appendChild(title)

        prosub_list.appendChild(prosub_select)
    }
}

createProSubSelect()

function selectAction() {
    const prosub_select = document.querySelectorAll('.prosub-select')
    
    prosub_select.forEach(i => {
        i.onclick = function() {
            const year = (document.querySelector('.filter-year-select .select').innerHTML).replace("Năm ", "")

            if (this.className.includes('select-disable')) {
                prosub_select.forEach(i => {
                    if (!i.className.includes('select-disable')) {
                        i.classList.toggle('select-disable')
                    }
                })

                this.classList.toggle('select-disable')

                const subject = this.querySelector('span').textContent

                $.ajax({
                    url:"prosub_comparison.php",
                    method:"POST",
                    data:{year:year, orgSubject:subject, subject:proSubjectsObj[subject]},
                    success:function(data) {
                        $('.prosub-graph-container').html($(data).filter('#prosubComparisonGraph'));
                    }
                });
            }
        }
    })
}

selectAction()
