<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css" media="all">
        <link rel="stylesheet" type="text/css" href="../expand/css/root.css">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
        <title>Lọc điểm</title>
    </head>

    <body>
        <div class="main">

            <div id="header-container"></div>

            <!-- <div class="line-divider"></div> -->

            <div class="filter-box">
                <div class="filter-container">
                    <div class="filter-basic-header">
                        <span class="title">Cơ bản</span>
                        <i class="fi fi-rr-caret-down"></i>
                    </div>
                    <div class="filter-basic-container">
                        <div class="filter-score-box" style="display:flex; justify-content: center">
                            <div class="filter-score">
                                <h3 class="score-title">Nhập điểm</h3>
                                <div class="filter-score-container">
                                    <input type="" class="score-maths primary-box" placeholder="Nhập điểm toán...">
                                    <input type="text" class="score-literature primary-box" placeholder="Nhập điểm văn...">
                                    <input type="text" class="score-english primary-box" placeholder="Nhập điểm anh...">
                                    <input type="text" class="score-average primary-box" placeholder="Điểm trung bình" disabled="disabled" style="font-weight:bold; color:rgba(0, 152, 121, 1);">
                                    <input type="button" class="score-cal" onclick="showScore()" value="Tính">
                                </div>
                            </div>
                        </div>
                        
                        <div class="filter-detail-box" style="display:flex; justify-content: center">
                            <div class="filter-detail-container">
                                <div class="filter-year primary-margin">
                                    <h3 class="year-title">Chọn năm</h3>
                                    <div class="filter-year-select primary-box select-margin select-hover">
                                        <span class="select">Chọn năm</span>
                                        <i class="fi fi-rr-caret-down arrow-pos"></i>
                                    </div>

                                    <div class="filter-year-list primary-box primary-list">
                                        <div class="year" onclick="showYear('Năm 2022')">Năm 2022</div>
                                        <div class="year" onclick="showYear('Năm 2021')">Năm 2021</div>
                                        <div class="year" onclick="showYear('Năm 2020')">Năm 2020</div>
                                        <div class="year" onclick="showYear('Năm 2019')">Năm 2019</div>
                                        <div class="year" onclick="showYear('Năm 2018')">Năm 2018</div>
                                        <div class="year" onclick="showYear('Năm 2017')">Năm 2017</div>
                                        <div class="year" onclick="showYear('Năm 2016')">Năm 2016</div>
                                        <div class="year" onclick="showYear('Năm 2015')">Năm 2015</div>
                                    </div>
                                </div>

                                <div class="filter-district primary-margin">
                                    <h3 class="district-title">Chọn khu vực</h3>
                                    <div class="filter-district-select primary-box select-margin select-hover">
                                        <span class="select">Chọn quận/TP</span>
                                        <i class="fi fi-rr-caret-down arrow-pos"></i>
                                    </div>

                                    <div class="filter-district-list primary-box primary-list">
                                        <div class="district" onclick="showDistrict('Tất cả')">Tất cả</div>
                                        <div class="district" onclick="showDistrict('Quận 1')">Quận 1</div>
                                        <div class="district" onclick="showDistrict('Quận 3')">Quận 3</div>
                                        <div class="district" onclick="showDistrict('Quận 4')">Quận 4</div>
                                        <div class="district" onclick="showDistrict('Quận 5')">Quận 5</div>
                                        <div class="district" onclick="showDistrict('Quận 6')">Quận 6</div>
                                        <div class="district" onclick="showDistrict('Quận 7')">Quận 7</div>
                                        <div class="district" onclick="showDistrict('Quận 8')">Quận 8</div>
                                        <div class="district" onclick="showDistrict('TP Thủ Đức')">TP Thủ Đức</div>
                                        <div class="district" onclick="showDistrict('Quận 10')">Quận 10</div>
                                        <div class="district" onclick="showDistrict('Quận 11')">Quận 11</div>
                                        <div class="district" onclick="showDistrict('Quận 12')">Quận 12</div>
                                        <div class="district" onclick="showDistrict('Quận Bình Thạnh')">Bình Thạnh</div>
                                        <div class="district" onclick="showDistrict('Quận Gò Vấp')">Gò Vấp</div>
                                        <div class="district" onclick="showDistrict('Quận Phú Nhuận')">Phú Nhuận</div>
                                        <div class="district" onclick="showDistrict('Quận Tân Bình')">Tân Bình</div>
                                        <div class="district" onclick="showDistrict('Quận Tân Phú')">Tân Phú</div>
                                        <div class="district" onclick="showDistrict('Quận Bình Tân')">Bình Tân</div>
                                        <div class="district" onclick="showDistrict('Huyện Bình Chánh')">Bình Chánh</div>
                                        <div class="district" onclick="showDistrict('Huyện Cần Giờ')">Cần Giờ</div>
                                        <div class="district" onclick="showDistrict('Huyện Củ Chi')">Củ Chi</div>
                                        <div class="district" onclick="showDistrict('Huyện Hóc Môn')">Hóc Môn</div>
                                        <div class="district" onclick="showDistrict('Huyện Nhà Bè')">Nhà Bè</div>

                                    </div>
                                </div>

                                <div class="filter-wish primary-margin">
                                    <h3 class="wish-title">Chọn nguyện vọng</h3>
                                    <div class="filter-wish-select primary-box select-margin select-hover">
                                        <span class="select">Chọn nguyện vọng</span>
                                        <i class="fi fi-rr-caret-down arrow-pos"></i>
                                    </div>

                                    <div class="filter-wish-list primary-box primary-list">
                                        <div class="wish" onclick="showWish('Nguyện vọng 1')">Nguyện vọng 1</div>
                                        <div class="wish" onclick="showWish('Nguyện vọng 2')">Nguyện vọng 2</div>
                                        <div class="wish" onclick="showWish('Nguyện vọng 3')">Nguyện vọng 3</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="filter-advanced-header">
                        <span class="title">Nâng cao</span>
                        <i class="fi fi-rr-caret-down"></i>
                    </div>
                    <div class="filter-advanced-container">
                        <div class="filter-tool-box" style="display:flex; justify-content: center;">
                            <div class="filter-year-advanced primary-margin" style="margin: 0 10px;">
                                <h3 class="filter-between-title">Chọn năm</h3>
                                <div class="filter-year-advanced-select primary-box select-margin select-hover">
                                    <span class="select">Năm 2021</span>
                                    <i class="fi fi-rr-caret-down arrow-pos"></i>
                                </div>

                                <div class="filter-year-advanced-list primary-box primary-list" style="z-index: 2">
                                    <div class="year" onclick="showYearAdvanced('Năm 2022')">Năm 2022</div>
                                    <div class="year" onclick="showYearAdvanced('Năm 2021')">Năm 2021</div>
                                    <div class="year" onclick="showYearAdvanced('Năm 2020')">Năm 2020</div>
                                    <div class="year" onclick="showYearAdvanced('Năm 2019')">Năm 2019</div>
                                    <div class="year" onclick="showYearAdvanced('Năm 2018')">Năm 2018</div>
                                    <div class="year" onclick="showYearAdvanced('Năm 2017')">Năm 2017</div>
                                </div>
                            </div>
                            <div class="filter-wish-advanced primary-margin" style="margin: 0 10px;">
                                <h3 class="filter-between-title">Chọn nguyện vọng</h3>
                                <div class="filter-wish-advanced-select primary-box select-margin select-hover">
                                    <span class="select">Nguyện vọng 1</span>
                                    <i class="fi fi-rr-caret-down arrow-pos"></i>
                                </div>

                                <div class="filter-wish-advanced-list primary-box primary-list" style="z-index: 2">
                                    <div class="wish" onclick="showWishAdvanced('Nguyện vọng 1')">Nguyện vọng 1</div>
                                    <div class="wish" onclick="showWishAdvanced('Nguyện vọng 2')">Nguyện vọng 2</div>
                                    <div class="wish" onclick="showWishAdvanced('Nguyện vọng 3')">Nguyện vọng 3</div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-between-box" style="display:flex; justify-content: center;">
                            <div class="filter-between">
                                <h3 class="filter-between-title">Lọc trong khoảng</h3>
                                <input type="text" class="start advanced-input" placeholder="Đầu..." style="margin: 0 10px;">
                                <input type="text" class="end advanced-input" placeholder="Cuối..." style="margin: 0 10px;">
                                <input type="text" class="between-search advanced-input" value="Lọc" style="margin: 0 10px;">
                            </div>
                        </div>
                        <div class="filter-more-box" style="display:flex; justify-content: center; gap: 10%">
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
            

            <div class="submit-btn">
                <div class="submit-btn-container">
                    <input type="button" id="submit" value="Tìm kiếm">
                    <!-- <i class="fi fi-rr-search"></i> -->
                </div>
                
            </div>


            <h1 class="year-chosen"></h1>

            <div id="search-result"></div>

            <div id="footer-container"></div>
        </div>
    </body>

    <script src="./js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function(){
            $("#header-container").load("../expand/header.html"); 
            $("#footer-container").load("../expand/footer.html"); 
            });
    </script>

    <script type="text/javascript">
        
        $(document).ready(function() {

            $(document).on('click', '#submit', function() {

                var average = parseFloat(document.querySelector('.score-average').value);
                var year = (document.querySelector('.filter-year-select .select').innerHTML).replace("Năm ", "");
                var district = document.querySelector('.filter-district-select .select').innerHTML;
                var wish = document.querySelector('.filter-wish-select .select').innerHTML;

                if (!isNaN(average) && year != "Chọn năm" && district != "Chọn quận/TP" && wish != "Chọn nguyện vọng") {
                    
                    if (district ==  "Tất cả"){
                        district = "";
                    }

                    if (wish=="Nguyện vọng 1") {
                        wish = "NV1";
                    } else if (wish=="Nguyện vọng 2") {
                        wish = "NV2";
                    } else {
                        wish= "NV3";
                    }

                    $.ajax({
                        
                        url:"livesearch.php",
                        method:"POST",
                        data:{average:average, year:year, district:district, wish:wish},
                        beforeSend:function() {
                            $("#search-result").html("<h4>Đang lọc...</h4>");
                        },
                        success:function(data) {
                            $("#search-result").html(data);  
                        }
                    });
                } else {
                    alert("Vui lòng điền đầy đủ thông tin!");
                }   
            });

            $(document).on('click', '.between-search', function() {
                var year = (document.querySelector('.filter-year-advanced-select .select').innerHTML).replace('Năm ', '');
                var wish = (document.querySelector('.filter-wish-advanced-select .select').innerHTML).replace('Nguyện vọng ', 'NV');
                var start = parseFloat(document.querySelector('.filter-between .start').value);
                var end = parseFloat(document.querySelector('.filter-between .end').value);            
                console.log([start, end, year, wish]);


                if (isNaN(start) || isNaN(end)) {
                    alert("Vui lòng nhập điểm hợp lệ")
                } else {
                    if (start > end) {
                        alert("Điểm đầu phải nhỏ hơn hoặc bằng điểm cuối")
                    } else {
                        $.ajax({
                            url:"between.php",
                            method:"POST",
                            data:{start:start, end:end, year:year, wish:wish},
                            beforeSend:function() {
                                $("#search-result").html("<h4>Đang lọc...</h4>");
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
                var year = (document.querySelector('.filter-year-advanced-select .select').innerHTML).replace('Năm ', '');
                var wish = (document.querySelector('.filter-wish-advanced-select .select').innerHTML).replace('Nguyện vọng ', 'NV');    
                var input = parseInt(document.querySelector('.top').value);
                var order = "DESC"
                if (!isNaN(input)) {

                    if (position.value == "Thấp nhất") {
                        order = "ASC"
                    }
                    $.ajax({
                        url:"top.php",
                        method:"POST",
                        data:{input:input, year:year, wish:wish, order:order},
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
                var year = (document.querySelector('.filter-year-advanced-select .select').innerHTML).replace('Năm ', '');
                var wish = (document.querySelector('.filter-wish-advanced-select .select').innerHTML).replace('Nguyện vọng ', 'NV');
                console.log([year,wish])
                $.ajax({
                        url:"average.php",
                        method:"POST",
                        data:{year:year, wish:wish, compare:'above'},
                        success: function (data) {
                            $("#search-result").html(data);
                        }
                });
            });

            $(document).on('click', '.filter-below-average', function() {
                $("#search-result").css("display","flex");
                var year = (document.querySelector('.filter-year-advanced-select .select').innerHTML).replace('Năm ', '');
                var wish = (document.querySelector('.filter-wish-advanced-select .select').innerHTML).replace('Nguyện vọng ', 'NV');
                console.log([year,wish])
                $.ajax({
                        url:"average.php",
                        method:"POST",
                        data:{year:year, wish:wish, compare:'below'},
                        success: function (data) {
                            $("#search-result").html(data);
                        }
                });
            });
        });
  
    </script>
</html>