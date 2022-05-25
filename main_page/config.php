<?php

$con = mysqli_connect("localhost", "root", "", "search_project");

if (!$con) {
	echo "Connection failed".mysqli_connect_error();
}
?>