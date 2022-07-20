<?php

// DELETE FROM loai_truong WHERE `loai_truong`.`MA_LOAI` = 'L06'

include("../config/config.php");

$table = $_POST['table'];
$query = $_POST['query'];

$sql = "DELETE FROM `$table` WHERE $query";

$result = mysqli_query($con,$sql);

if ($result == 1) {?>
    <script>
        deleteAction('succeed', '<?php echo mysqli_affected_rows($con);?> dòng được cập nhật')
    </script>
<?php
} else {?>
    <script>
        deleteAction('error', '<?php echo mysqli_error($con);?>')
    </script>
<?php
}

?>