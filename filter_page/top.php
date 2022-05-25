<?php
$con = mysqli_connect("localhost", "root", "", "search_project");
$input = $_POST['input'];
$year = $_POST['year'];
$wish = $_POST['wish'];

$query = "SELECT * FROM `search_score_{$year}` ORDER BY `{$wish}` DESC LIMIT {$input}";

$result = mysqli_query($con,$query);

if (mysqli_num_rows($result) > 0){?>
    <style>

		.search-table {
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
			border-collapse: collapse;
			width: 1200px;
			/* border-radius: 10px 10px 0 0;
			overflow: hidden; */
			margin-bottom: 100px;
			opacity: 1;
			animation-name: fadeInOpacity;
			animation-timing-function: ease-in;
			animation-duration: 0.15s;
		}

		@keyframes fadeInOpacity {
			0% {
				opacity: 0;
			}
			100% {
				opacity: 1;
			}
		}

		.search-table thead {
			background-color: #009879;
			color: #ffffff;
			text-align: left;
			font-weight: bold;
			box-shadow: 0 0 20px rgba(0, 152, 121, 0.3);
		}

		.search-table thead tr th:nth-of-type(3),
		.search-table thead tr th:nth-of-type(4),
		.search-table thead tr th:nth-of-type(5),
		.search-table thead tr th:nth-of-type(6) {
			text-align: center;
		}

		.search-table th, .search-table td {
			padding: 12px 15px;
		}

		.search-table tr {
			cursor: pointer;
		}

		.search-table tbody tr:nth-of-type(even) {
			background-color: #f3f3f3
			outline: none;
		}

		.search-table tbody tr td:first-of-type {
			color: #009879;
			font-weight: bold;
		}

		.search-table tbody tr:last-of-type {
			border-bottom: 2px solid #009879;
		}

		.search-table tbody tr td:nth-of-type(3),
		.search-table tbody tr td:nth-of-type(4),
		.search-table tbody tr td:nth-of-type(5),
		.search-table tbody tr td:nth-of-type(6) {
			text-align: center;
		}

		.search-table tbody tr:hover {
			transform: scale(1.02);
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
			background-color: #FFF9C2;
			font-size: 110%;
			font-weight: bold;
			transition: ease-in-out 0.15s;
		}


	</style>


	<table class="search-table">
		<thead>
			<tr>
				<th>STT</th>
				<th>TÊN TRƯỜNG</th>
				<th>TÊN QUẬN</th>
				<th onclick="sortTable(3)">ĐIỂM NV1</th>
				<th onclick="sortTable(4)">ĐIỂM NV2</th>
				<th onclick="sortTable(5)">ĐIỂM NV3</th>
			</tr>
		</thead>

		<tbody>
			<?php

			while ($row=mysqli_fetch_assoc($result)) {

				$stt = $row['STT'];
				$schoolname = $row['TÊN TRƯỜNG'];
				$district = $row['TÊN QUẬN'];
				$nv1 = $row['ĐIỂM NV1'];
				$nv2 = $row['ĐIỂM NV2'];
				$nv3 = $row['ĐIỂM NV3'];	
				
				?>

				<?php
				if (substr($wish, -1) == "1") { ?>
					<tr>
						<td><?php echo $stt; ?></td>
						<td><?php echo $schoolname; ?></td>
						<td><?php echo $district; ?></td>
						<td style="background-color: #FFF9C2"><?php echo $nv1; ?></td>
						<td><?php echo $nv2; ?></td>
						<td><?php echo $nv3; ?></td>
					</tr>	

				<?php
				} else if (substr($wish, -1) == "2") { ?>
					<tr>
						<td><?php echo $stt; ?></td>
						<td><?php echo $schoolname; ?></td>
						<td><?php echo $district; ?></td>
						<td><?php echo $nv1; ?></td>
						<td style="background-color: #FFF9C2"><?php echo $nv2; ?></td>
						<td><?php echo $nv3; ?></td>
					</tr>	
					<?php
				} else { ?>
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
				?>

				<?php	
			}
			?>
		</tbody>

	</table>

    <script>
        var clicked = false;
        function sortTable(col_num) {
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.querySelector(".search-table");
            switching = true;

            while (switching) {

                switching = false;
                rows = table.rows;

                for (i = 1; i < (rows.length - 1); i++) {

                    shouldSwitch = false;

                    x = rows[i].getElementsByTagName("TD")[col_num];
                    y = rows[i + 1].getElementsByTagName("TD")[col_num];

                    if (!clicked) {
                        if (parseFloat(x.innerHTML) < parseFloat(y.innerHTML)) {
                            shouldSwitch = true;
                            break;
                        }
                    } else {
                        if (parseFloat(x.innerHTML) > parseFloat(y.innerHTML)) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                    
                }
                if (shouldSwitch) {

                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                }
            }


            if (!clicked) {
                clicked = true;
            } else {
                clicked = false
            }
            

        }
    </script>

<?php
} else {
    echo "<h3 style='color:red; text-align:center;'>*Kết quả không khớp*</h3>";
}
?>