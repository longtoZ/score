<?php

$con = mysqli_connect("localhost", "root", "", "scoredb");

if (!$con) {
	echo "Connection failed".mysqli_connect_error();
}
?>