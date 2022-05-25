<?php
    include("../config/config.php");
    $school = $_POST['title'];
    $sql = "SELECT * FROM `ti_le_choi` WHERE `TÊN TRƯỜNG` LIKE '%$school%';";

    $year = $_POST['year'];
    $result = mysqli_query($con,$sql);
    $datas = array();

    if (mysqli_num_rows($result) > 0) {
        // print_r(mysqli_fetch_assoc($result));
        while($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
        }
    }

    // print_r($datas);
    
    // echo $datas[0]['TÊN TRƯỜNG'];
    // echo $datas[0]['CHỈ TIÊU 2019'];
    // echo $datas[0]['NV1 2019'];
    // echo $datas[0]['TỈ LỆ CHỌI 2019'];

?>

<script>
    var chi_tieu = <?php echo $datas[0]["CHỈ TIÊU $year"];?>;
    var nguyen_vong = <?php echo $datas[0]["NV1 $year"];?>;
    console.log([chi_tieu, nguyen_vong])
</script>


<div class="doughnut-graph" style="height: 320px; width:auto">
    <canvas id="myChartDoughnut"></canvas>  
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

<script>
    var ctx_doughnut = document.getElementById('myChartDoughnut');
    var myChartDoughnut = new Chart(ctx_doughnut, {
        plugins: [ChartDataLabels],
        type: 'doughnut',
        data: {
            labels: ['Chỉ tiêu', 'Nguyện vọng'],
            datasets: [{
                label: 'NV1',
                data: [chi_tieu, nguyen_vong],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)'
                ],
                hoverOffset: 4,
                borderRadius: 5
                
        }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: '<?php echo $datas[0]['TÊN TRƯỜNG'] ?>'
                },
                legend: {
                    position: 'top'
                },
                datalabels: {
                    color: '#ffffff',
                    anchor: 'center',
                    font: {
                        size: '25px'
                    }
                    
                    
                }
            }
            
        }
        
    });
</script>