<?php 

include("../config/config.php");

$input = $_POST['input'];
$schoolType = $_POST['schoolType'];
$year = $_POST['year'];

// $query = "SELECT * FROM `search_score_{$year}` WHERE `TÊN TRƯỜNG` LIKE '%".$input."%'";
$query = <<<EOD
SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
FROM `diem_chuan` 
LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
WHERE (`truong`.`TEN_TRUONG` LIKE '%$input%' AND ($schoolType)
AND `diem_chuan`.`NAM_HOC` = $year);
EOD;


$result = mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0){
	$rawLst = array();

	while($row = mysqli_fetch_assoc($result)) {
		$rawLst[] = $row;
	}

	$datas = array();
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


	// print_r($datas);

	?>

	<link rel="stylesheet" type="text/css" href="./assets/css/table.css">

	<?php if ($schoolType == "`truong`.`MA_LOAI` = 'L02' OR `truong`.`MA_LOAI` = 'L03'") {?>

	
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
					$nv1 = $row[2]['NV1'];
					$nv2 = $row[2]['NV2'];
					$nv3 = $row[2]['NV3'];

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

		<script>
			document.querySelector('.search-table thead').classList.remove('switch-type')
			document.querySelector('.search-table tbody tr:last-of-type').classList.remove('switch-type')
			document.querySelectorAll('.search-table tbody tr td:first-of-type').forEach(i=>{
				i.classList.remove('switch-type')
			})
		</script>

	<?php
	} else {?>

		<style>
			tbody .first-name {
				border-top: 2px solid #006398;
			}

			tbody .first-name td:nth-child(2) {
				font-weight: 500;
			}
		</style>

		<table class="search-table">
			<thead>
				<tr>
					<th>STT</th>
					<th>TÊN TRƯỜNG</th>
					<th>TÊN QUẬN</th>
					<th>MÔN</th>
					<th>ĐIỂM NV1</th>
					<th>ĐIỂM NV2</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$stt = 1;
				foreach ($datas as $row) {
					$schoolname = $row[0];
					$district = $row[1];
					$subject = array();
					$nv1 = array();
					$nv2 = array();

					foreach ($row[2] as $key => $value) {			

						if (strpos($key, 'NV1_') !== false) {
							array_push($subject, substr($key,4));	
							array_push($nv1, $value);

						} if (strpos($key, 'NV2_') !== false) {
							array_push($nv2, $value);

						}
					}?>

					<tr class="first-name">
						<td><?php echo $stt ?></td>
						<td><?php echo $schoolname; ?></td>
						<td><?php echo $district; ?></td>
						<?php
						for ($i = 0; $i < sizeof($subject); $i++) {
							if ($i==0) {?>
								<td><?php echo $subject[$i]; ?></td>
								<td><?php echo $nv1[$i]; ?></td>
								<td><?php echo $nv2[$i]; ?></td>
							<?php
							} else {?>
								<td></td>
								<td></td>
								<td></td>
								<td><?php echo $subject[$i]; ?></td>
								<td><?php echo $nv1[$i]; ?></td>
								<td><?php echo $nv2[$i]; ?></td>
							<?php
							}
							?>

					</tr>
					<?php
					}
					$stt++;	
				}
				?>
			</tbody>

		</table>

		<script>

			document.querySelector('.search-table thead').classList.toggle('switch-type');
			document.querySelector('.search-table tbody tr:last-of-type').classList.toggle('switch-type');
			document.querySelectorAll('.search-table tbody tr td:first-of-type').forEach(i=>{
				i.classList.toggle('switch-type')
			});

		</script>
	<?php
	}

} else {
	echo "<h3 style='color:red; text-align:center;'>*Kết quả không khớp*</h3>";
}
	
?>