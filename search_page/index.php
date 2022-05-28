<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
	<!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css'> -->
	<title>Tra điểm</title>
</head>

<body>
	<div class="main">

		<div id="header-container"></div>

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
					<div class="year" onclick="show('Năm 2017')">Năm 2017</div>
					<div class="year" onclick="show('Năm 2016')">Năm 2016</div>
					<div class="year" onclick="show('Năm 2015')">Năm 2015</div>
				</div>
			</div>
		</div>

		
	</div>

	<h1 class="year-chosen"></h1>
	
	<div id="search-result"></div>

	<div id="footer-container"></div>

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
					beforeSend:function() {
						$(function(){
							$("#search-result").load("../expand/loader.html"); 
						});
					},
					success:function(data){
						$("#search-result").html(data);
					}
				});
			} else if (input=="" && document.querySelector('.dropdown-select .select').innerHTML !="Chọn năm") {
				$.ajax({
					url:"livesearch.php",
					method:"POST",
					data:{input:'',year:year},
					beforeSend:function() {
						$(function(){
							$("#search-result").load("../expand/loader.html"); 
						});
					},
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