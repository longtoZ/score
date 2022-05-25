<?php

    $connect = mysqli_connect("localhost", "root", "", "search_project");
    $school = $_POST['title'];
    $sql = "SELECT * FROM `links` WHERE `TÊN TRƯỜNG` LIKE '%$school%';";

    $result = mysqli_query($connect,$sql);
    $datas = array();

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
        }?>
        <script>
            var main_page = '<?php echo $datas[0]['TRANG CHÍNH']?>'
            var main_page_desc = '<?php echo $datas[0]["TRANG CHÍNH MT"]?>'
            var fanpage = '<?php echo $datas[0]['FANPAGE']?>'
            var fanpage_desc = '<?php echo $datas[0]["FANPAGE MT"]?>'

            if (main_page == '') {
                main_page = '#'
            }

            if (main_page_desc == '') {
                main_page_desc = '...'
            }

            if (fanpage == '') {
                fanpage = '#'
            }

            if (fanpage_desc == '') {
                fanpage_desc = '...'
            }

            document.querySelector('.main-page-container a').setAttribute('href', main_page)
            document.querySelector('.main-page .detail .desc').innerHTML = main_page_desc
            document.querySelector('.fanpage-container a').setAttribute('href', fanpage)
            document.querySelector('.fanpage .detail .desc').innerHTML = fanpage_desc
        </script>

        <div class="description" style="font-size: 130%; font-weight: 600; padding-left: 10px; width: 95%; overflow: hidden; margin-bottom: 10px">
            <span style="float: left">Liên kết</span>
            <span style="float: right; font-weight: normal; font-size: 90%; opacity: 0.5">Tất cả</span>
        </div>
        <div class="main-page-container">
            <a href="https://thptnguyenhuuhuan.hcm.edu.vn/" target="_blank" style="text-decoration: none; color: black;">
                <div class="main-page">
                    <div class="logo">
                        <i class="fi fi-ss-form"></i>
                    </div>                              
                    <div class="detail">
                        <span class="title">Trang chính thức</span>
                        <br>
                        <span class="desc">Trường được thành lập vào năm 1962-1963,...</span>
                    </div>
                    <div class="visit">
                        <i class="fi fi-br-angle-right"></i>
                    </div>
                </div>
            </a>
            
            
        </div>
        <div class="fanpage-container">
            <a href="https://www.facebook.com/truongthptNguyenHuuHuan/" target="_blank" style="text-decoration: none; color: black;">
                <div class="fanpage">
                    <div class="logo">
                        <i class="fi fi-brands-facebook"></i>
                    </div>
                    <div class="detail">
                        <span class="title">Fanpage trường</span>
                        <br>
                        <span class="desc">Là một trong top 10 trường có chất lượng...</span>
                    </div>
                    <div class="visit">
                        <i class="fi fi-br-angle-right"></i>
                    </div>
                </div>
            </a>
        </div>
    
    <?php
    } else {
        echo "<h3 style='color:red; text-align:center;'>*Đang cập nhật thông tin...*</h3>";
    }


?>

