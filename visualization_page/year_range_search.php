<?php
    include("../config/config.php");
    $school = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $new = $_POST['new'];
    $chartClicked = $_POST['chartClicked'];

    $sql = <<<EOD
    SELECT
    `search_score_2021`.`TÊN TRƯỜNG` as t_2021, `search_score_2021`.`ĐIỂM NV1` as nv1_2021, `search_score_2021`.`ĐIỂM NV2` as nv2_2021, `search_score_2021`.`ĐIỂM NV3` as nv3_2021,
    `search_score_2020`.`TÊN TRƯỜNG` as t_2020, `search_score_2020`.`ĐIỂM NV1` as nv1_2020, `search_score_2020`.`ĐIỂM NV2` as nv2_2020, `search_score_2020`.`ĐIỂM NV3` as nv3_2020,
    `search_score_2019`.`TÊN TRƯỜNG` as t_2019, `search_score_2019`.`ĐIỂM NV1` as nv1_2019, `search_score_2019`.`ĐIỂM NV2` as nv2_2019, `search_score_2019`.`ĐIỂM NV3` as nv3_2019,
    `search_score_2018`.`TÊN TRƯỜNG` as t_2018, `search_score_2018`.`ĐIỂM NV1` as nv1_2018, `search_score_2018`.`ĐIỂM NV2` as nv2_2018, `search_score_2018`.`ĐIỂM NV3` as nv3_2018,
    `search_score_2017`.`TÊN TRƯỜNG` as t_2017, `search_score_2017`.`ĐIỂM NV1` as nv1_2017, `search_score_2017`.`ĐIỂM NV2` as nv2_2017, `search_score_2017`.`ĐIỂM NV3` as nv3_2017,
    `search_score_2016`.`TÊN TRƯỜNG` as t_2016, `search_score_2016`.`ĐIỂM NV1` as nv1_2016, `search_score_2016`.`ĐIỂM NV2` as nv2_2016, `search_score_2016`.`ĐIỂM NV3` as nv3_2016,
    `search_score_2015`.`TÊN TRƯỜNG` as t_2015, `search_score_2015`.`ĐIỂM NV1` as nv1_2015, `search_score_2015`.`ĐIỂM NV2` as nv2_2015, `search_score_2015`.`ĐIỂM NV3` as nv3_2015
    

    FROM `search_score_2020`
    	LEFT OUTER JOIN `search_score_2021` ON `search_score_2020`.`TÊN TRƯỜNG` = `search_score_2021`.`TÊN TRƯỜNG`
        LEFT OUTER JOIN `search_score_2019` ON `search_score_2020`.`TÊN TRƯỜNG` = `search_score_2019`.`TÊN TRƯỜNG`
        LEFT OUTER JOIN `search_score_2018` ON `search_score_2020`.`TÊN TRƯỜNG` = `search_score_2018`.`TÊN TRƯỜNG`
        LEFT OUTER JOIN `search_score_2017` ON `search_score_2020`.`TÊN TRƯỜNG` = `search_score_2017`.`TÊN TRƯỜNG`
        LEFT OUTER JOIN `search_score_2016` ON `search_score_2020`.`TÊN TRƯỜNG` = `search_score_2016`.`TÊN TRƯỜNG`
        LEFT OUTER JOIN `search_score_2015` ON `search_score_2020`.`TÊN TRƯỜNG` = `search_score_2015`.`TÊN TRƯỜNG`
        
    WHERE `search_score_2020`.`TÊN TRƯỜNG` LIKE '%$school%';
    EOD;

    $result = mysqli_query($con,$sql);
    $datas = array();

    if (mysqli_num_rows($result) > 0) {
        // print_r(mysqli_fetch_assoc($result));
        while($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
        }
    }
    
    // echo $datas[0]['nv1_2020'];

    // foreach ($datas[0] as $data) {
    //     echo "$data <br>";
    //     print_r($data);
    // }
?>





<div class="bar-graph1" style="height: 380px; width:auto; margin: 0 30px; display:block;">
    <canvas id="myChartBar1"></canvas>  
</div>

