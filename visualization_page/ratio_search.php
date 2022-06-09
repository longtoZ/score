<?php
    include("../config/config.php");
    $school = $_POST['title'];
    $year = $_POST['year'];

    $query = <<<EOD
    SELECT `chi_tieu`.`NAM_HOC`, `truong`.`TEN_TRUONG`, `chi_tieu`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `chi_tieu`.`CHI_TIEU`, `chi_tieu`.`SO_LUONG`
    FROM `chi_tieu` 
    LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `chi_tieu`.`MA_TRUONG`
    WHERE `TEN_TRUONG` LIKE '%$school%' AND `NAM_HOC` = $year;
    EOD;

    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) > 0) {
        $datas = array();
        while($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
        }
    }
?>

<script>
    var chi_tieu = <?php echo $datas[0]['CHI_TIEU'];?>;
    var so_luong = <?php echo $datas[0]['SO_LUONG'];?>;
</script>


<div class="doughnut-graph" style="height: 320px; width:auto">
    <canvas id="myChartDoughnut"></canvas>  
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

<script>
    var textColor = '#8a8a8a'
    var ctx_doughnut = document.getElementById('myChartDoughnut');
    var myChartDoughnut = new Chart(ctx_doughnut, {
        plugins: [ChartDataLabels],
        type: 'doughnut',
        data: {
            labels: ['Chỉ tiêu', 'Nguyện vọng'],
            datasets: [{
                label: 'NV1',
                data: [chi_tieu, so_luong],
                backgroundColor: [
                    'rgb(184, 241, 176)',
                    'rgb(20, 195, 142)'
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
                    text: '<?php echo $datas[0]['TEN_TRUONG'] ?>',
                    color: textColor
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