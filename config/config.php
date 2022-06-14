<?php
header('Content-type: text/plain; charset=utf-8');

// $dbhost = "sql202.epizy.com";
// $dbuser = "epiz_31947273";
// $dbpassword = "CkZSyaiFO8P";
// $dbname = "epiz_31947273_score";

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "scoredb";

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
$con -> set_charset("utf8");


if (!$con) {
	echo "Connection failed".mysqli_connect_error();
}
?>