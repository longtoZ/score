<?php
include("../config/config.php");
$school = $_POST['school'];
$year = $_POST['year'];
$district = $_POST['district'];

// $query = "SELECT * FROM `search_score_{$year}` ORDER BY `{$wish}` DESC";
$query = <<<EOD
SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
FROM `diem_chuan` 
LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
WHERE `NAM_HOC` = $year AND `QUAN/HUYEN` LIKE '%$district' AND `MA_NV` = 'NV1' ORDER BY `DIEM` DESC;
EOD;

$result = mysqli_query($con,$query);


if (mysqli_num_rows($result) > 0) {
	$datas = array();
    $total = 0;
    $count = 0;
    $current_pos = 1;
    $current = array();
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

                if ($rawLst[$i]['MA_NV'] == "NV1") {
                    $total += $rawLst[$i]['DIEM'];
                }
	
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

                if ($schools[0] == $school) {
                    $current = [$current_pos, $schools[2]['NV1']];
                }

				array_push($datas, $schools);
				$schools = array();
				$code = '';

                $count++;
			}
	
			if ($i == sizeof($rawLst)-1) {

                if ($schools[0] == $school) {
                    $current = [$current_pos, $schools[2]['NV1']];
                }

				array_push($datas, $schools);
				$schools = array();
				$code = '';

                $count++;
			}
		}

        $current_pos++;
	}
    
    if (sizeof($current) > 1) {
        $score = $current[1];
    } else {
        $score = 999;
    }

    $compare = '';    
    $average = round($total/$count, 2);

    if ($score >= $average) {
        $compare = 'above';
    } else {
        $compare = 'below';
    }

    ?>

    <link rel="stylesheet" type="text/css" href="./assets/css/table.css">

    <?php if ($compare == "above") {?>
	    <h2 style="text-align:center; margin: 30px 0; font-weight: 500; color:#009879"></h2>
    <?php
    } else {?>
	    <h2 style="text-align:center; margin: 30px 0; font-weight: 500; color:goldenrod"></h2>
    <?php
    }
    ?>


	<table class="search-table" id="search-table-average">
		<thead>
			<tr>
				<th>STT</th>
				<th>TÊN TRƯỜNG</th>
				<th onclick="sortTableChar(2, 'search-table-average')">TÊN QUẬN</th>
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

                if ($compare == "above" && $nv1 >= $average) {
                    if ($schoolname == $school) {
                        $current[0] = $stt;
                        ?>
                        
                        <script>
                            document.querySelector('.average-table h2').innerHTML = "Trường xếp hạng <?php echo $current[0]; ?>, thuộc nhóm trên trung bình: <?php echo $average; ?>"
                        </script>

                        <tr style="background-color: var(--row-hover-color)">
                            <td style="font-weight: bold;"><?php echo $stt; ?></td>
                            <td style="font-weight: 500;"><?php echo $schoolname; ?></td>
                            <td style="font-weight: 500;"><?php echo $district; ?></td>
                            <td style="font-weight: 500;"><?php echo $nv1; ?></td>
                            <td style="font-weight: 500;"><?php echo $nv2; ?></td>
                            <td style="font-weight: 500;"><?php echo $nv3; ?></td>
                        </tr>	
                    <?php 
                    } else {?>
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
    
                    $stt++;
                } else if ($compare == "below" && $nv1 <= $average) {
                    if ($schoolname == $school) {
                        $current[0] = $stt;
                        ?>

                        <script>
                            document.querySelector('.average-table h2').innerHTML = "Trường xếp hạng <?php echo $current[0]; ?>, thuộc nhóm dưới trung bình: <?php echo $average; ?>"
                        </script>

                        <tr style="background-color: var(--row-hover-color)">
                            <td style="font-weight: bold; color:goldenrod"><?php echo $stt; ?></td>
                            <td style="font-weight: 500;"><?php echo $schoolname; ?></td>
                            <td style="font-weight: 500;"><?php echo $district; ?></td>
                            <td style="font-weight: 500;"><?php echo $nv1; ?></td>
                            <td style="font-weight: 500;"><?php echo $nv2; ?></td>
                            <td style="font-weight: 500;"><?php echo $nv3; ?></td>
                        </tr>	
                    <?php 
                    } else {?>
                        <tr>
                            <td style="color:goldenrod"><?php echo $stt; ?></td>
                            <td><?php echo $schoolname; ?></td>
                            <td><?php echo $district; ?></td>
                            <td><?php echo $nv1; ?></td>
                            <td><?php echo $nv2; ?></td>
                            <td><?php echo $nv3; ?></td>
                        </tr>	
                    <?php
                    }
                    $stt++;
                }
			}
			?>
		</tbody>

	</table>

    
<?php
} else {
    echo "<h3 style='color:red; text-align:center;'>*Kết quả không khớp*</h3>";
}
?>
