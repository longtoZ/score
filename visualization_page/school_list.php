<?php
    include("../config/config.php");
    $district = $_POST['district'];
    $year = $_POST['year'];
    $query = <<<EOD
    SELECT `truong`.`TEN_TRUONG`, `diem_chuan`.`MA_TRUONG`, `truong`.`QUAN/HUYEN`, `diem_chuan`.`MA_NV`, `diem_chuan`.`DIEM`
    FROM `diem_chuan` 
    LEFT OUTER JOIN `truong` on `truong`.`MA_TRUONG` = `diem_chuan`.`MA_TRUONG`
    WHERE `QUAN/HUYEN` LIKE '%$district%' AND `NAM_HOC` = $year
    EOD;


    $result = mysqli_query($con,$query);
    $datas = array();

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
?>

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

        <!-- <div class="score-info">
            <div class="school-name"><?php echo $school ?></div>
            <div class="school-score"><?php echo $nv1 ?></div>
        </div> -->

        <script>
            var child = 1;
            for (let i of <?php echo json_encode($datas); ?>) {
                console.log(i[0], i[2])

                var score_info = document.createElement('div')
                var school_name = document.createElement('div')
                var school_score = document.createElement('div')

                score_info.className = 'score-info'
                school_name.className = 'school-name'
                school_score.className = 'school-score'

                school_name.innerHTML = i[0]
                school_score.innerHTML = i[2]

                score_info.appendChild(school_name)
                score_info.appendChild(school_score)
                document.querySelector('.school-list').appendChild(score_info)

            }
        </script>
        
        <?php
    }


    // print_r($datas);


?>



