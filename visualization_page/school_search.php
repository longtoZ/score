<?php

    include("../config/config.php");
    $school = $_POST['school_name'];
    $sql = "SELECT * FROM `ti_le_choi` WHERE `TÊN TRƯỜNG` LIKE '%$school%';";
    $result = mysqli_query($con,$sql);
    $datas = array();

    if (mysqli_num_rows($result) > 0) {
        // print_r(mysqli_fetch_assoc($result));
        while($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
        }
    }

?>

<span><?php echo $datas[0]['TÊN TRƯỜNG']; ?></span>
<br>
<span class="district-desc" style="display:none"><?php echo $datas[0]['TÊN QUẬN']?></span>
