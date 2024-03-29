const hideBtn = document.querySelectorAll('.hide-btn');
const floatingBtn = document.getElementById('floating-button');
const floatingBox = document.getElementById('floating-box');
const floatingCheckbox = document.getElementById('floating-checkbox');
const overlay = document.querySelector('.overlay');

const section1 = document.querySelector('.section1 label');
const section2 = document.querySelector('.section2 label');
const section3 = document.querySelector('.section3 label');
const section4 = document.querySelector('.section4 label');
const section5 = document.querySelector('.section5 label');
const simplify = document.getElementById('simplify-mode');

const exportxlsx = document.querySelector('.exportxlsx');
const print = document.querySelector('.print');

const changeType1 = document.querySelector('#score-area .chart-type-btn');
const changeType2 = document.querySelector('#ratio-area .chart-type-btn');
const changeType3 = document.querySelector('#comparison-area .chart-type-btn');
const changeType5 = document.querySelector('#prosub-area .chart-type-btn');

function hideSection(i) {
    i.classList.toggle("active");
    i.parentNode.style.height = "auto"
    let nextSibling = i.nextElementSibling;

    if (nextSibling.style.height != "0px") {
        while(nextSibling) {
            nextSibling.style.height = "0px";
            nextSibling.style.margin = "0";
            nextSibling = nextSibling.nextElementSibling;
        }
    } else {
        nextSibling.style.height = "auto";
        nextSibling.style.margin = "40px 0";
        nextSibling = nextSibling.nextElementSibling;
        nextSibling.style.height = "auto";
        nextSibling.style.margin = "0";
    }
}

hideBtn.forEach((item) => {
    item.onclick = function() {
        this.classList.toggle("active");
        this.parentNode.style.height = "auto"
        let nextSibling = this.nextElementSibling;
    
        if (nextSibling.style.height != "0px") {
            while(nextSibling) {
                nextSibling.style.height = "0px";
                nextSibling.style.margin = "0";
                nextSibling = nextSibling.nextElementSibling;
            }
        } else {
            nextSibling.style.height = "auto";
            nextSibling.style.margin = "40px 0";
            nextSibling = nextSibling.nextElementSibling;
            nextSibling.style.height = "auto";
            nextSibling.style.margin = "0";
        }
    }
});

// document.onclick = function(e) {
//     console.log(e.target.className)
//     if(e.target.id !== 'floating-box' && e.target.id !== 'floating-button' && e.target.className !== 'inside') {
//         console.log('yes')
//         floatingBox.classList.remove('active')
//         floatingBtn.classList.remove('active')
//     }
// }

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

    var tableSec1 = document.querySelector('.score-chart .search-table');
    var tableSec2 = document.querySelector('.ratio-table .search-table');
    var tableSec3 = document.querySelector('.comparison-table .search-table');
    var tableSec4 = document.querySelector('.eval-table .search-table');
    var tableSec5 = document.querySelector('.prosub-table .search-table');

    const wb = XLSX.utils.book_new();

    if (tableSec1) {
        var tableSec1Title = document.querySelector('.score-title').innerHTML;
        var ws1 = XLSX.utils.table_to_sheet(tableSec1);
        XLSX.utils.book_append_sheet(wb, ws1, tableSec1Title);
    }

    if (tableSec2) {
        var tableSec2Title = document.querySelector('.ratio-title').innerHTML;
        var ws2 = XLSX.utils.table_to_sheet(tableSec2);
        XLSX.utils.book_append_sheet(wb, ws2, tableSec2Title);
    }

    if (tableSec3) {
        var tableSec3Title = document.querySelector('.comparison-title').innerHTML;
        var ws3= XLSX.utils.table_to_sheet(tableSec3);
        XLSX.utils.book_append_sheet(wb, ws3, tableSec3Title);
    }

    if (tableSec4) {
        var tableSec4Title = document.querySelector('.eval-title').textContent;
        var ws4 = XLSX.utils.table_to_sheet(tableSec4);
        XLSX.utils.book_append_sheet(wb, ws4, tableSec4Title);
    }

    if (tableSec5) {
        var tableSec5Title = document.querySelector('.prosub-title').textContent;
        var ws5 = XLSX.utils.table_to_sheet(tableSec5);
        XLSX.utils.book_append_sheet(wb, ws5, tableSec5Title);
    }

    XLSX.writeFile(wb, "Tong_hop.xlsx");
  }

exportxlsx.addEventListener('click', exportXLSX);

section1.addEventListener('click', function() {
    hideSection(document.querySelector('#score-area .hide-btn'))
});

section2.addEventListener('click', function() {
    hideSection(document.querySelector('#ratio-area .hide-btn'))
});

section3.addEventListener('click', function() {
    hideSection(document.querySelector('#comparison-area .hide-btn'))
});

