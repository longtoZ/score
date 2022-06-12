<?php
    include("../config/config.php");
    $school = $_POST['school'];
    $year = $_POST['year'];
    $query = <<<EOD
    SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
    FROM `diem_chuan` 
    LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
    WHERE `MA_NV` = 'NV1' AND `NAM_HOC` = $year ORDER BY `DIEM` DESC
    EOD;

    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) > 0) {
        $datas = array();
        $count = 0;
        $current_pos = 1;
        $current = array();
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
                    $count++;
                    $count2++;
    
                } else if ($count2 == 2) {
                    array_push($schools2, $row2['DIEM']);
                    $count2++;
    
                } else if ($count2 == 3) {
                    array_push($schools2, $row2['DIEM']);
                    $count2 = 1;

                    if ($schools2[0] == $school) {
                        $current = [$current_pos, $schools2];
                    }
                    array_push($datas, $schools2);
                    $schools2 = array();
                }
            }	

            $current_pos++;
        }

        $highest = array_slice($datas, 0, 5, true);
        $lowest = array_slice($datas, -5, 5, true);
        // print_r($highest);
        // print_r($lowest);
        // print_r($current);


        ?>

        <link rel="stylesheet" type="text/css" href="./assets/css/table.css">

        <h2 style="text-align:center; margin-bottom: 30px; font-weight: 500;">Top 5 trường có điểm cao nhất và thấp nhất</h2>

        <table class="search-table" id="search-table-area">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>TÊN TRƯỜNG</th>
                    <th>TÊN QUẬN</th>
                    <th onclick="sortTable(3)">ĐIỂM NV1 </th>
				    <th onclick="sortTable(4)">ĐIỂM NV2 </th>
				    <th onclick="sortTable(5)">ĐIỂM NV3</th>
                </tr>
            </thead>
    
            <tbody>
                <?php

                    foreach ($highest as $key => $item) {
                        $stt = $key+1;
                        $schoolname = $item[0];
                        $district = $item[1];
                        $nv1 = $item[2];
                        $nv2 = $item[3];
                        $nv3 = $item[4];
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

                    <tr style="pointer-events: none">
                        <td style="height: 100px; border-left: 3px dotted var(--table-even-color); background-color: var(--second-primary-color);"></td>
                        <td style="height: 100px; border-left: 3px dotted var(--table-even-color); background-color: var(--second-primary-color);"></td>
                        <td style="height: 100px; border-left: 3px dotted var(--table-even-color); background-color: var(--second-primary-color);"></td>
                        <td style="height: 100px; border-left: 3px dotted var(--table-even-color); background-color: var(--second-primary-color);"></td>
                        <td style="height: 100px; border-left: 3px dotted var(--table-even-color); background-color: var(--second-primary-color);"></td>
                        <td style="height: 100px; border-left: 3px dotted var(--table-even-color); background-color: var(--second-primary-color);"></td>
                    </tr>
                    <?php
                    foreach ($lowest as $key => $item) {
                        $stt = $key+1;
                        $schoolname = $item[0];
                        $district = $item[1];
                        $nv1 = $item[2];
                        $nv2 = $item[3];
                        $nv3 = $item[4];
                        ?>
                        <tr>
                            <td style="color:red"><?php echo $stt; ?></td>
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

        <div class="content" style="font-weight: 500; font-size: 110%;">
            * Xếp hạng của trường (NV1 <?php echo $current[1][2]?>đ): <?php echo $current[0]?>/<?php echo $current_pos-1?>
        </div>
        <?php
    }
?>




