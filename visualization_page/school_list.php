<?php
    include("../config/config.php");
    $district = $_POST['district'];
    $year = $_POST['year'];
    $sql = "SELECT * FROM `search_score_$year` WHERE `TÊN QUẬN` LIKE '%$district%';";


    $result = mysqli_query($con,$sql);
    $datas = array();

    if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            $school = $row['TÊN TRƯỜNG'];
            $nv1 = $row['ĐIỂM NV1'];

            ?>

            <style>
                .score-info {
                    background-color: var(--third-primary-color);
                    box-shadow: 0 0 15px rgba(0,0,0,0.05);
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

            <div class="score-info">
                <div class="school-name"><?php echo $school ?></div>
                <div class="school-score"><?php echo $nv1 ?></div>
            </div>
        
        <?php
        }

    }

    // print_r($datas);




?>



