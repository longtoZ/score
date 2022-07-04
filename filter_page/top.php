<?php
include("../config/config.php");
$input = $_POST['input'];
$year = $_POST['year'];
$wish = $_POST['wish'];
$district = $_POST['district'];
$order = $_POST['order'];

$query = <<<EOD
SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
FROM `diem_chuan` 
LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
WHERE `NAM_HOC` = $year AND `MA_NV` = '$wish' AND `QUAN/HUYEN` LIKE '%$district' ORDER BY `DIEM` $order LIMIT $input;
EOD;

$result = mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0){
	$datas = array();
	while($row = mysqli_fetch_assoc($result)) {

		$query2 = <<<EOD
		SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM` 
		FROM `diem_chuan` 
		LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG` 
		WHERE (`truong`.`MA_TRUONG` = '{$row['MA_TRUONG']}' AND `diem_chuan`.`NAM_HOC` = $year AND (`truong`.`MA_LOAI` = 'L02' OR `truong`.`MA_LOAI` = 'L03'))
		EOD;

		$result2 = mysqli_query($con,$query2);

		$rawLst = array();

		while($row = mysqli_fetch_assoc($result2)) {
			$rawLst[] = $row;
		}
	
		$code = '';
		$schools = array();
	
		for ($i = 0; $i < sizeof($rawLst); $i++) {
	
			if ($code == '') {
	
				if ($i != 0) {
					array_push($schools, $rawLst[$i-1]['TEN_TRUONG'], $rawLst[$i-1]['QUAN/HUYEN']);
					$schools[2][$rawLst[$i-1]['MA_NV']] = $rawLst[$i-1]['DIEM'];
					$schools[2][$rawLst[$i]['MA_NV']] = $rawLst[$i]['DIEM'];
					$code = $rawLst[$i-1]['MA_TRUONG'];
	
				} else {
					array_push($schools, $rawLst[$i]['TEN_TRUONG'], $rawLst[$i]['QUAN/HUYEN']);
					$schools[2][$rawLst[$i]['MA_NV']] = $rawLst[$i]['DIEM'];
					$code = $rawLst[$i]['MA_TRUONG'];
				}
				
			} else if ($rawLst[$i]['MA_TRUONG'] == $code) {
				$schools[2][$rawLst[$i]['MA_NV']] = $rawLst[$i]['DIEM'];
			} else if ($rawLst[$i]['MA_TRUONG'] != $code){
				array_push($datas, $schools);
				$schools = array();
				$code = '';
			}
	
			if ($i == sizeof($rawLst)-1) {
				array_push($datas, $schools);
				$schools = array();
				$code = '';
			}
		}
	}

	$arrow = "⇩";

	if ($order == "ASC") {
		$arrow = "⇧";
	}

	$ranking = $order=="ASC" ? "Thấp nhất" : "Cao nhất";
	?>



	<link rel="stylesheet" type="text/css" href="./assets/css/table.css">

	<h1 style="text-align:center; margin-bottom: 30px; font-weight: 500">Top <?php echo $input; ?> <?php echo $ranking; ?></h1>


	<table class="search-table">
		<thead>
			<tr>
				<th>STT</th>
				<th>TÊN TRƯỜNG</th>
				<th>TÊN QUẬN</th>
				<th onclick="sortTable(3)">ĐIỂM NV1  <?php echo $arrow; ?></th>
				<th onclick="sortTable(4)">ĐIỂM NV2  <?php echo $arrow; ?></th>
				<th onclick="sortTable(5)">ĐIỂM NV3  <?php echo $arrow; ?></th>
			</tr>
		</thead>

		<tbody>
			<?php

			$stt = 1;
			foreach ($datas as $row) {

				$schoolname = $row[0];
				$district = $row[1];
				$nv1 = $row[2]['NV1'];
				$nv2 = $row[2]['NV2'];
				$nv3 = $row[2]['NV3'];

				if (substr($wish, -1) == "1") { ?>
					<tr>
						<td><?php echo $stt; ?></td>
						<td><?php echo $schoolname; ?></td>
						<td><?php echo $district; ?></td>
						<td style="background-color: var(--row-hover-color);color: #000000;"><?php echo $nv1; ?></td>
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
						<td style="background-color: var(--row-hover-color);color: #000000;"><?php echo $nv2; ?></td>
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
						<td style="background-color: var(--row-hover-color);color: #000000;"><?php echo $nv3; ?></td>
					</tr>	
					<?php
				}

				$stt++;
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