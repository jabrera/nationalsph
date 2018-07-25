<?php
ini_set('display_errors', 0);
error_reporting(0);

$status = file_get_contents('status.txt');
if($status == "0") {
	header("Location: notavailable.php");
}

$websiteTitle = "National Collegiate Model United Nations";
?>