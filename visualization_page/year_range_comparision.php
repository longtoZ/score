<?php
    include("../config/config.php");
    $school = $_POST['title'];
    $year = $_POST['year'];
    $wish = $_POST['wish'];

    $query = <<<EOD
    SELECT `diem_chuan`.`NAM_HOC`, `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
    FROM `diem_chuan` 
    LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
    WHERE `TEN_TRUONG` LIKE '%$school%';
    EOD;

    $result = mysqli_query($con,$query);

    if (mysqli_num_rows($result) > 0) {
        $datas = array();
        $count = 1;
        $schools = array();
        while($row = mysqli_fetch_assoc($result)) {
    
            if ($count == 1) {
                array_push($schools, $row['NAM_HOC'], $row['TEN_TRUONG'], $row['QUAN/HUYEN'], $row['DIEM']);
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
    }?>


<div id="info1">
    <h1></h1>
    <h4 style="color: var(--text-color-light); opacity: 0.5; margin-bottom: 20px"></h4>
    <p></p>

    <script>
        var datas = <?php echo json_encode($datas); ?>;
        var year = '<?php echo $year; ?>';
        var wish = '<?php echo $wish; ?>';
        var display_info = []

        for (i=0; i <= datas.length; i++) {
            try {
                if (datas[i][0] == year) {
                    if (wish == 'NV1') {
                        display_info.push(parseInt(datas[i][0]))
                        display_info.push(datas[i][3])
                        display_info.push(parseInt(datas[i-1][0]))
                        display_info.push(datas[i-1][3])
                        break;
                    } else if (wish == 'NV2') {
                        display_info.push(parseInt(datas[i][0]))
                        display_info.push(datas[i][4])
                        display_info.push(parseInt(datas[i-1][0]))
                        display_info.push(datas[i-1][4])
                        break;
                    } else if (wish == 'NV3') {
                        display_info.push(parseInt(datas[i][0]))
                        display_info.push(datas[i][5])
                        display_info.push(parseInt(datas[i-1][0]))
                        display_info.push(datas[i-1][5])
                        break;
                    }
                }

            } catch (e) {}
        }


        if (display_info[0] >= 2021) {
                document.querySelector('#info1 h1').innerHTML = 'Năm ' + display_info[0] + ': ' + display_info[1] + '/' + '30'
        } else {
            document.querySelector('#info1 h1').innerHTML = 'Năm ' + display_info[0] + ': ' + display_info[1] + '/' + '50'
        }

        if (display_info[2] >= 2021) {
            document.querySelector('#info1 h4').innerHTML = 'Năm ' + display_info[2] + ': ' + display_info[3] + '/' + '30'
        } else {
            document.querySelector('#info1 h4').innerHTML = 'Năm ' + display_info[2] + ': ' + display_info[3] + '/' + '50'
        }

        var score_now =  display_info[0] >= 2021 ? parseFloat(display_info[1])/30 : parseFloat(display_info[1])/50
        var score_prev =  display_info[2] >= 2021 ? parseFloat(display_info[3])/30 : parseFloat(display_info[3])/50

        var compare = ''
        if (score_now >= score_prev) {
            document.querySelector('#info1 p').innerHTML = '➚ Tăng ' + ((score_now-score_prev)*100).toFixed(2) + '% so với năm trước'
            document.querySelector('#info1 p').style.color = "green"
        } else {
            document.querySelector('#info1 p').innerHTML = '➘ Giảm ' + ((score_prev-score_now)*100).toFixed(2) + '% so với năm trước'
            document.querySelector('#info1 p').style.color = "red"
        }
    </script>
</div>

<div id="info2">
    <h2 style="margin: 15px 0; color: green; font-weight: 500"></h2>
    <ul style="display:inline-block; font-size: 1.1em">
        <li>Toán </li>
        <li>Văn </li>
        <li>Anh </li>
    </ul>

    <script>

        var datas = <?php echo json_encode($datas); ?>;
        var year = '<?php echo $year; ?>';
        var wish = '<?php echo $wish; ?>';
        var display_info = []

        for (i=0; i <= datas.length; i++) {
            try {
                if (datas[i][0] == year) {
                    if (wish == 'NV1') {
                        display_info.push(parseInt(datas[i][0]))
                        display_info.push(datas[i][3])
                        display_info.push(parseInt(datas[i-1][0]))
                        display_info.push(datas[i-1][3])
                        break;
                    } else if (wish == 'NV2') {
                        display_info.push(parseInt(datas[i][0]))
                        display_info.push(datas[i][4])
                        display_info.push(parseInt(datas[i-1][0]))
                        display_info.push(datas[i-1][4])
                        break;
                    } else if (wish == 'NV3') {
                        display_info.push(parseInt(datas[i][0]))
                        display_info.push(datas[i][5])
                        display_info.push(parseInt(datas[i-1][0]))
                        display_info.push(datas[i-1][5])
                        break;
                    }
                }

            } catch (e) {}
        }

        console.log(display_info)

        if (display_info[0] >= 2021) {
            document.querySelector('#info2 h2').innerHTML = 'Để đạt được: ' + display_info[1] + '/' + '30'
            var averageScore = (parseFloat(display_info[1])/3).toFixed(2)
            document.querySelectorAll('#info2 ul li').forEach(i => {
                i.innerHTML += '≥ ' + averageScore.toString()
            });

        } else {
            document.querySelector('#info2 h2').innerHTML = 'Để đạt được: ' + display_info[1] + '/' + '50'
            var averageScore = (parseFloat(display_info[1])/5).toFixed(2)
            document.querySelectorAll('#info2 ul li').forEach(i => {
                i.innerHTML += '≥ ' + averageScore.toString()
            });
        }

    </script>
</div>



