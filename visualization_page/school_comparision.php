<?php
    include("../config/config.php");
    $year = $_POST['year'];
    $district = $_POST['district'];
    $sql = "SELECT * FROM `search_score_$year` WHERE `TÊN QUẬN` LIKE '%$district%';";

    $result = mysqli_query($con,$sql);
    $datas = array();

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
        }
    }
    $schools = array();
    $nv1 = array();
    $nv2 = array();
    $nv3 = array();
    foreach ($datas as $data) {
        $schools[] = $data["TÊN TRƯỜNG"];
        $nv1[] = $data["ĐIỂM NV1"];
        $nv2[] = $data["ĐIỂM NV2"];
        $nv3[] = $data["ĐIỂM NV3"];
    };


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
    var schools = <?php echo json_encode($schools); ?>;
    var nv1 = <?php echo json_encode($nv1); ?>;
    var nv2 = <?php echo json_encode($nv2); ?>;
    var nv3 = <?php echo json_encode($nv3); ?>;
    var rgb_list = [];
    for (let i=0; i<schools.length; i++) {
        rgb_list.push(`rgb(${randomRGB()}, ${randomRGB()}, ${randomRGB()})`);
    }
    console.log(rgb_list);
</script>

<script>
    var ctx_bar = document.getElementById('myChartBarComparision');
    var myChartBar = new Chart(ctx_bar, {
        type: 'bar',
        data: {
            labels: schools,
            datasets: [{
                label: '',
                data: nv1,
                backgroundColor: rgb_list
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: "<?php echo $datas[0]['TÊN QUẬN'] ?> " + "<?php echo $year ?>"
                },
                legend: {
                    display: false
                },
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Trường'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Điểm NV1'
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