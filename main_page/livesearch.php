<?php 

include("../config/config.php");
if (isset($_POST['input'], $_POST['year'])) {

	$input = $_POST['input'];
	$year = $_POST['year'];

	$query = "SELECT * FROM `search_score_{$year}` WHERE `TÊN TRƯỜNG` LIKE '%".$input."%'";

	$result = mysqli_query($con,$query);

	if (mysqli_num_rows($result) > 0){?>

		<link rel="stylesheet" type="text/css" href="./assets/css/table.css">
		<link rel="stylesheet" type="text/css" href="../expand/css/style.css">

		<table class="search-table">
			<thead>
				<tr>
					<th>STT</th>
					<th>TÊN TRƯỜNG</th>
					<th>TÊN QUẬN</th>
					<th>ĐIỂM NV1</th>
					<th>ĐIỂM NV2</th>
					<th>ĐIỂM NV3</th>
				</tr>
			</thead>

			<tbody>
				<?php

				while ($row=mysqli_fetch_assoc($result)) {

					$stt = $row['STT'];
					$schoolname = $row['TÊN TRƯỜNG'];
					$district = $row['TÊN QUẬN'];
					$nv1 = $row['ĐIỂM NV1'];
					$nv2 = $row['ĐIỂM NV2'];
					$nv3 = $row['ĐIỂM NV3'];	

					?>

					<tr>
						<td><?php echo $stt; ?></td>
						<td><?php echo $schoolname; ?></td>
						<td><?php echo $district; ?></td>
						<td><?php echo $nv1; ?></td>
						<td><?php echo $nv2; ?></td>
						<td><?php echo $nv3; ?></td>
					</tr>	

					<?php	
				}
				?>
			</tbody>

		</table>

	<?php 
	} else {
		echo "<h3 style='color:red; text-align:center;'>*Kết quả không khớp*</h3>";
	}
}
?>