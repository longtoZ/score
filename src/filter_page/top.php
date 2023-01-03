<?php
include("../config/config.php");
$top= $_POST['top'];
$wish = $_POST['wish'];
$district = $_POST['district'];
$order = $_POST['order'];

$query = <<<EOD
SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`NAM_HOC` ,`diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM` 
FROM `diem_chuan` 
LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG` 
WHERE `diem_chuan`.`MA_NV` IN ('NV1', 'NV2', 'NV3') AND ($district) AND `NAM_HOC` <> 2021;
EOD;

$result = mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0){

	function calcScore(float $score, int $year) {
		$percentage = ($year <= 2020) ? ($score/50)*100 : ($score/30)*100;
		return $percentage;
	}
	
	$datas = array();
	while($row = mysqli_fetch_assoc($result)) {
		$datas[] = $row;
	}

	$calc = array();
	for ($i = 0; $i < sizeof($datas); $i++) {
		$school = $datas[$i];
		$calc[$school['MA_TRUONG']]['NV1'] = array();	
		$calc[$school['MA_TRUONG']]['NV2'] = array();		
		$calc[$school['MA_TRUONG']]['NV3'] = array();	
		
		$calc[$school['MA_TRUONG']]['INFO'] = array($school['TEN_TRUONG'], $school['QUAN/HUYEN']);
	}

	for ($i = 0; $i < sizeof($datas); $i++) {
		$school = $datas[$i];
		if ($school['DIEM'] != 0) {
			array_push($calc[$school['MA_TRUONG']][$school['MA_NV']], calcScore($school['DIEM'], $school['NAM_HOC']));
		}
		
	}
	
	// print_r($calc);

	$full = array();
	foreach ($calc as $value) {
		$full[] = array($value['INFO'][0], $value['INFO'][1], 
		number_format(array_sum($value['NV1'])/count($value['NV1']), 2, '.', ''),
		number_format(array_sum($value['NV2'])/count($value['NV2']), 2, '.', ''),
		number_format(array_sum($value['NV3'])/count($value['NV3']), 2, '.', ''));
	}

	$order_display = ($order=="DESC") ? "Cao nhất" : "Thấp nhất";

	?>
	<link rel="stylesheet" type="text/css" href="./assets/css/table.css">
	<h1 style="text-align:center; margin-bottom: 30px; font-weight: 500">Top <?php echo $top;?> <?php echo $order_display?></h1>

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

			$stt = 1;
			
			foreach ($full as $row) {

				$schoolname = $row[0];
				$district = $row[1];
				$nv1 = number_format($row[2]*0.3, 2, '.', '');
				$nv2 = number_format($row[3]*0.3, 2, '.', '');
				$nv3 = number_format($row[4]*0.3, 2, '.', '');	

				
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
			}

			?>
		</tbody>

	</table>

	<script src="./js/sort.js"></script>
	<script src="./js/table-type.js"></script>
	<script>

		sortTable(<?php echo (int)substr($wish,-1) + 2;?>)
		<?php 
		if ($order=='ASC') {?>
			document.querySelectorAll('.search-table thead tr th')[<?php echo (int)substr($wish,-1) + 2;?>].click()
		<?php
		}?>

		var lst =document.querySelectorAll('.search-table tr')
		var pos = <?php echo $top;?>

		for (i=pos+1; i<lst.length; i++) {
			lst[i].remove()
		}

	</script>

	<?php 
	} else {
		echo "<h3 style='color:red; text-align:center;'>*Kết quả không khớp*</h3>";
	}

	?>