<?php
    include("../config/config.php");
    $school = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $type = $_POST['type'];

    $query = <<<EOD
    SELECT `chi_tieu`.`NAM_HOC`, `truong`.`TEN_TRUONG`, `chi_tieu`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `chi_tieu`.`CHI_TIEU`, `chi_tieu`.`SO_LUONG`
    FROM `chi_tieu` 
    LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `chi_tieu`.`MA_TRUONG`
    WHERE `TEN_TRUONG` LIKE '%$school%' ORDER BY `NAM_HOC` ASC;
    EOD;

    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) > 0) {
        $datas = array();

        while($row = mysqli_fetch_assoc($result)) {
            if ((int)$row['NAM_HOC'] >= $start && (int)$row['NAM_HOC'] <= $end) {
                $datas[] = array($row['NAM_HOC'], $row['TEN_TRUONG'], $row['CHI_TIEU'], $row['SO_LUONG'], round($row['SO_LUONG']/$row['CHI_TIEU'], 2));
            }
        }

        for ($i=0; $i < count($datas); $i+=1) {
            if ($i==0) {
                $datas[$i][5] = '';
            } else {
                $datas[$i][5] = round($datas[$i][4]-$datas[$i-1][4], 2);
            }
        }

    }

if ($type=='table') {?>
    <link rel="stylesheet" type="text/css" href="./assets/css/table.css">

    <table class="search-table">
        <thead>
            <tr>
                <th>Năm</th>
                <th>TÊN TRƯỜNG</th>
                <th onclick="sortTable(3)">CHỈ TIÊU</th>
                <th onclick="sortTable(4)">SỐ LƯỢNG</th>
                <th onclick="sortTable(5)">TỈ LỆ CHỌI</th>
                <th>TĂNG/GIẢM</th>
            </tr>
        </thead>

        <tbody>
            <?php

            foreach ($datas as $row) {
                
                $year = $row[0];
                $schoolname = $row[1];
                $soluong = $row[2];
                $chitieu = $row[3];
                $tilechoi = $row[4];
                $tanggiam = $row[5];
                
                if ($tanggiam < 0) {?>
                    <tr>
                        <td><?php echo $year; ?></td>
                        <td><?php echo $schoolname; ?></td>
                        <td><?php echo $soluong; ?></td>
                        <td><?php echo $chitieu; ?></td>
                        <td class="ti-le-choi"><?php echo $tilechoi; ?></td>
                        <td style="color:red; font-weight: 500;"><?php echo $tanggiam; ?></td>
                    </tr>
                <?php	
                } else {?>
                    <tr>
                        <td><?php echo $year; ?></td>
                        <td><?php echo $schoolname; ?></td>
                        <td><?php echo $soluong; ?></td>
                        <td><?php echo $chitieu; ?></td>
                        <td class="ti-le-choi"><?php echo $tilechoi; ?></td>
                        <td style="color:green; font-weight: 500;"><?php echo $tanggiam; ?></td>
                    </tr>
                <?php
                }
            } 
            ?>
        </tbody>

        <script>
            document.querySelectorAll('.ti-le-choi').forEach((item) => {
                item.style.fontWeight = "500";
                let value = parseInt(item.innerHTML);
                if (value <= 1) {
                    item.style.color = "aqua"
                } else if (value >= 1 && value <=2) {
                    item.style.color = "goldenRod"
                } else {
                    item.style.color = "tomato"
                }
            })
        </script>

    </table>
    <?php 
    
} else {?>
        <div class="ratio-chart" style="height: 380px; width:auto; margin: 0 30px; display:block;">
            <canvas id="myRatioChart"></canvas>  
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

            var soluong = []
            var chitieu = []
            var tilechoi = []

            for (let i of datas) {
                soluong.push(parseFloat(i[2]))
                chitieu.push(parseFloat(i[3]))
                tilechoi.push(i[4])
            }


            var bg_nv1 = Array(end-start+1).fill(col1)
            var bg_nv2 = Array(end-start+1).fill(col2)
            var bg_nv3 = Array(end-start+1).fill(col3)


            for (i=start; i <= end; i++) {
                labels.push(i.toString())
            }


            configChartR.type = 'bar'
            configChartR.data.labels = labels
            configChartR.data.datasets[0].backgroundColor = bg_nv1
            configChartR.data.datasets[1].backgroundColor = bg_nv2
            configChartR.data.datasets[2].backgroundColor = bg_nv3

        </script>

        <script>
            var configChartR = {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                            label: 'Chỉ tiêu',
                            data: soluong,
                            borderRadius: defaultBorder,
                            backgroundColor: bg_nv1,
                            yAxisID: 'barAxis',
                            order: 2
                        },
                        {
                            label: 'Số lượng',
                            hidden: false,
                            data: chitieu,
                            borderRadius: defaultBorder,
                            backgroundColor: bg_nv2,
                            yAxisID: 'barAxis',
                            order: 2
                        },
                        {
                            label: 'Tỉ lệ chọi',
                            hidden: false,
                            data: tilechoi,
                            borderRadius: defaultBorder,
                            borderColor: bg_nv3,
                            backgroundColor: bg_nv3,
                            tension: 0.4,
                            type: 'line',
                            yAxisID: 'lineAxis',
                            order: 1
                        }
                ]},
                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            color: textColor,
                            text: '<?php echo $school ?>'
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: false
                            },
                            stacked:true
                        },
                        barAxis: {
                            position: 'left',
                            type:'linear',
                            stacked:true
                        },
                        lineAxis: {
                            type:'linear',
                            position: 'right',
                        }
                    }
                }
            }

        </script>

        <script>
            var ctx_barR = document.getElementById('myRatioChart');
            var myRatioChart= new Chart(ctx_barR, configChartR)
        </script>

    <?php
    }
?>

