<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/header-footer.css">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
        <title>Lọc điểm</title>
    </head>

    <body>
        <div class="main">

            <header>
                <nav>
                    <div class="navbar">
                        <div class="navbar-select">
                            <a href="../main_page/index.php">Tra điểm</a>
                        </div>
                        <div class="navbar-select">
                            <a href="#">Lọc điểm</a>
                        </div>
                        <div class="navbar-select">
                            <a href="../visualization_page/index.php">Thống kê</a>
                        </div>
                    </div>
                </nav>
            </header>

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
                                    <input type="" class="score-maths" placeholder="Nhập điểm toán...">
                                    <input type="text" class="score-literature" placeholder="Nhập điểm văn...">
                                    <input type="text" class="score-english" placeholder="Nhập điểm anh...">
                                    <input type="text" class="score-average" placeholder="Điểm trung bình" disabled="disabled" style="font-weight:bold; color:rgba(0, 152, 121, 1);">
                                    <input type="button" class="score-cal" onclick="showScore()" value="Tính">
                                </div>
                            </div>
                        </div>
                        
                        <div class="filter-detail-box" style="display:flex; justify-content: center">
                            <div class="filter-detail-container">
                                <div class="filter-year">
                                    <h3 class="year-title">Chọn năm</h3>
                                    <div class="filter-year-select">
                                        <span class="select">Chọn năm</span>
                                        <i class="fi fi-rr-caret-down"></i>
                                    </div>

                                    <div class="filter-year-list">
                                        <div class="year" onclick="showYear('Năm 2022')">Năm 2022</div>
                                        <div class="year" onclick="showYear('Năm 2021')">Năm 2021</div>
                                        <div class="year" onclick="showYear('Năm 2020')">Năm 2020</div>
                                        <div class="year" onclick="showYear('Năm 2019')">Năm 2019</div>
                                        <div class="year" onclick="showYear('Năm 2018')">Năm 2018</div>
                                        <div class="year" onclick="showYear('Năm 2017')">Năm 2017</div>
                                    </div>
                                </div>

                                <div class="filter-district">
                                    <h3 class="district-title">Chọn khu vực</h3>
                                    <div class="filter-district-select">
                                        <span class="select">Chọn quận/TP</span>
                                        <i class="fi fi-rr-caret-down"></i>
                                    </div>

                                    <div class="filter-district-list">
                                        <div class="district" onclick="showDistrict('Tất cả')">Tất cả</div>
                                        <div class="district" onclick="showDistrict('Quận 1')">Quận 1</div>
                                        <div class="district" onclick="showDistrict('Quận 3')">Quận 3</div>
                                        <div class="district" onclick="showDistrict('Quận 4)">Quận 4</div>
                                        <div class="district" onclick="showDistrict('Quận 5')">Quận 5</div>
                                        <div class="district" onclick="showDistrict('Quận 6')">Quận 6</div>
                                        <div class="district" onclick="showDistrict('Quận 7')">Quận 7</div>
                                        <div class="district" onclick="showDistrict('Quận 8')">Quận 8</div>
                                        <div class="district" onclick="showDistrict('TP Thủ Đức')">TP Thủ Đức</div>
                                        <div class="district" onclick="showDistrict('Quận 10')">Quận 10</div>
                                        <div class="district" onclick="showDistrict('Quận 11')">Quận 11</div>
                                        <div class="district" onclick="showDistrict('Quận 12')">Quận 12</div>
                                        <div class="district" onclick="showDistrict('Quận Bình Thạnh')">Quận Bình Thạnh</div>
                                        <div class="district" onclick="showDistrict('Quận Gò Vấp')">Quận Gò Vấp</div>
                                        <div class="district" onclick="showDistrict('Quận Phú Nhuận')">Quận Phú Nhuận</div>
                                        <div class="district" onclick="showDistrict('Quận Tân Bình')">Quận Tân Bình</div>
                                        <div class="district" onclick="showDistrict('Quận Tân Phú')">Quận Tân Phú</div>
                                        <div class="district" onclick="showDistrict('Quận Bình Tân')">Quận Bình Tân</div>
                                        <div class="district" onclick="showDistrict('Huyện Bình Chánh')">Huyện Bình Chánh</div>
                                        <div class="district" onclick="showDistrict('Huyện Cần Giờ')">Huyện Cần Giờ</div>
                                        <div class="district" onclick="showDistrict('Huyện Củ Chi')">Huyện Củ Chi</div>
                                        <div class="district" onclick="showDistrict('Huyện Hóc Môn')">Huyện Hóc Môn</div>
                                        <div class="district" onclick="showDistrict('Huyện Nhà Bè')">Huyện Nhà Bè</div>

                                    </div>
                                </div>

                                <div class="filter-wish">
                                    <h3 class="wish-title">Chọn nguyện vọng</h3>
                                    <div class="filter-wish-select">
                                        <span class="select">Chọn nguyện vọng</span>
                                        <i class="fi fi-rr-caret-down"></i>
                                    </div>

                                    <div class="filter-wish-list">
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
                            <div class="filter-year-advanced" style="margin: 0 10px;">
                                <h3 class="filter-between-title">Chọn năm</h3>
                                <div class="filter-year-advanced-select">
                                    <span class="select">Năm 2021</span>
                                    <i class="fi fi-rr-caret-down"></i>
                                </div>

                                <div class="filter-year-advanced-list" style="z-index: 2">
                                    <div class="year" onclick="showYearAdvanced('Năm 2022')">Năm 2022</div>
                                    <div class="year" onclick="showYearAdvanced('Năm 2021')">Năm 2021</div>
                                    <div class="year" onclick="showYearAdvanced('Năm 2020')">Năm 2020</div>
                                    <div class="year" onclick="showYearAdvanced('Năm 2019')">Năm 2019</div>
                                    <div class="year" onclick="showYearAdvanced('Năm 2018')">Năm 2018</div>
                                    <div class="year" onclick="showYearAdvanced('Năm 2017')">Năm 2017</div>
                                </div>
                            </div>
                            <div class="filter-wish-advanced" style="margin: 0 10px;">
                                <h3 class="filter-between-title">Chọn nguyện vọng</h3>
                                <div class="filter-wish-advanced-select">
                                    <span class="select">Nguyện vọng 1</span>
                                    <i class="fi fi-rr-caret-down"></i>
                                </div>

                                <div class="filter-wish-advanced-list" style="z-index: 2">
                                    <div class="wish" onclick="showWishAdvanced('Nguyện vọng 1')">Nguyện vọng 1</div>
                                    <div class="wish" onclick="showWishAdvanced('Nguyện vọng 2')">Nguyện vọng 2</div>
                                    <div class="wish" onclick="showWishAdvanced('Nguyện vọng 3')">Nguyện vọng 3</div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-between-box" style="display:flex; justify-content: center;">
                            <div class="filter-between">
                                <h3 class="filter-between-title">Lọc trong khoảng</h3>
                                <input type="text" class="start" placeholder="Đầu..." style="margin: 0 10px;">
                                <input type="text" class="end" placeholder="Cuối..." style="margin: 0 10px;">
                                <input type="text" class="between-search" value="Lọc" style="margin: 0 10px;">
                            </div>
                        </div>
                        <div class="filter-more-box" style="display:flex; justify-content: center;">
                            <div class="filter-top">
                                <h3 class="filter-top-title">Top</h3>
                                <input type="number" step="1" min="0" max="50" class="top" placeholder="Top 10..." style="margin: 0 10px;">
                            </div>
                            <div class="filter-above-average">
                                <input type="button" class="above" value="Trên trung bình" style="margin: 0 10px;">
                            </div>
                            <div class="filter-below-average">
                                <input type="button" class="below" value="Dưới trung bình" style="margin: 0 10px;">
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

            <footer class="footer">
                <div class="container">
                    <div class="brand-container" style="position:relative">
                        <div class="brand">
                            <div class="title-container">
                                <h3 class="title">Multi-search</h3>
                            </div>
                            <p class="description">Đây là một công cụ lọc điểm .... or whatever idk what to write here</p>
                            <div class="connect">
                                <a href="https://www.facebook.com/its.longto/" target="_blank"><i class="fi fi-brands-facebook"></i></a>
                                <a href="https://www.instagram.com/longto_/" target="_blank"><i class="fi fi-brands-instagram"></i></a>
                                <a href="https://www.pinterest.com/longtoXP/" target="_blank"><i class="fi fi-brands-pinterest"></i></a>
                                <a href="https://github.com/ThanhLongTo" target="_blank"><i class="fi fi-brands-github"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="info-container">
                        <div class="links-box" style="position:relative">
                            <div class="title-container">
                                <h3 class="title">Hỗ trợ</h3>
                            </div>
                            <a href="#">Liên hệ</a>
                            <br>
                            <a href="#">Bảo mật</a>
                            <br>
                            <a href="#">Điều khoản</a>
                        </div>
                        <div class="about-box" style="position:relative">
                            <div class="title-container">
                                <h3 class="title">Thông tin</h3>
                            </div>
                            <a href="#">Giới thiệu</a>
                            <br>
                            <a href="#">Công cụ</a>
                        </div>
                    </div>

                    <div class="contact-container" style="position:relative">
                        <div class="title-container">
                            <h3 class="title">Liên hệ chúng tôi</h3>
                        </div>				
                        <div class="location">
                            <i class="fi fi-rr-marker"></i>
                            <a href="https://goo.gl/maps/7Q9t2QPYLRgXXyGb7" target="_blank">11 Đoàn Kết, Bình Thọ, Thành Phố Thủ Đức, Thành phố Hồ Chí Minh, Việt Nam</a>
                        </div>
                        <div class="email">
                            <i class="fi fi-rr-at"></i>
                            <a href="mailto:longto.xp@gmail.com">longto.xp@gmail.com</a></div>
                    </div>
                </div>
            </footer>
        </div>
    </body>

    <script src="./js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
        
        $(document).ready(function() {

            $(document).on('click', '#submit', function() {

                var average = parseFloat(document.querySelector('.score-average').value);
                var year = (document.querySelector('.filter-year-select .select').innerHTML).replace("Năm ", "");
                var district = document.querySelector('.filter-district-select .select').innerHTML;
                var wish = document.querySelector('.filter-wish-select .select').innerHTML;

                if (!isNaN(average) && year != "Chọn năm" && district != "Chọn quận/TP" && wish != "Chọn nguyện vọng") {
                    if (/\d/.test(district)) {
                        district = district.replace("Quận ", "");
                    } else if (district ==  "Tất cả"){
                        district = "^[a-zA-z0-9]";
                    }

                    if (wish=="Nguyện vọng 1") {
                        wish = "ĐIỂM NV1";
                    } else if (wish=="Nguyện vọng 2") {
                        wish = "ĐIỂM NV2";
                    } else {
                        wish= "ĐIỂM NV3";
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
                var wish = (document.querySelector('.filter-wish-advanced-select .select').innerHTML).replace('Nguyện vọng ', 'ĐIỂM NV');
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

            $(".filter-top .top").keyup(function(){
                $("#search-result").css("display","flex");
                var year = (document.querySelector('.filter-year-advanced-select .select').innerHTML).replace('Năm ', '');
                var wish = (document.querySelector('.filter-wish-advanced-select .select').innerHTML).replace('Nguyện vọng ', 'ĐIỂM NV');    
                var input = $(this).val();
                if (input != "") {

                    $.ajax({
                        url:"top.php",
                        method:"POST",
                        data:{input:input, year:year, wish:wish},
                        success: function (data) {
                            $("#search-result").html(data);
                        }
                    });

                } else {
                    $("#search-result").css("display","none");
                }

            });

            $(document).on('click', '.filter-above-average', function() {
                $("#search-result").css("display","flex");
                var year = (document.querySelector('.filter-year-advanced-select .select').innerHTML).replace('Năm ', '');
                var wish = (document.querySelector('.filter-wish-advanced-select .select').innerHTML).replace('Nguyện vọng ', 'ĐIỂM NV');
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
                var wish = (document.querySelector('.filter-wish-advanced-select .select').innerHTML).replace('Nguyện vọng ', 'ĐIỂM NV');
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