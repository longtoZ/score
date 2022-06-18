<?php

header('Content-type: text/plain; charset=utf-8');
  
$json = file_get_contents('../config/dbinfo.json');
$json_data = json_decode($json,true);

$dbhost = $json_data["dbhost"];
$dbuser = $json_data["dbuser"];
$dbpassword = $json_data["dbpassword"];
$dbname = $json_data["dbname"];

// $dbhost = "localhost";
// $dbuser = "root";
// $dbpassword = "";
// $dbname = "scoredb";

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
$con -> set_charset("utf8");


if (!$con) {
	echo "Connection failed".mysqli_connect_error();
}
?>