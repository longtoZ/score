<?php

//INSERT INTO `activity` (`STT`, `IP`, `DATAS`, `PLATFORM`, `TIME`, `COUNT`) VALUES (NULL, 't', 'h', 'i', 's', '2');
include("../config/config.php");

$table = $_POST['table'];
$query = $_POST['query'];

$sql = "INSERT INTO `$table` $query";

$result = mysqli_query($con,$sql);

if ($result == 1) {?>
    <script>
        insertSucceed('<?php echo mysqli_affected_rows($con);?> dòng được cập nhật')
    </script>
<?php
} else {?>
    <script>
        insertFailed("<?php echo mysqli_error($con);?>")
    </script>
<?php
}

?>