section4.addEventListener('click', function() {
    hideSection(document.querySelector('#eval-area .hide-btn'))
});

section5.addEventListener('click', function() {
    hideSection(document.querySelector('#prosub-area .hide-btn'))
});


changeType1.addEventListener('click', function () {
    var year_start = parseInt(document.querySelector('.start').value);
    var year_end = parseInt(document.querySelector('.end').value);
    var school_input = document.querySelector('.school-title').innerHTML

    if(!(this.className).includes('clicked')) {
        this.classList.toggle('clicked');

        $.ajax({
            url:"year_range_search.php",
            method:"POST",
            data:{title:school_input, start:year_start, end:year_end, type:'chart'},
            success:function(data) {
                $('.score-chart').html(data);
            }
        });

    } else {
        this.classList.remove('clicked');

        $.ajax({
            url:"year_range_search.php",
            method:"POST",
            data:{title:school_input, start:year_start, end:year_end, type:'table'},
            success:function(data) {
                $('.score-chart').html(data);
            }
        });
    }
});

changeType2.addEventListener('click', function () {
    var start_r = parseInt(document.querySelector('.start-r').value);
    var end_r = parseInt(document.querySelector('.end-r').value);
    var school_input = document.querySelector('.school-title').innerHTML;



    if(!(this.className).includes('clicked')) {
        this.classList.toggle('clicked');
        $.ajax({
            url:"ratio_figure.php",
            method:"POST",
            data:{title:school_input, start:start_r, end:end_r, type:'chart'},
            success:function(data) {
                $('.ratio-table').html(data);
            }
        });
    } else {
        this.classList.remove('clicked');
        $.ajax({
            url:"ratio_figure.php",
            method:"POST",
            data:{title:school_input, start:start_r, end:end_r, type:'table'},
            success:function(data) {
                $('.ratio-table').html(data);
            }
        });
    }
});

changeType3.addEventListener('click', function () {

    var end_c = parseInt(document.querySelector('.end-c').value)
    var school_input = document.querySelector('.school-title').innerHTML
    var district = document.querySelector('.district-list').value

    district = district == "Tất cả" ? "" : document.querySelector('.school-area').innerHTML

    if(!(this.className).includes('clicked')) {
        this.classList.toggle('clicked');
        $.ajax({
            url:"school_list.php",
            method:"POST",
            data:{year:end_c, 
                district:district, 
                school:school_input,
                type:'chart'},
            success:function(data) {
                $('.comparison-table').html(data);
            }
        });
    } else {
        this.classList.remove('clicked');
        $.ajax({
            url:"school_list.php",
            method:"POST",
            data:{year:end_c, 
                district:district, 
                school:school_input,
                type:'table'},
            success:function(data) {
                $('.comparison-table').html(data);
            }
        });
    }
});

changeType5.addEventListener('click', function () {

    var end_ps = parseInt(document.querySelector('.end-ps').value)
    var school_input = document.querySelector('.school-title').innerHTML
    var subject = document.querySelector('.prosub-list').value

    if(!(this.className).includes('clicked')) {
        this.classList.toggle('clicked');
        $.ajax({
            url:"prosub_list.php",
            method:"POST",
            data:{year:end_ps, 
                school:school_input,
                orgSubject:subject, 
                subject:proSubjectsObj[subject],
                column:proSubjectColumn(),
                type:'chart'},
            success:function(data) {
                $('.prosub-table').html(data);
            }
        });
    } else {
        this.classList.remove('clicked');
        $.ajax({
            url:"prosub_list.php",
            method:"POST",
            data:{year:end_ps, 
                school:school_input,
                orgSubject:subject, 
                subject:proSubjectsObj[subject],
                column:proSubjectColumn(),
                type:'table'},
            success:function(data) {
                $('.prosub-table').html(data);
            }
        });
    }
});

function createProSubSelect() {
    const prosub_list = document.querySelector('.prosub-list')

    for (const i in proSubjectsObj) {
        const prosub_select = document.createElement('option')
        
        prosub_select.innerHTML = i

        prosub_list.appendChild(prosub_select)
    }
}

createProSubSelect()

function proSubjectColumn() {
    const filter_wish_select = document.querySelector('.prosub-list').value

    if (filter_wish_select.includes('Chuyên')) {
        const col1 = proSubjectsObj[filter_wish_select]
        const col2 = proSubjectsObj[filter_wish_select].replace('1', '2')
    
        return `${col1},${col2}`
    } else {
        return normalSubjectsObj[filter_wish_select]
    }

}

function isNormal(type) {
    console.log(type)
    if (type=='L03') {
        document.getElementById('prosub-area').style.display = 'none'
        return true
    } else {
        document.getElementById('prosub-area').style.display = 'flex'
        return false
    }
}