<div class="bar-graph2" style="height: 380px; width:auto; margin: 0 30px; display:none;">
    <canvas id="myChartBar2"></canvas>  
</div>

<i id="arrow-left" class="fi fi-br-angle-left" style="
    display: flex;
    align-items: center;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    font-size: 200%;"></i>


<i id="arrow-right" class="fi fi-br-angle-right" style="
    display: flex;
    align-items: center;
    height: 100%;
    position: absolute;
    top: 0;
    right: 0;
    font-size: 200%;"></i>

<style>
    
    #arrow-left:hover, #arrow-right:hover {
        cursor: pointer;
        color: #009879;
        opacity: 0.7;
        transition: ease-in-out 0.2s
    }

    @media only screen and (max-width: 46.1875em) {
        #arrow-left, #arrow-right {
            position: relative !important;
            top: 5px !important;
            display: inline-block !important;
            margin-top: 20px !important;
            height: auto !important;
        }

        #arrow-left {
            left: 80px !important;
            float: left;
        }

        #arrow-right {
            right: 80px !important;
            float: right
        }

        .bar-graph1, .bar-graph2 {
            margin: 0 5px !important;
        }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-trendline"></script>



<script>
    var isNew = '<?php echo $new ?>';
    var textColor = '#8a8a8a'
    var defaultBorder = 6
    var col1 = 'rgb(0, 255, 171)'
    var col2 = 'rgb(20, 195, 142)'
    var col3 = 'rgb(184, 241, 176)'

    var first = 2015;
    var last = 2021
    var start = <?php echo $start?>;
    var end = <?php echo $end?>;
    var labels = []

    var nv1 = [<?php echo $datas[0]['nv1_2015']?>, <?php echo $datas[0]['nv1_2016']?>, <?php echo $datas[0]['nv1_2017']?>, <?php echo $datas[0]['nv1_2018']?>, <?php echo $datas[0]['nv1_2019']?>, <?php echo $datas[0]['nv1_2020']?>, <?php echo $datas[0]['nv1_2021']?>]
    var nv2 = [<?php echo $datas[0]['nv2_2015']?>,<?php echo $datas[0]['nv2_2016']?>, <?php echo $datas[0]['nv2_2017']?>, <?php echo $datas[0]['nv2_2018']?>, <?php echo $datas[0]['nv2_2019']?>, <?php echo $datas[0]['nv2_2020']?>, <?php echo $datas[0]['nv2_2021']?>]
    var nv3 = [<?php echo $datas[0]['nv3_2015']?>,<?php echo $datas[0]['nv3_2016']?>, <?php echo $datas[0]['nv3_2017']?>, <?php echo $datas[0]['nv3_2018']?>, <?php echo $datas[0]['nv3_2019']?>, <?php echo $datas[0]['nv3_2020']?>, <?php echo $datas[0]['nv3_2021']?>]


    var nv1Per = []
    var nv2Per = []
    var nv3Per = []

    for (i=0; i <= nv1.length; i++) {
        if (i<6) {
            nv1Per.push(parseFloat(((nv1[i]/50)*100).toFixed(1)));
        } else {
            nv1Per.push(parseFloat(((nv1[i]/30)*100).toFixed(1)));
        }
        
    }
    for (i=0; i <= nv2.length; i++) {
        if (i<6) {
            nv2Per.push(parseFloat(((nv2[i]/50)*100).toFixed(1)));
        } else {
            nv2Per.push(parseFloat(((nv2[i]/30)*100).toFixed(1)));
        }
    }
    for (i=0; i <= nv3.length; i++) {
        if (i<6) {
            nv3Per.push(parseFloat(((nv3[i]/50)*100).toFixed(1)));
        } else {
            nv3Per.push(parseFloat(((nv3[i]/30)*100).toFixed(1)));
        }
    }

    if (start != '-1' && end != '-1') {
        var bg_nv1 = Array(end-start+1).fill(col1)
        var bg_nv2 = Array(end-start+1).fill(col2)
        var bg_nv3 = Array(end-start+1).fill(col3)
        // console.log(bg_nv1, bg_nv2, bg_nv3)

        nv1 = nv1.slice(start-first, end-first+1)
        nv2 = nv2.slice(start-first, end-first+1)
        nv3 = nv3.slice(start-first, end-first+1)

        nv1Per = nv1Per.slice(start-first, end-first+1)
        nv2Per = nv2Per.slice(start-first, end-first+1)
        nv3Per = nv3Per.slice(start-first, end-first+1)

        for (i=start; i <= end; i++) {
            labels.push(i.toString())
        }

        myChartBar1.destroy()
        myChartBar2.destroy()

        configChart1.type = 'bar'
        configChart1.data.labels = labels
        configChart1.data.datasets[0].backgroundColor = bg_nv1
        configChart1.data.datasets[1].backgroundColor = bg_nv2
        configChart1.data.datasets[2].backgroundColor = bg_nv3

        configChart2.type = 'bar'
        configChart2.data.labels = labels
        configChart2.data.datasets[0].backgroundColor = bg_nv1
        configChart2.data.datasets[1].backgroundColor = bg_nv2
        configChart2.data.datasets[2].backgroundColor = bg_nv3

        var ctx_bar1 = document.getElementById('myChartBar1');
        var myChartBar1 = new Chart(ctx_bar1, configChart1);
        var ctx_bar2 = document.getElementById('myChartBar2');
        var myChartBar2 = new Chart(ctx_bar2, configChart2);


    } else {
        var bg_nv1 = Array(last-first+1).fill(col1)
        var bg_nv2 = Array(last-first+1).fill(col2)
        var bg_nv3 = Array(last-first+1).fill(col3)

        for (i=first; i <= last; i++) {
            labels.push(i.toString())
        }
    }

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
                backgroundColor: bg_nv1,
                borderColor: col1,
                tension: 0,
                pointRadius: 5,
                },
                {
                    label: 'NV2',
                    hidden: isHidden,
                    data: nv2,
                    borderRadius: defaultBorder,
                    backgroundColor: bg_nv2,
                    borderColor: col2,
                    tension: 0,
                    pointRadius: 5,
                },
                {
                    label: 'NV3',
                    hidden: isHidden,
                    data: nv3,
                    borderRadius: defaultBorder,
                    backgroundColor: bg_nv3,
                    borderColor: col2,
                    tension: 0,
                    pointRadius: 5,
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
                    text: '<?php echo $datas[0]['t_2021'] ?>'
                },
                subtitle: {
                    display: true,
                    text: '*Hiển thị theo điểm*',
                    position: 'bottom',
                    color: 'red',
                    font: {
                        size: 15,
                        // family: 'lato',
                        weight: 'normal',
                        style: 'italic'
                    },
                    padding: {
                        top: 10
                    }
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

    var configChart2 = {
        plugins: [ChartDataLabels],
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'NV1',
                data: nv1Per,
                borderRadius: defaultBorder,
                backgroundColor: bg_nv1,
                borderColor: col1,
                tension: 0,
                pointRadius: 10,
                trendlineLinear: {
                    style: col1,
                    lineStyle: "solid",
                    width: 2
                    }
                },
                {
                    label: 'NV2',
                    hidden: isHidden,
                    data: nv2Per,
                    borderRadius: defaultBorder,
                    backgroundColor: bg_nv2,
                    borderColor: col2,
                    tension: 0,
                    pointRadius: 10,
                },
                {
                    label: 'NV3',
                    hidden: isHidden,
                    data: nv3Per,
                    borderRadius: defaultBorder,
                    backgroundColor: bg_nv3,
                    borderColor: col3,
                    tension: 0,
                    pointRadius: 10,
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
                    text: '<?php echo $datas[0]['t_2021'] ?>'
                },
                subtitle: {
                    display: true,
                    text: '*Hiển thị theo phần trăm*',
                    position: 'bottom',
                    color: 'red',
                    font: {
                        size: 15,
                        // family: 'lato',
                        weight: 'normal',
                        style: 'italic'
                    },
                    padding: {
                        top: 10
                    }
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
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Tỉ lệ',
                        color: textColor
                    },
                    min: 0,
                    max: 100,
                    ticks: {
                        stepSize: 10
                    },
                    beginAtZero: false
                    
                }
            }
        }
    }
