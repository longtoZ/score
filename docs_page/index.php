<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
        <link rel="icon" type="image/png" href="../img/logo.png">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="../expand/css/root.css">
        <link rel='stylesheet' href='../expand/css/uicons-regular-rounded.css'>
        <link rel='stylesheet' href='../expand/css/uicons-bold-rounded.css'>
        <link rel='stylesheet' href='../expand/css/uicons-brands.css'>
        <title>About Score</title>
    </head>

    <body>
        <div id="main">
            <header>
            </header>

            <div class="main-container">
                <div class="menu-container"></div>
    
                <div class="content-container">
                    <img src="../img/logo-full-light.png" alt="main-logo" class="main-logo">
                    <h1 style="text-align: center; padding: 40px 0; margin-bottom: 50px; font-weight: 500; letter-spacing: 1px;">Score - Phân tích điểm tuyển sinh 10</h1>

                    <section id="introduction">
                        <h2>
                            Giới thiệu
                            <a href="#introduction" class="headerlink">¶</a>
                        </h2>

                        <p>
                            <b>Score</b> tối ưu hoá quá trình tìm kiếm và đưa ra quyết định chọn
                            trường phù hợp với tiêu chí.
                        </p>

                        <b>Tính năng:</b>

                        <ul>
                            <li>Tìm kiếm trường và điểm qua các năm chỉ trong vài giây.</li>
                            <li>Dễ dàng so sánh điểm nguyện vọng thường và chuyên với các trường trong khu vực.</li>
                            <li>
                                Đề xuất trường phù hợp dựa trên tiêu chí mà bạn đưa ra 
                                (điểm trên bao nhiêu, trong khoảng nào, khu vực nào,...).
                            </li>
                            <li>Trực quan hoá bằng biểu đồ, tuỳ chỉnh trực tiếp trên biểu đồ hiển thị theo yêu cầu.</li>
                            <li>Hỗ trợ xuất dữ liệu (pdf, excel) có thể tuỳ biến hiển thị.</li>
                            <li>Giao diện hiện đại, bố cục rõ ràng, tương thích với nhiều loại thiết bị (máy tính, ipad, điện thoại,...).</li>
                        </ul>
                    </section>

                    <section id="getting-started">
                        <h2>
                            Hãy bắt đầu
                            <a href="#getting-started" class="headerlink">¶</a>
                        </h2>
                        <p>
                            Nếu đây là lần đầu tiên bạn đặt chân đến <b>Score</b>, hoặc bạn không
                            chắc chắn rằng mình có thể sử dụng tối ưu các chức năng của trang web,
                            hãy để chúng tôi định hướng cho bạn!
                        </p>

                        <ul>
                            <li>
                                <b>Các mục chính: </b>
                                <a href="search_page.html">Tra cứu</a> | 
                                <a href="filter_page.html">Đề xuất</a> | 
                                <a href="visualization_page.html">Phân tích</a> | 
                                <a href="printing_page.html">Báo cáo</a> |
                            </li>

                            <li>
                                <b>Nền móng: </b>
                                <a href="references.html">Tài liệu và công cụ</a> | 
                            </li>
                        </ul>


                    </section>

                    <section id="version-log">
                        <h2>
                            Phát triển
                            <a href="#version-log" class="headerlink">¶</a>
                        </h2>

                        <p><b>Score</b> liên tục được cập nhật để cải thiện các chức năng cũng như sửa lỗi, với mục đích tiếp cận thân thiện với người dùng nhất. Tham khảo lịch sử các phiên bản tại đây:</p>
                        <br>
                        <ul>
                            <li><a href="changelog.html">Changelog</a></li>
                            <li><a href="https://github.com/longtoZ/score" target="_blank">Mã nguồn</a></li>
                        </ul>
                        
                    </section>

                    <section id="faqs">
                        <h2>
                            Câu hỏi phổ biến
                            <a href="#faqs" class="headerlink">¶</a>
                        </h2>

                        <p>
                            Bạn vẫn còn những thắc mắc? Hãy tham khảo một số câu trả lời ở đây, hoặc đặt câu hỏi cho chúng tôi:
                            <a href="#">FAQs</a>
                        </p>
                    </section>
                </div>
            </div>

            <div id="scroll-button">
                <i class="fi fi-rr-angle-up"></i>
            </div>

            <footer>
            </footer>
        </div>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="https://requirejs.org/docs/release/2.3.6/minified/require.js"></script> -->
    <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="../expand/js/hide-nav.js"></script>
    <script type="text/javascript" src="../expand/js/activity.js"></script>
    <script>
        $(function(){
            $(".menu-container").load("../expand/menu.html");
            $("header").load("../expand/mini-header.html"); 
            $("footer").load("../expand/mini-footer.html");  
        });
    </script>

    <script type="text/javascript">
        // var res = {}
        // var ip = ''; // Leave blank to lookup current IP address
        // var XMLHttp = new XMLHttpRequest();
        // XMLHttp.onreadystatechange = function() {
        //     if(this.readyState == 4 && this.status == 200) {
        //         res = JSON.parse(this.responseText);
        //     }
        // };
        // XMLHttp.open('GET', 'https://ipwho.is/' + ip, true);
        // XMLHttp.send();

        // console.log(activityUsers)


    </script>
</html>