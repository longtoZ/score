<?php
    include("../config/config.php");
    $school = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $type = $_POST['type'];

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

        <script>
            document.querySelector('.school-title').innerHTML = '<?php echo $datas2[0][1] ?>';
            document.querySelector('.school-area').innerHTML = '<?php echo $datas2[0][2] ?>';
        </script>

        <?php
        if ($type=='table') {?>

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
        } else {?>
            <div class="bar-graph1" style="height: 380px; width:auto; margin: 0 30px; display:block;">
                <canvas id="myChartBar1"></canvas>  
            </div>
            <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
            <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-trendline"></script>

            
            <script>
                var textColor = '#8a8a8a'
                var defaultBorder = 6
                var col1 = 'rgb(0, 255, 171)'
                var col2 = 'rgb(20, 195, 142)'
                var col3 = 'rgb(184, 241, 176)'

                var start = <?php echo $start?>;
                var end = <?php echo $end?>;
                var labels = []

                var datas = <?php echo json_encode($datas); ?>;

                var nv1 = []
                var nv2 = []
                var nv3 = []

                for (let i of datas) {
                    nv1.push(i[3])
                    nv2.push(i[4])
                    nv3.push(i[5])
                }

                var bg_nv1 = Array(end-start+1).fill(col1)
                var bg_nv2 = Array(end-start+1).fill(col2)
                var bg_nv3 = Array(end-start+1).fill(col3)

                for (i=start; i <= end; i++) {
                    labels.push(i.toString())
                }

                configChart1.type = 'bar'
                configChart1.data.labels = labels
                configChart1.data.datasets[0].backgroundColor = bg_nv1
                configChart1.data.datasets[1].backgroundColor = bg_nv2
                configChart1.data.datasets[2].backgroundColor = bg_nv3

            </script>

            <script>
                var mediaQuery = window.matchMedia('(max-width: 46.1875em)')
                var isHidden = false
                if (mediaQuery.matches) {
                    isHidden = true
                }
                
                var configChart1 = {
                    plugins: [ChartDataLabels],
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'NV1',
                            data: nv1,
                            borderRadius: defaultBorder,
                            backgroundColor: bg_nv1
                            },
                            {
                                label: 'NV2',
                                hidden: isHidden,
                                data: nv2,
                                borderRadius: defaultBorder,
                                backgroundColor: bg_nv2
                            },
                            {
                                label: 'NV3',
                                hidden: isHidden,
                                data: nv3,
                                borderRadius: defaultBorder,
                                backgroundColor: bg_nv3
                            }
                    ]},
                    options: {
                        maintainAspectRatio: false,
                        responsive: true,
                        plugins: {
                            // tooltip: {enabled: false},
                            title: {
                                display: true,
                                color: textColor,
                                text: '<?php echo $datas[0][1] ?>'
                            },
                            datalabels: {
                                color: textColor,
                                anchor: 'end',
                                align: 'top',
                                offet: 0,
                                font: {
                                    weight: 'bold',
                                    size: '10px'
                                }
                                            
                            }
                        },
                        scales: {
                            x: {
                                title: {
                                    display: true,
                                    text: 'Năm',
                                    color: textColor
                                },
                                grid: {
                                    display: false
                                }
                            },
                            y: {
                                title: {
                                    display: true,
                                    text: 'Điểm',
                                    color: textColor
                                },
                                min: 0,
                                max: 50,
                                ticks: {
                                    stepSize: 10
                                },
                                beginAtZero: false
                            },
                        }
                    }
                }

            </script>

            <script>
                var ctx_bar1 = document.getElementById('myChartBar1');
                var myChartBar1 = new Chart(ctx_bar1, configChart1)
            </script>

        <?php
        }
}?>