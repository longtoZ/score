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

