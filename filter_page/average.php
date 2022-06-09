<?php
include("../config/config.php");
$year = $_POST['year'];
$wish = $_POST['wish'];
$compare = $_POST['compare'];

// $query = "SELECT * FROM `search_score_{$year}` ORDER BY `{$wish}` DESC";
$query = <<<EOD
SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
FROM `diem_chuan` 
LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
WHERE `NAM_HOC` = $year AND `MA_NV` = '$wish' ORDER BY `DIEM` DESC;
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
		WHERE (`truong`.`MA_TRUONG` = '{$row['MA_TRUONG']}' AND `diem_chuan`.`NAM_HOC` = $year)
		EOD;

		$result2 = mysqli_query($con,$query2);

		$count2 = 1;
		$schools2 = array();
        while($row2 = mysqli_fetch_assoc($result2)) {

			if ($count2 == 1) {
				array_push($schools2, $row2['TEN_TRUONG'], $row2['QUAN/HUYEN'], $row2['DIEM']);
                if ($wish == 'NV1') {
                    $total += $row2['DIEM'];
                }
                $count++;
				$count2++;

			} else if ($count2 == 2) {
				array_push($schools2, $row2['DIEM']);
                if ($wish == 'NV2') {
                    $total += $row2['DIEM'];
                }
				$count2++;

			} else if ($count2 == 3) {
				array_push($schools2, $row2['DIEM']);
                if ($wish == 'NV3') {
                    $total += $row2['DIEM'];
                }
				$count2 = 1;
				array_push($datas, $schools2);
				$schools2 = array();
			}

		}	
	}


    // while($row = mysqli_fetch_assoc($result)) {
    //     $total += $row[$wish];
    //     $count += 1;
    // }

    
    $average = round($total/$count, 2);
    ?>

    <script>
        document.querySelector('.filter-average-title').innerHTML = 'Trung bình: ' + <?php echo $average ?>;
    </script>

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

            $stt = 1;
            foreach ($datas as $row) {

                $schoolname = $row[0];
                $district = $row[1];
                $nv1 = $row[2];
                $nv2 = $row[3];
                $nv3 = $row[4];	

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
