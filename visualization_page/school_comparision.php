<?php
include("../config/config.php");
$year = $_POST['year'];
$district = $_POST['district'];

$query = <<<EOD
SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
FROM `diem_chuan` 
LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
WHERE `QUAN/HUYEN` LIKE '%$district%' AND `NAM_HOC` = $year  
AND (`truong`.`MA_LOAI` = 'L02' OR `truong`.`MA_LOAI` = 'L03');
EOD;

$result = mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0) {
    $rawLst = array();

    while($row = mysqli_fetch_assoc($result)) {
        $rawLst[] = $row;
    }

    $datas = array();
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
}
?>

<div id="comparisionGraph">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <div class="bar-graph">
        <canvas id="myChartBarComparision"></canvas>  
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

        for (let i of <?php echo json_encode($datas); ?>) {
            datas_d.push(i);
            schools.push(i[0])
            nv1.push(i[2]['NV1'])
        }

        var rgb_list = [];
        for (let i=0; i<schools.length; i++) {
            rgb_list.push(`rgb(${randomRGB()}, ${randomRGB()}, ${randomRGB()})`);
        }
    </script>

    <script>
        var textColor = '#8a8a8a'
        var defaultBorder = 6
        var ctx_bar = document.getElementById('myChartBarComparision');
        var myChartBar = new Chart(ctx_bar, {
            type: 'bar',
            data: {
                labels: schools,
                datasets: [{
                    label: '',
                    data: nv1,
                    borderRadius: defaultBorder,
                    backgroundColor: rgb_list
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: "<?php echo $district ?> " + "<?php echo $year ?>",
                        color: textColor
                    },
                    legend: {
                        display: false
                    },
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Trường',
                            color: textColor
                        },
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Điểm NV1',
                            color: textColor
                        },
                        min: 0,
                        max: 50,
                        ticks: {
                            stepSize: 10
                        }
                    }
                }
            } 
        });
    </script>

</div>

<div id="comparisionList">
    
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
        var child = 1;
        for (let i of <?php echo json_encode($datas); ?>) {

            var score_info = document.createElement('div')
            var school_name = document.createElement('div')
            var school_score = document.createElement('div')

            score_info.className = 'score-info'
            school_name.className = 'school-name'
            school_score.className = 'school-score'

            school_name.innerHTML = i[0]
            school_score.innerHTML = i[2]['NV1']

            score_info.appendChild(school_name)
            score_info.appendChild(school_score)
            document.querySelector('.school-list').appendChild(score_info)

        }
    </script>
</div>