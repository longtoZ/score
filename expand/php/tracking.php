<?php

    $ip = $_POST['ip'];
    $data = $_POST['data'];
    $userInfo = $_POST['userInfo'];
    $time = $_POST['time'];


    $query = "SELECT * FROM `activity` WHERE `IP` = '$ip'";
    $result = mysqli_query($con,$query) or die(mysqli_error($con));

    if (mysqli_num_rows($result) > 0) {
        // $update = "UPDATE `activity` SET `DATAS` = '$data' WHERE `IP` = '$ip'"

        $update = "UPDATE `activity` SET `PLATFORM` = '$userInfo', `TIME` = '$time', `COUNT` = `COUNT`+1 WHERE `IP` = '$ip'";
        mysqli_query($con, $update);
        print_r('existed already');
    } else {
        $send = "INSERT INTO `activity` VALUES('', '$ip', '$data', '$userInfo', '$time', '1')";
        mysqli_query($con, $send);
    }

?>