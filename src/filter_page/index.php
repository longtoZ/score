<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../img/logo.png">
        <link rel="stylesheet" type="text/css" href="../expand/css/root.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/printing.css">
        <link rel='stylesheet' href='../expand/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='../expand/css/uicons-brands.css'>
        <title>Đề xuất</title>

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

            <!-- <div class="line-divider"></div> -->

            <h1 class="main-title">Đề xuất phù hợp</h1>
            <h4 class="subtitle">
                Bạn có thể tuỳ chỉnh các bộ lọc từ đơn giản đến chi tiết
                để lựa chọn và xem xét trường có số điểm phù hợp với nguyện vọng
                của mình.
                <p style="font-weight: 400;">
                    Chưa rõ? <a href="#">Đọc tài liệu &rarr;</a>
                </p>
            </h4>

            <div class="filter-box">
                <div class="school-type-container">
                    <div class="school-type">
                        <div class="school__normal school-active">
                            <h3>Lớp thường</h3>
                        </div>
                        <div class="school__pro">
                            <h3>Lớp chuyên</h3>
                        </div>
                    </div>
                </div>

                <div class="filter-container">
                    
                    <div class="filter-advanced-container active">
                        <div class="filter-tool-box">
                            <div class="filter-year-advanced primary-margin" style="margin: 0 10px; display:none">
                                <h3 class="filter-between-title">Chọn năm</h3>
                                <div class="filter-year-advanced-select primary-box select-margin select-hover">
                                    <span class="select">Năm 2022</span>
                                    <i class="fi fi-rr-caret-down arrow-pos"></i>
                                </div>

                                <div class="filter-year-advanced-list primary-box primary-list">
                                </div>
                            </div>
                            
                            <div class="filter-wish-advanced primary-margin" style="margin: 0 10px;">
                                <h3 class="filter-between-title">Chọn nguyện vọng</h3>
                                <div class="filter-wish-advanced-select primary-box select-margin select-hover">
                                    <span class="select">Nguyện vọng 1</span>
                                    <i class="fi fi-rr-caret-down arrow-pos"></i>
                                </div>

                                <div class="filter-wish-advanced-list primary-box primary-list">
                                </div>
                            </div>

                            <div class="filter-district-advanced primary-margin"  style="margin: 0 10px;">
                                <h3 class="filter-between-title">Chọn khu vực</h3>
                                <div class="filter-district-advanced-select primary-box select-margin select-hover">
                                    <span class="select">Tất cả</span>
                                    <i class="fi fi-rr-caret-down arrow-pos"></i>
                                </div>

                                <div class="filter-district-advanced-list primary-box primary-list"></div>
                            </div>
                        </div>
                        <div class="filter-between-box" style="display:flex; justify-content: center; padding:0 4%">
                            <div class="filter-between" style="margin-bottom: 30px">
                                <h3 class="filter-between-title">Lọc trong khoảng</h3>
                                <div class="input-box" style="overflow:hidden; display: flex; justify-content: space-around; flex-wrap: wrap">
                                    <input type="text" class="start advanced-input" placeholder="Đầu..." style="margin: 10px;">
                                    <input type="text" class="end advanced-input" placeholder="Cuối..." style="margin: 10px;">
                                    <input type="button" class="between-search advanced-input" value="Lọc" style="margin: 10px;">
                                    </div>
                                
                            </div>
                        </div>
                        <div class="filter-more-box" style="display:flex; justify-content: center; gap: 10%;">
                            <div class="left-box">
                                <div class="filter-top" style="margin-bottom: 30px">
                                    <h3 class="filter-top-title">Top</h3>
                                    <input type="number" step="1" min="0" max="50" class="top advanced-input" placeholder="Top 10..." style="margin: 0 10px;">
                                </div>
                                <div class="filter-top-pos">
                                    <input type="button" class="position advanced-input" value="Cao nhất" style="margin: 0 10px;">
                                </div>
                            </div>

                            <div class="right-box">
                                <h3 class="filter-average-title">Trung bình</h3>
                                <div class="filter-above-average" style="margin-bottom: 30px">
                                    <input type="button" class="above advanced-input" value="Trên trung bình" style="margin: 0 10px;">
                                </div>
                                <div class="filter-below-average">
                                    <input type="button" class="below advanced-input" value="Dưới trung bình" style="margin: 0 10px;">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <h1 class="year-chosen"></h1>

            <div id="search-result"></div>

            <div class="floating-container">
                <input type="checkbox" name="" id="floating-checkbox" hidden >
                <label class="overlay" for="floating-checkbox"></label>
                <div id="floating-box">
                    <div class="simplify" style="border-bottom: 1px solid var(--text-color); padding-top: 15px;">
                        <input type="checkbox" id="simplify-mode" value="">
                        <label for="simplify-mode">Chế độ đơn giản</label>
                    </div>
                    <div class="exportxlsx" style="background-color: #33C481;">
                        <i class="fi fi-rr-download"></i>
                        Excel
                    </div>
                    <div class="print">
                        <i class="fi fi-rr-document-signed" style="padding: 0 4px;"></i>
                        In dữ liệu
                    </div>
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

    <script type="text/javascript" src="../expand/js/create-lists.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="./js/switch-type.js"></script>
    <script src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"></script>

    <script type="text/javascript">
        
        $(document).ready(function() {

            document.querySelector('.district-all').click()

            $(document).on('click', '.between-search', function() {
                var wish = document.querySelector('.filter-wish-advanced-select .select').innerHTML;
                var district = districtList.join(' OR ')
                if (district == 'Tất cả') {
                    district = "`QUAN/HUYEN` LIKE '%%'";
                }

                var start = parseFloat(document.querySelector('.filter-between .start').value);
                var end = parseFloat(document.querySelector('.filter-between .end').value);            

                if (isNaN(start) || isNaN(end)) {
                    alert("Vui lòng nhập điểm hợp lệ")
                } else {
                    if (start > end) {
                        alert("Điểm đầu phải nhỏ hơn hoặc bằng điểm cuối")
                    } else {

                        if (wish.includes('Chuyên')) {
                            wish = proSubjectsObj[wish].replace('1', '%')
                        } else {
                            wish = normalSubjectsObj[wish]
                            start = ((start/30)*100).toFixed(2)
                            end = ((end/30)*100).toFixed(2)
                        }

                        $.ajax({
                            url:"between.php",
                            method:"POST",
                            data:{start:start, end:end, wish:wish, district:district, isNormal:isNormal(), column:proSubjectColumn()},
                            beforeSend:function() {
                                $(function(){
                                    $("#search-result").load("../expand/loader.html"); 
                                });
                            },
                            success:function(data) {
                                $("#search-result").html(data);
                            }
                        });
                    }
                    
                }
            });

            $(document).on('click', '.position', function(){
                $("#search-result").css("display","flex");
                var wish = (document.querySelector('.filter-wish-advanced-select .select').innerHTML).replace('Nguyện vọng ', 'NV');
                var district = districtList.join(' OR ')
                if (district == 'Tất cả') {
                    district = "`QUAN/HUYEN` LIKE '%'";
                }

                var top = parseInt(document.querySelector('.top').value);
                var order = "DESC"
                if (!isNaN(top)) {
                    if (position.value == "Thấp nhất") {
                        order = "ASC"
                    }

                    $.ajax({
                        url:"top.php",
                        method:"POST",
                        data:{top:top, wish:wish, district:district, order:order},
                        beforeSend:function() {
                            $(function(){
                                $("#search-result").load("../expand/loader.html"); 
                            });
                        },
                        success: function (data) {
                            $("#search-result").html(data);
                        }
                    });

                } else {
                    alert('Vui lòng nhập điểm hợp lệ');
                    $("#search-result").css("display","none");
                }

            });

            $(document).on('click', '.filter-above-average', function() {
                $("#search-result").css("display","flex");
                var wish = (document.querySelector('.filter-wish-advanced-select .select').innerHTML).replace('Nguyện vọng ', 'NV');
                var district = districtList.join(' OR ')
                if (district == 'Tất cả') {
                    district = "`QUAN/HUYEN` LIKE '%'";
                }

                $.ajax({
                    url:"average.php",
                    method:"POST",
                    data:{wish:wish, district:district, compare:'above'},
                    beforeSend:function() {
                        $(function(){
                            $("#search-result").load("../expand/loader.html"); 
                        });
                    },
                    success: function (data) {
                        $("#search-result").html(data);
                    }
                });
            });

            $(document).on('click', '.filter-below-average', function() {
                $("#search-result").css("display","flex");
                var wish = (document.querySelector('.filter-wish-advanced-select .select').innerHTML).replace('Nguyện vọng ', 'NV');
                var district = districtList.join(' OR ')
                if (district == 'Tất cả') {
                    district = "`QUAN/HUYEN` LIKE '%'";
                }

                $.ajax({
                    url:"average.php",
                    method:"POST",
                    data:{wish:wish, district:district, compare:'below'},
                    beforeSend:function() {
                        $(function(){
                            $("#search-result").load("../expand/loader.html"); 
                        });
                    },
                    success: function (data) {
                        $("#search-result").html(data);
                    }
                });
            });
        });
  
    </script>
</html>