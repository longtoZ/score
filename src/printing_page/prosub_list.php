<?php
include("../config/config.php");
$year = $_POST['year'];
$school = mysqli_real_escape_string($con, $_POST['school']);
$orgSubject = $_POST['orgSubject'];
$subject = $_POST['subject'];
$type = $_POST['type'];
$column = explode(",", $_POST['column']);

$query = <<<EOD
SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
FROM `diem_chuan` 
LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
WHERE `NAM_HOC` = $year AND `MA_NV` = '$subject'
ORDER BY `DIEM` DESC
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
        WHERE (`truong`.`MA_TRUONG` = '{$row['MA_TRUONG']}' AND `diem_chuan`.`NAM_HOC` = $year AND (`truong`.`MA_LOAI` = 'L02' OR `truong`.`MA_LOAI` = 'L01'))
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
        

    }

    if ($type=='table') {?>
        <link rel="stylesheet" type="text/css" href="./assets/css/table.css">

        <script src="./js/sort.js"></script>

        <h2 style="text-align:center; margin: 30px 0; font-weight: 500; color:#006398"></h2>

        <table class="search-table" id='prosub-table-list'>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>TÊN TRƯỜNG</th>
                    <th>TÊN QUẬN</th>
                    <th onclick="sortTable(3, 'prosub-table-list')">ĐIỂM <?php echo $column[0] ?> ⇩</th>
                    <th onclick="sortTable(4, 'prosub-table-list')">ĐIỂM <?php echo $column[1] ?> ⇩</th>

                </tr>
            </thead>

            <tbody>
                <?php

                $stt = 1;

                foreach ($datas as $row) {
                    
                    $schoolname = $row[0];
                    $district = $row[1];
                    $nv1 = $row[2][$column[0]];
                    $nv2 = $row[2][$column[1]];

                    if ($schoolname == $school) {
                        ?>

                        <script>
                            document.querySelector('.prosub-table h2').innerHTML = "Trường xếp hạng <?php echo $stt; ?> trong các trường có lớp chuyên"
                        </script>

                        <tr style="background-color: var(--row-hover-color)">
                            <td style="font-weight: bold;"><?php echo $stt; ?></td>
                            <td style="font-weight: 500;"><?php echo $schoolname; ?></td>
                            <td style="font-weight: 500;"><?php echo $district; ?></td>
                            <td style="font-weight: 500;"><?php echo $nv1; ?></td>
                            <td style="font-weight: 500;"><?php echo $nv2; ?></td>
                        </tr>	
                    <?php 
                    } else {?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><?php echo $schoolname; ?></td>
                            <td><?php echo $district; ?></td>
                            <td><?php echo $nv1; ?></td>
                            <td><?php echo $nv2; ?></td>
                        </tr>	
                    <?php
                    }

                    $stt++;
                }
                
                ?>
            </tbody>

        </table>

        <script>
            document.querySelector('.prosub-table .search-table thead').classList.toggle('switch-type');
            document.querySelector('.prosub-table .search-table tbody tr:last-of-type').classList.toggle('switch-type');
            document.querySelectorAll('.prosub-table .search-table tbody tr td:first-of-type').forEach(i=>{
                i.classList.toggle('switch-type')
            });
        </script>
    <?php
    } else {?>

        <div id="prosubComparisonGraph">

            <div class="bar-graph">
                <canvas id="myChartProsubComparison"></canvas>  
            </div>

            <style>
                .bar-graph {
                    height: 470px;
                    width:100%
                }

                @media only screen and (max-width: 46.1875em) {
                    .bar-graph {
                        width: 95%;
                    }
                }
                
            </style>

            <script>
                function randomRGB() {
                    return (Math.floor(Math.random() * 255) + 1).toString();
                }
                var datas_d = []
                var schools = []
                var nv1 = []
                var nv2 = []


                for (let i of <?php echo json_encode($datas); ?>) {
                    if (i[2]['<?php echo $subject; ?>'] !== undefined) {
                        datas_d.push(i)
                        schools.push(i[0])
                        nv1.push(i[2]['<?php echo $subject; ?>'])
                        nv2.push(i[2]['<?php echo str_replace('1','2', $subject) ?>'])
                    }
                }

                var col1 = 'rgb(0 144 220)'
                var col2 = 'rgb(0 96 180)'
                
                var bg_nv1 = Array(schools.length).fill(col1)
                var bg_nv2 = Array(schools.length).fill(col2)

            </script>

            <script>
                var textColor = '#8a8a8a'
                var defaultBorder = 6
                var ctx_bar = document.getElementById('myChartProsubComparison');
                var myChartBar = new Chart(ctx_bar, {
                    plugins: [ChartDataLabels],
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
                                borderRadius: defaultBorder,
                                backgroundColor: bg_nv2
                            },
                        ]
                    },
                    options: {
                        maintainAspectRatio: false,
                        responsive: true,
                        indexAxis: 'y',
                        plugins: {
                            title: {
                                display: true,
                                text: "<?php echo $orgSubject ?> " + "<?php echo $year ?>",
                                color: textColor
                            },
                            legend: {
                                display: true
                            },
                            datalabels: {
                                color: textColor,
                                anchor: 'end',
                                align: 'right',
                                padding: {
                                    left: 20
                                },
                                font: {
                                    weight: 'bold',
                                    size: '12px'
                                }             
                            }
                        },
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Điểm',
                                    color: textColor
                                },
                                min: 0,
                                max: 60
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: 'Trường',
                                    color: textColor
                                },
                                grid: {
                                    display: false
                                },
                                ticks: {
                                    stepSize: 10
                                }
                            }
                        }
                    } 
                });
            </script>

        </div>

    <?php
    }

} else {?>
    <div id="prosubComparisonGraph"></div>
<?php
} ?>