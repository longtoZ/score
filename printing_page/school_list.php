<?php
    include("../config/config.php");
    $school = $_POST['school'];
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
                    $count++;
                    $count2++;
    
                } else if ($count2 == 2) {
                    array_push($schools2, $row2['DIEM']);
                    $count2++;
    
                } else if ($count2 == 3) {
                    array_push($schools2, $row2['DIEM']);
                    $count2 = 1;

                    array_push($datas, $schools2);
                    $schools2 = array();
                }
            }	

        }

        if ($type=='table') {?>
            <script>console.log('<?php echo $type ?>')</script>
            <link rel="stylesheet" type="text/css" href="./assets/css/table.css">
            
            <script src="./js/sort.js"></script>

            <table class="search-table" id="search-table-area">
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

                        if ($schoolname == $school) {?>
                            <tr style="background-color: var(--row-hover-color)">
                                <td style="font-weight: 500;"><?php echo $stt; ?></td>
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
                    } 
                    ?>
                </tbody>
        
            </table>
        <?php
        } else {?>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

            <div class="bar-horizontal" style="height: 470px; width:auto; margin: 0 30px; display:block;">
                <canvas id="myChartBarComparision"></canvas>  
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
                    nv1.push(i[2])
                    nv2.push(i[3])
                    nv3.push(i[4])
                }

                var bg_nv1 = Array(schools.length).fill(col1)
                var bg_nv2 = Array(schools.length).fill(col2)
                var bg_nv3 = Array(schools.length).fill(col3)


            </script>

            <script>
                var textColor = '#8a8a8a'
                var defaultBorder = 6
                var ctx_bar = document.getElementById('myChartBarComparision');
                var myChartComparision = new Chart(ctx_bar, {
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
                                hidden:true,
                                borderRadius: defaultBorder,
                                backgroundColor: bg_nv2
                            },
                            {
                                label: 'NV3',
                                data: nv3,
                                hidden:true,
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

    }
?>




