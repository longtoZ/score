<?php
include("../config/config.php");
$year = $_POST['year'];
$wish = $_POST['wish'];
$district = $_POST['district'];
$compare = $_POST['compare'];

// $query = "SELECT * FROM `search_score_{$year}` ORDER BY `{$wish}` DESC";
$query = <<<EOD
SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
FROM `diem_chuan` 
LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
WHERE `NAM_HOC` = $year AND `MA_NV` = '$wish' AND `QUAN/HUYEN` LIKE '%$district' ORDER BY `DIEM` DESC;
EOD;

$result = mysqli_query($con,$query);


if (mysqli_num_rows($result) > 0) {
	$datas = array();
    $total = 0;
    $count = 0;
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
				array_push($datas, $schools);
				$schools = array();
				$code = '';

                $count++;
			}
	
			if ($i == sizeof($rawLst)-1) {
				array_push($datas, $schools);
				$schools = array();
				$code = '';

                $count++;
			}
		}
	}

    
    $average = round($total/$count, 2);
    ?>

    <script>
        document.querySelector('.filter-average-title').innerHTML = 'Trung bình: ' + <?php echo $average ?>;
    </script>

    <link rel="stylesheet" type="text/css" href="./assets/css/table.css">

    <?php if ($compare == "above") {?>
	    <h1 style="text-align:center; margin-bottom: 30px; font-weight: 500">Trên trung bình: <?php echo $average; ?></h1>
    <?php
    } else {?>
	    <h1 style="text-align:center; margin-bottom: 30px; font-weight: 500">Dưới trung bình: <?php echo $average; ?></h1>
    <?php
    }
    ?>


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
            foreach ($datas as $row) {

				$schoolname = $row[0];
				$district = $row[1];
				$nv1 = $row[2]['NV1'];
				$nv2 = $row[2]['NV2'];
				$nv3 = $row[2]['NV3'];

                if ($compare == "above") {
                    if (substr($wish, -1) == "1" && $nv1 >= $average) { ?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><?php echo $schoolname; ?></td>
                            <td><?php echo $district; ?></td>
                            <td style="background-color: var(--row-hover-color);color: #000000;"><?php echo $nv1; ?></td>
                            <td><?php echo $nv2; ?></td>
                            <td><?php echo $nv3; ?></td>
                        </tr>	
    
                    <?php
                    } else if (substr($wish, -1) == "2" && $nv2 >= $average) { ?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><?php echo $schoolname; ?></td>
                            <td><?php echo $district; ?></td>
                            <td><?php echo $nv1; ?></td>
                            <td style="background-color: var(--row-hover-color);color: #000000;"><?php echo $nv2; ?></td>
                            <td><?php echo $nv3; ?></td>
                        </tr>	
                        <?php
                    } else if (substr($wish, -1) == "3" && $nv3 >= $average) { ?>
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
                } else if ($compare == "below") {
                    if (substr($wish, -1) == "1" && $nv1 <= $average) { ?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><?php echo $schoolname; ?></td>
                            <td><?php echo $district; ?></td>
                            <td style="background-color: var(--row-hover-color);color: #000000;"><?php echo $nv1; ?></td>
                            <td><?php echo $nv2; ?></td>
                            <td><?php echo $nv3; ?></td>
                        </tr>	
    
                    <?php
                    } else if (substr($wish, -1) == "2" && $nv2 <= $average) { ?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><?php echo $schoolname; ?></td>
                            <td><?php echo $district; ?></td>
                            <td><?php echo $nv1; ?></td>
                            <td style="background-color: var(--row-hover-color);color: #000000;"><?php echo $nv2; ?></td>
                            <td><?php echo $nv3; ?></td>
                        </tr>	
                        <?php
                    } else if (substr($wish, -1) == "3" && $nv3 <= $average) { ?>
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