</script>

<script>
        if (isNew == 'line') {
            var chartClicked = '<?php echo $chartClicked ?>'
            myChartBar1.destroy()
            myChartBar2.destroy()
            if (chartClicked == 'no') {

                configChart1.type = 'line'
                configChart1.data.datasets[0].borderColor = col1
                configChart1.data.datasets[0].backgroundColor = col1.replace(')', ', 0.2)')
                configChart1.data.datasets[0].tension = 0.4
                configChart1.data.datasets[0].fill = true

                configChart1.data.datasets[1].borderColor = col2
                configChart1.data.datasets[1].backgroundColor = col2.replace(')', ', 0.2)')
                configChart1.data.datasets[1].tension = 0.4
                configChart1.data.datasets[1].fill = true

                configChart1.data.datasets[2].borderColor = col3
                configChart1.data.datasets[2].backgroundColor = col3.replace(')', ', 0.2)')
                configChart1.data.datasets[2].tension = 0.4
                configChart1.data.datasets[2].fill = true


                configChart2.type = 'line'
                configChart2.data.datasets[0].borderColor = col1
                configChart2.data.datasets[0].backgroundColor = col1.replace(')', ', 0.2)')
                configChart2.data.datasets[0].tension = 0.4
                configChart2.data.datasets[0].fill = true

                configChart2.data.datasets[1].borderColor = col2
                configChart2.data.datasets[1].backgroundColor = col2.replace(')', ', 0.2)')
                configChart2.data.datasets[1].tension = 0.4
                configChart2.data.datasets[1].fill = true

                configChart2.data.datasets[2].borderColor = col3
                configChart2.data.datasets[2].backgroundColor = col3.replace(')', ', 0.2)')
                configChart2.data.datasets[2].tension = 0.4
                configChart2.data.datasets[2].fill = true

                
            } else {

                configChart1.type = 'bar'
                configChart1.data.datasets[0].borderRadius = defaultBorder
                configChart1.data.datasets[0].backgroundColor = bg_nv1

                configChart1.data.datasets[1].borderRadius = defaultBorder
                configChart1.data.datasets[1].backgroundColor = bg_nv2

                configChart1.data.datasets[2].borderRadius = defaultBorder
                configChart1.data.datasets[2].backgroundColor = bg_nv3


                configChart2.type = 'bar'
                configChart2.data.datasets[0].borderRadius = defaultBorder
                configChart2.data.datasets[0].backgroundColor = bg_nv1

                configChart2.data.datasets[1].borderRadius = defaultBorder
                configChart2.data.datasets[1].backgroundColor = bg_nv2

                configChart2.data.datasets[2].borderRadius = defaultBorder
                configChart2.data.datasets[2].backgroundColor = bg_nv3

            }

            var ctx_bar1 = document.getElementById('myChartBar1');
            var myChartBar1 = new Chart(ctx_bar1, configChart1)
            var ctx_bar2 = document.getElementById('myChartBar2');
            var myChartBar2 = new Chart(ctx_bar2, configChart2)
        }
</script>

<script>

    if (isNew == 'true') {
        var ctx_bar1 = document.getElementById('myChartBar1');
        var myChartBar1 = new Chart(ctx_bar1, configChart1)

        var ctx_bar2 = document.getElementById('myChartBar2');
        var myChartBar2 = new Chart(ctx_bar2, configChart2)
    }


</script>

<script>
    var pos = 0;
    var left = document.getElementById("arrow-left");
    var right = document.getElementById("arrow-right");

    left.addEventListener("click", function() {
        if (pos==1) {
            pos = 0;
            document.querySelector('.bar-graph1').style.display = "block";
            document.querySelector('.bar-graph2').style.display = "none";

        }
    });
    right.addEventListener("click", function() {
        if (pos==0) {
            pos = 1;
            document.querySelector('.bar-graph2').style.display = "block";
            document.querySelector('.bar-graph1').style.display = "none";


        }
    })
</script>


