<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <link rel="icon" type="image/png" href="../img/logo.png">
        <link rel="stylesheet" type="text/css" href="./assets/css/calendar.css">
        <link rel='stylesheet' href='../expand/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel='stylesheet' href='../expand/css/uicons-bold-rounded.css'>
        <link rel='stylesheet' href='../expand/css/uicons-brands.css'>
        <title>Phân tích</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(function(){
                $("#header-container").load("../expand/header.html"); 
                $("#footer-container").load("../expand/footer.html"); 
                });
        </script>
    </head>

    <body>
        <div class="main">
            <div id="header-container"></div>

            <h1 class="main-title">Phân tích và trực quan hoá điểm số</h1>
            <h4 class="subtitle">
                Đây là nơi cho bạn một góc nhìn tổng quát nhất về một trường thông qua
                các biểu đồ và tuỳ biến đa dạng.
                <p style="font-weight: 400;">
                    Chưa rõ? <a href="../docs_page/visualization_page.html" target="_blank">Đọc tài liệu &rarr;</a>
                </p>
            </h4>

            <div class="main-data-box">
                <div class="main-data-container">
                    <div class="title-container">
                        <div class="school-search-box">
                            <input type="text" class="school-search" placeholder="Tìm trường...">
                            <i class="fi fi-rr-search"></i>

                        </div>

                        <div class="school-info">
                            <div class="schoolname" style="background-color: #00e599;box-shadow: 0 0 15px #00e59996">
                                <h1>Tên trường</h1>
                                <p>THPT Nguyễn Hữu Huân</p>
                            </div>
                            <div class="schooltype" style="background-color: #00C6A6;box-shadow: 0 0 15px #00C6A696">
                                <h1>Loại trường</h1>
                                <p>Trường có lớp chuyên, tích hợp</p>
                            </div>
                            <div class="schoolcity" style="background-color: #00A6A5;box-shadow: 0 0 15px #00A6A596">
                                <h1>Thành phố</h1>
                                <p>TP Hồ Chí Minh</p>
                            </div>
                            <div class="schooldistrict" style="background-color: #008597;box-shadow: 0 0 15px #00859796">
                                <h1>Quận/Huyện</h1>
                                <p>Thủ Đức</p>
                            </div>
                        </div>

                        </div>
                    </div>

                    <div class="year-range-container">
                        <div class="year-range-data">
                            <span class="main-title">Điểm (các năm)</span>
                            <div class="filter-box">                            
                                <div class="chart-type">
                                    <i class="fi fi-rr-shuffle"></i> 
                                    Đổi dạng biểu đồ
                                </div>
                                <div class="year-box">
                                    <div class="year-start">
                                        <span class="red-dot"></span>
                                        <input class="year-start-input" value="2015" type="number" min="2015"></input>
                                    </div>
                                    <div class="year-end">
                                        <span class="green-dot"></span>
                                        <input class="year-end-input" value="2022" type="number" min="2015" style="margin-right:-5px"></input>
                                    </div>
                                </div>
                            </div>
                            <div class="year-range-graph-container" style="position: relative"></div>
                        </div>
                        <div class="year-range-detail">
                            <h3>Chọn năm
                                <input class="year-input-nv" type="number" value="2022" min="2015" max="2022">
                            </h3>
                            
                            <div class="comparison">
                                <div class="navigation">
                                    <div class="nav-wrap">
                                        <div class="select-nv1">NV1</div>
                                        <div class="select-nv2">NV2</div>
                                        <div class="select-nv3">NV3</div>
                                    </div>
                                </div>
                                <div class="info"></div>
                            </div>
                            <div class="calculation" style="padding-bottom: 20px">
                            </div>
                        </div>
                    </div>

                    <div class="win-ratio-container">
                        <div class="win-ratio-data">
                            <span class="main-title">Tỉ lệ chọi</span>
                            <div class="win-ratio-graph-container"></div>
                            <div class="win-ratio-detail">
                                <div class="year-box" style="overflow:hidden; display:flex; justify-content:center;">
                                    <!-- <h3 style="text-align:center; margin-top:40px; margin-right: 40px; float:left">Tỉ lệ chọi</h3> -->
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
                        
                        <div class="ratio-graph-container">
                            <span class="main-title">Tỉ lệ chọi (các năm)</span>
                            <div class="range" style="float:right; margin-right: 20px">
                                <span class="red-dot"></span>
                                <input class="start-r" value="2015" type="number" min="2015"></input>
                                <span class="green-dot"></span>
                                <input class="end-r" value="2022" type="number" min="2015" style="margin-right: -5px;"></input>
                            </div>
                            <div class="ratio-graph">

                            </div>
                        </div>
                    </div>

                    <div class="comparison-data-container">
                        <div class="comparison-data">
                            <span class="main-title">Trường trong khu vực</span>
                            <div class="comparison-graph-container"></div>
                            <div class="comparison-detail">
                                <div class="comparison-detail-container">
                                    <div class="filter-box">    
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

                    <div class="group-data-container">
                        <div class="group-data">
                        <span class="main-title">Trường cùng nhóm điểm</span>
                            <div class="group-graph-container"></div>
                            <div class="group-detail">
                                <div class="group-detail-container">
                                    <div class="filter-box">
                                        <div class="school-to-compare">
                                            <h3></h3>
                                            <div class="score-group">
                                                <div class="score-nv1">
                                                    <h4 class="title">Điểm NV1</h4>
                                                    <p></p>
                                                </div>
                                                <div class="score-nv2">
                                                    <h4 class="title">Điểm NV2</h4>
                                                    <p></p>
                                                </div>
                                                <div class="score-nv3">
                                                    <h4 class="title">Điểm NV3</h4>
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-detail">
                                            <div class="filter-year">
                                                <h4 class="year-title" style="text-align:center">Chọn năm</h4>
                                                <div class="filter-year-select" style="width:140px; margin: 10px auto">
                                                    <span class="select">Chọn năm</span>
                                                    <i class="fi fi-rr-caret-down"></i>
                                                </div>

                                                <div class="filter-year-list" style="width:140px; margin: 10px auto">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="school-group-list"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="prosub-data-container">
                        <div class="prosub-data">
                        <span class="main-title" style="background: #0F90DC">Trường có lớp chuyên</span>
                            <div class="prosub-graph-container"></div>
                            <div class="prosub-detail-container">
                                <div class="prosub-list">
                                    <h3>Môn chuyên</h3>

                                </div>
                                <div class="filter-year">
                                    <h4 class="year-title" style="text-align:center">Chọn năm</h4>
                                    <div class="filter-year-select" style="width:140px; margin: 5px auto; display:block;">
                                        <span class="select" style="color:#0064b3">Chọn năm</span>
                                        <i class="fi fi-rr-caret-down"></i>
                                    </div>

                                    <div class="filter-year-list" style="width:140px; margin: 10px auto; display:block;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="more-container">
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
                                                <span id="year">2022</span>
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

            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62698.550966336945!2d106.72863821038315!3d10.837353324725134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527a052f90a59%3A0x9f677485994c6eac!2zVHLGsOG7nW5nIFRIUFQgTmd1eeG7hW4gSOG7r3UgSHXDom4!5e0!3m2!1svi!2s!4v1658413326868!5m2!1svi!2s" width="85%" height="450" style="border:0;display: block;margin: 50px auto;border-radius: 20px;box-shadow: var(--box-shadow);border: 2px solid lightgrey;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

            <div id="footer-container"></div>
            
        </div>
        
    </body>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-trendline"></script>
    <script src="../expand/js/create-lists.js"></script>
    <script src="./js/main.js"></script>
    <script src="js/calendar.js"></script>
    <script type="text/javascript">

        document.querySelector('.prosub-select').classList.remove('select-disable')

        const default_school = document.querySelector('.schoolname p').textContent;
        const default_district = document.querySelector('.schooldistrict p').textContent;
        const default_year = "2022";
        const default_wish = "NV1";
        const default_start = '2015';
        const default_end = '2022';
        const default_subject = document.querySelector('.prosub-select span').textContent

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

                $.ajax({
                    url:"year_range_comparison.php",
                    method:"POST",
                    data:{title:default_school, year:default_year, wish:default_wish},
                    success:function(data) {
                        $('.comparison .info').html($(data).filter('#info1'))
                        $('.calculation').html($(data).filter('#info2'))

                        document.querySelector('.school-to-compare h3').innerHTML = display_full[0]
                        document.querySelector('.score-nv1 p').innerHTML = display_full[2]
                        document.querySelector('.score-nv2 p').innerHTML = display_full[3]
                        document.querySelector('.score-nv3 p').innerHTML = display_full[4]

                        $.ajax({
                            url:"group_comparison.php",
                            method:"POST",
                            data:{title:default_school, year:default_year, score:display_full[2]},
                            success:function(data) {
                                $('.group-graph-container').html($(data).filter('#groupGraph'));
                                $('.school-group-list').html($(data).filter('#groupList'));
                            }
                        });

                        if (!isNormalSchool()) {
                            $.ajax({
                                url:"prosub_comparison.php",
                                method:"POST",
                                data:{year:default_year, orgSubject:default_subject, subject:proSubjectsObj[default_subject]},
                                success:function(data) {
                                    $('.prosub-graph-container').html($(data).filter('#prosubComparisonGraph'));
                                }
                            });
                        }


                    }
                });

                $.ajax({
                    url:"ratio_figure.php",
                    method:"POST",
                    data:{title:default_school, year:default_year},
                    success:function(data) {
                        $('.win-ratio-graph-container').html($(data).filter('#ratioGraph'));
                        $('.win-ratio-display').html($(data).filter('#ratioFigure'));
                    }
                });

                $.ajax({
                    url:"../printing_page/ratio_figure.php",
                    method:"POST",
                    data:{title:default_school, start: default_start, end:default_end, type:'chart'},
                    success: function(data) {
                        $('.ratio-graph').html(data);
                    } 
                })

                $.ajax({
                    url:"school_comparison.php",
                    method:"POST",
                    data:{year:default_year, district:default_district},
                    success:function(data) {
                        $('.comparison-graph-container').html($(data).filter('#comparisonGraph'));
                        $('.school-list').html($(data).filter('#comparisonList'));
                    }
                });
                
            }
            showOnLoad();

            document.querySelector('.school-search').addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    document.querySelector(".school-search-box i").click();
                }
            });

            $(document).on('click', '.school-search-box i', function() {
                var school_input = document.querySelector('.school-search').value
                var year_input = document.querySelector('.year-input-nv').value
                document.querySelector('.filter-year-select .select').innerHTML = "Năm 2022"
                document.querySelector('.start-r').value = default_start
                document.querySelector('.end-r').value = default_end

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
                            $('.schoolname p').html($(data).filter('#schoolTitle').text());
                            $('.schooldistrict p').html($(data).filter('#schoolDistrict').text());
                            $('.schooltype p').html(schoolTypesObjRev[$(data).filter('#schoolType').text()]);

                            $.ajax({
                                url:"year_range_comparison.php",
                                method:"POST",
                                data:{title:school_input, year:year_input, wish:default_wish},
                                success:function(data) {
                                    $('.comparison .info').html($(data).filter('#info1'))
                                    $('.calculation').html($(data).filter('#info2'))

                                    function run() {
                                        districtClick();
                                        yearClick();
                                        groupcomparisonDisplay();
                                        prosubComparisionDisplay()
                                        
                                    }

                                    run()
                                }
                            });
                            
                            function districtClick() {
                                document.querySelector('.filter-district-select .select').innerHTML = document.querySelector('.schooldistrict p').innerHTML;
                                document.querySelector('.filter-district-select').click();
                                for (let i of document.querySelectorAll('.filter-district-list .district')) {
                                    if (i.innerHTML == document.querySelector('.filter-district-select .select').innerHTML) {
                                        i.click();
                                    }
                                }
                            }

                            function groupcomparisonDisplay() {
                                document.querySelector('.school-to-compare h3').innerHTML = document.querySelector('.schoolname p').innerHTML
                                document.querySelector('.score-nv1 p').innerHTML = display_full[2]
                                document.querySelector('.score-nv2 p').innerHTML = display_full[3]
                                document.querySelector('.score-nv3 p').innerHTML = display_full[4]

                                // console.log(display_full)

                                $.ajax({
                                    url:"group_comparison.php",
                                    method:"POST",
                                    data:{title:document.querySelector('.schoolname p').innerHTML, year:default_year, score:display_full[2]},
                                    success:function(data) {
                                        $('.group-graph-container').html($(data).filter('#groupGraph'));
                                        $('.school-group-list').html($(data).filter('#groupList'));
                                    }
                                });
                            }

                            function prosubComparisionDisplay() {
                                if (!isNormalSchool()) {
                                    $.ajax({
                                        url:"prosub_comparison.php",
                                        method:"POST",
                                        data:{year:default_year, orgSubject:default_subject, subject:proSubjectsObj[default_subject]},
                                        success:function(data) {
                                            $('.prosub-graph-container').html($(data).filter('#prosubComparisonGraph'));
                                        }
                                    });
                                }
                            }

                            function yearClick() {
                                document.querySelector('.filter-year-select').click();
                                for (let i of document.querySelectorAll('.filter-year-list .year')) {
                                    if (i.innerHTML.includes(default_year)) {
                                        i.click();
                                    }
                                }
                            }

                        }
                    });

                    $.ajax({
                        url:"ratio_figure.php",
                        method:"POST",
                        data:{title:school_input, year:default_year},
                        success:function(data) {
                            $('.win-ratio-graph-container').html($(data).filter('#ratioGraph'));
                            $('.win-ratio-display').html($(data).filter('#ratioFigure'));
                        }
                    });

                    $.ajax({
                        url:"../printing_page/ratio_figure.php",
                        method:"POST",
                        data:{title:school_input, start:default_start, end:default_end, type:'chart'},
                        success:function(data) {
                            $('.ratio-graph').html(data);
                        }
                    });

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

            function yearRangeChangeR() {
                var school_input = document.querySelector('.schoolname p').innerHTML
                if (school_input == '') { school_input = default_school }

                var start_r = parseInt(document.querySelector('.start-r').value);
                var end_r = parseInt(document.querySelector('.end-r').value);

                if (!isNaN(start_r) && !isNaN(end_r)) {
                    if (start_r > end_r) {
                        alert("Năm đầu phải nhỏ hơn hoặc bằng năm cuối")
                    } else {

                        $.ajax({
                            url:"../printing_page/ratio_figure.php",
                            method:"POST",
                            data:{title:school_input, start:start_r, end:end_r, type:'chart'},
                            success:function(data) {
                                $('.ratio-graph').html(data);
                            }
                        });
                        
                    }
                }
            }

            $('.start-r').on('change', yearRangeChangeR);
            $('.end-r').on('change', yearRangeChangeR);

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

                
            });


            $('.year-input-nv').on('change', function () {
                var school_input = document.querySelector('.schoolname p').innerHTML
                var year_input = document.querySelector('.year-input-nv').value

                $.ajax({
                    url:"year_range_comparison.php",
                    method:"POST",
                    data:{title:school_input, year:year_input, wish:default_wish},
                    success:function(data) {
                        $('.comparison .info').html($(data).filter('#info1'))
                        $('.calculation').html($(data).filter('#info2'))
                    }
                });
            });
    
                
        })
    </script>

    
</html>