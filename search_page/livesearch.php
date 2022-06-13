<?php 

include("../config/config.php");
if (isset($_POST['input'], $_POST['year'])) {

	$input = $_POST['input'];
	$year = $_POST['year'];

	// $query = "SELECT * FROM `search_score_{$year}` WHERE `TÊN TRƯỜNG` LIKE '%".$input."%'";
	$query = <<<EOD
	SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
	FROM `diem_chuan` 
	LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
	WHERE (`truong`.`TEN_TRUONG` LIKE '%$input%' AND `diem_chuan`.`NAM_HOC` = $year);
	EOD;


	$result = mysqli_query($con,$query);

	if (mysqli_num_rows($result) > 0){
		$datas = array();
		$count = 1;
		$schools = array();
        while($row = mysqli_fetch_assoc($result)) {

			if ($count == 1) {
				array_push($schools, $row['TEN_TRUONG'], $row['QUAN/HUYEN'], $row['DIEM']);
				$count++;

			} else if ($count == 2) {
				array_push($schools, $row['DIEM']);
				$count++;

			} else if ($count == 3) {
				array_push($schools, $row['DIEM']);
				$count = 1;
				array_push($datas, $schools);
				$schools = array();
			}

		}

		?>

		<link rel="stylesheet" type="text/css" href="./assets/css/table.css">

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
				$stt = 1;
				foreach ($datas as $row) {
					$schoolname = $row[0];
					$district = $row[1];
					$nv1 = $row[2];
					$nv2 = $row[3];
					$nv3 = $row[4];	

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
					$stt++;	
				}
				?>
			</tbody>

		</table>

	<?php 
    } else {
		echo "<h3 style='color:red; text-align:center;'>*Kết quả không khớp*</h3>";
	}
	

} else {
	echo "<h3 style='color:red; text-align:center;'>*Kết quả không khớp*</h3>";
}

?>

<!-- SELECT `diem_chuan`.`NAM_HOC`, `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
FROM `diem_chuan` 
LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
WHERE (`truong`.`TEN_TRUONG` LIKE '%nguyen%' AND `diem_chuan`.`NAM_HOC` = 2021); -->