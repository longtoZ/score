<?php
    include("../config/config.php");
    $school = $_POST['title'];
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





<div class="bar-graph1" style="height: 380px; width:auto; margin: 0 30px; display:block">
    <canvas id="myChartBar1"></canvas>  
</div>

<div class="bar-graph2" style="height: 380px; width:auto; margin: 0 30px; display:none">
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
    i:hover {
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

<script>
    
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


</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-trendline"></script>

<script>
    var mediaQuery = window.matchMedia('(max-width: 46.1875em)')
    var isHidden = false
    if (mediaQuery.matches) {
        isHidden = true
    }

    var ctx_bar1 = document.getElementById('myChartBar1');
    var myChartBar1 = new Chart(ctx_bar1, {
        plugins: [ChartDataLabels],
        type: 'bar',
        data: {
            labels: ['2015', '2016', '2017', '2018', '2019', '2020', '2021'],
            datasets: [{
                label: 'NV1',
                data: nv1,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 99, 132)',
                    'rgb(255, 99, 132)',
                    'rgb(255, 99, 132)',
                    'rgb(255, 99, 132)'
                ]
                },
                {
                    label: 'NV2',
                    hidden: isHidden,
                    data: nv2,
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(54, 162, 235)',
                        'rgb(54, 162, 235)',
                        'rgb(54, 162, 235)',
                        'rgb(54, 162, 235)'
                    ]
                },
                {
                    label: 'NV3',
                    hidden: isHidden,
                    data: nv3,
                    backgroundColor: [
                        'rgb(255, 206, 86)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 206, 86)'
                    ]
                }
        ]},
        options: {
            maintainAspectRatio: false,
            responsive: true,
            plugins: {
                title: {
                    display: true,
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
                    color: 'black',
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
                        text: 'Năm'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Điểm'
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

    var ctx_bar2 = document.getElementById('myChartBar2');
    var myChartBar2 = new Chart(ctx_bar2, {
        plugins: [ChartDataLabels],
        type: 'bar',
        data: {
            labels: ['2015', '2016', '2017', '2018', '2019', '2020', '2021'],
            datasets: [{
                label: 'NV1',
                data: nv1Per,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 99, 132)',
                    'rgb(255, 99, 132)',
                    'rgb(255, 99, 132)',
                    'rgb(255, 99, 132)'
                ],
                trendlineLinear: {
                    style: "rgba(255, 99, 132, .8)",
                    lineStyle: "dotted",
                    width: 3
                    }
                },
                {
                    label: 'NV2',
                    hidden: isHidden,
                    data: nv2Per,
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(54, 162, 235)',
                        'rgb(54, 162, 235)',
                        'rgb(54, 162, 235)',
                        'rgb(54, 162, 235)'
                    ],
                    trendlineLinear: {
                        style: "rgba(54, 162, 235, .8)",
                        lineStyle: "dotted",
                        width: 3
                    }
                },
                {
                    label: 'NV3',
                    hidden: isHidden,
                    data: nv3Per,
                    backgroundColor: [
                        'rgb(255, 206, 86)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 206, 86)',
                        'rgb(255, 206, 86)'
                    ],
                    trendlineLinear: {
                        style: "rgba(255, 206, .8)",
                        lineStyle: "dotted",
                        width: 3
                    }
                }
        ]},
        options: {
            maintainAspectRatio: false,
            responsive: true,
            plugins: {
                title: {
                    display: true,
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
                    color: 'black',
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
                        text: 'Năm'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Tỉ lệ'
                    },
                    min: 0,
                    max: 100,
                    ticks: {
                        stepSize: 10
                    }
                }
            }
        }
        
    });

    var pos = 0;
    var left = document.getElementById("arrow-left");
    var right = document.getElementById("arrow-right");

    left.addEventListener("click", function() {
        if (pos==1) {
            pos = 0;
            document.querySelector('.bar-graph1').style.display = "block"
            document.querySelector('.bar-graph2').style.display = "none";
        }
    });
    right.addEventListener("click", function() {
        if (pos==0) {
            pos = 1;
            document.querySelector('.bar-graph2').style.display = "block";
            document.querySelector('.bar-graph1').style.display = "none"

        }
    })
</script>


