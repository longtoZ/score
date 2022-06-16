<?php
    include("../config/config.php");
    $school = $_POST['title'];
    $year = $_POST['year'];

    $query = <<<EOD
    SELECT `chi_tieu`.`NAM_HOC`, `truong`.`TEN_TRUONG`, `chi_tieu`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `chi_tieu`.`CHI_TIEU`, `chi_tieu`.`SO_LUONG`
    FROM `chi_tieu` 
    LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `chi_tieu`.`MA_TRUONG`
    WHERE `TEN_TRUONG` LIKE '%$school%' ORDER BY `NAM_HOC` DESC;
    EOD;


    $year_previous = (string)((int)$year - 1);
    $result = mysqli_query($con,$query);
    $datas = array();

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
        }
    }

?>

<div id="ratioGraph">
    <script>
        
        var datas_r = []
        for (let i of <?php echo json_encode($datas); ?>) {
            datas_r.push(i);
        }

        var chi_tieu_r = ''
        var so_luong_r = ''

        for (i=0; i <= datas_r.length; i++) {
            try {
                if (datas_r[i]['NAM_HOC'] == '<?php echo $year ?>') {
                    chi_tieu_r = datas_r[i]['CHI_TIEU'];
                    so_luong_r = datas_r[i]['SO_LUONG'];
                }
            } catch (e) {
                
            }

        }
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
                    data: [chi_tieu_r, so_luong_r],
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
</div>

<div id="ratioFigure">
    <script>

        var datas_r = []
        for (let i of <?php echo json_encode($datas); ?>) {
            datas_r.push(i);
        }

        var chi_tieu = ''
        var so_luong = ''
        var chi_tieu_nt = ''
        var so_luong_nt = ''

        for (i=0; i <= datas_r.length; i++) {
            try {
                if (datas_r[i]['NAM_HOC'] == '<?php echo $year ?>') {
                    chi_tieu = datas_r[i]['CHI_TIEU']
                    so_luong = datas_r[i]['SO_LUONG']
                    chi_tieu_nt = datas_r[i+1]['CHI_TIEU']
                    so_luong_nt = datas_r[i+1]['SO_LUONG']
                }
            } catch(e) {
            }
        }

        var ti_le_choi = parseFloat(so_luong/chi_tieu).toFixed(2)
        var so_sanh = (parseFloat(so_luong/chi_tieu) - parseFloat(so_luong_nt/chi_tieu_nt)).toFixed(2)


        var final_firgue = chi_tieu + '/' + so_luong;

        document.querySelector('.firgue .firgue1').innerHTML = ti_le_choi;
        document.querySelector('.firgue .firgue2').innerHTML = final_firgue;
        if (so_sanh >= 0) {
            document.querySelector('.compare').innerHTML = `➚ Tăng ${so_sanh} so với năm trước`;
            document.querySelector('.compare').style.color = "green";
        } else {
            document.querySelector('.compare').innerHTML = `➘ Giảm ${so_sanh} so với năm trước`;
            document.querySelector('.compare').style.color = "red";
        }
    </script>

    <style>
        .win-ratio-container {
            text-align: center;
        }

        .firgue {
            margin: 20px 0;
        }

        .firgue1 {
            font-weight: bold;
            font-size: 300%;
            letter-spacing: 1px;
        }

        .firgue2 {
            color: #787878;
        }
    </style>

    <div class="win-ratio-container">
        <div class="firgue">
            <span class="firgue1"></span>
            <br>
            <span class="firgue2"></span>
        </div>
        <div class="compare"></div>
    </div>
</div>
