<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../img/logo.png">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css" media="all">
	<link rel='stylesheet' href='../expand/css/uicons-regular-rounded.css'>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
</head>

<body>
	<div class="main">

		<div id="header-container"></div>

		<!-- <div class="line-divider"></div> -->

		<h1 class="main-title">Tra cứu cơ bản</h1>
		<h4 class="subtitle">
			Tại đây bạn có thể tìm kiếm điểm nguyện vọng 1, 2, 3 và môn chuyên
			của các trường qua từng năm mà không cần dò thủ công theo danh sách.
			<p style="font-weight: 400;">
				Chưa rõ? <a href="../docs_page/search_page.html" target="_blank">Đọc tài liệu &rarr;</a>
			</p>
		</h4>


		<div class="input-container">
			<input type="text" class="form-control" id="live-search" placeholder="Tìm kiếm...">
		</div>


		
		<div class="dropdown">
			<div class="school-type-container">
				<div class="school-type-select">
					<span class="select">Trường thường</span>
					<i class="fi fi-rr-caret-down"></i>
				</div>
				<div class="school-type-list"></div>
			</div>

			<div class="dropdown-container">
				<div class="dropdown-select">
					<span class="select">Năm 2021</span>
					<i class="fi fi-rr-caret-down"></i>
				</div>
				<div class="dropdown-list">
				</div>
			</div>

			</div>
		</div>

		
	</div>

	<h1 class="year-chosen"></h1>
	
	<div id="search-result"></div>

	<div id="footer-container"></div>

</body>

<script src="./js/main.js"></script>
<script src="../expand/js/create-lists.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
	$(function(){
		$("#header-container").load("../expand/header.html"); 
		$("#footer-container").load("../expand/footer.html"); 
		});
</script>
<script type="text/javascript">
	$(document).ready(function(){

		function liveSearch(){
			var year = (document.querySelector('.dropdown-select .select').innerHTML).replace("Năm ","");
			var schoolType = (document.querySelector('.school-type-select .select').innerHTML);
			if (schoolType=="Trường thường") {
				schoolType = "`truong`.`MA_LOAI` = 'L02' OR `truong`.`MA_LOAI` = 'L03'"
			} else {
				schoolType = "`truong`.`MA_LOAI` = " + `'${schoolTypesObj[schoolType]}'` + " AND `diem_chuan`.`MA_NV` LIKE '%\\_%'"
			}

			document.querySelector('.year-chosen').innerHTML = document.querySelector('.dropdown-select .select').innerHTML;
			var input = $(this).val();

			// alert(input);

			if (input != "") {
				$("#search-result").css("display","flex")
				$.ajax({

					url:"livesearch.php",
					method:"POST",
					data:{input:input, year:year, schoolType:schoolType},
					beforeSend:function() {
						$(function(){
							$("#search-result").load("../expand/loader.html"); 
						});
					},
					success:function(data){
						$("#search-result").html(data);
					}
				});
			} else if (input=="") {
				$.ajax({
					url:"livesearch.php",
					method:"POST",
					data:{input:'', year:year, schoolType:schoolType},
					beforeSend:function() {
						$(function(){
							$("#search-result").load("../expand/loader.html"); 
						});
					},
					success:function(data){
						$("#search-result").html(data);
					}
				});

			} else {
				$("#search-result").css("display","none");
			}
		}

		$("#live-search").keyup(liveSearch);
		$('#live-search').change(liveSearch)

	});
</script>
</html>