<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../img/logo.png">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../expand/css/root.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/printing.css" media="print">
        <link rel='stylesheet' href='../expand/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel='stylesheet' href='../expand/css/uicons-bold-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
        <!-- CSS only -->
        <title>Tổng hợp</title>
    </head>

    <body>
        <div class="main">

            <div id="header-container"></div>

            <h1 class="main-title-1">Tổng hợp và xuất dữ liệu</h1>
            <h4 class="subtitle-1">
                Một vài bước chuẩn bị trước khi bạn quyết định lưu những gì cần thiết.
                <p style="font-weight: 400;">
                    Chưa rõ? <a href="../docs_page/printing_page.html" target="_blank">Đọc tài liệu &rarr;</a>
                </p>
            </h4>

            <div id="search-area">
                <div class="search-box" style="display:flex; justify-content:center">
                    <input type="text" class="school-search" placeholder="Tìm trường">
                    <i class="fi fi-rr-search"></i>
                </div>
            </div>

            <div id="main-title">
                <div class="school-title">THPT Nguyễn Hữu Huân</div>
                <div class="school-area">Thủ Đức</div>
            </div>

            <div id="score-area">
                <div class="score-title">Điểm nguyện vọng</div>
                <label class="hide-btn" for="sec1">
                    <i class="close fi fi-rr-cross"></i>
                    <i class="open fi fi-rr-check"></i>
                </label>
                <div class="score-range">
                    <div class="title" style="float:left;">
                        Dãy năm
                        <i class="fi fi-rr-shuffle"></i>
                    </div>
                    <div class="range" style="float:right">
                        <span class="red-dot"></span>
                        <input class="start" value="2015" type="number" min="2015"></input>
                        <span class="green-dot"></span>
                        <input class="end" value="2021" type="number" min="2015"></input>
                    </div>
                </div>
                <div class="score-chart"></div>
            </div>

            <div id="ratio-area">
                <div class="ratio-title">Tỉ lệ chọi</div>
                <label class="hide-btn" for="sec2">
                    <i class="close fi fi-rr-cross"></i>
                    <i class="open fi fi-rr-check"></i>
                </label>
                <div class="ratio-range">
                    <div class="title" style="float:left">Dãy năm
                        <i class="fi fi-rr-shuffle"></i>
                    </div>
                    <div class="range" style="float:right">
                        <span class="red-dot"></span>
                        <input class="start-r" value="2015" type="number" min="2015"></input>
                        <span class="green-dot"></span>
                        <input class="end-r" value="2021" type="number" min="2015"></input>
                    </div>
                </div>
                <div class="ratio-table"></div>
            </div>

            <div id="comparision-area">
                <div class="comparision-title">Khu vực</div>
                <label class="hide-btn" for="sec3">
                    <i class="close fi fi-rr-cross"></i>
                    <i class="open fi fi-rr-check"></i>
                </label>
                <div class="comparision-range">
                    <div class="title" style="float:left;">Chọn năm
                        <i class="fi fi-rr-shuffle"></i>
                    </div>
                    <div class="range" style="float:right;">
                        <span class="green-dot"></span>
                        <input class="end-c" value="2021" type="number" min="2015"></input>
                    </div>

                </div>
                <div class="comparision-table"></div>
            </div>

            <div id="eval-area">
                <div class="eval-title">Xếp hạng</div>
                <label class="hide-btn" for="sec4">
                    <i class="close fi fi-rr-cross"></i>
                    <i class="open fi fi-rr-check"></i>
                </label>
                <div class="eval-range">
                    <div class="title" style="float:left;">
                        Chọn năm
                        <br>
                        Chọn top
                    </div>
                    <div class="range" style="float:left; padding-left:30px">
                        <span class="green-dot"></span>
                        <input class="end-e" value="2021" type="number" min="2015"></input>
                        <br>
                        <span class="red-dot"></span>
                        <input class="top-p" value="5" type="number" min="1"></input>
                    </div>
                </div>
                <div class="eval-table"></div>
            </div>

            <div id="average-area">
                <div class="average-title">Điểm trung bình</div>
                <label class="hide-btn" for="sec5">
                    <i class="close fi fi-rr-cross"></i>
                    <i class="open fi fi-rr-check"></i>
                </label>
                <div class="average-range">
                    <div class="title" style="float:left;">
                        Chọn năm
                        <br>
                        <br>
                        Chọn khu vực
                        <!-- <i class="fi fi-rr-shuffle"></i> -->
                    </div>
                    <div class="range" style="float:right;">
                        <span class="green-dot"></span>
                        <input class="end-a" value="2021" type="number" min="2015"></input>
                        <br>
                        <select class="district-list">
                            <option>Tất cả</option>
                            <option>Trong khu vực</option>
                        </select>
                    </div>

                </div>
                <div class="average-table"></div>
            </div>

            <div class="floating-container">
                <input type="checkbox" name="" id="floating-checkbox" hidden >
                <label class="overlay" for="floating-checkbox"></label>
                <div id="floating-box">
                    <div class="section1">
                        <input type="checkbox" id="sec1" value="" checked>
                        <label for="sec1">Điểm nguyện vọng</label>
                    </div>
                    <div class="section2">
                        <input type="checkbox" id="sec2" value="" checked>
                        <label for="sec2">Tỉ lệ chọi</label>
                    </div>
                    <div class="section3">
                        <input type="checkbox" id="sec3" value="" checked>
                        <label for="sec3">Khu vực</label>
                    </div>
                    <div class="section4">
                        <input type="checkbox" id="sec4" value="" checked>
                        <label for="sec4">Xếp hạng</label>
                    </div>
                    <div class="section5">
                        <input type="checkbox" id="sec5" value="" checked>
                        <label for="sec5">Điểm trung bình</label>
                    </div>
                    <div class="simplify" style="border-top: 1px solid var(--text-color); padding-top: 15px;">
                        <input type="checkbox" id="simplify-mode" value="">
                        <label for="simplify-mode">Chế độ đơn giản</label>
                    </div>
                    <div class="exportxlsx" style="background-color: #33C481;">
                        <i class="fi fi-rr-download"></i>
                        Excel
                    </div>
                    <div class="print">
                        <i class="fi fi-rr-document-signed" style="padding: 0 4px;"></i>
                        In dữ liệu</div>
                </div>
                <label for="floating-checkbox">
                    <div id="floating-button">
                        <i class="fi fi-rr-print"></i>
                    </div>
                </label>
            </div>

            <div id="footer-container"></div>
        </div>
    </body>




    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-trendline"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function(){
            $("#header-container").load("../expand/header.html"); 
            $("#footer-container").load("../expand/footer.html");
            });
    </script>

    <script src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"></script>
    <script type="text/javascript" src="../expand/js/create-lists.js"></script>
    <script src="./js/main.js"></script>
    

    <script type="text/javascript">

        const default_start = '2015'
        const default_end = '2021'

        const default_school = document.querySelector('.school-title').innerHTML;
        const default_district = document.querySelector('.school-area').innerHTML;
        
        const year_start = document.querySelector('.start').value
        const year_end = document.querySelector('.end').value
        const default_top = parseInt(document.querySelector('.top-p').value)

        for (let i of document.querySelectorAll('.filter-year-select .select')) {
            i.innerHTML = "Năm " + default_year;
        }

        for (let i of document.querySelectorAll('.filter-district-select .select')) {
            i.innerHTML = default_district;
        }

        document.querySelector('.school-search').addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    event.preventDefault();
                    document.querySelector(".search-box i").click();
                }
            });

        $(document).ready(function() {
            function showOnLoad() {
                $.ajax({
                    url:"year_range_search.php",
                    method:"POST",
                    data:{title:default_school, start:year_start, end:year_end, type:'table'},
                    success:function(data) {
                        $('.score-chart').html(data);
                    }
                });

                $.ajax({
                    url:"ratio_figure.php",
                    method:"POST",
                    data:{title:default_school, start:year_start, end:year_end, type:'table'},
                    success:function(data) {
                        $('.ratio-table').html(data);
                    }
                });

                $.ajax({
                    url:"school_list.php",
                    method:"POST",
                    data:{year:year_end, district:default_district, school:default_school, type:'table'},
                    success:function(data) {
                        $('.comparision-table').html(data);
                    }
                });

                $.ajax({
                    url:"school_eval.php",
                    method:"POST",
                    data:{year:year_end, top:default_top, school:default_school},
                    success:function(data) {
                        $('.eval-table').html(data);

                        $.ajax({
                            url:"average.php",
                            method:"POST",
                            data:{school:default_school, year:year_end, district: ''},
                            success: function (data) {
                                $(".average-table").html(data);
                            }
                        });
                    }
                });

            }

            window.onload = showOnLoad();
          
            $(document).ready(function() {
                $(document).on('click', '.search-box i', function() {

                    document.querySelector('.start').value = default_start
                    document.querySelector('.end').value = default_end
                    document.querySelector('.start-r').value = default_start
                    document.querySelector('.end-r').value = default_end
                    document.querySelector('.end-c').value = default_end
                    document.querySelector('.top-p').value = default_top.toString()
                    document.querySelector('.end-a').value = default_end
                    document.querySelector('.district-list').value = 'Tất cả'

                    var school_input = document.querySelector('.school-search').value;

                    if (school_input != '') {
                    
                        $.ajax({
                            url:"year_range_search.php",
                            method:"POST",
                            data:{title:school_input, start:year_start, end:year_end, type:'table'},
                            success:function(data) {
                                $('.score-chart').html(data);

                                school_input = document.querySelector('.school-title').innerHTML

                                if (school_input != "Không tìm thấy trường") {

                                    $.ajax({
                                        url:"school_list.php",
                                        method:"POST",
                                        data:{year:year_end, 
                                            district:document.querySelector('.school-area').innerHTML, 
                                            school:school_input,
                                            type:'table'},
                                        success:function(data) {
                                            $('.comparision-table').html(data);
                                        }
                                    });

                                    $.ajax({
                                        url:"school_eval.php",
                                        method:"POST",
                                        data:{year:year_end, top:default_top, school:school_input},
                                        success:function(data) {
                                            $('.eval-table').html(data);

                                            $.ajax({
                                                url:"average.php",
                                                method:"POST",
                                                data:{school:school_input, year:year_end, district: ''},
                                                success: function (data) {
                                                    $(".average-table").html(data);
                                                }
                                            });
                                        }
                                    });
                                } else {
                                    $('.comparision-table').html('<div></div>');
                                    $('.eval-table').html('<div></div>');
                                    $('.average-table').html('<div></div>');
                                }
                            }
                        });

                        $.ajax({
                            url:"ratio_figure.php",
                            method:"POST",
                            data:{title:school_input, start:year_start, end:year_end, type:'table'},
                            success:function(data) {
                                $('.ratio-table').html(data);
                            }
                        });

                    }
                    
                });

                function yearRangeChange() {
                    var school_input = document.querySelector('.school-title').innerHTML
                    if (school_input == '') { school_input = default_school }

                    var start = parseInt(document.querySelector('.start').value);
                    var end = parseInt(document.querySelector('.end').value);

                    if (!isNaN(start) && !isNaN(end)) {
                        if (start > end) {
                            alert("Năm đầu phải nhỏ hơn hoặc bằng năm cuối")
                        } else {

                            $.ajax({
                                url:"year_range_search.php",
                                method:"POST",
                                data:{title:school_input, start:start, end:end, type:'table'},
                                beforeSend:function() {
                                    
                                },
                                success:function(data) {
                                    $('.score-chart').html(data);
                                }
                            })
                            
                        }
                    }
                }

                function yearRangeChangeR() {
                    var school_input = document.querySelector('.school-title').innerHTML
                    if (school_input == '') { school_input = default_school }

                    var start_r = parseInt(document.querySelector('.start-r').value);
                    var end_r = parseInt(document.querySelector('.end-r').value);

                    if (!isNaN(start_r) && !isNaN(end_r)) {
                        if (start_r > end_r) {
                            alert("Năm đầu phải nhỏ hơn hoặc bằng năm cuối")
                        } else {

                            $.ajax({
                                url:"ratio_figure.php",
                                method:"POST",
                                data:{title:school_input, start:start_r, end:end_r, type:'table'},
                                success:function(data) {
                                    $('.ratio-table').html(data);
                                }
                            });
                            
                        }
                    }
                }

                function yearRangeChangeC() {
                    var school_input = document.querySelector('.school-title').innerHTML
                    if (school_input == '') { school_input = default_school }

                    var end_c = parseInt(document.querySelector('.end-c').value);

                    $.ajax({
                        url:"school_list.php",
                        method:"POST",
                        data:{year:end_c, 
                            district:document.querySelector('.school-area').innerHTML, 
                            school:school_input,
                            type:'table'},
                        success:function(data) {
                            $('.comparision-table').html(data);
                        }
                    });
                            
            
                }

                function yearRangeChangeE() {
                    var school_input = document.querySelector('.school-title').innerHTML
                    if (school_input == '') { school_input = default_school }

                    var end_e = parseInt(document.querySelector('.end-e').value);
                    var top_p = parseInt(document.querySelector('.top-p').value);

                    $.ajax({
                        url:"school_eval.php",
                        method:"POST",
                        data:{year:end_e,
                            top:top_p, 
                            school:school_input},
                        success:function(data) {
                            $('.eval-table').html(data);
                        }
                    });
                            
                }

                function yearRangeChangeA() {
                    var school_input = document.querySelector('.school-title').innerHTML
                    if (school_input == '') { school_input = default_school }

                    var end_a = parseInt(document.querySelector('.end-a').value);
                    var district_a = document.querySelector('.district-list').value;

                    if (district_a == "Tất cả") {
                        district_a = ""
                    } else {
                        district_a = document.querySelector('.school-area').innerHTML
                    }

                    $.ajax({
                        url:"average.php",
                        method:"POST",
                        data:{school:school_input, year:end_a, district: district_a},
                        success: function (data) {
                            $(".average-table").html(data);
                        }
                    });
                }
                
                
                $('.start').on('change', yearRangeChange);
                $('.end').on('change', yearRangeChange);

                $('.start-r').on('change', yearRangeChangeR);
                $('.end-r').on('change', yearRangeChangeR);

                $('.end-c').on('change', yearRangeChangeC);

                $('.end-e').on('change', yearRangeChangeE);
                $('.top-p').on('change', yearRangeChangeE);

                $('.end-a').on('change', yearRangeChangeA);
                $('.district-list').on('change', yearRangeChangeA);

            });

        });




    </script>
</html>