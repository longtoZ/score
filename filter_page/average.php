<?php
$con = mysqli_connect("localhost", "root", "", "search_project");
$year = $_POST['year'];
$wish = $_POST['wish'];
$compare = $_POST['compare'];

$query = "SELECT * FROM `search_score_{$year}` ORDER BY `{$wish}` DESC";

$result = mysqli_query($con,$query);
$result2 = mysqli_query($con,$query);
$total = 0;
$count = 0;

if (mysqli_num_rows($result) > 0) {
    // print_r(mysqli_fetch_assoc($result));
    while($row = mysqli_fetch_assoc($result)) {
        $total += $row[$wish];
        $count += 1;
    }
}

$average = $total/$count;



if (mysqli_num_rows($result2) > 0){?>

    <link rel="stylesheet" type="text/css" href="./assets/css/table.css">


	<table class="search-table">
		<thead>
			<tr>
				<th>STT</th>
				<th>TÊN TRƯỜNG</th>
				<th>TÊN QUẬN</th>
				<th onclick="sortTable(3)">ĐIỂM NV1  ⇩</th>
				<th onclick="sortTable(4)">ĐIỂM NV2  ⇩</th>
				<th onclick="sortTable(5)">ĐIỂM NV3  ⇩</th>
			</tr>
		</thead>

		<tbody>
			<?php

			while ($row=mysqli_fetch_assoc($result2)) {


				$stt = $row['STT'];
				$schoolname = $row['TÊN TRƯỜNG'];
				$district = $row['TÊN QUẬN'];
				$nv1 = $row['ĐIỂM NV1'];
				$nv2 = $row['ĐIỂM NV2'];
				$nv3 = $row['ĐIỂM NV3'];	
				
				?>

				<?php
                if ($compare == "above") {
                    if (substr($wish, -1) == "1" && $nv1 >= $average) { ?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><?php echo $schoolname; ?></td>
                            <td><?php echo $district; ?></td>
                            <td style="background-color: #FFF9C2"><?php echo $nv1; ?></td>
                            <td><?php echo $nv2; ?></td>
                            <td><?php echo $nv3; ?></td>
                        </tr>	
    
                    <?php
                    } else if (substr($wish, -1) == "2" && $nv2 >= $average) { ?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><?php echo $schoolname; ?></td>
                            <td><?php echo $district; ?></td>
                            <td><?php echo $nv1; ?></td>
                            <td style="background-color: #FFF9C2"><?php echo $nv2; ?></td>
                            <td><?php echo $nv3; ?></td>
                        </tr>	
                        <?php
                    } else if (substr($wish, -1) == "3" && $nv3 >= $average) { ?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><?php echo $schoolname; ?></td>
                            <td><?php echo $district; ?></td>
                            <td><?php echo $nv1; ?></td>
                            <td><?php echo $nv2; ?></td>
                            <td style="background-color: #FFF9C2"><?php echo $nv3; ?></td>
                        </tr>	
                        <?php
                    }
                } else if ($compare == "below") {
                    if (substr($wish, -1) == "1" && $nv1 <= $average) { ?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><?php echo $schoolname; ?></td>
                            <td><?php echo $district; ?></td>
                            <td style="background-color: #FFF9C2"><?php echo $nv1; ?></td>
                            <td><?php echo $nv2; ?></td>
                            <td><?php echo $nv3; ?></td>
                        </tr>	
    
                    <?php
                    } else if (substr($wish, -1) == "2" && $nv2 <= $average) { ?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><?php echo $schoolname; ?></td>
                            <td><?php echo $district; ?></td>
                            <td><?php echo $nv1; ?></td>
                            <td style="background-color: #FFF9C2"><?php echo $nv2; ?></td>
                            <td><?php echo $nv3; ?></td>
                        </tr>	
                        <?php
                    } else if (substr($wish, -1) == "3" && $nv3 <= $average) { ?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><?php echo $schoolname; ?></td>
                            <td><?php echo $district; ?></td>
                            <td><?php echo $nv1; ?></td>
                            <td><?php echo $nv2; ?></td>
                            <td style="background-color: #FFF9C2"><?php echo $nv3; ?></td>
                        </tr>	
                        <?php
                    }
                }
				
			}
			?>
		</tbody>

	</table>

    <script src="./js/sort.js"></script>
    

<?php
} else {
    echo "<h3 style='color:red; text-align:center;'>*Kết quả không khớp*</h3>";
}
?>
