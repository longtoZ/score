<?php

$dbhost = "sql202.epizy.com";
$dbuser = "epiz_31947273";
$dbpassword = "CkZSyaiFO8P";
$dbname = "epiz_31947273_score";

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if (!$con) {
	echo "Connection failed".mysqli_connect_error();
}
?>