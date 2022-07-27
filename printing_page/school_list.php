<?php
    include("../config/config.php");
    $school = mysqli_real_escape_string($con, $_POST['school']);
    $district = $_POST['district'];
    $year = $_POST['year'];
    $type = $_POST['type'];

    $query = <<<EOD
    SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
    FROM `diem_chuan` 
    LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
    WHERE `QUAN/HUYEN` LIKE '%$district%' AND `NAM_HOC` = $year AND `MA_NV` = 'NV1' ORDER BY `DIEM` DESC
    EOD;

    $result = mysqli_query($con,$query);
    $datas = array();

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

            // print_r($datas);
            
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

        if ($type=='table' || ($type=='chart' && $district=='')) {?>
            <link rel="stylesheet" type="text/css" href="./assets/css/table.css">

            <?php if ($compare == "above") {?>
                <h2 style="text-align:center; margin: 30px 0; font-weight: 500; color:#009879"></h2>
            <?php
            } else {?>
                <h2 style="text-align:center; margin: 30px 0; font-weight: 500; color:goldenrod"></h2>
            <?php
            }
            ?>
            
            <script src="./js/sort.js"></script>

            <table class="search-table" id="search-table-school-list">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>TÊN TRƯỜNG</th>
                        <th>TÊN QUẬN</th>
                        <th onclick="sortTable(3, 'search-table-school-list')">ĐIỂM NV1  ⇩</th>
                        <th onclick="sortTable(4, 'search-table-school-list')">ĐIỂM NV2  ⇩</th>
                        <th onclick="sortTable(5, 'search-table-school-list')">ĐIỂM NV3  ⇩</th>
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
                                    document.querySelector('.comparison-table h2').innerHTML = "Trường xếp hạng <?php echo $current[0]; ?>, thuộc nhóm điểm trên trung bình: <?php echo $average; ?>đ"
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
                                    document.querySelector('.comparison-table h2').innerHTML = "Trường xếp hạng <?php echo $current[0]; ?>, thuộc nhóm điểm dưới trung bình: <?php echo $average; ?>đ"
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
        } else {?>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

            <div class="bar-horizontal" style="height: 470px; width:auto; display:block;">
                <canvas id="myChartBarcomparison"></canvas>  
            </div>

            <script>
                var textColor = '#8a8a8a'
                var defaultBorder = 6
                var col1 = 'rgb(0, 255, 171)'
                var col2 = 'rgb(20, 195, 142)'
                var col3 = 'rgb(184, 241, 176)'

                var datas_d = []
                var schools = []
                var nv1 = []
                var nv2 = []
                var nv3 = []

                for (let i of <?php echo json_encode($datas); ?>) {
                    datas_d.push(i)
                    schools.push(i[0])
                    nv1.push(i[2]['NV1'])
                    nv2.push(i[2]['NV2'])
                    nv3.push(i[2]['NV3'])
                }

                var bg_nv1 = Array(schools.length).fill(col1)
                var bg_nv2 = Array(schools.length).fill(col2)
                var bg_nv3 = Array(schools.length).fill(col3)


            </script>

            <script>
                var textColor = '#8a8a8a'
                var defaultBorder = 6
                var ctx_bar = document.getElementById('myChartBarcomparison');
                var myChartcomparison = new Chart(ctx_bar, {
                    type: 'bar',
                    data: {
                        labels: schools,
                        datasets: [{
                                label: 'NV1',
                                data: nv1,
                                borderRadius: defaultBorder,
                                backgroundColor: bg_nv1
                            },
                            {
                                label: 'NV2',
                                data: nv2,
                                hidden:false,
                                borderRadius: defaultBorder,
                                backgroundColor: bg_nv2
                            },
                            {
                                label: 'NV3',
                                data: nv3,
                                hidden:false,
                                borderRadius: defaultBorder,
                                backgroundColor: bg_nv3
                            }
                    ]
                    },
                    options: {
                        maintainAspectRatio: false,
                        responsive: true,
                        indexAxis: 'y',
                        plugins: {
                            title: {
                                display: true,
                                text: "<?php echo $district ?> " + "<?php echo $year ?>",
                                color: textColor
                            }
                        },
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Điểm',
                                    color: textColor
                                }
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: 'Trường',
                                    color: textColor
                                },
                            }
                        }
                    } 
                });
            </script>

        <?php
        }

    } else {?>
        <div></div>
    <?php
    }
    ?>






