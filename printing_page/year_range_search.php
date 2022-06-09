<?php
    include("../config/config.php");
    $school = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    $query = <<<EOD
    SELECT `diem_chuan`.`NAM_HOC`, `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
    FROM `diem_chuan` 
    LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
    WHERE `TEN_TRUONG` LIKE '%$school%';
    EOD;

    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) > 0) {
        $datas = array();
        $datas2 = array();
        $count = 1;
        $schools = array();
        while($row = mysqli_fetch_assoc($result)) {
    
            if ($count == 1) {
                array_push($schools, $row['NAM_HOC'], $row['TEN_TRUONG'], $row['QUAN/HUYEN'], $row['DIEM']);
                $count++;

            } else if ($count == 2) {
                array_push($schools, $row['DIEM']);
                $count++;

            } else if ($count == 3) {
                array_push($schools, $row['DIEM']);
                $count= 1;
                array_push($datas, $schools);
                $schools = array();
            }
        }


        foreach ($datas as $item) {
            if ((int)$item[0] >= $start && (int)$item[0] <= $end) {
                array_push($datas2, $item);
            }
        }

        ?>

        <link rel="stylesheet" type="text/css" href="./assets/css/table.css">


        <table class="search-table">
            <thead>
                <tr>
                    <th>Năm</th>
                    <th>TÊN TRƯỜNG</th>
                    <th>TÊN QUẬN</th>
                    <th onclick="sortTable(3)">ĐIỂM NV1</th>
                    <th onclick="sortTable(4)">ĐIỂM NV2</th>
                    <th onclick="sortTable(5)">ĐIỂM NV3</th>
                </tr>
            </thead>
    
            <tbody>
                <?php

                foreach ($datas2 as $row) {
                    
                    $year = $row[0];
                    $schoolname = $row[1];
                    $district = $row[2];
                    $nv1 = $row[3];
                    $nv2 = $row[4];
                    $nv3 = $row[5];		
                    ?>

                    <tr>
                        <td><?php echo $year; ?></td>
                        <td><?php echo $schoolname; ?></td>
                        <td><?php echo $district; ?></td>
                        <td><?php echo $nv1; ?></td>
                        <td><?php echo $nv2; ?></td>
                        <td><?php echo $nv3; ?></td>
                    </tr>	
                    <?php
                } ?>
            </tbody>
    
        </table>
    <?php
}?>