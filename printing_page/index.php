<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../expand/css/root.css">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
        <title>In ấn</title>
    </head>

    <body>
        <div class="main">

            <div id="header-container"></div>

            <div id="search-area">
                <div class="search-box" style="display:flex; justify-content:center">
                    <input type="text" class="school-search" placeholder="Tìm trường">
                    <i class="fi fi-rr-search"></i>
                </div>
            </div>

            <div id="score-area">
                <div class="score-title">Điểm nguyện vọng</div>
                <div class="score-range">
                    <div class="title" style="float:left; margin-left:4%">
                        Dãy năm
                    </div>
                    <div class="range" style="float:right">
                        <span class="red-dot"></span>
                        <input class="start" value="2015" type="number" min="2015"></input>
                        <span class="green-dot"></span>
                        <input class="end" value="2021" type="number" min="2015"></input>
                    </div>
                </div>
                <div class="score-chart" style="position: relative"></div>
            </div>

            <div id="ratio-area">
                <div class="ratio-title">Tỉ lệ chọi</div>
                <div class="ratio-range">
                    <div class="title"></div>
                    <div class="range">
                        <div class="start"></div>
                        <div class="end"></div>
                    </div>
                </div>
                <div class="ratio-table"></div>
            </div>

            <div id="comparision-area">
                <div class="comparision-title"></div>
                <div class="comparision-year">
                    <div class="title"></div>
                    <select name="" id="" class="year"></select>
                </div>
                <div class="comparision-area">
                    <div class="title"></div>
                    <select name="" id="" class="area"></select>
                </div>
                <div class="comparision-table"></div>
            </div>

            <div id="footer-container"></div>
        </div>
    </body>
</html>



<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-trendline"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./js/main.js"></script>
<script>
    $(function(){
        $("#header-container").load("../expand/header.html"); 
        $("#footer-container").load("../expand/footer.html"); 
        });
</script>

<script type="text/javascript">

    const default_school = "nguyen huu huan";
    const default_district = "Thủ Đức"
    const default_year = "2021";
    var year_start = document.querySelector('.range .start').value
    var year_end = document.querySelector('.range .end').value
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
                data:{title:default_school, start:year_start, end:year_end},
                success:function(data) {
                    $('.score-chart').html(data);
                }
            });
        }

        window.onload = showOnLoad();

        
        $(document).ready(function() {
            $(document).on('click', '.search-box i', function() {
                // document.querySelector('.filter-year-select .select').innerHTML = "Năm 2021";
                var school_input = document.querySelector('.school-search').value;

                if (school_input != '') {
                
                    $.ajax({
                        url:"year_range_search.php",
                        method:"POST",
                        data:{title:school_input, start:year_start, end:year_end},
                        success:function(data) {
                            $('.score-chart').html(data);
                        }
                    });
                }
                
            });
        });

        function yearRangeChange() {
            var school_input = document.querySelector('.school-search').value
            if (school_input == '') {
                school_input = default_school
            }
            var start = parseInt(document.querySelector('.start').value);
            var end = parseInt(document.querySelector('.end').value);

            if (!isNaN(start) && !isNaN(end)) {
                if (start > end) {
                    alert("Năm đầu phải nhỏ hơn hoặc bằng năm cuối")
                } else {

                    $.ajax({
                        url:"year_range_search.php",
                        method:"POST",
                        data:{title:school_input, start:start, end:end},
                        beforeSend:function() {
                            
                        },
                        success:function(data) {
                            $('.score-chart').html(data);
                        }
                    })
                    
                }
            }

        }

        $('.start').on('change', yearRangeChange);
        $('.end').on('change', yearRangeChange);

    });




</script>