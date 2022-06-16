<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <link rel="icon" type="image/png" href="../img/logo.png">
        <link rel="stylesheet" type="text/css" href="./assets/css/calendar.css">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
        <title>Thống kê</title>
    </head>

    <body>
        <div class="main">
            <div id="header-container"></div>

            <div class="main-data-box">
                <div class="main-data-container">
                    <div class="left-container">
                        <div class="school-title">
                            <div class="title-box">
                                <span class="main-title">THPT Nguyễn Hữu Huân</span>
                                <p class="main-desc">Số liệu về điểm thi được hiển thị tại đây</p>
                            </div>
                            <div class="school-search-box">
                                <input type="text" class="school-search" placeholder="Tìm trường">
                                <i class="fi fi-rr-search"></i>
                            </div>
                            
                        </div>
                        <div class="year-range-data">
                            <div class="filter-box">
                                <span class="main-title">Dãy năm</span>
                                <div class="chart-type">
                                    <i class="fi fi-rr-shuffle"></i>
                                </div>
                                <div class="year-box">
                                    <div class="year-start">
                                        <span class="red-dot"></span>
                                        <input class="year-start-input" value="2015" type="number" min="2015"></input>
                                    </div>
                                    <div class="year-end">
                                        <span class="green-dot"></span>
                                        <input class="year-end-input" value="2021" type="number" min="2015"></input>
                                    </div>
                                </div>
                            </div>
                            <div class="year-range-graph-container" style="position: relative"></div>
                        </div>
                        <div class="detail-data">
                            <div class="win-ratio-data">
                                <div class="win-ratio-graph-container"></div>
                                <div class="win-ratio-detail">
                                    <div class="year-box" style="overflow:hidden; display:flex; justify-content:center;">
                                        <h3 style="text-align:center; margin-top:40px; margin-right: 40px; float:left">Tỉ lệ chọi</h3>
                                        <div class="filter-year-container" style="float:left">
                                            <div class="filter-year">
                                                <div class="filter-year-select">
                                                    <span class="select">Chọn năm</span>
                                                    <i class="fi fi-rr-caret-down"></i>
                                                </div>

                                                <div class="filter-year-list">
                                                </div>
                                            </div>
                                            
                                        </div>
                                            

                                    </div>
                                    <div class="win-ratio-display"></div>
                                </div>
                            </div>
                            <div class="comparision-data">
                                <div class="comparision-graph-container"></div>
                                <div class="comparision-detail">
                                    <div class="comparision-detail-container">
                                        <div class="filter-box">
                                            <h3 style="text-align:center; font-weight: bold; margin-top: 40px;">Trường trong khu vực</h3>
                                            <div class="filter-detail">
                                                <div class="filter-year" style="float: left">
                                                    <h4 class="year-title" style="text-align:center">Chọn năm</h4>
                                                    <div class="filter-year-select" style="width:140px">
                                                        <span class="select">Chọn năm</span>
                                                        <i class="fi fi-rr-caret-down"></i>
                                                    </div>

                                                    <div class="filter-year-list" style="width:140px">
                                                    </div>
                                                </div>
                                                <div class="filter-district" style="float: left">
                                                    <h4 class="district-title" style="text-align:center">Chọn khu vực</h4>
                                                    <div class="filter-district-select">
                                                        <span class="select">Chọn quận/TP</span>
                                                        <i class="fi fi-rr-caret-down"></i>
                                                    </div>

                                                    <div class="filter-district-list">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="school-list"></div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right-container">
                        <div class="more-info-data">

                            <div class="calendar-box">
                                <div class="calendar-container">
                                    <div class="calendar">
                                        <div class="calendar-title">
                                            <span class="title">Lịch</span>
                                        </div>
                                        <div class="calendar-header">
                                            <span class="month-picker" id="month-picker">February</span>
                                            <div class="year-picker">
                                                <span class="year-change" id="prev-year">
                                                    <pre><</pre>
                                                </span>
                                                <span id="year">2021</span>
                                                <span class="year-change" id="next-year">
                                                    <pre>></pre>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="calendar-body">
                                            <div class="calendar-week-day">
                                                <div>Sun</div>
                                                <div>Mon</div>
                                                <div>Tue</div>
                                                <div>Wed</div>
                                                <div>Thu</div>
                                                <div>Fri</div>
                                                <div>Sat</div>
                                            </div>
                                            <div class="calendar-days"></div>
                                        </div>
                                        
                                        <div class="month-list"></div>
                                    </div>
                                    <div id="clockDisplay"class="live-clock" onload="showTime()"></div>
                                </div>
                            </div>
                            
                        
                        </div>

                        <div class="school-links"></div>
                    </div>
                </div>
            </div>

            <div id="footer-container"></div>
            
        </div>
        
    </body>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-trendline"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../expand/js/create-years.js"></script>
    <script src="./js/main.js"></script>
    <script src="js/calendar.js"></script>
    <script>
        $(function(){
            $("#header-container").load("../expand/header.html"); 
            $("#footer-container").load("../expand/footer.html"); 
            });
    </script>
    <script type="text/javascript">

        // var textColor = 'black'
        // var turned = false
        // var switched = document.querySelector('.switcher');

        
        // if (switched) {
        //     switched.addEventListener('click', function() {
        //         var bgColor = window.getComputedStyle( document.body ,null).getPropertyValue('background-color');
        //         if (turned==false) {
        //             textColor = 'white'
        //             turned = true
        //         } else {
        //             textColor = 'black'
        //             turned = false
        //         }

        //     }, false);
        // }

        

        const default_school = "nguyen huu huan";
        const default_district = "Thủ Đức"
        const default_year = "2021";
        for (let i of document.querySelectorAll('.filter-year-select .select')) {
            i.innerHTML = "Năm " + default_year;
        }

        for (let i of document.querySelectorAll('.filter-district-select .select')) {
            i.innerHTML = default_district;
        }
            
        $(document).ready(function() {
            function showOnLoad() {

                $.ajax({
                    url:"links.php",
                    method:"POST",
                    data:{title:default_school},
                    success:function(data) {
                        $('.school-links').html(data);
                    }
                });

                $.ajax({
                    url:"year_range_search.php",
                    method:"POST",
                    data:{title:default_school, start:'-1', end:'-1', new:'true', chartClicked:'none'},
                    success:function(data) {
                        $('.year-range-graph-container').html($(data).filter('#yearGraphContainer'));
                        $('.title-box .main-title').html($(data).filter('#titleContainer'));
                    }
                });

                // $.ajax({
                //     url:"ratio_search.php",
                //     method:"POST",
                //     data:{title:default_school, year:default_year},
                //     success:function(data) {
                //         $('.win-ratio-graph-container').html(data);
                //     }
                // });

                $.ajax({
                    url:"ratio_firgue.php",
                    method:"POST",
                    data:{title:default_school, year:default_year},
                    success:function(data) {
                        $('.win-ratio-graph-container').html($(data).filter('#ratioGraph'));
                        $('.win-ratio-display').html($(data).filter('#ratioFigure'));
                    }
                });

                $.ajax({
                    url:"school_comparision.php",
                    method:"POST",
                    data:{year:default_year, district:default_district},
                    success:function(data) {
                        $('.comparision-graph-container').html($(data).filter('#comparisionGraph'));
                        $('.school-list').html($(data).filter('#comparisionList'));
                    }
                });

                // $.ajax({
                //     url:"school_list.php",
                //     method:"POST",
                //     data:{year:default_year, district:default_district},
                //     success:function(data) {
                //         $('.school-list').html(data);
                //     }
                // });

                
            }
            showOnLoad();

            document.querySelector('.school-search').addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    document.querySelector(".school-search-box i").click();
                }
            });

            $(document).on('click', '.school-search-box i', function() {
                document.querySelector('.filter-year-select .select').innerHTML = "Năm 2021";
                var school_input = document.querySelector('.school-search').value;

                if (school_input != '') {
                    $.ajax({
                        url:"links.php",
                        method:"POST",
                        data:{title:school_input},
                        success:function(data) {
                            $('.school-links').html(data);
                        }
                    });
                
                    $.ajax({
                        url:"year_range_search.php",
                        method:"POST",
                        data:{title:school_input, start:'-1', end:'-1', new:'true', chartClicked:'none'},
                        success:function(data) {
                            $('.year-range-graph-container').html($(data).filter('#yearGraphContainer'));
                            $('.title-box .main-title').html($(data).filter('#titleContainer'));
                            document.querySelector('.filter-district-select .select').innerHTML = document.querySelector('.main-title .district-desc').innerHTML;
                            document.querySelector('.filter-district-select').click();
                            for (let i of document.querySelectorAll('.filter-district-list .district')) {
                                console.log(i)
                                if (i.innerHTML == document.querySelector('.filter-district-select .select').innerHTML) {
                                    i.click();
                                }

                            }
                        }
                    });

                    $.ajax({
                        url:"ratio_firgue.php",
                        method:"POST",
                        data:{title:school_input, year:(parseFloat(default_year)-1).toString()},
                        success:function(data) {
                            $('.win-ratio-graph-container').html($(data).filter('#ratioGraph'));
                            $('.win-ratio-display').html($(data).filter('#ratioFigure'));
                        }
                    });

                    // $.ajax({
                    //     url:"school_search.php",
                    //     method:"POST",
                    //     data:{school_name:school_input},
                    //     success:function(data) {

                    //     }
                             
                    // });

                }
                
            });


            function yearRangeChange() {
                var school_input = document.querySelector('.school-search').value
                if (school_input == '') {
                    school_input = default_school
                }
                var start = parseInt(document.querySelector('.year-start-input').value);
                var end = parseInt(document.querySelector('.year-end-input').value);

                if (!isNaN(start) && !isNaN(end)) {
                    if (start > end) {
                        alert("Năm đầu phải nhỏ hơn hoặc bằng năm cuối")
                    } else {

                        $.ajax({
                            url:"year_range_search.php",
                            method:"POST",
                            data:{title:school_input, start:start, end:end, new:'false', chartClicked:'none'},
                            beforeSend:function() {
                                
                            },
                            success:function(data) {
                                $('.year-range-graph-container').html($(data).filter('#yearGraphContainer'));
                            }
                        })
                        
                    }
                }

            }
            $('.year-start-input').on('change', yearRangeChange);
            $('.year-end-input').on('change', yearRangeChange);

            var chartClicked = 'no'
            $('.filter-box .chart-type').on('click', function() {

                var school_input = document.querySelector('.school-search').value
                if (school_input == '') {
                    school_input = default_school
                }
                var start = parseInt(document.querySelector('.year-start-input').value);
                var end = parseInt(document.querySelector('.year-end-input').value);

                $.ajax({
                    url:"year_range_search.php",
                    method:"POST",
                    data:{title:school_input, start:start, end:end, new:'line', chartClicked:chartClicked},
                    beforeSend:function() {
                        
                    },
                    success:function(data) {
                        $('.year-range-graph-container').html($(data).filter('#yearGraphContainer'));
                    }
                })

                if (chartClicked == 'no') {
                    chartClicked = 'yes'
                } else {
                    chartClicked = 'no'
                }

                console.log(chartClicked)

                
            })
                
                
        })
    </script>

    
</html>