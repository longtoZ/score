<?php
include("../config/config.php");

$title = mysqli_real_escape_string($con, $_POST['title']);
$year = $_POST['year'];
$score = $_POST['score'];

if ($year < 2021) {
    $start = (float)$score - 1;
    $end = (float)$score + 1;
} else {
    $start = (float)$score - 0.5;
    $end = (float)$score + 0.5;
}


$query = <<<EOD
SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
FROM `diem_chuan` 
LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
WHERE `NAM_HOC` = $year  AND `MA_NV` = 'NV1' AND (`DIEM` >= $start AND `DIEM` <= $end)
AND (`truong`.`MA_LOAI` = 'L02' OR `truong`.`MA_LOAI` = 'L03');
EOD;

$result = mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0) {
    $datas = array();
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

    ?>

    <div id="groupGraph">

        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

        <div class="bar-graph">
            <canvas id="myChartBarGroup"></canvas>  
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
            var datas_g = []
            var schools = []
            var nv1 = []
            // var nv2 = []
            // var nv3 = []

            schools.push('<?php echo $title; ?>')
            nv1.push('<?php echo $score; ?>')

            for (let i of <?php echo json_encode($datas); ?>) {
                datas_g.push(i);
                schools.push(i[0])
                nv1.push(i[2]['NV1'])
                // nv2.push(i[2]['NV2'])
                // nv3.push(i[2]['NV3'])
            }


            var rgb_list = [];
            for (let i=0; i<schools.length; i++) {
                rgb_list.push(`rgb(${randomRGB()}, ${randomRGB()}, ${randomRGB()})`);
            }
        </script>

        <script>
            var textColor = '#8a8a8a'
            var defaultBorder = 6
            var ctx_bar = document.getElementById('myChartBarGroup');
            var myChartBar = new Chart(ctx_bar, {
                plugins: [ChartDataLabels],
                type: 'bar',
                data: {
                    labels: schools,
                    datasets: [{
                        label: '',
                        data: nv1,
                        borderRadius: defaultBorder,
                        backgroundColor: rgb_list
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
                            text: "Năm " + "<?php echo $year ?>",
                            color: textColor
                        },
                        legend: {
                            display: false
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
                                text: 'Điểm NV1',
                                color: textColor
                            },
                            min: 0,
                            max: 50
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

    <div id="groupList">
        
        <style>
            .score-info {
                background-color: var(--third-primary-color);
                box-shadow: var(--box-shadow-light);
                width: 100%;
                height: 50px;
                padding: 10px 20px;
                margin: 10px 0;
                z-index: 1;
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-radius: 8px
            }

            .score-info:hover {
                background-color: #FFF9C2;
                cursor: pointer;
                color: #000000;
            }

            .school-name {
                float: left
            }

            .school-score {
                float: right;
                color: #009879;
                font-weight: bold;
            }
        </style>

        <script>

            function addFirstChild(name, score) {

                var score_info = document.createElement('div')
                var school_name = document.createElement('div')
                var school_score = document.createElement('div')

                score_info.className = 'score-info'
                school_name.className = 'school-name'
                school_score.className = 'school-score'

                school_name.innerHTML = name
                school_score.innerHTML = score

                score_info.appendChild(school_name)
                score_info.appendChild(school_score)
                document.querySelector('.school-group-list').appendChild(score_info)

            }

            addFirstChild('<?php echo $title; ?>', '<?php echo $score; ?>')

            var child = 1;
            for (let i of <?php echo json_encode($datas); ?>) {

                addFirstChild(i[0], i[2]['NV1'])

            }
        </script>
    </div>

<?php
} else {?>
    <div id="groupGraph"></div>
    <div id="groupList"></div>
<?php
} ?>