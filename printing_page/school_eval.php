<?php
    include("../config/config.php");
    $school = $_POST['school'];
    $year = $_POST['year'];
    $top = $_POST['top'];
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

                    if ($schools[0] == $school) {
                        $current = [$current_pos, $schools];
                    }

                    array_push($datas, $schools);
                    $schools = array();
                    $code = '';
                }
        
                if ($i == sizeof($rawLst)-1) {

                    if ($schools[0] == $school) {
                        $current = [$current_pos, $schools];
                    }

                    array_push($datas, $schools);
                    $schools = array();
                    $code = '';
                }
            }

            // print_r($datas);

            $current_pos++;
        }

        $highest = array_slice($datas, 0, $top, true);
        $lowest = array_slice($datas, -$top, $top, true);
        // print_r($highest);
        // print_r($lowest);
        // print_r($current);?>

        <link rel="stylesheet" type="text/css" href="./assets/css/table.css">

        <h2 style="text-align:center; margin-bottom: 30px; font-weight: 500;">Top <?php echo $top; ?> trường có điểm cao nhất và thấp nhất</h2>

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
                        $nv1 = $item[2]['NV1'];
                        $nv2 = $item[2]['NV2'];
                        $nv3 = $item[2]['NV3'];	
                        if ($schoolname == $school) {?>
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
                        $nv1 = $item[2]['NV1'];
                        $nv2 = $item[2]['NV2'];
                        $nv3 = $item[2]['NV3'];	
                        if ($schoolname == $school) {?>
                            <tr style="background-color: var(--row-hover-color)">
                                <td style="font-weight: bold; color:red"><?php echo $stt; ?></td>
                                <td style="font-weight: 500;"><?php echo $schoolname; ?></td>
                                <td style="font-weight: 500;"><?php echo $district; ?></td>
                                <td style="font-weight: 500;"><?php echo $nv1; ?></td>
                                <td style="font-weight: 500;"><?php echo $nv2; ?></td>
                                <td style="font-weight: 500;"><?php echo $nv3; ?></td>
                            </tr>	
                        <?php 
                        } else {?>
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
                    }
                ?>
            </tbody>
    
        </table>

        <div class="content" style="font-weight: 500; font-size: 110%;">
            * Xếp hạng của trường (NV1 <?php echo $current[1][2]['NV1']?>đ): <?php echo $current[0]?>/<?php echo $current_pos-1?>
        </div>

        <script>
            var score_nv1 = parseInt('<?php echo $current[1][2]['NV1']?>')
        </script>
    <?php
    } else {?>
        <h2 style="text-align:center; margin-bottom: 30px; font-weight: 500;">Top</h2>
        <table class="search-table" id="search-table-area"></table>
    <?php
    }
    ?>