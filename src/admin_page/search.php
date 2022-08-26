<?php

include("../config/config.php");

$table = $_POST['table'];
$col_list = $_POST['col_list'];
$col_string = join(", ", $col_list);
$limit = $_POST['limit'];
$page = $_POST['page'];
$query = $_POST['query'];
$order = $_POST['order'];

$limit_start = ($page-1)*$limit;

$sql = "SELECT $col_string FROM `$table` $query ORDER BY $order LIMIT $limit_start,$limit";
// print_r($sql);

$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result) > 0){

    $lst = array();
	while($row = mysqli_fetch_assoc($result)) {
        $lst[] = $row;
	}
    ?>

<link rel="stylesheet" type="text/css" href="./assets/css/table.css">

    <table class="search-table">
        <thead>
            <tr>
                <?php 

                foreach ($col_list as $cols) {?>
                    <th><?php echo str_replace("`", "", $cols);?></th>
                    <?php
                }
                ?>

                <th>THAO TÁC</th>

            </tr>
        </thead>

        <tbody>

            <?php

            foreach ($lst as $row) {?>
                <tr>
                    <?php

                    foreach ($col_list as $cols) {?>
                        <td><?php echo $row[str_replace("`", "", $cols)];?></td>
                        <?php
                    }
                    ?>

                    <td class="table-action">
                        <i class="action-edit fi fi-rr-pencil" onclick="editTabAction(this)"></i>
                        <i class="action-delete fi fi-rr-trash" onclick="deleteAlert(this)"></i>
                    </td>
                </tr>	
                <?php

            }
            ?>
        </tbody>

    </table>

<?php
} else {
    echo "Không trùng khớp";
}
?>