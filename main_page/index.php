<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/header-footer.css">
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
	<!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'> -->
	<title>Tra điểm</title>
</head>

<body>
	<div class="main">
		<header>
			<nav>
				<div class="navbar">
					<div class="navbar-select">
						<a href="#">Tra điểm</a>
					</div>
					<div class="navbar-select">
						<a href="../filter_page/index.php">Lọc điểm</a>
					</div>
					<div class="navbar-select">
                        <a href="../visualization_page/index.php">Thống kê</a>
                    </div>
				</div>
			</nav>
		</header>

		<!-- <div class="line-divider"></div> -->

		<h1 class="main-title">Tra điểm tại đây</h1>

		<div class="input-container">
			<input type="text" class="form-control" id="live-search" placeholder="Tìm kiếm...">
		</div>
		
		<div class="dropdown">
			<div class="dropdown-container">
				<div class="dropdown-select">
					<span class="select">Năm 2021</span>
					<i class="fi fi-rr-caret-down"></i>
				</div>

				<div class="dropdown-list">
					<div class="year" onclick="show('Năm 2022')">Năm 2022</div>
					<div class="year" onclick="show('Năm 2021')">Năm 2021</div>
					<div class="year" onclick="show('Năm 2020')">Năm 2020</div>
					<div class="year" onclick="show('Năm 2019')">Năm 2019</div>
					<div class="year" onclick="show('Năm 2018')">Năm 2018</div>
					<div class="year" onclick="show('Năm 2017')">Năm 2018</div>
				</div>
			</div>
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

</body>

<script src="./js/main.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

		$("#live-search").keyup(function(){
			var year = (document.querySelector('.dropdown-select .select').innerHTML).replace("Năm ","");
			document.querySelector('.year-chosen').innerHTML = document.querySelector('.dropdown-select .select').innerHTML;
			var input = $(this).val();

			// alert(input);

			if (input != "" && document.querySelector('.dropdown-select .select').innerHTML !="Chọn năm") {
				$("#search-result").css("display","flex")
				$.ajax({

					url:"livesearch.php",
					method:"POST",
					data:{input:input,year:year},
					success:function(data){
						$("#search-result").html(data);
					}
				});
			} else if (input=="" && document.querySelector('.dropdown-select .select').innerHTML !="Chọn năm") {
				$.ajax({
					url:"livesearch.php",
					method:"POST",
					data:{input:'',year:year},
					success:function(data){
						$("#search-result").html(data);
					}
				});

			} else if (input!="" && document.querySelector('.dropdown-select .select').innerHTML =="Chọn năm"){
				alert("Vui lòng chọn năm!");
				

			} else {
				$("#search-result").css("display","none");
			}
		});
	});
</script>
</html>