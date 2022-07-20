<?php

// UPDATE `links` SET `TRANG CHÍNH MT` = 'none', `FANPAGE` = 'nope', `FANPAGE MT` = 'no' WHERE `links`.`STT` = 1;
// UPDATE `diem_chuan` SET `DIEM` = '-1' WHERE `diem_chuan`.`NAM_HOC` = 2015 AND `diem_chuan`.`MA_TRUONG` = 'HCM_100' AND `diem_chuan`.`MA_NV` = 'NV1';

include("../config/config.php");
// $status = explode('  ', mysqli_stat($con));

$table = $_POST['table'];
$query = $_POST['query'];

$sql = "UPDATE `$table` SET $query ";

$result = mysqli_query($con,$sql);

if ($result == 1) {?>
    <script>
        editSucceed('<?php echo mysqli_affected_rows($con);?> dòng được cập nhật')
    </script>
<?php
} else {?>
    <script>
        editFailed("<?php echo mysqli_error($con);?>")
    </script>
<?php
}


?>