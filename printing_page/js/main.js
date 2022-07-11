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

const changeType1 = document.querySelector('#score-area .title i');
const changeType2 = document.querySelector('#ratio-area .title i');
const changeType3 = document.querySelector('#comparison-area .title i');

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
        var tableSec4Title = document.querySelector('.eval-title').innerHTML;
        var ws4 = XLSX.utils.table_to_sheet(tableSec4);
        XLSX.utils.book_append_sheet(wb, ws4, tableSec4Title);
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
    hideSection(document.querySelector('#average-area .hide-btn'))
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

    var end_c = parseInt(document.querySelector('.end-c').value);
    var school_input = document.querySelector('.school-title').innerHTML

    if(!(this.className).includes('clicked')) {
        this.classList.toggle('clicked');
        $.ajax({
            url:"school_list.php",
            method:"POST",
            data:{year:end_c, 
                district:document.querySelector('.school-area').innerHTML, 
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
                district:document.querySelector('.school-area').innerHTML, 
                school:school_input,
                type:'table'},
            success:function(data) {
                $('.comparison-table').html(data);
            }
        });
    }
});


