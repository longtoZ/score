<?php
include("../config/config.php");
$year = $_POST['year'];
$district = $_POST['district'];

$query = <<<EOD
SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
FROM `diem_chuan` 
LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
WHERE `QUAN/HUYEN` LIKE '%$district%' AND `NAM_HOC` = $year
EOD;

$result = mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0) {
    $datas = array();
    $count = 1;
    $schools = array();
    while($row = mysqli_fetch_assoc($result)) {

        if ($count == 1) {
            array_push($schools, $row['TEN_TRUONG'], $row['QUAN/HUYEN'], $row['DIEM']);
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
}
?>

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
        nv1.push(i[2])
    }

    var rgb_list = [];
    for (let i=0; i<schools.length; i++) {
        rgb_list.push(`rgb(${randomRGB()}, ${randomRGB()}, ${randomRGB()})`);
    }
    console.log(rgb_list);
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