<?php
include("../config/config.php");
$input = $_POST['input'];
$year = $_POST['year'];
$wish = $_POST['wish'];

$query = "SELECT * FROM `search_score_{$year}` ORDER BY `{$wish}` DESC LIMIT {$input}";

$result = mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0){?>



	<link rel="stylesheet" type="text/css" href="./assets/css/table.css">


	<table class="search-table">
		<thead>
			<tr>
				<th>STT</th>
				<th>TÊN TRƯỜNG</th>
				<th>TÊN QUẬN</th>
				<th onclick="sortTable(3)">ĐIỂM NV1  ⇩</th>
				<th onclick="sortTable(4)">ĐIỂM NV2  ⇩</th>
				<th onclick="sortTable(5)">ĐIỂM NV3  ⇩</th>
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

				<?php
				if (substr($wish, -1) == "1") { ?>
					<tr>
						<td><?php echo $stt; ?></td>
						<td><?php echo $schoolname; ?></td>
						<td><?php echo $district; ?></td>
						<td style="background-color: #FFF9C2"><?php echo $nv1; ?></td>
						<td><?php echo $nv2; ?></td>
						<td><?php echo $nv3; ?></td>
					</tr>	

				<?php
				} else if (substr($wish, -1) == "2") { ?>
					<tr>
						<td><?php echo $stt; ?></td>
						<td><?php echo $schoolname; ?></td>
						<td><?php echo $district; ?></td>
						<td><?php echo $nv1; ?></td>
						<td style="background-color: #FFF9C2"><?php echo $nv2; ?></td>
						<td><?php echo $nv3; ?></td>
					</tr>	
					<?php
				} else { ?>
					<tr>
						<td><?php echo $stt; ?></td>
						<td><?php echo $schoolname; ?></td>
						<td><?php echo $district; ?></td>
						<td><?php echo $nv1; ?></td>
						<td><?php echo $nv2; ?></td>
						<td style="background-color: #FFF9C2"><?php echo $nv3; ?></td>
					</tr>	
					<?php
				}
				?>

				<?php	
			}
			?>
		</tbody>

	</table>

	<script src="./js/sort.js"></script>

<?php
} else {
    echo "<h3 style='color:red; text-align:center;'>*Kết quả không khớp*</h3>";
}
?>